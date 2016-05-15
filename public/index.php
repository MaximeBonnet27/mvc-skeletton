<?php

/**
 * Entry point of the application.
 */

echo "PHP Version : " . phpversion();
if(isset($_GET['url'])){
        echo "Request url : " . $_GET['url'];
}
else {
        echo "No request !";
}

/**
* Define constants for working directories
*/

define('ROOT', dirname(__DIR__) . DIRECTORY_SEPARATOR);
define('APP', ROOT . 'application' . DIRECTORY_SEPARATOR);

/**
 * Configuration
 */

require APP . 'config/database_config.php';

/**
 * Application and Controller
 * Then, launch the application which is the entry point of our logic.
 */

 require APP . 'core/controller.php';
 require APP . 'core/application.php';

// $app = new Application();

 ?>
