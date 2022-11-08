<?php
include "./Player.php";

if ($startGame == 1) {
  if(isset($_GET['kauliukasMestas'])){
    $startGame = 2;

  }
}
  if ($startGame == 2) {
    $startGame = 1;
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
  <!-- <?php if(!isset($gameStarted)) {?> -->
    <form action="./index12.php" method="post">
      <label for="player1">Player 1</label><br>
      <input type="text" id="player1" name="player_1"><br>
      <label for="player2">Player 2</label><br>
      <input type="text" id="player2" name="player_2"><br>
      <input type="submit" value="PRADETI">
    </form> 
  <!-- <?php }?>

  <?php if (isset($player1Play)) {?>
    <form action="./index11.php" method="get">
    <input type="hidden" name="kauliukasMestas">

    <button type="submit">Mesti Kauliuka</button>
    </form>
    <?php
    echo "<h1>".$player1Name."</h1>";
    echo "<h1>".$player1Score."</h1>";
  }?>
  <?php if (isset($player2Play)) { ?>
    <form action="./index11.php" method="get">
    <input type="hidden" name="kauliukasMestas">
    <button type="submit">Mesti Kauliuka</button>
    </form>
    <?php
    echo "<h1>".$player2Name."</h1>";
    echo "<h1>".$player2Score."</h1>";
  }?> -->
</body>
</html>