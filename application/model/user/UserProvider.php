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

}


 ?>
