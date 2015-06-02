<?php
namespace Procedures;

class LogCheckProc{

    public function logging($login, $pass){

	$date = date('Y-m-d h:i:s', time());
	$saltAdd = 'dodtakowa sol';
	$salt = hash('whirlpool', $login.$date.$saltAdd);
	$password = hash('whirlpool', $pass.$salt);
	
    }
}
