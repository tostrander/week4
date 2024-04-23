<?php

// 328/week4/index.php
// This is my CONTROLLER!

// Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Require the autoload file
require_once ('vendor/autoload.php');

// Instantiate the F3 Base class
$f3 = Base::instance();

// Define a default route
// https://tostrander.greenriverdev.com/328/hello-fat-free/
$f3->route('GET /', function($f3) {
    //echo '<h1>Welcome to Week 4</h1>';

    // Add data to the Fat-Free "hive"
    $f3->set('name', 'Tina');


    // Render a view page
    $view = new Template();
    echo $view->render('views/info.html');
});

$f3->route('GET /test', function($f3) {
    echo "Testing";
});

// Run Fat-Free
$f3->run();
