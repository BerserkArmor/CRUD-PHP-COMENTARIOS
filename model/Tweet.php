<?php

    class Tweet{

        private $sqlData;

        public function __construct($conn, $input)
        {

            $this->conn = $conn;

            if(!is_array($input)){
                $sql= "SELECT * FROM tweets WHERE id=:id";
                $query = $conn->prepare($sql);
                $query->bindValue(":id", $input, PDO::PARAM_INT);
                $query->execute();
    
                $this->sqlData = $query->fetch(PDO::FETCH_ASSOC);
            }else{
                $this->sqlData = $input;
            }
            
        }

        public function getId(){

            return $this->sqlData['id'];
        }

        public function getIdUsuario(){

            return $this->sqlData['usuario_id'];
        }

        public function getContenido(){

            return $this->sqlData['contenido'];
        }

        public  function getUsuario(){

            $id = $this->getIdUsuario();
            $sql = "SELECT nombreCompleto FROM usuarios WHERE id=:id";
            $query = $this->conn->prepare($sql);
            $query->bindValue(":id", $id, PDO::PARAM_INT);
            $query->execute();
           
                $user = $query->fetch(PDO::FETCH_ASSOC);
                
                return $user['nombreCompleto'] ;
       


        }

    }


?>