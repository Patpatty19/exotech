<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "exotech";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection

try{
    $db=new PDO("mysql:host={$servername}; dbname={$dbname}", $username, $password);
    $db ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e)
{
    $e -> getMessage();
}
?>