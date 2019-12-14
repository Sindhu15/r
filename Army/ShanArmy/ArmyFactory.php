<?php

namespace Army\ShanArmy\ArmyFactory;

use Army\ShanArmy\HorseArmy;
use Army\ShanArmy\ElephantArmy;
use Army\ShanArmy\ArmouredTankArmy;
use Army\ShanArmy\SlingGunArmy;


class ArmyFactory{
//creates and returns instance based on army type

    public function getArmyObject($armyType){
        switch ($armyType) {
            case 'horse':
                return new HorseArmy();

            case 'elephant':
                return new HorseArmy();

            case 'armouredTank':
                return new HorseArmy();

            case 'slingGun':
                return new HorseArmy();
            
            default:
                break;
        }
    }
}