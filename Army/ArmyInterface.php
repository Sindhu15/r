<?php

namespace ArmyInterfcae;

interface ArmyInterface{
    public function getNumber();
    public function getAvailability();
    public function isExhausted();
    public function getSubstitution();
}