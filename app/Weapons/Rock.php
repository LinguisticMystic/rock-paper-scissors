<?php

namespace App\Weapons;

class Rock implements Weaponizable
{
    const NAME = 'rock';

    public function winCondition(Weaponizable $opponentWeapon): bool
    {
        switch (true) {
            case $opponentWeapon instanceof Scissors:
                return true;
            default:
                return false;
        }
    }

}