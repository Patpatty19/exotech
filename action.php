<?php 
session_start();
require_once "dbconfig.php";

if (isset($_POST['Product_ID']) && isset($_POST['Name']) && isset($_POST['Category']) && isset($_POST['Price'])){
    $id = $_POST["Product_ID"];
    $qty = 1;

    if ($conn->query("INSERT INTO `cart`('Product_ID') VALUES ('$id');") === TRUE)
        echo "Success";
    else
        echo "No";
}
?>