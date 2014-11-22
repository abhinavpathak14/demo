<?php
session_start();
$dbopts = parse_url(getenv('DATABASE_URL'));
/*$app->register(new Herrera\Pdo\PdoServiceProvider(),
  array(
    'pdo.dsn' => 'pgsql:dbname='.ltrim($dbopts["path"],'/').';host='.$dbopts["host"],
    'pdo.port' => $dbopts["port"],
    'pdo.username' => $dbopts["user"],
    'pdo.password' => $dbopts["pass"]
  )
);*/
$config['base_url'] = "https://localhost/demo/"; //https://pure-ridge-6265.herokuapp.com/
//database setting
define('HOST', 'localhost');
define('USERNAME', 'root');
define('PASSWORD', '');
define('DB_NAME', 'demo');
define('PORT', '3306');
$con = pg_connect("host=localhost port=5432 dbname=demo user=postgres password=admin ");

//$con = pg_connect('host=ec2-54-204-37-113.compute-1.amazonaws.com port=5432 dbname=d7pfnmq3bve4mf user=xomfzdcsikgdhn password=LwYduG8aST_alIsV67ICVXWgfg') or die('not connected');
//$con = mysqli_connect(HOST, USERNAME, PASSWORD, DB_NAME, PORT) or die('Unable to connect with database');

require_once 'functions.php';
?>
