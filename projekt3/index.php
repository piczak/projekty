<?php 

require_once __DIR__ . '/vendor/autoload.php';

use Config\DBConnection;
use Config\TwigLoader;

$TwigLoader = new TwigLoader();

/*
$require = __DIR__.'/Settings/Page.php';
$dir = __DIR__.'/Twig';
$title = 'Test';
$TwigLoader->head($require, $dir, $title);
*/
$TwigLoader->page(__DIR__);





/*
$DB = new DBConnection();
$test = $DB->select('user_login', array('username', 'password'));
foreach( $test as $d){
    echo $d.'<br>';
}

$loader = new Twig_Loader_Filesystem('Twig');

//var_dump($loader);
$twig = new Twig_Environment($loader);

$template = $twig->loadTemplate('body.html.twig');
$params = array('file1' => 'dd', 'js' => 'aa', 'style' => 'gg');
$template->display($params);

$result = $twig->render('body.html.twig', array('file1' => 'dd', 'js' => 'aa', 'style' => 'gg'));

echo $result;
*/





?>