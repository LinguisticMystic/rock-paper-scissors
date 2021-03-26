<?php

namespace App\Weapons;

class Paper implements Weaponizable
{
    const NAME = 'paper';

    public function winCondition(Weaponizable $opponentWeapon): bool
    {
        switch (true) {
            case $opponentWeapon instanceof Rock:
                return true;
            default:
                return false;
        }
    }
}