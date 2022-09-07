<?php
$host = "localhost";
$username="b02eed90199859";
$password='eb84a1af';
$dbName='us-cdbr-east-06.cleardb.net';
$con=mysqli_connect($host,$username,$password,$dbName);
// Check connection
if (mysqli_connect_errno())
{
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>
