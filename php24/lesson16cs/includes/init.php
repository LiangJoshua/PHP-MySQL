<?php

/**
 * init.php
 * 
 * Initializiation file
 */
function __autoload($class_name)
{
    try {
        $class_file = 'includes/classes/' . strtolower($class_name) . '.php';
        if (is_file($class_file)){
            require_once $class_file;
        }
        else {
            throw new Exception("Unable to load class $class_name in file $class_file.");
        }
    } catch (Exception $e) {
        echo 'Exception caught: ', $e->getMessage(), "\n";
    }
}
// include required files
require_once 'includes/functions.php';
?>