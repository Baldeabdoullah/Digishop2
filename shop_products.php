<?php include 'connect.php';
if (isset($_POST['add_to_cart'])) {
    $products_name = $_POST['product_name'];
    $products_price = $_POST['product_price'];
    $products_image = $_POST['product_image'];
    $product_quantity = 1;

    //choisir les donne de la cart en fonction de conditions
    //eviter les repetitons
    $select_cart = mysqli_query($connection, "Select * from `cart` where name='$products_name' and price='$products_price'");
    if (mysqli_num_rows($select_cart) > 0) {
        $display_message = "produit déja présent dans le panier";
    } else {

        // inserer les donne dans la table cart
        $insert_products = mysqli_query($connection, "insert into `cart` (name,price,image,quantity)
     values('$products_name','$products_price','$products_image','$product_quantity')");
        $display_message = "produit ajouté au panier";
    }
}


include 'header.php';



?>

<body>

    <!--navbar-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light mb-5">
        <div class="container">

            <a class="navbar-brand" href="#">Digishop</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="addproduct.php">Ajouter un produit</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="produits.php">Gerer les produits</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="shop_products.php">Voir les produits</a>
                    </li>
                </ul>
            </div>


        </div>

    </nav>

    <?php if (isset($display_message)) {
        echo "<div class='text-center'>
         <i class='fa-solid fa-xmark' onClick='this.parentElement.style.display=`none`'></i>
        $display_message
         </div>";
    } ?>



    <!--BARRE DE RECHERCHE-->
    <?php include './searchbar.php';  ?>


    <!--LES TELEPHONES-->

    <div class="container d-flex px-4">
        <div class="d-none d-lg-block px-5">
            <h3 class="text-center">Filtres</h3>
            <div class=" mt-3 mb-4 button-group  ">

                <div class=" row d-inline-block justify-content-start  ">
                    <button type="button" id="tout" class="btn btn-primary filtre-bouttons  text-dark">Tout</button>
                    <button type="button" id="samsung" class="btn btn-primary filtre-bouttons  text-dark">Samsung</button>
                    <button type="button" id="apple" class="btn btn-primary filtre-bouttons  text-dark">Apple</button>
                    <button type="button" id="huawei" class="btn btn-primary filtre-bouttons  text-dark">Huawei </button>
                    <button type="button" id="xiaomi" class="btn btn-primary filtre-bouttons  text-dark">Xiaomi</button>

                </div>
            </div>
        </div>

        <div class="row  ">

            <?php

            $sql = "Select * from `produits` ";

            $result = mysqli_query($connection, $sql);
            if ($result) {
                // $row = mysqli_fetch_assoc($result);
                // echo $row["nom"];
                while ($row = mysqli_fetch_assoc($result)) {
                    $id = $row['id'];
                    $marques = $row['marques'];
                    $nom = $row['nom'];
                    $prix = $row['prix'];
                    $disponibilite = $row['disponibilite'];
                    $description = $row['description'];
                    $image1 = $row['image1'];
                    $image2 = $row['image2'];
                    $image3 = $row['image3'];
                    $image4 = $row['image4'];
                    $cathegorie = $row['cathegorie'];
                    $ecran = $row['ecran'];
                    $stockage = $row['stockage'];
                    $performance = $row['performance'];

                    echo ' <div class=" my-2 col-xl-3 col-lg-4 col-md-6 col-sm-12 filtre-element tout vente-item  ' . $marques . '">
                <div class="smartphone_container text-center">
                    <a href="detail.php?details_id=' . $id . '" class="text-center  text-decoration-none">

                         <img onerror="this.style.display=\'none\'" src=' . $image1 . ' alt= "' . $marques . '  ' . $nom . '   en vente à Dakar " class="img-fluid">
                         <img onerror="this.style.display=\'none\'" class="img-fluid" src=' .  'imagesu/' . $image1 . ' />
                        
                        <p class="fs-6 fw-bold product-name ">' . $nom . '</p>
                        <p class="fs-6 fw-bold">' . $prix . ' FCFA</p>
                    </a>

                    <form method="post" action="">
                     <input type="hidden" name="product_name" value=' . $nom . '>
                     <input type="hidden" name="product_price" value=' . $prix . '>
                     <input type="hidden" name="product_image" value=' . $image1 . '>
                    <input type="submit" class="btn btn-dark " value="Ajouter au panier" name="add_to_cart">
                    </form>
                  
                </div>
            </div>';
                }
            }


            ?>


        </div>
    </div>




    <!--FOOTER PHP-->
    <?php
    include "./footer.php";

    ?>

    <h4 class="text-center fw-bold">Crée avec passion par <a href="https://abdoullahbalde.com/" target="_blank">Abdoullah Balde</a></h4>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>


    <script src="filtre.js"></script>
    <script src="./recherche.js"></script>


</body>

</html>