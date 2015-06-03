<?php
namespace Config;

//require_once('/Settings/const.php');

use Settings\Settings;

/**
 * @class DBConnection
 */
 
$dbData = new Settings();

 
class DBConnection{

    public function connection(){
    	$config = new \Doctrine\DBAL\Configuration();
    	$dbData = new Settings();
	$connectionParams = $dbData->dbData();;
	$conn = \Doctrine\DBAL\DriverManager::getConnection($connectionParams, $config);
	return $conn;
    }
    
    //pobiera z bazy informacje
    public function select($tableName, $columnName){

	$conn = self::connection();
	$data = $conn->query("SELECT ".implode(', ', $columnName)." FROM ".$tableName);
	$result = $data->fetch();
	return $result;
    }
    
    //wstawia nowe wpisy do bazy 
    public function insert($tableName, $columnName, $insertData){
    
	$conn = self::connection();
	$DataToColumn = array_combine($columnName, $insertData);
	$conn->insert($tableName, $DataToColumn);
    }
    
    //uaktualnia wpisy w bazie
    public function update($tableName, $columnName, $insertData){
	
	$conn = self::connection();
	
    }
}