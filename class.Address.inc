<?php

/**
 * Physical Address
 *
 */
class Address {

    //Street Address
    public $street_address1;
	public $street_address2;

    //Name of the City
	public $city_name;
	
	//Name of the subdivision
	public $subdivision_name;
	
	//Postal Code
	protected $_postal_code;
	
	//Name of the country
	public $country_name;
	
	//Primary key of an address
	protected $_address_id;
	
	//When the record was created and last updated
	protected $_time_created;
	protected $_time_updated;
	
	
	protected function _postal_code_guess(){
	    return 'LookUP';
	}
	
	function __construct(){
	    $this->_time_created = time();
	}
	
	function __get($name){
	    if(!$this->_postal_code){
		    $this->_postal_code = _postal_code_guess();
		}
		
		$protected_property_name = '_'.$name;
		if(property_exist($this, $protected_property_name)){
		    return $this->$protected_property_name;
		}
		
		trigger_error('Undefined property via __get():' . $name);
		return NULL;
	}
	
	function __set($name, $value){
	
	    if ('_postal_code'==$name){
	        $this->$name = $value;
		    return;
	    }
		
		trigger_error('Undefined or unallowed property via __set():'. $name);
	}
	
	function display() {
	$output = '';
	
	$output .=$this->street_address1;
	if($this->street_address2){
	    $output .= '<br/>'.$this->street_address2;
	}
	
	//City, subdivision, postal
	$output .= '<br/>';
	$output .= $this->city_name . ',' . $this->subdivision_name . ' ' . $this->_postal_code;
	
	//Country
	$output .= '<br/>';
	$output .= $this->country_name;
	
	return $output;
	}
}