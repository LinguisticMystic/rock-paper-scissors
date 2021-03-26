<?php

namespace App;

use App\Weapons\WeaponCollection;
use App\Weapons\Weaponizable;

interface Playable
{
    public function makeMove(WeaponCollection $artillery): Weaponizable;
}