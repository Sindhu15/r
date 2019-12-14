<?php

use Army\ShanArmy;

namespace Army\ShanArmy\HorseArmy;


class HorseArmy extends ShanArmy{
    public function __construct(){
        $this->type = 'horse';
        $this->availableNumber = 100;
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