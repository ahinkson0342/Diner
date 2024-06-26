<?php
//turning on error reporting.
ini_set('display_errors', 1);
error_reporting(E_ALL);
//Require autoload file
require_once('vendor/autoload.php');
//Create instance of base class
$f3 = Base::instance();
//Define a default route
$f3->route('GET /',function()
{
    //echo '<h1>Hello World!</h1>';

    //Render a view page
    $view = new Template();
    echo $view->render('views/home-page.html');
});

//Breakfast menu
$f3->route('GET /menus/breakfast',function()
{
    //echo '<h1>Hello World!</h1>';

    //Render a view page
    $view = new Template();
    echo $view->render('views/breakfast-menu.html');
});

//Lunch menu
$f3->route('GET /menus/lunch',function()
{
    //echo '<h1>Hello World!</h1>';

    //Render a view page
    $view = new Template();
    echo $view->render('views/lunch-menu.html');
});

//Dinner menu
$f3->route('GET /menus/dinner',function()
{
    //echo '<h1>Hello World!</h1>';

    //Render a view page
    $view = new Template();
    echo $view->render('views/dinner-menu.html');
});

//Run fat-free
$f3->Run();