<?php

require_once __DIR__ . '/vendor/autoload.php';
require_once('Config/Page.php');
/*
$config = new Config\Config();

$config->scripts();
*/

$connect = new Connect\Connect();
$entity = new Entity\Entity();
$pages = new Pages\Pages();
$twig = new Twig\Twig();


$login = 'edek';
$date = date('Y-m-d h:i:s', time());
$pass = 'cokolwiek';

$salt = hash('whirlpool', $login.$date.'To jest dodatkowa sól');
$password = hash('whirlpool', $pass.$salt);


$tableName = 'user_login';
$columnName = array('username', 'password', 'created');
$insertData = array($login, $password, $date);



//$twig->displayShape();
$connect->connection();
//$entity->baza();
//$pages->page();
//$connect->select($tableName, $columnName);
//$connect->insert($tableName, $columnName, $insertData);

/*
$loader = new Twig_Loader_Array(array('index'=>'Hello {{ name }}',));

$twig = new Twig_Environment($loader);

echo $twig->render('index', array('name'=>'Kamil'));
*/

$dir = array(
__DIR__.'/lib/Pages',
__DIR__.'/lib/Scripts'
);

echo $pages->head($dir, $pathJS, $pathStyle);


/*
Twig_Autoloader::register();


$pathJS = array(
    'js/lib/jquery-1.11.1.min.js',
    'bootstrap/bootstrap-3.3.4-dist/js/bootstrap.js',
    'bootstrap/bootstrap-3.3.4-dist/js/bootstrap.min.js',
    'js/test.js'
);
$pathStyle = array(
    'bootstrap/bootstrap-3.3.4-dist/css/bootstrap-theme.css',
    'bootstrap/bootstrap-3.3.4-dist/css/bootstrap-theme.min.css',
    'bootstrap/bootstrap-3.3.4-dist/css/bootstrap.css',
    'bootstrap/bootstrap-3.3.4-dist/css/bootstrap.min.css',
    'style/test.css'
);

//$dupsko = array('test 1', 'test 2');

//$loader = new Twig_Loader_Filesystem(array('lib/Scripts', 'lib/Pages'));
/*
var_dump($loader);
$twig = new Twig_Environment($loader);

$template = $twig->loadTemplate('js.html');
$params = array('file1' => $dupsko, 'js' => $pathJS, 'style' => $pathStyle);
$template->display($params);
*/
