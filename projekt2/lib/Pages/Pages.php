<?php

namespace Pages;

require_once('Config/Page.php');
use Twig_Loader_Filesystem;
use Twig_Environment;

class Pages{

    public function head($dir, $pathJS, $pathStyle){

	$dupsko = array('test 1', 'test 2');

	$loader = new Twig_Loader_Filesystem($dir);
	$twig = new Twig_Environment($loader);
	$template = $twig->loadTemplate('js.html');
	$params = array('file1' => $dupsko, 'js' => $pathJS, 'style' => $pathStyle);
	$template->display($params);
	//$template = 4;
	return $template;
    }
    public function body(){
	
	return $body;
    }
    public function footer(){
	
	return $footer;
    }
    public function page(){
	//$head = self::head();
	$body = self::body();
	$footer = self::footer();
	
	return $page;
    }
}