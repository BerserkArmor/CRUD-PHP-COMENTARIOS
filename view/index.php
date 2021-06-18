<?php 
require_once("../config/includes/header.php");

$user = $_SESSION['user_logeado'] ?? "'no definido'";


?>
    <div class="container mt-5 mb-5 height-100">
    <div class="row height d-flex justify-content-center align-items-center">
        <div class="col-md-7">
            <div class="card">
                <div class=" card-header p-3 d-flex align-content-between justify-content-between">
                    <h6>Deja un comentario</h6>
                    <a href="../controller/cerrarSesion.php"  class="btn btn-danger btn-sm" id="cerrar_sesion" name="cerrar_sesion" >Cerrar Sesion</a>
                </div>
                <div class="card-body">
                    <form action="" method="post" id="frm">
                         <div class=" d-flex flex-row align-items-center p-3 form-color"> 
                        <img src="https://i.imgur.com/zQZSWrt.jpg" width="50" class="rounded-circle mr-2"><textarea id="textarea" name="comentario" placeholder="¿Que estas pensando <?=$user?>?" class="form-control m-2 h-25 p-2" ></textarea>

                        
                        </div>
                        <div class=" d-flex justify-content-between p-3  align-items-center"> <span id="count"></span> <input type="button" class="btn btn-sm btn-primary"  name="enviar" id="enviar" value="Publicar"></input> </div>
      
                    </form>
                </div>

                <div id="mensajes_container" class="mt-3 card-footer">
                  
            
                </div>
            </div>
        </div>
    </div>
</div>

<?php require_once("../config/includes/footer.php") ?>
