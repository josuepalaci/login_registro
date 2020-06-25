<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css\font-awesome.min.css">
    <script src="https://kit.fontawesome.com/1d8a52458d.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
    <title>Registrate</title>
</head>
<body>
    <div class="contenedor">
        <h1 class="titulo">Registrate en el sitio</h1>
        <hr class="border">

        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method='POST' class='formulario' name='login'>
            <div class="form-group">
                <i class="icono izquierda fa fa-user"></i><input type="text" name="usuario" id="usuario" class="usuario" placeholder="usuario">
            </div>
            <div class="form-group">
                <i class="icono izquierda fa fa-lock"></i><input type="password" name="password" id="password" class="password" placeholder="password">
            </div>
            <div class="form-group">
                <i class="icono izquierda fa fa-lock"></i><input type="password" name="password2" id="usuario" class="password_btn" placeholder="repetir contraseña">
                <i class="submit-btn fa fa-arrow-right" onclick="login.submit()"></i>
            </div>
            <!-- muestra si hay errores -->
            <?php if(!empty($errores)):  ?>

                <div class="error">
                    <ul>
                        <?php echo $errores;   ?>
                    </ul>
                </div>

            <?php endif;  ?>

        </form>

        <p class="texto-registrate">
            Ya tienes cuenta ?
            <a href="login.php">Iniciar sesion</a>
        </p>


    </div>
</body>
</html>