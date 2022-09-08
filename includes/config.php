<?php
$host = "us-cdbr-east-06.cleardb.net";
$username="b02eed90199859";
$password='eb84a1af';
$dbName='heroku_9e7f79133e7a95d';
$con=mysqli_connect($host,$username,$password,$dbName);
// Check connection
if (mysqli_connect_errno())
{
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>
