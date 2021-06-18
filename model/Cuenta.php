<?php

    class Cuenta{
        private $conn;


        public function __construct($conn)
        {
            $this->conn = $conn;
        }

        public function registrar($nombre, $usuario, $password){

           $resultado = $this->insertarCuenta($nombre, $usuario, $password);
            
           if($resultado){
            return true;
           }else{
            return false;
           }

        }

        private function insertarCuenta($nombre, $usuario, $password){
            try{

                $option = array(
                    'cost' => 10
                );

                $passHashed = password_hash($password, PASSWORD_BCRYPT, $option);

                $sql = "INSERT INTO usuarios (nombreCompleto, usuario, password) 
                VALUES (:nombreCompleto, :usuario, :password)";
                $query = $this->conn->prepare($sql);
                $query->bindValue(":nombreCompleto", $nombre, PDO::PARAM_STR);
                $query->bindValue(":usuario", $usuario, PDO::PARAM_STR);
                $query->bindValue(":password", $passHashed, PDO::PARAM_STR);
                $query->execute();
                if($query->rowCount() >0){
                    return true;
                }else{
                    return false;
                }
    

            }catch(PDOException $ex){
                echo "error en insertarCuenta: ". $ex->getMessage();
            }
            
           
        }

        public function login($usuario, $password){

            try {

                $sql = "SELECT * FROM usuarios WHERE usuario=:usuario";
                $query = $this->conn->prepare($sql);
                $query->bindValue(":usuario", $usuario);
                $query->execute();
    
                if($query->rowCount() === 1){
                    $user = $query->fetch(PDO::FETCH_OBJ);
                    $passHashed = $user->password;
    
                    if(password_verify($password, $passHashed)){
                        return true;
                    }else{
                        return false;
                    }
                    
    
                }else{
    
                    return false;
                }
    
                
            } catch (PDOException $ex) {
                
                return "error en login: ".$ex->getMessage();
            }
          
        }

        private  function validar_usuario($usuario, $password){

            return "Bienvenido: ".$usuario."| password: ".$password;


        }

    }

?>