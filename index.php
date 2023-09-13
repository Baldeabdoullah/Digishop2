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
?>

<?php include './header.php'  ?>
<!-- Link Swiper's CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />


<style>
  /* LE STYLE DU CSS */
  html,
  body {
    position: relative;
    height: 100%;
  }

  body {
    background: #eee;
    font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
    font-size: 14px;
    color: #000;
    margin: 0;
    padding: 0;
  }

  .swiper {
    width: 100%;
    height: 100%;
  }

  .swiper-slide {
    text-align: center;
    font-size: 18px;
    background: #fff;

    /* Center slide text vertically */
    display: -webkit-box;
    display: -ms-flexbox;
    display: -webkit-flex;
    display: block;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    -webkit-justify-content: center;
    justify-content: center;
    -webkit-box-align: center;
    -ms-flex-align: center;
    -webkit-align-items: center;
    align-items: center;
    overflow: hidden;
  }

  .swiper-slide img {
    display: block;
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: 0.7s;
  }

  .swiper-slide:hover img {
    transform: scale(1.04);

  }
</style>
</head>

<div class="container-fluid custom_entete">
  <h3 class="text-center text-light ">Boutique e-commerce</h3>

</div>

<?php include './searchbar.php'  ?>



<!--LE CAROUSEL-->

<div class="slider">
  <div class="slide current">
    <div class="content">
      <h1>Digishop</h1>
      <p>Ecommerce pour tous</p>
    </div>
  </div>

  <div class="slide">
    <div class="content">
      <h1>Oppo find x5 pro</h1>
      <p>Nouveauté</p>
    </div>
  </div>

  <div class="slide">
    <div class="content">
      <h1>Vendez partout dans le monde</h1>
      <p></p>
    </div>
  </div>

  <div class="slide">
    <div class="content">
      <h1>Livraison a l'internationnal</h1>
      <p></p>
    </div>
  </div>

  <div class="slide">
    <div class="content">
      <h1></h1>
      <p></p>
    </div>
  </div>

  <div class="slide">
    <div class="content">
      <h1></h1>
      <p></p>
    </div>
  </div>
</div>

<div class="buttons">
  <button id="prev">
    <i class="fa-solid fa-arrow-left"></i>
  </button>

  <button id="next">
    <i class="fa-solid fa-arrow-right"></i>
  </button>
</div>
<!--LES CATHEGORIES-->
<section id="casthegory" class="mt-5">
  <div class="container">
    <h2 class="text-start">Nos cathegories</h2>

    <div class="row">
      <div class="col-xl-2 col-lg-4 col-md-6 col-sm-12">
        <div class="cathegorie-container">
          <a href="smartphone.php" class="text-center">
            <div class="cathegorie-img">
              <img src="./cathegorie/smartphone.png" alt="" class="img-fluid" />
            </div>
            <div class="cathegorie-text">
              <p class="text-center fw-bold fs-6">smartphone</p>
            </div>
          </a>
        </div>
      </div>

      <div class="col-xl-2 col-lg-4 col-md-6 col-sm-12">
        <div class="cathegorie-container">
          <a href="ordinateur.php" class="text-center">
            <div class="cathegorie-img">
              <img src="./cathegorie/ordinateur.png" alt="" class="img-fluid" />
            </div>
            <div class="cathegorie-text">
              <p class="text-center fw-bold fs-6">PC</p>
            </div>
          </a>
        </div>
      </div>

      <div class="col-xl-2 col-lg-4 col-md-6 col-sm-12">
        <div class="cathegorie-container">
          <a href="jeux.php" class="text-center">
            <div class="cathegorie-img">
              <img src="./cathegorie/jeux.jpg" alt="" class="img-fluid" />
            </div>
            <div class="cathegorie-text">
              <p class="text-center fw-bold fs-6">Jeux Vidéos</p>
            </div>
          </a>
        </div>
      </div>

      <!-- <div class="col-xl-2 col-lg-4 col-md-6 col-sm-12">
         <div class="cathegorie-container">
           <a href="drone.php" class="text-center">
             <div class="cathegorie-img">
               <img src="./cathegorie/drone.jpg" alt="" class="img-fluid" />
             </div>
             <div class="cathegorie-text">
               <p class="text-center fw-bold fs-6">Drones</p>
             </div>
           </a>
         </div>
       </div> -->
      <div class="col-xl-2 col-lg-4 col-md-6 col-sm-12">
        <div class="cathegorie-container">
          <a href="shop_products.php" class="text-center">
            <div class="cathegorie-img">
              <img src="./cathegorie/Tout.jpg" alt="" class="img-fluid" />
            </div>
            <div class="cathegorie-text">
              <p class="text-center fw-bold fs-6">Tout Voir</p>
            </div>
          </a>
        </div>
      </div>

      <div class="col-xl-2 col-lg-4 col-md-6 col-sm-12">
        <div class="cathegorie-container">
          <a href="tele.php" class="text-center">
            <div class="cathegorie-img">
              <img src="./cathegorie/tv.webp" alt="" class="img-fluid" />
            </div>
            <div class="cathegorie-text">
              <p class="text-center fw-bold fs-6">TV</p>
            </div>
          </a>
        </div>
      </div>

      <div class="col-xl-2 col-lg-4 col-md-6 col-sm-12">
        <div class="cathegorie-container">
          <a href="montre.php" class="text-center">
            <div class="cathegorie-img">
              <img src="./cathegorie/watch3.jpg" alt="" class="img-fluid" />
            </div>
            <div class="cathegorie-text">
              <p class="text-center fw-bold fs-6">Montre Connectées</p>
            </div>
          </a>
        </div>
      </div>

    </div>
  </div>
