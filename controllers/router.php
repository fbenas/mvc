<?php

/*
 * router.php 
 */

    // fetch the passed request
    $request = $_SERVER['QUERY_STRING'];

    // parse the page request and other GET variables
    $parsed = explode( '&', $request );

    // the page is the first element
    $page = array_shift( $parsed );

    // the rest of thye array are get statements, parse them out.
    $getVars = array();
    foreach( $parsed as $argument )
    {
        // split get vars along '=' symbol to separate variable, values
        list( $variable, $value ) = explode( '=' , $argument );
        $getVars[$variable] = $value;
    }

    // this is a test , and we will be removing this later
    print "The page your requested is '$page'";
    print '<br/>';
    $vars = print_r($getVars, TRUE);
    print "The following GET vars were passed to the page:<pre>".$vars."</pre>";

?>
