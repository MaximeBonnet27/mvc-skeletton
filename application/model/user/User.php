<?php

/**
 * User Data Model
 */
class User extends {

        private $id = null;

        private $mail = null;
        private $password = null;


        function __construct($id, $mail, $password) {
                $this->id = $id;
                $this->mail = $mail;
                $this->password = $password;
        }

        /* Getters */

        function getId(){
                return $this->id;
        }

        function getMail(){
                return $this->mail;
        }

        function getPassword(){
                return $this->password;
        }

        /* Setters */

        function setId($id){
                $this->id = $id;
        }

        function setMail($mail){
                $this->mail = $mail;
        }

        function setPassword($password){
                $this->password = $password;
        }
}


 ?>
