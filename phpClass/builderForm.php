<?php 
    $items = array(
        isset($_POST["cpu"]) ? $_POST["cpu"] : '{"id": 0, "price": 0}',
        isset($_POST["cpu-cooler"]) ? $_POST["cpu-cooler"] : '{"id": 0, "price": 0}',
        isset($_POST["motherboard"]) ? $_POST["motherboard"] : '{"id": 0, "price": 0}',
        isset($_POST["memory"]) ? $_POST["memory"] : '{"id": 0, "price": 0}',
        isset($_POST["storage"]) ? $_POST["storage"] : '{"id": 0, "price": 0}',
        isset($_POST["gpu"]) ? $_POST["gpu"] : '{"id": 0, "price": 0}',
        isset($_POST["case"]) ? $_POST["case"] : '{"id": 0, "price": 0}',
        isset($_POST["psu"]) ? $_POST["psu"] : '{"id": 0, "price": 0}',
    );

    $conn = mysqli_connect("localhost", "root", "", "exotech");
    foreach ($items as &$item) {
        $contents = json_decode($item, true);
        $id = $contents["id"];
        
        if ($id != 0) {
            $conn->query("INSERT INTO `cart`(`Product_ID`) VALUES ($id);");
        }
    }

    // reset
    $_SESSION['postdata'] = $_POST;
    unset($_POST);
?>