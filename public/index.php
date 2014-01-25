<?php

define('APPLICATION_PATH', realpath('../'));

use \com\colbwork as cl;

$paths = array(
	
	APPLICATION_PATH,
	get_include_path()	
);
set_include_path(implode(PATH_SEPARATOR, $paths));

function __autoload($className)
{
	
	$filename = str_replace('\\', '/', $className) . '.php';
	require_once $filename;
	

	return;
}

phpinfo();

$user = new cl\models\user();

$user->setid("1");
$user->setuserId("aurchie1");
$user->setaccessLevel("admin");
$user->setfirstName("Richard");
$user->setlastName("Colbert");
$user->setaddress("738 Poppywood Pl");
$user->setcity("Highlands Ranch");
$user->setstate("CO");
$user->setemail("recolbert@gmail.com");
$user->setworkPhone("303-914-5963");
$user->setcellPhone("303-564-5499");
$user->setfacebook("Richie Colbs");
$user->settwitter("Rich_Colbert");
$user->setsalt(openssl_random_pseudo_bytes(16));
$user->sethash(hash('sha256', 'tobias11'));
$user->setauthString($user->getsalt(), $user->gethash());

echo $user;


?>