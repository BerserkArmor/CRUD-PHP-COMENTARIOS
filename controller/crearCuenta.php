<?php
    include_once("../config/config.php");
    include_once("../model/Cuenta.php");
    
        $newCuenta = new Cuenta($conn);
    
        if(isset($_POST)){
    
            $nombre = $_POST['nombreCom'];
            $usuario = $_POST['nombreUsuario'];
            $password = $_POST['password'];
    
            $listo =  $newCuenta->registrar($nombre, $usuario, $password);
    
            if($listo){
    
                echo "ok";
    
            }else{
                echo "fallo en el registro";
            }
            

        }
    

?>