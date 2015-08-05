<?php

require 'class.Address.inc';

echo "<h2>Instantiating Address</h2>";
$address = new Address;

echo "<h2>Empty Address</h2>";
echo "<tt><pre>". var_export($address, TRUE)."</pre></tt>";

echo "<h2>Setting Properties...</h2>";
$address->street_address1 = '555 Fake Street';
$address->city_name = 'Townsville';
$address->subdivision_name = 'State';
$address->_postal_code = '12345';
$address->country_name = 'United States of America';
echo "<tt><pre>". var_export($address, TRUE)."</pre></tt>"; 

echo '<h2>Display address</h2>';
echo $address->display();
//echo "<tt><pre>". var_export($address->display(), TRUE)."</pre></tt>"; 

echo '<h2>Testing magic functions __set and __get:</h2>';
unset($address->_postal_code);
echo $address->display();
