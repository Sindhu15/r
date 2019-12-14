<?php

use War\WarRules;
use Army\ShanArmy\ArmyFactory;

class FalconVsShan implements WarRules{
    public function __construct(){
        $this->input = array('horse'=> 10, 
                            'elephant' => 10,
                            'armouredTank' => 10,
                            'slingGun' => 10);  // input hardcoded for now

        $this->armyFactory =  new ArmyFactory();

        $this->result = array('horse'=> 0, 
                                'elephant' => 0,
                                'armouredTank' => 0,
                                'slingGun' => 0);

        $this->rank = array(1 => 'horse' ,
        2 => 'elephant', 
        3 => 'armouredTank',
        4 => 'slingGun') ;          
    }

    public function readEnemyArmy($input){
        return $input;   //temp function
    }


    // method to read the input and dispatch army accordingly

    public function dispatchArmy(){  
        foreach ($this->input as $armyType => $enemyCount) {
            // Since this is ShanVsFalcon and we are disptaching Shan Army and its twice poerful
            $powerNeeded = $enemyCount / 2;

            //get the instance based on army type and get the number from that instance
            $ourArmy = $this->armyFactory->getArmyObject($armyType)->getCount($enemyCount, $this->result, $powerNeeded, $rank);   // goes to army factory and gets the army instance based on type
            
            $this->result = $ourArmy;
        }

        return $this->result;  // return result which shows the number that will be dispatched from each army type
    }   
}

