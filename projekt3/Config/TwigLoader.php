<?php

namespace Config;

//require_once('/Settings/Page.php');

use Settings\Settings;
use Twig_Loader_Filesystem;
use Twig_Environment;

/**
 * @class TwigLoader
 */
class TwigLoader{
    
    //cala zawartosc strony
    public function page($mainDir){
	
	$navBar = $mainDir.'/Settings/NavBar.php';
	$Header = $mainDir.'/Settings/Header.php';
    	$dir = $mainDir.'/Twig';

    	
	$head = self::head($Header, $dir);
	$body = self::body($navBar, $dir);
	/*
	$loader = new Twig_Loader_Filesystem($dir);
	$twig = new Twig_Environment($loader);
		
	$template = $twig->render('index.html.twig');
	echo $template;*/
    }
    
    //naglowek
    public function head($Header, $dir){
    
	$title = 'Test';
	
	require_once($Header);
	
	$loader = new Twig_Loader_Filesystem($dir);
	$twig = new Twig_Environment($loader);
	
	$head = $twig->render('header.html.twig', array('author' => $author,  'title' => $title, 'js' => $pathJS, 'style' => $pathStyle));

	echo $head;
    }
    
    //cialo
    public function body($navBar, $dir){

	$loader = new Twig_Loader_Filesystem($dir);
	$twig = new Twig_Environment($loader);
	
	require_once($navBar);
	
	$body = $twig->render('body.html.twig', array('tabs' => $tabs));

	echo $body;
    }
}
