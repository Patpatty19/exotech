<?php 
include 'dbconfig.php';
include 'phpClass/dropdown.php';

$dropdown = new Dropdown();

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
        <script src="js/carttest.js"></script>

    </head>
    <body class="flex flex-col">
        <header class="z-50">
            <?php 
                $dropdown->createDropdown("Product");
            ?>
        </header>
        <form method="post" id="gen" name="gen" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <label for="category">Choose a category:</label>
            <select name="category" id="catergory">
                <option value="All">All</option>
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
        $category = isset($_POST['category']) ?$_POST['category'] : "All";
        if($category != "All"){
            $sql = "SELECT * FROM `inventory` WHERE Category = '$category';";
        }elseif($category == "All"){
            $sql = "SELECT * FROM `inventory`";
        }
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
        ?>
        <div>
            <h1 id="test"><?php echo $row["Name"];?></h1>
            <form class="form-submit" action="action.php">
                <input type="hidden" class="pid" value="<?php $row["Product_ID"]; ?>">
                <input type="hidden" class="pname" value="<?php $row["Name"]; ?>">
                <input type="hidden" class="pcategory" value="<?php $row["Category"]; ?>">
                <input type="hidden" class= "pprice" value="<?php $row["Price"]; ?>">
                <button type ="button" id="additem" style='background-color:red;'> add to cart </button>
            </form>
        </div>
        <?php 
            }
        }
        ?>
        <footer>

        </footer>
    </body>
</html>