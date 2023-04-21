<?php
    include 'conexion.php';

    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $curp = $_POST['curp'];
    $correo = $_POST['correo'];
    $clave = $_POST['clave'];
    $clave = hash('sha512',$clave);

    $query = "INSERT INTO usuarios(nombre,apellido,curp,correo,clave)
            VALUES('$nombre','$apellido','$curp','$correo','$clave')";

    $ver_curp = mysqli_query($conexion,"SELECT * FROM usuarios WHERE curp = '$curp'");
    if(mysqli_num_rows($ver_curp)>0){
        echo '
            <script>
                alert("No puede haber dos CURPs iguales");
                window.location = "../sesion.php";
            </script>
        ';
        exit();
    }

    $ver_correo = mysqli_query($conexion,"SELECT * FROM usuarios WHERE correo = '$correo'");
    if(mysqli_num_rows($ver_correo)>0){
        echo '
            <script>
                alert("Este correo ya existe, intenta con otro");
                window.location = "../sesion.php";
            </script>
        ';
        exit();
    }

    $ejecutar = mysqli_query($conexion,$query);

    if($ejecutar){
        echo '
            <script>
                alert("Usuario registrado correctamente");
                window.location = "../sesion.php";
            </script>
        ';
    }else{
        echo '
            <script>
                alert("Inténtalo de nuevo, usuario no registrado");
                window.location = "../sesion.php";
            </script>
        ';
    }

    mysqli_close($conexion);
?>