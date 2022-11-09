<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $playerName = $_POST["player_1"];
    $playerScore = 0;
    $oponentName = $_POST["player_2"];
    $oponentScore = 0;
    $start = 1;
}
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    if ($start == 1) {
        $playerScore = 0;
        
    }
    $playerName = $_GET["playerName"];
    $playerScore = $playerScore + 5;
    $oponentName = $_GET["oponentName"];
    $oponentScore = $_GET["oponentScore"];
    if ($playerScore >= 30) {
        echo "Laimejo " . $playerName;
    }else{
        $tempName = $playerName;
        $tempScore = $playerScore;
        $playerName = $oponentName;
        $playerScore = $oponentScore;
        $oponentName = $tempName;
        $oponentScore = $tempScore;
    }
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