</section>

<!--Les MARQUES-->
<section id="marques" class="mt-5">
  <h3 class="text-center">Les Marques disponibles</h3>

  <div class="container text-center mt-5">
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4">

      <div class="col">
        <a href="samsung.php">
          <p class="custom_marque_logo ">SAMSUNG</p>
        </a>
      </div>

      <div class="col">
        <a href="apple.php">
          <p class="custom_marque_logo">APPLE</p>
        </a>

      </div>

      <div class="col">
        <a href="huawei.php">
          <p class="custom_marque_logo">HUAWEI</p>
        </a>

      </div>

      <div class="col">
        <a href="oppo.php">
          <p class="custom_marque_logo">OPPO</p>
        </a>

      </div>

    </div>

    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 mt-5">

      <div class="col">
        <a href="xiaomi.php">
          <p class="custom_marque_logo">XIAOMI</p>
        </a>
      </div>

      <div class="col">
        <a href="">
          <p class="custom_marque_logo">GOOGLE</p>
        </a>

      </div>

      <div class="col">
        <a href="techno.php">
          <p class="custom_marque_logo">TECHNO</p>
        </a>

      </div>

      <div class="col">
        <a href="">
          <p class="custom_marque_logo">LG</p>
        </a>

      </div>

    </div>
  </div>

</section>

<!--MEILLEURES VENTES-->
<section id="BESTBUY" class="mt-5">
  <h2 class="text-start">Nos meilleurs ventes</h2>

  <div class="swiper mySwiper">
    <div class="swiper-wrapper">

      <?php
      $sql = "Select * from `produits` where id <= 11   ";

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

          echo ' <div class="swiper-slide custom_slideitem py-2">
          <div>
         <a href="detail.php?details_id=' . $id . '" custom_slidelink>

          <img onerror="this.style.display=\'none\'" src=' . $image1 . ' alt= "' . $marques . '  ' . $nom . '   en vente à Dakar " class="img-fluid">
          <img onerror="this.style.display=\'none\'" class="img-fluid" src=' .  'imagesu/' . $image1 . ' />


           <h5 class="fs-6 fw-bold text-dark mt-1">' . $nom . '</h5>
           <h6 class="fs-6 fw-bold text-dark">' . $prix . ' FCFA</h6>
       
         
         </a>
         </div>
               <form method="post" action="">
                     <input type="hidden" name="product_name" value=' . $nom . '>
                     <input type="hidden" name="product_price" value=' . $prix . '>
                     <input type="hidden" name="product_image" value=' . $image1 . '>
                    <input type="submit" class="btn btn-dark " value="Ajouter au panier" name="add_to_cart">
                    </form>

     

       </div>';
        }
      }

      ?>

    </div>
    <div class="swiper-pagination">
      <img src="./huawei/watchgt2/gt21.webp" alt="">
    </div>
  </div>
