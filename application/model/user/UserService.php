<?php

require_once APP . 'model/user/User.php';
require_once APP . 'model/core/Provider.php';
require_once APP . 'model/user/UserProvider.php';

/**
 *
 */
class UserService {

        private $userProvider = null;

        public function __construct()
        {
                $this->userProvider = new UserProvider();
        }

        public function listUsers(){
                return json_encode($this->userProvider->listUsers());
        }

}



 ?>
