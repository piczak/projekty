<?php

namespace Settings;

class Settings{

    function dbData(){
    
	$dbData = array(
	    'dbname' => 'site',
	    'user' => 'root',
	    'password' => '',
	    'host' => 'localhost',
	    'driver' => 'pdo_mysql'
	);
	return $dbData;
    }

}
