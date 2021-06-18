<?php
    class TweetActions{

        private $conn;
        
        public function __construct($conn)
        {

            $this->conn = $conn;

            
        }


        public function crear($user_id,$contenido)
        {

            $sql = "INSERT INTO tweets (usuario_id, contenido) VALUES (:usuario_id, :contenido)";
            $query = $this->conn->prepare($sql);
            $query->bindValue(":usuario_id", $user_id, PDO::PARAM_INT);
            $query->bindValue(":contenido", $contenido, PDO::PARAM_STR);
        return $query->execute();
            

        }

        public function actualizar($id, $contenido_updated)
        {
            $sql = "UPDATE tweets SET contenido=:contenido WHERE id=:id";
            $query = $this->conn->prepare($sql);
            $query->bindValue(":contenido", $contenido_updated, PDO::PARAM_STR);
            $query->bindValue(":id", $id, PDO::PARAM_INT);
            return $query->execute();

        

        }

        public function eliminar($id)
        {

            $sql = "DELETE FROM tweets WHERE id=:id";
            $query = $this->conn->prepare($sql);
            $query->bindValue(":id", $id, PDO::PARAM_INT);
            $query->execute();
            if($query->rowCount()>0)
            {
                return true;
                
            }else{
                return false;
            }


        }

    }

?>