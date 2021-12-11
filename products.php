<?php 
include 'dbconfig.php';

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>ExoTech</title>

        <link href="css/main.css?v=<?php echo time(); ?>" rel="stylesheet">
        
        <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <script src="js/dropdown-menu.js"></script>
    </head>
    <body class="flex flex-col">
        <header class="z-50">
            <div class="flex flex-row justify-between p-4 sm:px-4 md:px-12 header shadow-lg items-center">
                <img src="res/img/logo.png" class="h-8 w-auto logo-header object-fit">
                <a class="sm:px-4 md:px-0 sm:visible md:invisible">
                    <i id="mobile-header-dropdown-button" class="fas fa-caret-down text-2xl text-center header-caret"></i>
                    <div id="mobile-header-dropdown" class="z-50 dropdown-menu hidden absolute mt-16 bg-white border-black p-4 py-2 w-full top-0 right-0 shadow-xl flex flex-row">
                        <a href="index.php"><p class="my-2 font-bold border-b-2 border-200-gray mobile-button">Home</p></a>
                        <a href="products.php"><p class="my-2 border-b-2 border-200-gray mobile-button">Products</p></a>
                        <a href="builder.php"><p class="my-2 border-b-2 border-200-gray mobile-button">Builder</p></a>
                        <a href="cart.php"><p class="my-2 border-b-2 border-200-gray mobile-button">Cart</p></a>
                    </div>
                </a>
                <div class="flex flex-row space-x-6 hidden sm:hidden md:flex z-50">
                    <a href="index.php"><p class="font-extrabold p-4 text-2xl text-200-gray desktop-menu-hover mx-4">HOME</p></a>
                    <a href="products.php"><p class="font-semibold p-4 text-2xl text-white desktop-menu-hover mx-4">PRODUCTS</p></a>
                    <a href="builder.php"><p class="font-semibold p-4 text-2xl text-white desktop-menu-hover mx-4">BUILDER</p></a>
                    <a href="cart.php"><p class="font-semibold p-4 text-2xl text-white desktop-menu-hover mx-4">CART</p></a>
                </div>
            </div>
        </header>
        <form method="post" id="gen" name="gen">
            <label for="category">Choose a category:</label>
            <select name="category" id="catergory">
                <option value="Processor">Processor</option>
                <option value="RAM">RAM</option>
                <option value="Motherboard">motherboard</option>
                <option value="SSD">SSD</option>
                <option value="HDD">HDD</option>
                <option value="PSU">PSU</option>
                <option value="Cooling">Cooling</option>
                <option value="Case">Case</option>
                <option value="Monitor">Monitor</option>
                <option value="Keyboard">Keyboard</option>
                <option value="Mouse">Mouse</option>
                <option value="Headset">Headset</option>
                <option value="Smartphone">Smartphone</option>
                <option value="Camera">Camera</option>
            </select>
            <br><br>
            <input type="submit" value="submit" name="submit" id="submit">
        </form>
        <?php 
        $category = $_POST['category'];
        $sql = "SELECT * FROM `inventory` WHERE Category = '$category';";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
                echo $row["Product_ID"] . " " . $row["Name"] . " " . $row["Category"] . " " . $row["Quantity"] . " " . $row["Price"] ."<br>";
            }
        }
        ?>
        <footer>

        </footer>
    </body>
</html>