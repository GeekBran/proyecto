<!DOCTYPE html>
<!-- Representa la raíz de un documento HTML o XHTML. Todos los demás elementos deben ser descendientes de este elemento. -->
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!--<meta http-equiv="X-UA-Compatible" content="ie=edge">-->
        <title>XpeMediK</title>
        <link href="img/logo1.ico" type="image/x-icon" rel="shortcut icon" />
        <link rel="stylesheet" href="css/recuperar.css">
    </head>
    <body>
        <main>
            <div class="contenedor">
                <div class="recover">
                    <form action="php/change.php" method="POST" class="recoverform">
                        <h2>Cambiar Contraseña</h2>
                        </br>
                        <p>Ingresa la nueva contraseña.</p>
                        <input class="cajas" type="password" placeholder="Contraseña" name="clave" required>
                        <button>Guardar</button>
                        <a href="sesion.php">Cancelar</a>
                    </form>
                </div>
            </div>
        </main>
    </body>
</html>