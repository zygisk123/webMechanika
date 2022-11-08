<?php
include "./Player.php";
$startGame = 0;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $player1 = New Player($_POST["player_1"], 0);
  $player2 = New Player($_POST["player_2"], 0);
  $startGame = 1;

}
if(isset($_GET['kauliukasMestas'])){
  $startGame = 1;
  if ($startGame == 1) {
    $player1->changeScore(rand(1,6));
    echo "wwwwwwwwwwwwwwwwwwwwwwwwwww";
    die;
    if ($player1->getScore() >= 30) {
      echo "Laimejo " . $player1->getName();
    } else{
      $startGame = 1;
    }
  }
  if ($startGame == 2) {
   $player2->changeScore(rand(1,6));
    if ($player2->getScore() >= 30) {
      echo "Laimejo " . $player2->getName();
    } else{
      $startGame = 1;
    }  
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
  <?php if($startGame == 0) {?>
    <form action="./index11.php" method="post">
      <label for="player1">Player 1</label><br>
      <input type="text" id="player1" name="player_1"><br>
      <label for="player2">Player 2</label><br>
      <input type="text" id="player2" name="player_2"><br>
      <input type="submit" value="PRADETI">
    </form> 
  <?php }?>

  <?php if ($startGame == 1) {?>
    <form action="./index11.php" method="get">
    <input type="hidden" name="kauliukasMestas">
    <button type="submit">Mesti Kauliuka</button>
    </form>
    <?php
    echo "<h1>".$player1->getName()."</h1>";
    echo "<h1>".$player1->getScore()."</h1>";
  }?>
  <?php if ($startGame == 2) { ?>
    <form action="./index11.php" method="get">
    <input type="hidden" name="kauliukasMestas">
    <button type="submit">Mesti Kauliuka</button>
    </form>
    <?php
    echo "<h1>".$player2->getName()."</h1>";
    echo "<h1>".$player2->getScore()."</h1>";
  }?>
</body>
</html>