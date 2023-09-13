<nav class="navbar navbar-expand-lg my-3">
    <div class="container">
        <a class="navbar-brand fw-bold fs-3" href="index.php">Digishop</a>
        <button class="navbar-toggler" id="search-input" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse pt-3" id="navbarNav">
            <div class="input-group custom_inputsearch">
                <input type="text" class="custom_bar" id="search-input" placeholder="Rechercher" aria-label="Recipient's username" aria-describedby="basic-addon2" />
                <!-- <a href="" id="search"><i class="fa-solid fa-magnifying-glass fa-2x my-auto"></i></a> -->
                <button id="search"> <i class="fa-solid fa-magnifying-glass fa-2x my-auto"></i> </button>

            </div>

            <a href="">
                <i class="fa-regular fa-user fa-2x mx-3 custom_menu_icon"></i></a>
            <a href="cart.php">
                <i class="fa-solid fa-cart-shopping fa-2x mx-3 custom_menu_icon"></i> <span><sup><?php echo $row_count; ?></sup></span></a>
        </div>
    </div>
</nav>