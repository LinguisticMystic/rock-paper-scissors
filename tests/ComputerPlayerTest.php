<?php

namespace Tests;

use App\ComputerPlayer;
use App\Weapons\Rock;
use App\Weapons\WeaponCollection;
use App\Weapons\Weaponizable;
use PHPUnit\Framework\TestCase;

class ComputerPlayerTest extends TestCase
{
    public function testMove(): void
    {
        $computerPlayer = new ComputerPlayer();
        $artillery = new WeaponCollection();
        $artillery->createArtillery([new Rock()]);
        $this->assertInstanceOf(Weaponizable::class, $computerPlayer->makeMove($artillery));
    }
}