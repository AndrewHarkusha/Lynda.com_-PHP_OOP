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
	public $postal_code;
	
	//Name of the country
	public $country_name;
	
	
	public display(){
	$output ='';
	
	$output .=$this->street_address1;
	if($this->street_address2){
	    $output .= '<br/>'.$this->street_address2;
	}
	
	//City, subdivision, postal
	$output .= '<br/>';
	$output .= $this->city_name . ',' . $this->subdivision_name . ' ' . $this->postal_code;
	
	//Country
	$output .= '<br/>';
	$output .= $this->country_name;
	
	return $output;
	}
}