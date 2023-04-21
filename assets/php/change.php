<?php
    session_start();

    include 'conexion.php';

    $correo = $_GET['correo'];

    $consulta = "SELECT id FROM usuarios WHERE correo='$correo'";
    
    $datos = mysqli_query($conexion,$consulta);
    
    while($fila=mysqli_fetch_array($datos)){
        $id=$fila['id'];        
    }
    
    $clave = $_POST['clave'];        
    $clave = hash('sha512',$clave);
    
    $sql="UPDATE usuarios SET clave='$clave' WHERE id='$id'";

    if(mysqli_query($conexion,$consulta)===TRUE){
        header("location: ../sesion.php");
    }else{
        header("url=../recuperar.php");
    }
?>