<?php

/**
 * A Model Provider, provides access to data in database
 */
abstract class Provider {

        protected $db = null;

        function __construct() {

                /* Open DB Connection */

                $dbOptions = array(
                        PDO::ATTR_DEFAULT_FETCH_MODE => DB_FETCH_MODE,
                        PDO::ATTR_ERRMODE => DB_ERRMODE);

                $this->db = new PDO(
                        DB_TYPE .
                        ':host=' . DB_HOST .
                        ';dbname=' . DB_NAME .
                        ';charset=' . DB_CHARSET,
                        DB_USER,
                        DB_PASS,
                        $options);


        }
}


 ?>
