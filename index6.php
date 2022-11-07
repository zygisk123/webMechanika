<?php

$color = "ffffff";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $color = "ffff00";

}else {
    $color = "00FF00";

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
    <form action="" method="get">
        <input type="text" name="color">
        <button type="submit">GET!</button>
    </form>

    <form action="" method="post">
        <input type="text" name="color">
        <button type="submit">POST</button>
    </form>
</body>
</html>