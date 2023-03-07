<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
table, th, td {
  border:1px solid black;
}
</style>
</head>
<body>

<h2>A basic HTML table</h2>

<table style="width:100%">
  <tr>
    <th>Name</th>
    <th>Start Date</th>
    <th>End Date</th>
    <th>Status</th>
    <th>Aprrove</th>
    <th>Reject</th>
  </tr>
  <?php
    $query = "SELECT * FROM room_details;";
    $execute  = mysqli_query($conn, $query);
    if($execute->num_rows>0){
        while($rd = mysqli_fetch_assoc($execute)){
  ?>
  <tr>
    <td><?php echo $rd['EMPLOYEE_NAME'];?></td>
    <td><?php echo $rd['LEAVE_START'];?></td>
    <td><?php echo $rd['LEAVE_END'];?></td>
    <td><?php echo $rd['STATUS'];?></td>
    <td><button>Approved</button></td>
    <td><button>Reject</button></td>
  </tr>

  <?php
        }
    }
  ?>
</table>
</body>
</html>
