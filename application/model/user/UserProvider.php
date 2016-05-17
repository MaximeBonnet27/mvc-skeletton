<?php

class UserProvider extends Provider
{

        private $USERS_TABLE = "users";


        public function listUsers(){
                $query = "SELECT * FROM " . $this->USERS_TABLE;

                $statement = $this->db->prepare($query);
                $statement->execute();

                return $statement->fetchAll();
        }

        public function getUserById($id){
                $query = "SELECT * FROM " . $this->USERS_TABLE . " WHERE id = :id";

                $statement = $this->db->prepare($query);
                $statement->bindValue(':id', $id);

                $statement->execute();

                return $statement->fetch();
        }

}


 ?>
