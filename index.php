<?php
//include config

require('config.php');

require('classes/Bootstrap.php');
require('classes/Controller.php');
require('classes/Model.php');



require('controllers/home.php');
require('controllers/users.php');
require('controllers/shares.php');


require('Models/home.php');
require('Models/user.php');
require('Models/share.php');


$bootstrap = new Bootstrap($_GET);

$controller= $bootstrap->createController();

if($controller){
	$controller->executeAction();
}