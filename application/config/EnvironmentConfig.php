<?php

/* Set the environment, possible values : dev, prod */
define('ENVIRONMENT', 'dev');

if(ENVIRONMENT == 'dev'){
        /* Reports all the error */
        error_reporting(E_ALL);
        ini_set('display_errors', 1);
}

 ?>
