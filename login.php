<?php   session_start();

$errores='';

if (isset($_SESSION['usuario'])) {
    header('Location: index.php');
}

if ($_SERVER['REQUEST_METHOD']=='POST') {
    $usuario=filter_var(strtolower($_POST['usuario']),FILTER_SANITIZE_STRING);
    $password=$_POST['password'];
    $password=hash('sha512',$password);

    // echo $usuario.'-'.$password;

    try {
        $conecxion=new PDO('mysql:host=localhost;dbname=login_practica','root','');
        
    } catch (PDOException $e) {
        echo "Error:  ".$e->getMessage();
    }

    $statement=$conecxion->prepare('SELECT * FROM usuarios WHERE usuario=:usuario AND pass=:pasrword');
    $statement->execute(array(':usuario'=>$usuario,':pasrword'=>$password));
    $resultado= $statement->fetch();
    if ($resultado!=false) {
        $_SESSION['usuario']=$usuario;
        header('Location: index.php');
    } else {
        $errores.='<li>Datos Incorrectos</li>';
    }


}





require 'views/login.view.php';

?>