<?php

namespace Scripts;

class Scripts {

    public function js($script){
      
	for( $i = 0; $i < sizeof($script); $i++){
	    
	    $jsScript = '<script type="text/javascript" src="'.$script[$i].'"></script>';
	    
	    return $jsScript;  
	}
    }
    
    public function css($css){
    
	for( $i = 0; $i < sizeof($css); $i++){
	    
	    $cssScript = '<link rel="stylesheet"  href="'.$script[$i].'" media="screen">';
	    
	    return $cssScript;
	}
    }
}
