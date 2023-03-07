<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'LEAVE_MANAGEMENT';

$conn = mysqli_connect($servername, $username, $password, $dbname);
if($conn){
echo 'successful run';
}else{
echo 'failed';
}
?>