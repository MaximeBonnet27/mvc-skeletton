<?php

class Users extends Controller {

        public function defaultAction(){
                require_once APP . 'model/user/UserService.php';
                $userService = new UserService();
                $users =  $userService->listUsers();

                require_once APP . 'view/templates/header.php';
                require_once APP . 'view/users/index.php';
                require_once APP . 'view/templates/footer.php';

        }

}

 ?>
