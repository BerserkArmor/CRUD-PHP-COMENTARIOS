<?php

    class Usuario{

        private $conn;
        private $sqlData;

        public function __construct( $conn, $usuario)
        {
           $this->conn = $conn; 
           $sql= "SELECT * FROM usuarios WHERE usuario=:usuario";
            $query = $conn->prepare($sql);
            $query->bindValue(":usuario", $usuario, PDO::PARAM_STR);
            $query->execute();

            $this->sqlData = $query->fetch(PDO::FETCH_ASSOC);
        }

        public static function estaLogeado(){

            return isset($_SESSION['user_logeado']);

        }

          
        public function getId(){

            return $this->sqlData['id'];

        }

        
        public function getNombre(){

            return $this->sqlData['nombreCompleto'];

        }

     
        public function getUsuario(){

            return $this->sqlData['usuario'];

        }

        public function getTweets()
        {
            $id = $this->getId();

            $sql = "SELECT * FROM tweets WHERE usuario_id=:usuario_id";
            $query = $this->conn->prepare($sql);
            $query->bindValue(":usuario_id", $id, PDO::PARAM_INT);
            $query->execute();

            return $query->fetchAll(PDO::FETCH_OBJ);

        }

    }


?>