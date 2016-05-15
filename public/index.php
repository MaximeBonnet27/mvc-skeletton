<?php

/**
 * Entry point of the application.
 */


/**
* Define constants for working directories
*/

define('ROOT', dirname(__DIR__) . DIRECTORY_SEPARATOR);
define('APP', ROOT . 'application' . DIRECTORY_SEPARATOR);

/**
 * Configuration
 */

require_once APP . 'config/EnvironmentConfig.php';
require_once APP . 'config/DatabaseConfig.php';

/**
 * Application and Controller
 * Then, launch the application which is the entry point of our logic.
 */

 require_once APP . 'core/Controller.php';
 require_once APP . 'core/Application.php';

$app = new Application();

 ?>
