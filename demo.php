<?php

require 'class.Address.inc';

echo "<h2>Instantiating Address</h2>";
$address = new Address;

echo "<h2>Empty Address</h2>";
echo "<tt><pre>". var_export($address, TRUE)."</pre></tt>";

echo "<h2>Setting Properties...</h2>";
$address->street_name1 = '555 Fake Street';
$address->city_name = 'Townsville';
$address->subdivision_name = 'State';
$address->postal_code = '12345';
$address->country_name = 'United States of America';
echo "<tt><pre>". var_export($address, TRUE)."</pre></tt>"; 

echo '<h2>Display address</h2>';
$address->display();