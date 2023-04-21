<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--<meta http-equiv="X-UA-Compatible" content="ie=edge">-->
    <title>XpeMediK</title>
    <link href="img/logo1.ico" type="image/x-icon" rel="shortcut icon" />
    <link rel="stylesheet" href="css/sesion.css">
</head>
<body>
    <h1>Bienvenido</h1>
    <main>
        <div class="contendedor__todo">
            <div class="caja__trasera">
                <div class="caja__trasera-login">
                    <h3>¿Ya tienes cuenta?</h3>
                    <p>Inicia sesión para entrar</p>
                    <button id="btn__iniciar-sesion">Iniciar Sesión</button>
                </div>
                <div class="caja__trasera-register">
                    <h3>¿No tienes cuenta?</h3>
                    <p>Regístrate</p>
                    <button id="btn__registrarse">Registrarse</button>
                </div>
            </div>
            <div class="contenedor__login-register">
                <form action="php/login.php" method="POST" class="formulario__login">
                    <h2>Iniciar Sesión</h2>
                    <input class="cajas" type="text" placeholder="Correo" name="correo" required maxlength="30">
                    <input class="cajas" type="password" placeholder="Contraseña" name="clave" required maxlength="30">
                    <button>Ingresar</button>
                </br>
                </br>
                    <a href="recuperar.php">¿Perdiste tu contraseña?</a>
                </br>
                    <a href="invitado.html">Continuar como invitado</a>
                </form>
                <form action="php/signup.php" method="POST" class="formulario__register">
                    <h2>Registrarse</h2>
                    <input class="cajas" type="text" placeholder="Nombre" required maxlength="30" name="nombre">
                    <input class="cajas" type="text" placeholder="Apellido" required maxlength="30" name="apellido">
                    <input class="cajas" type="id" placeholder="CURP" required maxlength="30" name="curp">
                    <input class="cajas" type="email" placeholder="Correo" required maxlength="30" name="correo">
                    <input class="cajas" type="password" placeholder="Contraseña" required maxlength="30" name="clave">
                    <p class="termino1"><input type="checkbox">&nbsp; Estoy de acuerdo con <a class="termino2" href="terms.html">Términos y Condiciones</a></p>
                    <button>Registrar</button>
                </form>
            </div>
        </div>
    </main>
    <script src="js/script.js"></script>
    <a class="atrás" href="index.html">Volver</a>
</body>
</html>