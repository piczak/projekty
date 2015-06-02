<?php 

require_once __DIR__ . '/vendor/autoload.php';


use Config\DBConnection;
//use Config\Config;

$DB = new DBConnection();
//$config = new Config();

$test = $DB->select('user_login', array('username', 'password'));

//echo $test['username'];
foreach( $test as $d){
    echo $d.'<br>';
}
//print($DB);

?>