<?php 
include 'dbconfig.php';
include 'phpClass/dropdown.php';

$dropdown = new Dropdown();
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

function createContent($name, $price) {
    echo "
    <div class='flex flex-row px-4 p-2 border-b-2 border-black'>
        <p class='flex-grow font-bold pr-6 border-r-2 border-black'>$name</p>
        <p class='w-48 font-bold pl-6' id='price-counter'>USD $price</p>
    </div>";
}
?>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>ExoTech - Cart</title>

        <link href="css/main.css?v=<?php echo time(); ?>" rel="stylesheet">
        
        <script src="https://cdn.tailwindcss.com/"></script>
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <script src="js/dropdown-menu.js"></script>
        <script src="js/card-behavior.js"></script>
        <script src="js/builder-price.js?v=<?php echo time(); ?>"></script>
        <script>
            if ( window.history.replaceState ) {
                window.history.replaceState( null, null, window.location.href );
            }
        </script>
    </head>
    <body class="flex flex-col">
        <header class="z-50">
            <?php 
                $dropdown->createDropdown("Product");
            ?>
        </header>
        <main class="p-8 flex-grow min-h-screen">
            <p class="text-4xl font-semibold pb-4 border-b-2 border-black">CART</p>
            <div class="mt-4 border-4 border-black rounded-lg p-2 px-4 bg-black flex flex-row">
                <p class="font-bold mx-6 text-white flex-grow">ITEM</p>
                <p class="flex-shrink-0 text-white flex-grow-0 w-48 font-bold pl-6 border-l-2 border-white text-left">PRICE</p>
            </div>
            <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" class="flex flex-col" id="table">
                <div class="mt-4 border-4 border-black border-t-8 flex flex-col rounded-lg" id="components">
                    <?php 
                        $conn = mysqli_connect("localhost", "root", "", "exotech");
                        $sql = "SELECT i.Name, i.Price  FROM `cart` c, `inventory` i WHERE c.Product_ID = i.Product_ID;";
                        
                        $totalprice = 0;
                        $result = mysqli_query($conn, $sql);
                        
                        if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                createContent($row["Name"], $row["Price"]);

                                $totalprice += (int)$row["Price"];
                            }
                        } else {
                            echo "
                            <div class='flex flex-row px-4 p-2 border-b-2 border-black'>
                                <p class='flex-grow font-bold pr-6'>No items!</p>
                            </div>";
                        }
                    ?>
                </div>
                <div class="mt-4 border-t-2 px-4 py-2 border-black pt-2 flex flex-row items-center">
                    <p class="flex-grow font-bold">TOTAL PRICE:</p>
                    <p class="text-2xl font-bold" id="total-price"><?php echo "USD: " . number_format($totalprice, 2); ?></p>
                </div>
                <div class="mt-4 px-4 py-2 pt-2 flex flex-row items-center">
                    <?php 
                        if (mysqli_num_rows($result) > 0) {
                            echo '
                            <p class="font-bold">Enter email address:</p>
                            <input type="text" class="flex-grow px-1 border-2 border-black rounded-lg mx-4 mr-64" placeholder="Enter email address...">
                            <button type="submit" value="submit" name="submit" class="text-xl rounded-3xl bg-black p-2 px-6 text-white font-bold ml-6">Submit for Quotation</button>
                            <button type="submit" value="reset" name="reset" class="text-xl rounded-3xl bg-black p-2 px-6 text-white font-bold ml-6">Clear</button>';
                        }
                    ?>
                </div>
            </form>
            <?php 
                $submit = isset($_POST["submit"]);
                $reset = isset($_POST["reset"]);

                $conn = mysqli_connect("localhost", "root", "", "exotech");
                if ($submit == true && $reset == false) {
                    // supposed to send email but no api to do so
                    $conn->query("DELETE FROM `cart`");
                } else if ($submit == false && $reset == true) {
                    $conn->query("DELETE FROM `cart`");
                }
                
                unset($_POST);
            ?>
        </main>
        <footer class="footer-bg mt-8 px-64 flex flex-row py-8 justify-center items-center">
            <div class="flex flex-col flex-grow justify-center items-center">
                <p class="text-white font-semiboldbold">EXOTECH Philippines Co.<p>
                <p class="text-white font-semibold">000 Sample Street, Manila<p>
            </div>
            <div class="flex flex-col flex-grow justify-center items-center">
                <p class="text-white font-semibold">exotech.info@gmail.com<p>
                <p class="text-white font-semibold">+63 912 345 6789<p>
            </div>
            <div class="flex flex-col flex-grow justify-center items-center">
                <p class="text-white font-semibold">Created with PHP and Tailwind<p>
                <p class="text-white font-semibold">Cloalupat LTD.<p>
            </div>
        </footer>
    </body>
</html>