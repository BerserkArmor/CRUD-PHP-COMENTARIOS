<?php 
    
    session_start();


    if(isset($_SESSION['user_logeado'])){
   
        header("location: view/index.php");

    }else{

        header("location: view/login.php");
    }

?>

