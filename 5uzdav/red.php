<?php
if(isset($_GET['redirect'] )){
    header('Location: '."./blue.php");}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background-color:#FF0000;">
    <a href="red.php?redirect">Refresh</a>
</body>
</html>