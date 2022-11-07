
<?php
$color = "000000";
$checked = 0;
if ($_POST['checkbox1'] == 'value1'){
    $checked++;
}
if ($_POST['checkbox2'] == 'value1'){
    $checked++;
}
if ($_POST['checkbox3'] == 'value1'){
    $checked++;
}
if ($_POST['checkbox4'] == 'value1'){
    $checked++;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $color = "ffffff";
    echo $checked;

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

<form style ="color:white;" action="./index9.php" method="post">
    <input type="checkbox" name="checkbox1" value="value1">
    <label> A </label>
    <input type="checkbox" name="checkbox2" value="value1">
    <label> B </label>
    <input type="checkbox" name="checkbox3" value="value1">
    <label> C </label>
    <input type="checkbox" name="checkbox4" value="value1">
    <label> D </label>
    <input type="submit">
</form>
</body>
</html>