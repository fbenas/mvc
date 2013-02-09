<?php

    /* 
     * index.php is the front controller of the application. All page requests will go through this file.
     */

    define('SERVER_ROOT' , '/home/a.fbeans.of.je/www/');
    define('SITE_ROOT' , 'http://a.fbeans.of.je');

    // Fetch the router
    require_once(SERVER_ROOT . 'controllers/' . 'router.php');
?>
