<?php
    require_once('./db.php');
    $name =  $_GET["EMPLOYEE_NAME"];
    $startDate = $_GET["LEAVE_START"];
    $endDate = $_GET["LEAVE_END"];

    $query = "INSERT INTO APPLY_FOR_LEAVE(EMPLOYEE_NAME, LEAVE_START, LEAVE_END, STATUS)VALUES('$name', '$startDate', '$endDate', 'PENDING')";
    $create_query = mysqli_query($conn, $query);
    if($create_query){
    echo 'Successfull';
  }else{
    echo "unsuccessfull";
  }
?>
