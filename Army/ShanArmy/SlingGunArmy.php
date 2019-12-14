<?php

use Army\ShanArmy;

namespace Army\ShanArmy\SlingGunArmy;


class SlingGunArmy extends ShanArmy{
    public function __construct(){
        $this->type = 'slingGun';
        $this->availableNumber = 5;
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