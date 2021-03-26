<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<form action="index.php" method="post">

    <div class="radio-buttons">

        <?php

        foreach ($artillery->getWeapons() as $key => $weapon) {
            echo '<input type="radio" name="choice" value="' . $key . '"> ' . '<img src="img/weapon-' . $key . '.png"/>' . '<br>';
        }

        ?>

    </div>

    <div class="submit-button">
        <input type="submit" name="submit" value="Play">
    </div>

</form>

<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $playerOne->makeChoice($_POST['choice']);
    $newGame->play();

    printMoves($newGame);
    printGameResult($newGame);
}

?>

</body>
</html>

<style>
    * {
        font-family: arial, sans-serif;
        border-collapse: collapse;
    }

    div {
        padding: 20px;
    }

    .submit-button {
        margin: 10px 0;
    }
</style>