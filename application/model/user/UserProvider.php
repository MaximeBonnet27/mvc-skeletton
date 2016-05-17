<?php

class UserProvider extends Provider
{

        private const USERS_TABLE = "users";

        public function listUsers(){
                $query = "SELECT * FROM " . USERS_TABLE;

                $statement = $this->database->prepare($query);
                $statement->execute();

                return $statement->fetchAll();
        }

}


 ?>
