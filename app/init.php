<?php

    define('WWW_ROOT', 'http://localhost');
    define('PROJECT_ROOT', dirname(__DIR__, 1));

    require('functions.php');

    require('Classes/User.php');
    require('Classes/Session.php');

    define('DB_HOST', 'localhost');
    define('DB_USER', 'root');
    define('DB_PASS', 'root');
    define('DB_NAME', 'live_2k');

    // initialize database
    $db = db_connect();

    // Create new session when variable is called
    $session = new Session();

    //Set Database on classes
    User::set_db($db);