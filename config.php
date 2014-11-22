<?php
session_start();
$dbopts = parse_url(getenv('DATABASE_URL'));
echo '<pre>';
print_r($dbopts);
die;
$app->register(new Herrera\Pdo\PdoServiceProvider(),
  array(
    'pdo.dsn' => 'pgsql:dbname='.ltrim($dbopts["path"],'/').';host='.$dbopts["host"],
    'pdo.port' => $dbopts["port"],
    'pdo.username' => $dbopts["user"],
    'pdo.password' => $dbopts["pass"]
  )
);
$config['base_url'] = "https://pure-ridge-6265.herokuapp.com/";
//database setting
define('HOST', 'localhost');
define('USERNAME', 'root');
define('PASSWORD', '');
define('DB_NAME', 'demo');
define('PORT', '3306');

$con = mysqli_connect(HOST, USERNAME, PASSWORD, DB_NAME, PORT) or die('Unable to connect with database');

require_once 'functions.php';
?>
