<?php 
    class Dropdown {
        public static function createDropdown() {
            $conn = mysqli_connect("localhost", "root", "", "exotech");

            $result = mysqli_query($conn, 'SELECT COUNT(*)"total" FROM `cart`;');
            $count = 0;
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result))
                    $count = $row["total"];
            }

            echo '
                <div class="flex flex-row justify-between p-4 sm:px-4 md:px-12 -mt-4 header shadow-lg items-center">
                    <img src="res/img/logo.png" class="h-8 w-auto logo-header object-fit">
                    <a class="sm:px-4 md:px-0 sm:visible md:invisible">
                        <i id="mobile-header-dropdown-button" class="fas fa-caret-down text-2xl text-center header-caret"></i>
                        <div id="mobile-header-dropdown" class="z-50 dropdown-menu hidden absolute mt-16 bg-white border-black p-4 py-2 w-full top-0 right-0 shadow-xl flex flex-row">
                            <a href="index.php"><p class="my-2 border-b-2 border-200-gray mobile-button">Home</p></a>
                            <a href="products.php"><p class="my-2 border-b-2 border-200-gray mobile-button">Products</p></a>
                            <a href="builder.php"><p class="my-2 border-b-2 border-200-gray mobile-button">Builder</p></a>
                            <a href="about.php"><p class="my-2 border-b-2 border-200-gray mobile-button">About</p></a>
                            <a href="cart.php"><p class="my-2 border-b-2 border-200-gray mobile-button">Cart (' . $count . ')</p></a>
                        </div>
                    </a>
                    <div class="flex flex-row space-x-2 lg:space-x-6 hidden sm:hidden md:flex z-50">
                        <a href="index.php"><p class="font-semibold p-4 text-2xl text-white desktop-menu-hover mx-4">HOME</p></a>
                        <a href="products.php"><p class="font-semibold p-4 text-2xl text-white desktop-menu-hover mx-4">PRODUCTS</p></a>
                        <a href="builder.php"><p class="font-semibold p-4 text-2xl text-white desktop-menu-hover mx-4">BUILDER</p></a>
                        <a href="about.php"><p class="font-semibold p-4 text-2xl text-white desktop-menu-hover mx-4">ABOUT</p></a>
                        <a href="cart.php"><p class="font-semibold p-4 text-2xl text-white desktop-menu-hover mx-4">CART (' . $count . ')</p></a>
                    </div>
                </div>';
        }
    }
?>