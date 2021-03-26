<?php

namespace App\Weapons;

class WeaponCollection
{
    private array $weapons = [];

    public function addWeapon(Weaponizable $weapon)
    {
        $this->weapons[] = $weapon;
    }

    public function createArtillery(array $artillery)
    {
        foreach ($artillery as $weapon) {
            $this->addWeapon($weapon);
        }
    }

    public function getWeapons(): array
    {
        return $this->weapons;
    }
}