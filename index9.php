
<?php
$color = "000000";
$checked = 0;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    echo count($_POST["checkbox"]);
    $color = "ffffff";
    $hide = 1;
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
<body style="background-color:#<?= $color ?>;">
<?php if(!isset($hide)) { 
    ?>
<form style ="color:white;" action="./index9.php" method="post">
<?php 
    $letters = ['A','B','C','D','E','F','H','I','J'];
    for ($i=0; $i < rand(3,10); $i++) {?>
    <label> <?= $letters[$i] ?></label>     
    <input type="checkbox" name="checkbox[]" value="<?=$i?>">
<?php }?>
    <input type="submit">
</form>
<?php }?>
</body>
</html>