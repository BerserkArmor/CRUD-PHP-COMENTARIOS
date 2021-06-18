<?php
     include_once("../config/config.php");
     include_once("../model/Usuario.php");


    $user_logeado = $_SESSION['user_logeado'];

     $usuarioDATA = new Usuario($conn, $user_logeado); 

     foreach( $usuarioDATA->getTweets() as  $tweet){

        echo ' <div class="d-flex flex-row p-3"> <img src="https://i.imgur.com/zQZSWrt.jpg" width="40" height="40" class="rounded-circle mr-3">
        <div class="w-100">
            <div class="d-flex justify-content-between align-items-center">
                <div class="d-flex flex-row align-items-center"> <span class="mr-2">'.$user_logeado.'</span> <small class="c-badge">Top Comment</small> </div> <small>12h ago</small>
            </div>
            <p class="text-justify comment-text mb-0">'.$tweet->contenido.'</p>
            <div class="d-flex flex-row user-feed"> <span class="wish"><i class="fa fa-heartbeat mr-2"></i>24</span> <span class="ml-3"><i class="fa fa-comments-o mr-2 "></i>Reply</span>
             <a href="./editarTweet.php?id='.$tweet->id.'&old_t='.$tweet->contenido.'" class="btn btn-sm btn-success mr-2 ml-2">Actualizar</a> <a class="btn btn-sm btn-danger" onClick=(eliminar('.$tweet->id.'))>Eliminar</a> </div>

        </div>
        </div>';

    
    }
        

?>