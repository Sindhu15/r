<?php

use ArmyInterface;
use Army\ShanArmy\ArmyFactory;

namespace Army\ShanArmy;


class ShanArmy implements ArmyInterface{
    public function __construct(){

        //properities will be overridden by the child classes
        $this->type = '';  //army type key
        $this->availableNumber = 0;  // available number 

        $this->armyFactory =  new ArmyFactory();
        $this->rank = [];

    }

    public function getNumber($enemyCount, $ourArmy, $powerNeeded, $rank){

        $this->rank = $rank;  // rank set that is passed from the war class

        if($powerNeeded < $this->availableNumber){   // if powwer needed is less than the availability just deduct the ssame
            $this->changeAvailablity($powerNeeded);
            $ourArmy[$this->key] = $this->availableNumber;
            return $ourArmy;
        }

        if($this->isExhausted()){    // if power needed is more get the substitute animal army
            $otherArmyNeeded = $powerNeeded - $this->availableNumber;
            $ourArmy[$this->key] = $powerNeeded;
            $this->changeAvailablity($powerNeeded);  // 0

            $this->getSubstitution($powerNeeded);
            return $ourArmy;
        }
    }

    private function changeAvailablity($deduct){
        $this->availableNumber = $this->availableNumber - $deduct;
    }

    public function getAvailability(){
        return $this->availableNumber;
    }

    public function isExhausted(){

        if ($this->getAvailability() <= 0){
            return true;
        }
            return false;
    }
    
    public function getSubstitution($powerNeeded){
        $typeRank = 0;
        $adjacentRanks = [];  //valid armies that can be substitued based on the rank

        foreach ($this->rank as $rank => $armyType) {
            if ($armyType == $this->type){
                $typeRank = $rank;
            }
        }  // get the rank of the current army

        $adjacentRanks.push($typeRank-1);
        $adjacentRanks.push($typeRank+1);

        for ($i=0; $i <count($adjacentRanks) ; $i++) { 

            $substiturArmyType = $this->rank[$adjacentRanks[$i]];  //get the army type based on the rank 

            if ($this->armyFactory->getArmyObject($armyType)->getAvailability() < $powerNeeded){
                $used = $this->armyFactory->getArmyObject($armyType)->changeAvailablity($powerNeeded);
                $ourArmy[$armyType] = $used;
                break;
            }
            
            $used = $this->armyFactory->getArmyObject($armyType)->changeAvailablity($powerNeeded);
            $ourArmy[$armyType] = $used;
        }

    }
}