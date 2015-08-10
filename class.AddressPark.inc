<?php

/**
 * Park Address
 */
class AddressPark extends Address {

    public $country_name = 'Australia';

    /**
     * Initialization.
     */
    protected function _init(){
        $this->_setAddressTypeId(Address::ADDRESS_TYPE_PARK);
    }
}