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

require APP . 'config/EnvironmentConfig.php';
require APP . 'config/DatabaseConfig.php';

/**
 * Application and Controller
 * Then, launch the application which is the entry point of our logic.
 */

 require APP . 'core/Controller.php';
 require APP . 'core/Application.php';

$app = new Application();

 ?>
