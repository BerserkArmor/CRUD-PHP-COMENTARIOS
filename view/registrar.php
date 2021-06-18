<?php include_once("../config/includes/header.php")?>

    <div class="container">
        <div class="row d-felx align-items-center justify-content-center">
            <div class="col-lg-6">
                <div class="card mt-5 border-3">
                    <div class="card-header bg-success bg-gradient">
                    <h5 class="card-title font-weight-bold text-light text-center">REGISTRAR</h5>
                    </div>
                    <div class="card-body">
                    <form method="POST" id="frmRegis">
                        <div class="mb-3">
                            <label for="nombreCom" class="form-label">Nombre Completo</label>
                            <input type="text" name="nombreCom" class="form-control" id="nombreCom" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="nombreUsuario" class="form-label">Nombre de Usuario</label>
                            <input type="text" class="form-control" name="nombreUsuario" id="nombreUsuario" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Contraseña</label>
                            <input type="password" class="form-control" name="password" id="pass">
                            <div class="mt-3"><input type="checkbox" onclick="mostrarPass()"> Mostrar Contraseña </div>

                        </div>
                   
                        <input type="button" name="registrar-btn"  id="registrar-btn"  class="btn btn-primary" value="registrar"/>
                        </form>                   
                    </div>
                    <div class="card-footer p-3 d-flex align-items-center justify-content-center ">
                        <span class="mr-2">ya tienes una cuenta? </span><a href="./login.php">Iniciar sesion</a>
                    </div>
                </div>
        
            </div>
        </div>
    </div>

    <script src="../assets/js/login_registro.js"></script>

</body>
</html>