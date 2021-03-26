<?php

namespace Tests;

use App\Weapons\Paper;
use App\Weapons\Rock;
use App\Weapons\Scissors;
use PHPUnit\Framework\TestCase;

class RockTest extends TestCase
{
    public function testWinConditionForScissors()
    {
        $player = new Rock();
        $opponentWeapon = new Scissors();
        $this->assertTrue(true, $player->winCondition($opponentWeapon));
    }

    public function testWinConditionForPaper()
    {
        $player = new Rock();
        $opponentWeapon = new Paper();
        $this->assertFalse(false, $player->winCondition($opponentWeapon));
    }
}