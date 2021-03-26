<?php

namespace App;

use App\Weapons\WeaponCollection;
use App\Weapons\Weaponizable;

class ComputerPlayer implements Playable
{
    public function makeMove(WeaponCollection $artillery): Weaponizable
    {
        $artillerySize = count($artillery->getWeapons()) - 1;
        return $artillery->getWeapons()[rand(0, $artillerySize)];
    }
}