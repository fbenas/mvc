<?php

/*
 * router.php  this contoller routes all incoming requests to the appropriate controller
 */

// Automatically includes files containing classes that are called
function __autoload( $className )
{

    // compose file name for model
    $file = SERVER_ROOT . 'models/' . $className . '.php';

    // fetch file
    if ( file_exists( $file ))
    {
        // get file
        include_once( $file );
    }
    else
    {
        // file does not exist!
        die("File '$file' containing class '$className' not found.");
    }
}

// fetch the passed request
$request = $_SERVER['QUERY_STRING'];

// parse the page request and other GET variables
$parsed = explode( '&', $request );

// the page is the first element
$page = ucfirst(array_shift( $parsed )) . "Controller";

// the rest of thye array are get statements, parse them out.
$getVars = array();
foreach( $parsed as $argument )
{
    // split get vars along '=' symbol to separate variable, values
    list( $variable, $value ) = explode( '=' , $argument );
    $getVars[$variable] = $value;
}

// comppute the path to the file
$target = SERVER_ROOT . 'controllers/' . $page . '.php';

// get target
if (file_exists( $target ))
{
    include_once( $target );

    // modify page to fit naming convention
    $class = ucfirst( $page );

    // inistantiate the approptiate class
    if ( class_exists( $class ))
    {

        $controller = new $class;
    }
    else
    {
        // did we name our class correctly?
        die('class does not exist!');
    }
}
else
{
    // can't find the file in 'controllers'!
    die('page "' . $target .'" does not exist!');
}

// once we have the controller instantiated, execute the default function
// pass any GET varaibles to the main method
$controller->main( $getVars );
?>  