<?php

namespace App\Weapons;

class Scissors implements Weaponizable
{
    const NAME = 'scissors';

    public function winCondition(Weaponizable $opponentWeapon): bool
    {
        switch (true) {
            case $opponentWeapon instanceof Paper:
                return true;
            default:
                return false;
        }
    }
}