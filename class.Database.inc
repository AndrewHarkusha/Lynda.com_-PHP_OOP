<?php

/**
 * MySQLi Database; only one connection is allowed.
 *
 */
class Darabase {
    private $_connection;
	//Store the single instance.
	private static $_instance;
	
	public static function getInstance(){
	    if(!self:$_instance){
		    self::$_instance = new self();
		}
		return  self::$_instance;
	}
	
	public function __constructor(){
	    $this->_connection = new mysqli('localhost','','','');
		
		if(mysql_connection_error()){
		    trigger_error('Failed tp connect to MySQL:', mysql_connection_error(), E_USER_ERROR);
		}
	}
}