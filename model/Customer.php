<?php

namespace Model;

class Customer
{
    public $id;
    public $name;
    public $address;
    public $phone;
    public $country;

    public function _construct($name, $address, $phone, $country)
    {
        $this->name = $name;
        $this->address = $address;
        $this->phone = $phone;
        $this->country = $country;
    }
}