</section>

<!--NOUVEAUTES-->
<section id="BESTBUY" class="mt-5">
  <h2 class="text-start">Nouveautés</h2>

  <div class="swiper mySwiper">
    <div class="swiper-wrapper">
      <?php

      $sql = "Select * from `produits` where cathegorie = 'telephone' and id >= 20 ORDER BY id DESC ";

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

          echo ' <div class="swiper-slide custom_slideitem py-2">
          <div>
         <a href="detail.php?details_id=' . $id . '" custom_slidelink>

          <img onerror="this.style.display=\'none\'" src=' . $image1 . ' alt= "' . $marques . '  ' . $nom . '   en vente à Dakar " class="img-fluid">
          <img onerror="this.style.display=\'none\'" class="img-fluid" src=' .  'imagesu/' . $image1 . ' />

           <p class="fs-6 fw-bold text-dark">' . $nom . '</p>
           <p class="fs-6 fw-bold text-dark">' . $prix . ' FCFA</p>
          
         </a>

         </div>

           <form method="post" action="">
                     <input type="hidden" name="product_name" value=' . $nom . '>
                     <input type="hidden" name="product_price" value=' . $prix . '>
                     <input type="hidden" name="product_image" value=' . $image1 . '>
                    <input type="submit" class="btn btn-dark " value="Ajouter au panier" name="add_to_cart">
                    </form>

       </div>';
        }
      }


      ?>

    </div>

    <div class="swiper-pagination">
      <img src="./huawei/watchgt2/gt21.webp" alt="">
    </div>

  </div>

</section>
<!--EXCLUSIVITES-->
<section id="star" class="mt-5">

  <div class="container-fluid">

    <h2 class="text-center">Exclusivitées</h2>
    <div class="row">


      <?php
      $sql = "Select * from `produits` where nom  IN ('Galaxy Watch Active 2' , 'Drone DJI MAVIC 3') ";

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

          echo ' <div class="col-lg-6 col-md-12">
         <a href="detail.php?details_id=' . $id . '" custom_exclu_lien>
           <img src=' . $image4 . ' alt="" class="img-fluid custom_vedette_img">
           <div class="custom_exclu_text text-center">
             <h4 class="text-success">' . $nom . ' </h4>
             <p class="text-success">' . $prix . ' FCFA</p>
           </div>
         </a>

       </div>';
        }
      }

      ?>



      <!-- <div class="col-lg-6 col-md-12">
         <a href="" custom_exclu_lien>
           <img src="./Menu/vedette/star2.webp" alt="" class="img-fluid custom_vedette_img">
           <div class="custom_exclu_text text-center">
             <h4 class="text-success">galaxy watche </h4>
             <p class="text-success">70 000 FCFA</p>
           </div>
         </a>

       </div>

       <div class="col-lg-6 col-md-12">
         <a href="">
           <img src="./Menu/vedette/star1.png" alt="" class="img-fluid custom_vedette_img">
           <div class="custom_exclu_text text-center">
             <h4 class="text-success ">galaxy watche </h4>
             <p class="text-success">70 000 FCFA</p>
           </div>
         </a>

       </div> -->

    </div>

  </div>


  <div>

  </div>

</section>


