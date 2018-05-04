<?php
//start a session
session_start();

//load our config file
require __DIR__ .'/../bootstrap/app.php';


$app->run();