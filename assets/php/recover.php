<?php
    session_start();

    include 'conexion.php';

    $correo = $_POST['correo'];

    $val_corr = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo='$correo'");
    $nr = mysqli_num_rows($val_corr);

    if($nr==1){
        echo '
            <script>
                alert("Correo reconocido");
                window.location = "../cambiar.php";
            </script>
        ';
    }else{
        header("url=../recuperar.php");
    }
?>