<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $playerName = $_POST["player_1"];
    $playerScore = 0;
    $oponentName = $_POST["player_2"];
    $oponentScore = 0;
}
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $tempName = $_GET["playerName"];
    $tempScore = $_GET["playerScore"];
    $playerName = $_GET["oponentName"];
    $playerScore = $_GET["oponentScore"];
    $oponentName = $tempName;
    $oponentScore = $tempScore;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="./index12.php" method="get">
        <input type="hidden" name="kauliukasMestas">
        <input type="hidden" name="playerName" value = "<?=$playerName?>">
        <input type="hidden" name="playerScore" value = "<?=$PlayerScore?>">
        <input type="hidden" name="oponentName" value = "<?=$oponentName?>">
        <input type="hidden" name="oponentScore" value = "<?=$oponentScore?>">

        <button type="submit">Mesti Kauliuka</button>
    </form>
    <?php
        echo "<h1>".$playerName."</h1>";
        echo "<h1>".$playerScore."</h1>";
    ?>
</body>
</html>