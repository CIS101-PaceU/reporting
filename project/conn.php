<?php
$servername = 'localhost';
$user = 'root';
$pass = '3488';
$dbname = 'mydatabase';

$conn = new mysqli($servername, $user, $pass, $dbname) or die("Could not connect: ");


$rs = @mysqli_select_db($conn, $dbname) or die("Sorry - cannot find the database");
if(mysqli_connect_errno($conn))
{
		echo "Failed to connect";
}
?>
