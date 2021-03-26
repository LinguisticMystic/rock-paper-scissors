<?php

namespace App\Weapons;

interface Weaponizable
{
    public function winCondition(Weaponizable $opponentWeapon): bool;
}