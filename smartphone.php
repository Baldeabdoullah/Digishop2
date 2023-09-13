<?php include 'header.php'; ?>

<body>

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
                <a href="">
                    <i class="fa-solid fa-cart-shopping fa-2x mx-3 custom_menu_icon"></i></a>
            </div>
        </div>
    </nav>

    <!--CONNECTION A LA BASE DE DONNEES-->

    <?php
    include "./connect.php";
    ?>

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

            $sql = "Select * from `produits` where cathegorie = 'telephone' ";

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
                    $performaance = $row['performance'];

                    echo ' <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 filtre-element tout vente-item  ' . $marques . '">
                <div class="smartphone_container">
                    <a href="detail.php?details_id=' . $id . '" class="text-center  text-decoration-none">

                         <img onerror="this.style.display=\'none\'" src=' . $image1 . ' alt= "' . $marques . '  ' . $nom . '   en vente à Dakar " class="img-fluid">
                         <img onerror="this.style.display=\'none\'" class="img-fluid" src=' .  'imagesu/' . $image1 . ' />
                        
                        <p class="fs-6 fw-bold product-name ">' . $nom . '</p>
                        <p class="fs-6 fw-bold">' . $prix . ' FCFA</p>
                    </a>
                  
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