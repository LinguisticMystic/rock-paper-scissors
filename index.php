<?php

require_once 'vendor/autoload.php';

use App\ComputerPlayer;
use App\Game;
use App\HumanPlayer;
use App\Weapons\Paper;
use App\Weapons\Rock;
use App\Weapons\Scissors;
use App\Weapons\WeaponCollection;

$artillery = new WeaponCollection();
$artillery->createArtillery([
    new Rock(),
    new Paper(),
    new Scissors(),
]);

$playerOne = new HumanPlayer();
$playerTwo = new ComputerPlayer();
$newGame = new Game($playerOne, $playerTwo, $artillery);

//$playerOne->makeChoice(1);
//$newGame->play();

function printMoves(Game $game): void
{
    echo 'You picked '. $game->playerOneMove()::NAME . '<br>';
    echo 'Computer picked '. $game->playerTwoMove()::NAME . '<br>';
}

function printGameResult(Game $game): void
{
    if ($game->tied()) {
        echo 'It\'s a tie!';
    } else {
        if ($game->humanWon()) {
            echo 'You won!';
        } else {
            echo 'You lost.';
        }
    }
}

require_once 'indexView.php';