<?php

    /* 
     * index.php is the front controller of the application. All page requests will go through this file.
     */
    define('SERVER_ROOT' , '/home/phil/mvc/');
    define('SITE_ROOT' , 'http://localhost:8000');

    // Fetch the router
    require_once(SERVER_ROOT . 'controllers/' . 'router.php');
?>