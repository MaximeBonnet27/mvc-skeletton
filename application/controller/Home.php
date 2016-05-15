<?php

/**
 *
 */
class Home extends Controller
{

        public function defaultAction(){
                require APP . 'view/templates/header.php';
                require APP . 'view/home/index.php';
                require APP . 'view/templates/footer.php';
        }
}


 ?>
