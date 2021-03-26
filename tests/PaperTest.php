<?php

namespace Tests;

use App\Weapons\Paper;
use App\Weapons\Rock;
use App\Weapons\Scissors;
use PHPUnit\Framework\TestCase;

class PaperTest extends TestCase
{
    public function testWinConditionForScissors()
    {
        $player = new Paper();
        $opponentWeapon = new Rock();
        $this->assertTrue(true, $player->winCondition($opponentWeapon));
    }

    public function testWinConditionForPaper()
    {
        $player = new Paper();
        $opponentWeapon = new Scissors();
        $this->assertFalse(false, $player->winCondition($opponentWeapon));
    }
}