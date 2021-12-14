<?php 
include 'dbconfig.php';
include 'phpClass/dropdown.php';
include 'phpClass/card.php';

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
        <title>ExoTech - Builder</title>

        <link href="css/main.css?v=<?php echo time(); ?>" rel="stylesheet">
        
        <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <script src="js/dropdown-menu.js"></script>
        <script src="js/card-behavior.js"></script>
        <script src="js/carttest.js"></script>

    </head>
    <body class="flex flex-col">
        <?php 
            $cardview = new CardView();
        ?>
        <header class="z-50">
            <?php 
                $dropdown->createDropdown("Product");
            ?>
        </header>
        <main class="p-8">

        </main>
        <footer>

        </footer>
    </body>
</html>