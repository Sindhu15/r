<?php

use Army\ShanArmy;

namespace Army\ShanArmy\ElephantArmy;

class ElephantArmy extends ShanArmy{
    public function __construct(){
        $this->type = 'elephant';
        $this->availableNumber = 50;
    }

    public function getNumber(){
        
    }

    public function getAvailability(){

    }

    public function isExhausted(){

    }

    public function getSubstitution(){
        
    }
}