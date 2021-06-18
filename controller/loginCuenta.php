<?php
include_once("../config/config.php");
include_once("../model/Cuenta.php");
include_once("../model/Usuario.php");

$newCuenta = new Cuenta($conn);



 if(isset($_POST)){

        $usuario = $_POST['nombreUsuario'];
       $password = $_POST['password'];

      $resultado = $newCuenta->login($usuario, $password);

    if($resultado){
        //echo "usuario logeado";
        $user = new Usuario($conn, $usuario);

        $_SESSION['user_id'] = $user->getId();
        $_SESSION['user_logeado'] = $user->getUsuario();
        
        echo "ok";
    }else{
        echo "errore ctmm nose kw ea paso";
    }
}




?>