<?php

use Army\ShanArmy;

namespace Army\ShanArmy\ArmouredTankArmy;

class ArmouredTankArmy extends ShanArmy{
    
    public function __construct(){
        $this->type = 'armouredTank';
        $this->availableNumber = 10;
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