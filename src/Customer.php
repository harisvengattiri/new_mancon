<?php

namespace Mancon;

class Customer {

    private $name;
    private $phone;

    public function __construct(array $customer) {
        $this->name = $customer('name');
        $this->phone = $customer('phone');
    }

    public function getName() {
        return $this->name;
    }

    public function getPhone() {
        return $this->phone;
    }
}
