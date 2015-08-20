<?php

//This config file must be in the root working directory of the site e.g. /home/vhost/whatever/folder
//it doesn't have to be in the root of the vhost but wherever the index.php is for the app/site

//Get Directories and URIs
$protocol = !empty($_SERVER["HTTPS"]) && $_SERVER["HTTPS"] == "on" ? "https://" : "http://";
$host = $_SERVER["HTTP_HOST"];

return array(
	'pdo' => array(
		'dsn' => 'mysql:dbname=admin_fail;host=localhost',
		'username' => 'user_databasel',
		'password' => 'yourpassword'
	),
	
	'access' => array(
		'key' => 'yourkey'
	)
);

?>
