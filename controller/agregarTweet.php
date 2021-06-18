<?php
     include_once("../config/config.php");
     include_once("../model/TweetActions.php");
    include_once("../model/Tweet.php");

    $newTweetActions = new TweetActions($conn);


    if(isset($_POST)){
        $id = $_SESSION['user_id'];
        $contenido = $_POST['comentario'];

        $success = $newTweetActions->crear($id, $contenido);

        if($success){
            echo "ok";
        }else{
            echo "error no se pudo registrar este tweet";
        }

    }


?>