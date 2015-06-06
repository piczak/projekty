<?php
    
    //tablica okreslajaca przyciski menu
    $tabs = array(
	'Start', 
	'Profil',
	'Wiadomości'
    );

    for($i=0; $i<sizeof($tabs);$i++){
	$tabs[$i] = array ( 
	    'tab' => $tabs[$i],
	    'class' => '',
	    'file' => strtolower(str_replace(array('ą', 'ć', 'ę', 'ł', 'ń', 'ó', 'ś', 'ź', 'ż'), array('a', 'c', 'e', 'l', 'n', 'o', 's', 'z', 'z'), $tabs[$i]))
	    );
    }
    $tabs[0]['class'] = 'active';
   
    //var_dump($tabs);
    
?>
