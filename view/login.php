<?php include_once("../config/includes/header.php");

if($_SESSION){
    header("Location: ./index.php");

};

?>


    <div class="container">
        <div class="row d-felx align-items-center justify-content-center">
            <div class="col-lg-6">
                <div class="card mt-5 border-4">
                    <div class="card-header bg-danger bg-gradient">
                    <h5 class="card-title font-weight-bold text-light text-center">LOGIN</h5>
                    </div>
                    <div class="card-body">
                    <form method="POST" id="frmLogin">
                        <div class="mb-3">
                            <label for="nombreUsuario" class="form-label">Nombre de Usuario</label>
                            <input type="text" class="form-control" id="nombreUsuario" name="nombreUsuario" >
                        </div>
                        <div class="mb-3">
                            <label for="pass" class="form-label">Contraseña</label>
                            <input type="password" class="form-control" name="password" id="pass">
                            <div class="mt-3"><input type="checkbox" onclick="mostrarPass()"> Mostrar Contraseña </div>
                        </div>
                   
                        <input type="button" class="btn btn-primary" id="login-btn" value="Entrar"></input>
                        
                    </form>                   
                    </div>
                    <div class="card-footer p-3 d-flex align-items-center justify-content-center ">
                        <span class="mr-2">No tienes cuenta? </span><a href="./registrar.php"> Registrate</a>
                    </div>
                </div>
        
            </div>
        </div>
    </div>
        <script src="../assets/js/login_registro.js"></script>
    
</body>
</html>