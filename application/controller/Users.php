<?php

class Users extends Controller {

        public function defaultAction(){
                require_once APP . 'model/user/UserService.php';
                $userService = new UserService();
                echo $userService->listUsers();
        }

}

 ?>
