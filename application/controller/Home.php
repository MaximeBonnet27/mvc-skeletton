<?php

/**
 *
 */
class Home extends Controller
{

        public function defaultAction(){
                require_once APP . 'view/templates/header.php';
                require_once APP . 'view/home/index.php';
                require_once APP . 'view/templates/footer.php';
        }
}


 ?>
