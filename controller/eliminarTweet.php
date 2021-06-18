<?php
  include_once("../config/config.php");
  include_once("../model/TweetActions.php");
  include_once("../model/Tweet.php");
  
$newTweetActions = new TweetActions($conn);

$data = json_decode(file_get_contents('php://input'), true);


$success = $newTweetActions->eliminar($data['id']);

if($success){
    echo "ok";
}else{
    echo "error no se pudo registrar este tweet";
}

?>