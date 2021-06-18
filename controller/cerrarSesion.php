<?php

    session_start();


    if($_SESSION['user_logeado']){

        session_destroy();
        header('Location: ../index.php');
        die();
    }else{

        header('Location: view/index.php');
        die();
    }
    


?>