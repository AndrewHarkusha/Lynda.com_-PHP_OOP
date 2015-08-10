<?php

function __autoload($class_name){
	include 'class.'.$class_name.'.inc';
}

echo "<h2>Instantiating Residence Address</h2>";
$address = new AddressResidence;

echo "<h2>Empty Address</h2>";
echo "<tt><pre>". var_export($address, TRUE)."</pre></tt>";

echo "<h2>Setting Properties...</h2>";
$address->street_address1 = '555 Fake Street';
$address->city_name = 'Townsville';
$address->subdivision_name = 'State';
$address->country_name = 'United States of America';
echo "<tt><pre>". var_export($address, TRUE)."</pre></tt>"; 

echo '<h2>Display address</h2>';
echo $address->display();

echo '<h2>Testing magic functions __set and __get:</h2>';
//unset($address->_postal_code);
echo $address->display();

echo '<h2>Testing Address __construct with an array:</h2>';
$address_business = new AddressBusiness(array(
    'street_address1' => '123 Phony Ave',
	'city_name' => 'Villageland',
	'subdivision_name' => 'Region',
	'_postal_code' => '67890',
	'country_name' => 'Canada',
	));
echo $address_business->display();
echo "<tt><pre>". var_export($address_business, TRUE)."</pre></tt>"; 

echo '<h2>Address __toString</h2>';
echo $address_business;


echo '<h2>Displaying address types...</h2>';
echo "<tt><pre>". var_export(Address::$valid_address_types, TRUE)."</pre></tt>"; 

echo '<h2>Testing address type ID validation.</h2>';
for ($id = 0; $id<=4; $id++){
	echo "<div>$id: ";
	echo Address::isValidAddressTypeId($id) ? 'Valid' : 'Invalid';
	echo '</div>';
}

echo '<h2>Instantiating AddressPark:</h2>';
$address_park = new AddressPark(array(
    'street_address1' => '789 Missing Circle',
	'street_address2' => 'Suite 0',
	'city_name' => 'Hemlet',
	'subdivision_name' => 'Territory',
	'country_name' => 'Australia',
	));
	
echo $address_park;
echo "<tt><pre>". var_export($address_park, TRUE)."</pre></tt>"; 

echo '<h2>Cloning AddressPark:</h2>';
$address_park_clone = clone $address_park;
echo "<tt><pre>". var_export($address_park_clone, TRUE)."</pre></tt>"; 
echo '$address_park_clone is '. ($address_park_clone == $address_park ?
'' : 'not').' a copy of $address_park';

$address_business_copy = &$address_business;
echo '<br/>$address_business_copy is '. ($address_business_copy == $address_business ?
'' : 'not').' a copy of $address_business';

echo '<h2>Setting $address_business as a new AddressPark:</h2>';
echo '<br/>$address_business_copy is '. ($address_business_copy == $address_business ?
'' : 'not').' a copy of $address_business';
$address_business = new AddressPark();
echo '<br/>$address_business is class '. get_class($address_business);
echo '<br/>$address_business_copy is '. ($address_business_copy instanceof
AddressBusiness ? '' : 'not').' an Address Business.';
