<?php
session_start();
$config['base_url'] = "http://localhost/demo/";
//database setting
define('HOST', 'localhost');
define('USERNAME', 'root');
define('PASSWORD', '');
define('DB_NAME', 'demo');
define('PORT', '3306');

$con = mysqli_connect(HOST, USERNAME, PASSWORD, DB_NAME, PORT) or die('Unable to connect with database');

require_once 'functions.php';
?>
