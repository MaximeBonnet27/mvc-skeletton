<?php

/**
 * Application Class, Entry point of the web app.
 * Takes care of the URL routing, and call the right controller with the right action.
 */


class Application {

        /** The controller called */
        private $urlController = null;
        /** The action of the controller called */
        private $urlAction = null;
        /** The optionnals arguments sent to the action */
        private $urlParameters = null;

        public function __construct() {

                /* Find which controller + action that has been called
                 * After this call, urlController, urlAction and urlParameters are
                 * filled accordingly.
                 */
                $this->splitUrl();

                /* If no controller was found, redirect to home page */
                if((!$this->urlController) || $this->urlController == 'index.php'){
                        require APP . 'controller/Home.php';
                        $page = new Home();
                        $page->defaultAction();
                        exit(0);
                }

                /* If a controller was found, change its case to first letter in uppercase, others to lowercase */
                $this->urlController = strtolower($this->urlController);
                $this->urlController = ucfirst($this->urlController);

                /* If there were a controller called, first, need to check if such a file exists */
                if(file_exists(APP . 'controller/' . $this->urlController . '.php')){

                        /* Load the right controller */
                        require APP. 'controller/' . $this->urlController . '.php';

                        /* From now on, the urlController is no longer a String,
                         * but a controller object */
                        $this->urlController = new $this->urlController();


                        /* If there is no action called, call the default action for this controller */
                        if(strlen($this->urlAction) == 0){
                                $this->urlController->defaultAction();
                        }
                        /* Check if the action called exists */
                        else {
                                /* If an action was found change it to lowercase if needed */
                                $this->urlAction = strtolower($this->urlAction);

                                if(method_exists($this->urlController, $this->urlAction)){

                                        /* Check for parameters */

                                        /*
                                         * If there are not, just call the method,
                                         * errors are managed in the controllers
                                         */
                                        if(empty($this->urlParameters)){
                                                $this->urlController->{$this->urlAction}();
                                        }
                                        /*
                                         * Else, call the method with the parameters
                                         */
                                        else {
                                                call_user_func_array(array($this->urlController, $this->urlAction), $this->urlParameters);
                                        }
                                }
                                /* The called method doesn't exist */
                                else {
                                        require APP . 'controller/Error.php';
                                        $page = new Error();
                                        $page->badRequest();
                                }
                        }
                }
                /* The requested controller doesn't exist */
                else {
                        require APP . 'controller/Error.php';
                        $page = new Error();
                        $page->notFound();
                }

        }
        /**
         * Splits the url (the parameter in the query string !) to find and fill the controller, action and parameters.
         */
        public function splitUrl(){

                /* Check if the url parameter in the query string is set */
                if(isset($_GET['url'])){

                        /* Split the url in an array */
                        /* Remove the '/' at the beginning / end */
                        $url = trim($_GET['url']);
                        /* Filter the URL to only have valid characters */
                        $url = filter_var($url, FILTER_SANITIZE_URL);
                        /* Splits the string */
                        $url = explode('/', $url);

                        /* Get the controller and action if set */
                        $this->urlController = isset($url[0]) ? $url[0] : null;
                        $this->urlAction = isset($url[1]) ? $url[1] : null;

                        /* Put the remaining url in the parameters */
                        $this->urlParameters = array_slice($url, 2);
                }
        }
}


 ?>
