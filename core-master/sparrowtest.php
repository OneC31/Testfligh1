<?php

// require 'flight/Flight.php';
require 'flight/autoload.php';
//require 'hey.php';


Flight::route('/', function () {
    // Include the library
    include 'Sparrow.php';

    // Declare the class instance
    $db = new Sparrow;

    // Select a table
    $db->from('user');

    // Build a select query
    $db->select();

    // Display the SQL
    echo $db->sql();


    //echo 'hello world! HOME';
});

#Flight::route('/funcion2', 'mi_funcionklk');
#Flight::start();