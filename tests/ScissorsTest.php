<?php

namespace Tests;

use App\Weapons\Paper;
use App\Weapons\Rock;
use App\Weapons\Scissors;
use PHPUnit\Framework\TestCase;

class ScissorsTest extends TestCase
{
    public function testWinConditionForScissors()
    {
        $player = new Scissors();
        $opponentWeapon = new Paper();
        $this->assertTrue(true, $player->winCondition($opponentWeapon));
    }

    public function testWinConditionForPaper()
    {
        $player = new Scissors();
        $opponentWeapon = new Rock();
        $this->assertFalse(false, $player->winCondition($opponentWeapon));
    }
}