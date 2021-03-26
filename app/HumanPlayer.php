<?php

namespace App;

use App\Weapons\WeaponCollection;
use App\Weapons\Weaponizable;

class HumanPlayer implements Playable
{
    private int $choice;

    public function makeChoice(int $choice): void
    {
        $this->choice = $choice;
    }

    public function makeMove(WeaponCollection $artillery): Weaponizable
    {
        return $artillery->getWeapons()[$this->choice];
    }
}