<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css\font-awesome.min.css">
    <script src="https://kit.fontawesome.com/1d8a52458d.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
    <title>Iniciar Sesion</title>
</head>
<body>
    <div class="contenedor">
        <h1 class="titulo">Iniciar Sesion</h1>
        <hr class="border">

        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method='POST' class='formulario' name='login'>
            <div class="form-group">
                <i class="icono izquierda fa fa-user"></i><input type="text" name="usuario" id="usuario" class="usuario" placeholder="usuario">
            </div>
           
            <div class="form-group">
                <i class="icono izquierda fa fa-lock"></i><input type="password" name="password" id="usuario" class="password_btn" placeholder="contraseña">
                <i class="submit-btn fa fa-arrow-right" onclick="login.submit()"></i>
            </div>
            
            <?php if(!empty($errores)):     ?>
            <div class="error">
                <ul>
                    <?php echo $errores;    ?>
                </ul>
            </div>
            <?php endif;                    ?>
        </form>

        <p class="texto-registrate">
            Aun no tienes cuenta ?
            <a href="registrate.php">Registrate</a>
        </p>


    </div>
</body>
</html>