<?php
  include_once("../config/config.php");
  include_once("../model/TweetActions.php");
  include_once("../model/Tweet.php");

  $newTweetActions = new TweetActions($conn);

  $tweet_updated= $_POST['tweet_updated'];
  $id_tweet = $_POST['id_tweet'];

  $success = $newTweetActions->actualizar($id_tweet, $tweet_updated);

  if($success){
       echo "ok";
  }else{
      echo "error al actualizar";
  }



?>