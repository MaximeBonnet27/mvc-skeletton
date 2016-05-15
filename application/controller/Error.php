<?php

/**
 * Controller called when an error is found in the Application or other controllers.
 */
class Error extends Controller
{

        public function defaultAction(){
                $this->notFound();
        }

        public function notFound(){

                /* Put the Error code in the header */
                header($_SERVER["SERVER_PROTOCOL"] . " 404 Not Found", true, 404);

                require_once APP . 'view/templates/header.php';
                require_once APP . 'view/error/404.php';
                require_once APP . 'view/templates/footer.php';
        }

        public function badRequest(){

                header($_SERVER["SERVER_PROTOCOL"] . " 400 Bad Request", true, 400);
                require_once APP . 'view/templates/header.php';
                require_once APP . 'view/error/400.php';
                require_once APP . 'view/templates/footer.php';

        }

}


 ?>
