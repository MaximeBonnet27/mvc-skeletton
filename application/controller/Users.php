<?php

class Users extends Controller {

        public function defaultAction(){
                $this->_list();
        }

        public function _list(){
                require_once APP . 'model/user/UserService.php';
                $userService = new UserService();
                $users =  $userService->listUsers();

                require_once APP . 'view/templates/header.php';
                require_once APP . 'view/users/index.php';
                require_once APP . 'view/templates/footer.php';
        }

        public function _get($id = null){

                if($id == null){
                        require_once APP . 'controller/Error.php';
                        $page = new Error();
                        $page->badRequest();
                        exit(0);
                }

                require_once APP . 'model/user/UserService.php';
                $userService = new UserService();
                $user = $userService->getUserById($id);

                require_once APP . 'view/templates/header.php';
                require_once APP . 'view/users/user.php';
                require_once APP . 'view/templates/footer.php';


        }

}

 ?>
