<?php
include "./connect.php";
?>


<?php
$id = $_GET['details_id'];
// echo $id;
$sql = "select * from `produits` where id = $id";
$result = mysqli_query($connection, $sql);
$row = mysqli_fetch_assoc($result);

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
$image5 = $row['image5'];
$image6 = $row['image6'];
$cathegorie = $row['cathegorie'];
$ecran = $row['ecran'];
$stockage = $row['stockage'];
$performaance = $row['performance'];
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="robot" content="none">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous" />
    <title> <?php echo $marques . ' '  .   $nom ?> en vente à Dakar </title>

    <meta name="description" content="<?php echo $description ?>">

    <link rel="stylesheet" href="style.css">

    <!--Font awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>




    <nav class="navbar navbar-expand-lg my-3">
        <div class="container">
            <a class="navbar-brand fw-bold fs-3" href="#">Digishop</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse pt-3" id="navbarNav">
                <div class="input-group custom_inputsearch">
                    <input type="text" class="custom_bar" placeholder="Rechercher" aria-label="Recipient's username" aria-describedby="basic-addon2" />
                    <a href=""><i class="fa-solid fa-magnifying-glass fa-2x my-auto"></i></a>
                </div>

                <a href="">
                    <i class="fa-regular fa-user fa-2x mx-3 custom_menu_icon"></i></a>
                <a href="">
                    <i class="fa-solid fa-cart-shopping fa-2x mx-3 custom_menu_icon"></i></a>
            </div>
        </div>
    </nav>


    <!--Detail-->
    <div class="container">
        <div class="row ">
            <div class="col-xs-12 col-md-6">
                <div class="main-img">
                    <img onerror="this.style.display='none'" src=<?php echo $image1 ?> id="current" class="img-fluid custom_detail_img " alt=" Acheter un <?php echo $marques . ' '  .   $nom ?>  à Dakar ">
                    <img onerror="this.style.display='none'" id="current2" class="img-fluid custom_detail_img" src=" imagesu/<?php echo  $image1 ?>  " />
                </div>

                <div class="imgs mt-1 ">
                    <img onerror="this.style.display='none'" src=<?php echo $image1 ?> alt="<?php echo $marques . ' '  .   $nom ?> en vente au Sénégal ">
                    <img onerror="this.style.display='none'" src=" imagesu/<?php echo  $image1 ?>  " />

                    <img onerror="this.style.display='none'" src=<?php echo $image2 ?> alt="<?php echo $marques . ' '  .   $nom ?> en vente au Sénégal">
                    <img onerror="this.style.display='none'" src=" imagesu/<?php echo  $image2 ?>  " />

                    <img onerror="this.style.display='none'" src=<?php echo $image3 ?> alt="<?php echo $marques . ' '  .   $nom ?> en vente au Sénégal">
                    <img onerror="this.style.display='none'" src=" imagesu/<?php echo  $image3 ?>  " />
                    <!-- <img src="./techno/camon 18 pro/techno19-1.jpg" alt=""> -->
                </div>

            </div>

            <div class="col-xs-12 col-md-6  mt-5">
                <p class="fs-4 text-uppercase fw-bold"><?php echo $marques ?> </p>
                <h2><?php echo $nom ?></h2>
                <p class="fs-5"><?php echo $description ?></p>
                <!-- <p class="fs-5 text-decoration-line-through"><?php echo $prix ?> FCFA</p> -->

                <p class="fs-4 detail-price "><?php echo $prix ?> FCFA</p>

                <p class="fs-5 fw-bold">Disponibilitées: <?php echo $disponibilite ?></p>

                <a href="commande.php" class="custom_promo_link text-decoration-none fs-5">Payer à la livraison</a>
                <p class="fs-4 mt-5">OU</p> <br>
                <a href="#" class="custom_promo_link text-decoration-none fs-5 my-3">Payer en ligne</a> <br> <br>




                <div id="smart-button-container">
                    <div style="text-align: center;">
                        <div id="paypal-button-container"></div>
                    </div>
                </div>

                <script src="https://www.paypal.com/sdk/js?client-id=AbK76DeY4VxU5Fiu78QSnLe2O23KfwQBd-yf7VP79QQKarDZ8leu3ezTuUxP6wxal7FRzDfrhIYyunjg"></script>
                <script>
                    const detailprice = document.querySelector(".detail-price");
                    console.log(detailprice);
                    const detailpricenumb = detailprice.innerText;
                    console.log(detailpricenumb);
                    const detailpricefinal = parseFloat(detailpricenumb.replace("FCFA", ""));
                    console.log(detailpricefinal);

                    const fcfa = detailpricefinal / 655.957;
                    console.log(fcfa);

                    const arrondie = Math.round(fcfa * 100) / 100;
                    console.log(arrondie);



                    function initPayPalButton() {
                        paypal.Buttons({
                            style: {
                                shape: 'rect',
                                color: 'gold',
                                layout: 'vertical',
                                label: 'paypal',

                            },

                            createOrder: function(data, actions) {
                                return actions.order.create({
                                    purchase_units: [{
                                        "amount": {
                                            "currency_code": "USD",
                                            "value": arrondie,
                                        }
                                    }]
                                });
                            },

                            onApprove: function(data, actions) {
                                return actions.order.capture().then(function(orderData) {

                                    // Full available details
                                    console.log('Capture result', orderData, JSON.stringify(orderData, null, 2));

                                    // Show a success message within this page, e.g.
                                    const element = document.getElementById('paypal-button-container');
                                    element.innerHTML = '';
                                    element.innerHTML = '<h3>Thank you for your payment!</h3>';

                                    // Or go to another URL:  actions.redirect('thank_you.html');

                                });
                            },

                            onError: function(err) {
                                console.log(err);
                            }
                        }).render('#paypal-button-container');
                    }
                    initPayPalButton();
                </script>






            </div>
        </div>

    </div>



    <div class="container mt-5 fw-bold">

        <div class="description">
            <h3 class="text-start">Description</h3>

            <ul class="text-start fs-5">
                <li>Ecran: <?php echo $ecran ?></li>
                <li>Stockage: <?php echo $stockage ?></li>
                <li>Performance: <?php echo $performaance ?></li>
            </ul>
        </div>

    </div>


    <div class="container text-center my-2  ">

        <img width="80%" onerror="this.style.display='none'" src=<?php echo $image4 ?> class="img-fluid mx-auto" alt="">
        <img width="80%" onerror="this.style.display='none'" src=" imagesu/<?php echo  $image4 ?> " class="img-fluid mx-auto" />
    </div>



    <div class="container text-center  my-2">

        <img width="80%" onerror="this.style.display='none'" src=<?php echo $image5 ?> class="img-fluid mx-auto" alt="">
        <img width="80%" onerror="this.style.display='none'" src=" imagesu/<?php echo  $image5 ?>" class="img-fluid mx-auto" />
    </div>


    <div class="container text-center  my-2">

        <img width="80%" onerror="this.style.display='none'" src=<?php echo $image6 ?> class="img-fluid mx-auto" alt="">
        <img width="80%" onerror="this.style.display='none'" src=" imagesu/<?php echo  $image6 ?>" class="img-fluid mx-auto" />
    </div>






    <!--LE FOOTER-->
    <section id="FOOTER">

        <div class="footer-container  ">
            <div class="footer-item">
                <h3>Contactez-Vous</h3>
                <ul>
                    <li class="d-flex flex-row">
                        <i class="fa-solid fa-location-dot"></i>
                        <p>Plateau, rue 14</p>
                    </li>
                    <li class="d-flex flex-row">
                        <i class="fa-solid fa-phone"></i>
                        <p>+221 678 99 00</p>
                    </li>

                    <li class="d-flex flex-row">
                        <i class="fa-regular fa-envelope"></i>
                        <p>infos@sportify.com</p>
                    </li>
                </ul>
            </div>
            <div class="footer-item">
                <h3>Livraison</h3>

                <ul>
                    <li>Lundi-jeudi: 8h-20h</li>
                    <li>Vendredi: 9h-19h</li>
                    <li>Samedi: 9h-17h</li>
                </ul>
            </div>
            <div class="footer-item">
                <h2>Notification</h3>
                    <div class="notification">
                        <input type="email" placeholder="email">
                        <button>inscription</button>

                    </div>

                    <div class="paiement">
                        <i class="fa-brands fa-cc-visa fa-2x visa"></i>
                        <i class="fa-brands fa-cc-mastercard fa-2x master"></i>
                        <i class="fa-brands fa-google-pay fa-2x google"></i>
                        <i class="fa-brands fa-cc-apple-pay fa-2x"></i>
                        <i class="fa-brands fa-cc-paypal fa-2x paypal"></i>
                    </div>
            </div>
        </div>

    </section>

    <h4 class="text-center fw-bold">Crée avec passion par <a href="https://abdoullahbalde.com/" target="_blank">Abdoullah Balde</a></h4>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script src="detail.js"></script>


</body>

</html>