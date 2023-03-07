<?php
    require_once('./db.php');


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
    <form action="./leave_entry.php">
        <p>Name</p>
        <input type="text" name='name' placeholder="ENter your name">
        <p>start date</p>
        <input type="text" name='sdate' placeholder="ENter date">
        <p>end date</p>
        <input type="text" name='edate' placeholder="ENter date">
    </form>
</body>
</html>
