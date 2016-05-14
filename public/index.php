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

 ?>
