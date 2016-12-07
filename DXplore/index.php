<?php

/*
* the code below is for error reporting
*
*/

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL); //part copied from apps in order to check for errors

/*
* the code below is for class autoload function 'loader' using the autoloader register function 
*
*/


function loader($className) {
    require $className.'/'.$className.'.php';
}

spl_autoload_register('loader');

//working directory is set automatically at the very beginning. 
chdir(getcwd()."/data");

/*
* the code below is for creating the objects and for calling the display function of the view part
*
*/
$mod=new model();
$crl=new control($mod);
$wew=new view($mod,$crl);
$wew->init();

?>
