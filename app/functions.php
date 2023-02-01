<?php

function get_public_url($path = "") {
    if($path[0] != '/') {
        $path = '/' . $path;
    }
    return WWW_ROOT . '/public' . $path;
}

function redirect($path) {
    header('Location: ' . get_public_url($path) );
}

function get_path($path = "") {
    if ($path != "") {
        if($path[0] != '/') {
        $path = '/' . $path;
    }
}
    return PROJECT_ROOT . $path;
}

// Add Database Connection function here
// ----------
// This is a function we created to connect to the SQL database
function db_connect(){
    // Setting variables with constant values defined in init.php
    // We set constant variables in init.php and assign it in variables in this function
    $host = DB_HOST;
    $username = DB_USER;
    $password = DB_PASS;
    $db_name = DB_NAME;

    // After seting it in variables, we create a new object with sqli and passing those constantv variable values to the database
    // We then store that connection to a variable which we can use later.
    $db = new mysqli($host, $username, $password, $db_name);
    // This is a validator to check if there is any connection error with the database connection
    if($db->connect_errno) {
        echo "Failed to connect to MySQL: " . $db -> connect_error;
        exit();
    };
    // Return the database connection in a variable
    return $db;
};