<!--PROMOTION-->
<section id="promotion" class="mt-5">
  <h2 class="text-center">Promotion</h2>
  <div class="container">

    <div class="row">

      <?php
      $sql = "Select * from `produits` where id = 14 ";

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

          echo '
       <div class="col-xs-12 col-md-6">
         <img src=' . $image1 . ' class="img-fluid" alt="">
       </div>

       <div class="col-xs-12 col-md-6 my-auto mt-5">
         <p class="fs-5">Reduction <span class="custom_promo_percentage ">-20%</span></p>
         <h2>' . $nom . '</h2>
         <p class="fs-5">' . $description . '</p>
         <p class="fs-5 text-decoration-line-through">220 000 FCFA</p>

         <p class="fs-4">' . $prix . ' FCFA</p>

         <a href="detail.php?details_id=' . $id . '" class="custom_promo_link text-decoration-none fs-5">Ajouter au panier</a>
       </div>';
        }
      }

      ?>



      <!-- 
       <div class="col-xs-12 col-md-6">
         <img src="./Menu/promo/techno2.png" class="img-fluid" alt="">
       </div>

       <div class="col-xs-12 col-md-6 my-auto mt-5">
         <p class="fs-5">Reduction <span class="custom_promo_percentage ">-20%</span></p>
         <h2>Techno Camon 18 premier</h2>
         <p class="fs-5">Tecno Camon 18 Premier est sorti en 2021 . Il mesure 163.8 x 75.9 x 8.2 mm et pèse 200.6 g. Il dispose d’un écran AMOLED
           de 6.7″ pouces. La définition d’écran est de 1080 x 2400 et la résolution est de 393 ppi. Un appareil photo Unique de 32
           MP est responsable des selfies et les appels vidéo..</p>
         <p class="fs-5 text-decoration-line-through">200 000 FCFA</p>

         <p class="fs-4">167 000 FCFA</p>

         <a href="#" class="custom_promo_link text-decoration-none fs-5">Ajouter au panier</a>
       </div> -->
    </div>


    <div class="row mt-5">

      <?php
      $sql = "Select * from `produits` where id = 3 ";

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

          echo '
       <div class="col-xs-12 col-md-6">
         <img src=' . $image1 . ' class="img-fluid" alt="">
       </div>

       <div class="col-xs-12 col-md-6 my-auto mt-5">
         <p class="fs-5">Reduction <span class="custom_promo_percentage ">-20%</span></p>
         <h2>' . $nom . '</h2>
         <p class="fs-5">' . $description . '</p>
         <p class="fs-5 text-decoration-line-through">350 000 FCFA</p>

         <p class="fs-4">' . $prix . ' FCFA</p>

         <a href="detail.php?details_id=' . $id . '" class="custom_promo_link text-decoration-none fs-5">Ajouter au panier</a>
       </div>';
        }
      }

      ?>


      <!-- <div class="col-xs-12 col-md-6">
         <img src="./Menu/promo/s21.webp" class="img-fluid" alt="">
       </div>

       <div class="col-xs-12 col-md-6 my-auto mt-5">
         <p class="fs-5">Reduction <span class="custom_promo_percentage ">-20%</span></p>
         <h2>Samsung S21 ultra</h2>
         <p class="fs-5">Découvrez le Galaxy S21 Ultra 5G. Conçu avec un appareil photo parfaitement intégré
           pour révolutionner la photographie, il vous permet de réaliser des vidéos en 8K dignes d’un cinéma
           et de prendre des photos à couper le souffle, le tout en une seule prise. Avec le processeur
           le plus rapide et le verre le plus résistant sur un Galaxy, la 5G et une journée
           complète d’autonomie, Ultra est à la hauteur de son nom.</p>
         <p class="fs-5 text-decoration-line-through">480 000 FCFA</p>

         <p class="fs-4">400 000 FCFA</p>

         <a href="#" class="custom_promo_link text-decoration-none fs-5">Ajouter au panier</a>
       </div> -->
    </div>

  </div>

  <div class="container-fluid text-center">

    <div class="mt-5" class="text-center">
      <h3 class="text-center my-3">Selection Huawei</h3>

      <div class="row ">

        <?php
        $sql = "Select * from `produits` where nom  IN ('HUAWEI Watch 3 GT' ,'Mate30 Pro') ";

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

            echo '<div class="col-xs-12 col-md-6 mt-5 ">
           <a href="detail.php?details_id=' . $id . '" class="custom_promo_huawei_watch_link">
             <img src=' . $image4 . ' class="img-fluid custom_promo_huawei_watch_img" alt="">
           </a>
         </div>';
          }
        }

        ?>

        <!-- <div class="col-xs-12 col-md-6 mt-5 ">
           <a href="" class="custom_promo_huawei_watch_link">
             <img src="./Menu/promo/huawei.webp" class="img-fluid custom_promo_huawei_watch_img" alt="">
           </a>
         </div>

         <div class="col-xs-12 col-md-6 mt-5 ">
           <a href="" class="custom_promo_huawei_watch_link">
             <img src="./Menu/promo/mate40.webp" class="img-fluid custom_promo_huawei_watch_img" alt="">
           </a>
         </div> -->

      </div>


    </div>


  </div>

