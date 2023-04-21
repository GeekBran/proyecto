<?php
    session_start();

    include 'conexion.php';

    $correo = $_POST['correo'];
    $clave = $_POST['clave'];
    $clave = hash('sha512',$clave);

    $val_login = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo='$correo'
    and clave='$clave'");

    if(mysqli_num_rows($val_login) > 0){
        $_SESSION['correo'] = $correo;
        header("location: ../inicio.php");
        exit;
    }else{
        echo '
            <script>
                alert("El usuario no existe, correo o clave incorrectos");
                window.location = "../sesion.php";
            </script>
        ';
        exit;
    }
?>