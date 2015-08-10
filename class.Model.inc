<?php

/**
 * Shared intefface for interactions.
 */
interface Model{

    static function load($address_id);
	
	function save();

}