<?php 
session_start();
require_once "dbconfic.php";

if (isset($_POST['Product_ID']) && isset($_POST['Name']) && isset($_POST['Category']) && isset($_POST['Price'])){
    $id = $_POST["Product_ID"];
    $qty = 1;

    $insert_stmt=$db -> prepare ("INSERT INTO `cart`(`Product_ID`) VALUES (':id');");
    $insert_stmt ->bindParam(":id", $id);
    $insert_stmt -> execute();
}
?>