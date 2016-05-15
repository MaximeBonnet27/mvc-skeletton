<?php

/**
 * Controller called when an error is found in the Application or other controllers.
 */
class Error extends Controller
{

        public function default(){
                $this->notFound();
        }

        public function notFound(){

                /* Put the Error code in the header */
                header($_SERVER["SERVER_PROTOCOL"] . " 404 Not Found", true, 404);

                require APP . 'view/templates/header.php';
                require APP . 'view/error/404.php';
                require APP . 'view/templates/footer.php';
        }

        public function badRequest(){

                header($_SERVER["SERVER_PROTOCOL"] . " 400 Bad Request", true, 400);
                require APP . 'view/templates/header.php';
                require APP . 'view/error/400.php';
                require APP . 'view/templates/footer.php';

        }

}


 ?>
