<?php 
include 'dbconfig.php';
include 'phpClass/dropdown.php';

$dropdown = new Dropdown();

function createOption($id, $name, $price) {
    echo "<option value='{\"id\": $id, \"price\": $price}' price='$price'>$name ($$price)</option>";
}

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>ExoTech - Builder</title>

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
        <main class="p-8">
            <p class="text-4xl font-semibold pb-4 border-b-2 border-black">PC BUILDER</p>
            <div class="mt-4 border-4 border-black rounded-lg p-2 px-4 bg-black flex flex-row">
                <p class="flex-grow-0 flex-shrink-0 w-32 text-white font-bold pr-6 border-r-2 border-white">TYPE</p>
                <p class="font-bold mx-6 text-white flex-grow">ITEM</p>
                <p class="flex-shrink-0 text-white flex-grow-0 w-48 font-bold pl-6 border-l-2 border-white text-left">PRICE</p>
            </div>
            <!-- table -->
            <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" class="flex flex-col" id="table">
                <div class="mt-4 border-4 border-black border-t-8 flex flex-col rounded-lg" id="components">
                    <div class="flex flex-row flex-grow px-4 p-2 flex-grow border-b-2 border-black" id="cpu-container">
                        <label for="cpu" class="flex-grow-0 flex-shrink-0 w-32 font-bold pr-6 border-r-2 border-black">CPU</label>
                        <select name="cpu" class="mx-6 p-2 flex-grow">
                            <option value='{"id": 0, "price": 0}'>None</option>
                            <?php 
                                $sql = "SELECT * FROM `inventory`WHERE Category = 'Processor';";
                                $result = mysqli_query($conn, $sql);

                                if (mysqli_num_rows($result) > 0) {
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        createOption($row["Product_ID"], $row["Name"], $row["Price"]);
                                    }
                                }
                            ?>
                        </select>
                        <p class="price-counter flex-shrink-0 flex-grow-0 w-48 font-bold pl-6 border-l-2 border-black text-left" id="cpu-price">USD 0.00</p>
                    </div>
                    <div class="flex flex-row flex-grow px-4 p-2 flex-grow border-b-2 border-black" id="cpu-cooler-container">
                        <label for="cpu-cooler" class="flex-grow-0 flex-shrink-0 w-32 font-bold pr-6 border-r-2 border-black">CPU Cooler</label>
                        <select name="cpu-cooler" class="mx-6 p-2 flex-grow">
                            <option value='{"id": 0, "price": 0}'>None</option>
                            <?php 
                                $sql = "SELECT * FROM `inventory`WHERE Category = 'Cooling';";
                                $result = mysqli_query($conn, $sql);

                                if (mysqli_num_rows($result) > 0) {
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        createOption($row["Product_ID"], $row["Name"], $row["Price"]);
                                    }
                                }
                            ?>
                        </select>
                        <p class="price-counter flex-shrink-0 flex-grow-0 w-48 font-bold pl-6 border-l-2 border-black text-left" id="cpu-cooler-price">USD 0.00</p>
                    </div>
                    <div class="flex flex-row flex-grow px-4 p-2 flex-grow border-b-2 border-black" id="motherboard-container">
                        <label for="motherboard" class="flex-grow-0 flex-shrink-0 w-32 font-bold pr-6 border-r-2 border-black">Motherboard</label>
                        <select name="motherboard" class="mx-6 p-2 flex-grow">
                            <option value='{"id": 0, "price": 0}'>None</option>
                            <?php 
                                $sql = "SELECT * FROM `inventory`WHERE Category = 'Motherboard';";
                                $result = mysqli_query($conn, $sql);

                                if (mysqli_num_rows($result) > 0) {
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        createOption($row["Product_ID"], $row["Name"], $row["Price"]);
                                    }
                                }
                            ?>
                        </select>
                        <p class="price-counter flex-shrink-0 flex-grow-0 w-48 font-bold pl-6 border-l-2 border-black text-left" id="motherboard-price">USD 0.00</p>
                    </div>
                    <div class="flex flex-row flex-grow px-4 p-2 flex-grow border-b-2 border-black" id="memory-container">
                        <label for="memory" class="flex-grow-0 flex-shrink-0 w-32 font-bold pr-6 border-r-2 border-black">RAM</label>
                        <select name="memory" class="mx-6 p-2 flex-grow">
                            <option value='{"id": 0, "price": 0}'>None</option>
                            <?php 
                                $sql = "SELECT * FROM `inventory`WHERE Category = 'RAM';";
                                $result = mysqli_query($conn, $sql);

                                if (mysqli_num_rows($result) > 0) {
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        createOption($row["Product_ID"], $row["Name"], $row["Price"]);
                                    }
                                }
                            ?>
                        </select>
                        <p class="price-counter flex-shrink-0 flex-grow-0 w-48 font-bold pl-6 border-l-2 border-black text-left" id="memory-price">USD 0.00</p>
                    </div>
                    <div class="flex flex-row flex-grow px-4 p-2 flex-grow border-b-2 border-black" id="storage-container">
                        <label for="storage" class="flex-grow-0 flex-shrink-0 w-32 font-bold pr-6 border-r-2 border-black">Storage</label>
                        <select name="storage" class="mx-6 p-2 flex-grow">
                            <option value='{"id": 0, "price": 0}'>None</option>
                            <?php 
                                $sql = "SELECT * FROM `inventory`WHERE Category = 'SSD' OR Category = 'HDD';";
                                $result = mysqli_query($conn, $sql);

                                if (mysqli_num_rows($result) > 0) {
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        createOption($row["Product_ID"], $row["Name"], $row["Price"]);
                                    }
                                }
                            ?>
                        </select>
                        <p class="price-counter flex-shrink-0 flex-grow-0 w-48 font-bold pl-6 border-l-2 border-black text-left" id="storage-price">USD 0.00</p>
                    </div>
                    <div class="flex flex-row flex-grow px-4 p-2 flex-grow border-b-2 border-black" id="gpu-container">
                        <label for="gpu" class="flex-grow-0 flex-shrink-0 w-32 font-bold pr-6 border-r-2 border-black">GPU</label>
                        <select name="gpu" class="mx-6 p-2 flex-grow">
                            <option value='{"id": 0, "price": 0}'>None</option>
                            <?php 
                                $sql = "SELECT * FROM `inventory`WHERE Category = 'GPU';";
                                $result = mysqli_query($conn, $sql);

                                if (mysqli_num_rows($result) > 0) {
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        createOption($row["Product_ID"], $row["Name"], $row["Price"]);
                                    }
                                }
                            ?>
                        </select>
                        <p class="price-counter flex-shrink-0 flex-grow-0 w-48 font-bold pl-6 border-l-2 border-black text-left" id="gpu-price">USD 0.00</p>
                    </div>
                    <div class="flex flex-row flex-grow px-4 p-2 flex-grow border-b-2 border-black" id="case-container">
                        <label for="case" class="flex-grow-0 flex-shrink-0 w-32 font-bold pr-6 border-r-2 border-black">Case</label>
                        <select name="case" class="mx-6 p-2 flex-grow">
                            <option value='{"id": 0, "price": 0}'>None</option>
                            <?php 
                                $sql = "SELECT * FROM `inventory`WHERE Category = 'Case';";
                                $result = mysqli_query($conn, $sql);

                                if (mysqli_num_rows($result) > 0) {
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        createOption($row["Product_ID"], $row["Name"], $row["Price"]);
                                    }
                                }
                            ?>
                        </select>
                        <p class="price-counter flex-shrink-0 flex-grow-0 w-48 font-bold pl-6 border-l-2 border-black text-left" id="case-price">USD 0.00</p>
                    </div>
                    <div class="flex flex-row flex-grow px-4 p-2 flex-grow border-b-2 border-black" id="psu-container">
                        <label for="psu" class="flex-grow-0 flex-shrink-0 w-32 font-bold pr-6 border-r-2 border-black">PSU</label>
                        <select name="psu" class="mx-6 p-2 flex-grow">
                            <option value='{"id": 0, "price": 0}'>None</option>
                            <?php 
                                $sql = "SELECT * FROM `inventory`WHERE Category = 'Cooling';";
                                $result = mysqli_query($conn, $sql);

                                if (mysqli_num_rows($result) > 0) {
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        createOption($row["Product_ID"], $row["Name"], $row["Price"]);
                                    }
                                }
                            ?>
                        </select>
                        <p class="price-counter flex-shrink-0 flex-grow-0 w-48 font-bold pl-6 border-l-2 border-black text-left" id="psu-price">USD 0.00</p>
                    </div>
                </div>
                <div class="mt-4 border-t-2 px-4 py-2 border-black pt-2 flex flex-row items-center">
                    <p class="flex-grow font-bold">TOTAL PRICE:</p>
                    <p class="text-2xl font-bold" id="total-price">USD 0.00</p>
                    <button type="submit" class="text-xl rounded-3xl bg-black p-2 px-6 text-white font-bold ml-6">Add Items to Cart</button>
                </div>
            </form>
        </main>
        <?php 
            include("phpClass/builderForm.php");
        ?>
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