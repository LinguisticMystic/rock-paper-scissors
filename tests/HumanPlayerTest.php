<?php

namespace Tests;

use App\HumanPlayer;
use App\Weapons\Rock;
use App\Weapons\WeaponCollection;
use App\Weapons\Weaponizable;
use PHPUnit\Framework\TestCase;

class HumanPlayerTest extends TestCase
{
    public function testMove(): void
    {
        $humanPlayer = new HumanPlayer();
        $artillery = new WeaponCollection();
        $artillery->createArtillery([new Rock()]);
        $humanPlayer->makeChoice(0);
        $this->assertInstanceOf(Weaponizable::class, $humanPlayer->makeMove($artillery));
    }
}