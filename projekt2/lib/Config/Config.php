<?php
namespace Config;

$connect = new Connect\Connect();

class Config{

    public function scripts(){
	
	
	return $scripts;
    }
    
    public function page(){	
	$scripts = self::scripts();
    }
}