<?php

require __DIR__ . '/../vendor/autoload.php';//load Slim AUTOLOAD
require __DIR__ .'/../Facebook/autoload.php';//load Facebook Autoload

define('FACEBOOK_APP_ID','362268287595035');
define('FACEBOOK_APP_SECRET','f42e02a7a81d1317cd6b840282d256a3');
define('FACEBOOK_GRAPH_VERSION','v3.0');
define('FACEBOOK_ACCESS_TOKEN','EAAFJeyiYchsBAHjyxsg2cnAbzeQuDhP3psuDzD2ztgdtdg6bDEjg2Anmmt6ccgY749LHSrr1SVZCqnII4B8ATpZCAByVm414ZCwG0mNZBUJwZB3PX3Dy3uSvEfWpW6SuHThTMcszg54LrUZASMgb0g1xUhYl5t5soZD');



//WE MAKE A NEW INSTANCE OF SLIM
$app = new  \Slim\App([
    'settings' =>[
       'displayErrorDetails' => true,
    ]
]);

//WE MAKE A NEW INSTANCE OF FACEBOOK CLASS
$fb = new Facebook\Facebook([
    'app_id' => FACEBOOK_APP_ID, 
    'app_secret' => FACEBOOK_APP_SECRET,
    'default_graph_version' => FACEBOOK_GRAPH_VERSION    
]);

//WE CALL OUR ROUTES
require __DIR__.'/../app/routes.php';