</section>


<!--Recommandation aleatoire-->

<section id="BESTBUY" class="mt-5">
  <h2 class="text-start">Vous aimerez peut-etre</h2>

  <div class="swiper mySwiper">
    <div class="swiper-wrapper">

      <?php

      $sql = "Select * from `produits` where id >= 11 and id <=22   ";

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

          echo ' <div class="swiper-slide custom_slideitem py-2">
          <div>
         <a href="detail.php?details_id=' . $id . '" custom_slidelink>
           <img src=' . $image1 . ' alt="" />

           <p class="fs-6 fw-bold text-dark">' . $nom . '</p>
           <p class="fs-6 fw-bold text-dark">' . $prix . ' FCFA</p>
          
         </a>

         </div>

           <form method="post" action="">
                     <input type="hidden" name="product_name" value=' . $nom . '>
                     <input type="hidden" name="product_price" value=' . $prix . '>
                     <input type="hidden" name="product_image" value=' . $image1 . '>
                    <input type="submit" class="btn btn-dark " value="Ajouter au panier" name="add_to_cart">
                    </form>

       </div>';
        }
      }


      ?>
    </div>

    <div class="swiper-pagination">
      <img src="./huawei/watchgt2/gt21.webp" alt="">
    </div>

  </div>
</section>


<!--LES SERVICES-->
<div class="container mt-5">
  <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 mt-5">

    <div class="col text-center">
      <i class="fa-solid fa-truck fa-3x custom_service_icone"></i>
      <p class="fs-6 fw-bold">Livraison Partout </p>
    </div>

    <div class="col text-center">
      <i class="fa-solid fa-money-bill fa-3x custom_service_icone"></i>
      <p class="fs-6 fw-bold">Paiement en ligne <br> ou à la livraison</p>

    </div>

    <div class="col text-center">
      <i class="fa-solid fa-headset fa-3x custom_service_icone"></i>
      <p class="fs-6 fw-bold">Support client 7j/7</p>

    </div>

    <div class="col text-center">
      <i class="fa-solid fa-screwdriver-wrench fa-3x custom_service_icone"></i>
      <p class="fs-6 fw-bold">Service après vente</p>

    </div>

  </div>
</div>




<!--FOOTER PHP-->
<?php
include "./footer.php";

?>

<h4 class="text-center fw-bold">Crée avec passion par <a href="https://abdoullahbalde.com/" target="_blank">Abdoullah Balde</a></h4>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>


<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

<!-- Initialize Swiper -->
<script>
  var swiper = new Swiper(".mySwiper", {

    pagination: {
      el: ".swiper-pagination",
      clickable: true,

    },

    speed: 2000,

    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",

    },

    loop: true,
    breakpoints: {
      0: {
        slidesPerView: 1.2,
        slidesPerGroup: 1,
        spaceBetween: 10,
      },

      510: {
        slidesPerView: 2.2,
        slidesPerGroup: 1,
        spaceBetween: 10,
      },
      700: {
        slidesPerView: 3.3,
        slidesPerGroup: 1,
        spaceBetween: 10,
      },

      900: {
        slidesPerView: 4.3,
        slidesPerGroup: 1,
        spaceBetween: 10,
      },

      1100: {
        slidesPerView: 5.3,
        slidesPerGroup: 1,
        spaceBetween: 10,
      },
    }
  });
</script>


<script src="main.js"></script>


<body></body>

</html>