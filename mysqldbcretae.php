<?php
echo "Concceting the page with database <br>";
// MYSQL CONCCETING DATABASE
// 1. mysqli Extension
// 2. PDO Extension
$servername = "localhost";
$username = "root";
// root is my mysql password 
$password = "root";

$con = mysqli_connect($servername, $username, $password);
// Die if conncection was not sucessfu

// creating a db
$sql = "CREATE DATABASE dbrajat";
mysquli_query($con,$sql);
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
} else{
    echo "Connection was successful <br>";
}
echo "conncetion successfull!!";


?>