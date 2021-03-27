<?php

namespace App;

use App\Weapons\WeaponCollection;
use App\Weapons\Weaponizable;

class Game
{
    private Playable $playerOne;
    private Playable $playerTwo;
    private WeaponCollection $artillery;
    private Weaponizable $playerOneMove;
    private Weaponizable $playerTwoMove;
    private bool $tied = false;
    private bool $humanWon;

    public function __construct(Playable $playerOne, Playable $playerTwo, WeaponCollection $artillery)
    {
        $this->playerOne = $playerOne;
        $this->playerTwo = $playerTwo;
        $this->artillery = $artillery;
    }

    public function playerOneMove(): Weaponizable
    {
        return $this->playerOneMove;
    }

    public function playerTwoMove(): Weaponizable
    {
        return $this->playerTwoMove;
    }

    public function tied(): bool
    {
        return $this->tied;
    }

    public function humanWon(): bool
    {
        return $this->humanWon;
    }

    public function play(): void
    {
        $this->setPlayerMoves();

        if ($this->checkTied()==true){
            $this->tied = true;
        } else {
            $this->checkWinner();
        }
    }

    private function setPlayerMoves(): void
    {
        $this->playerOneMove = $this->playerOne->makeMove($this->artillery);
        $this->playerTwoMove = $this->playerTwo->makeMove($this->artillery);
    }

    private function checkTied(): bool
    {
        return ($this->playerOneMove === $this->playerTwoMove);
    }

    private function checkWinner(): void
    {
        if ($this->playerOneMove->winCondition($this->playerTwoMove)) {
            $this->humanWon = true;
        }
        if (!$this->playerOneMove->winCondition($this->playerTwoMove)) {
            $this->humanWon = false;
        }
    }

}