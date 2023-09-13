<!-- INCLURE LE HEADER -->
<?php include './header.php'  ?>
<?php include './connect.php';

// suppression d'un produit du panier
if (isset($_GET['remove'])) {
    $remove_id = $_GET['remove'];
    mysqli_query($connection, "Delete from `cart` where id=$remove_id");

    echo '<h4 class="text-center"> Produit supprimé </h4>';
};

// Supprimer tout les produits du panier
if (isset($_GET['delete_all'])) {
    mysqli_query($connection, "Delete from `cart`");
    header('location:cart.php');
}

// Mise a jour de la quantité de produits dans le panier
if (isset($_POST['update_product_quantity'])) {


    $update_value = $_POST['update_quantity'];
    // echo $update_value;
    $update_id = $_POST['update_quantity_id'];

    // echo $update_id;

    // integrer la quantité
    $update_quantity_query = mysqli_query($connection, "update `cart` set quantity=$update_value
    where id=$update_id");
    if ($update_quantity_query) {
        header("location:cart.php");
    }
}

?>


<body>
    <?php include './searchbar.php'; ?>

    <div class="container my-5">
        <h2 class="text-center">Mon panier</h2>

        <table class="table">

            <thead>
                <tr>
                    <th scope="col">N id</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Image</th>
                    <th scope="col">Prix</th>
                    <th scope="col">Quantité</th>
                    <th scope="col">Prix Total</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>


                <?php
                $sql = "Select * from `cart`  ";
                $grand_total = 0;
                $result = mysqli_query($connection, $sql);
                while ($row = mysqli_fetch_assoc($result)) {
                    $id = $row['id'];
                    $name = $row['name'];
                    $price = $row['price'];
                    $image = $row['image'];
                    $quantity = $row['quantity'];


                    echo '  <tr>
                    <th>' . $id . '</th>
                    <td>' . $name . '</td>
                    <td>
                        <img onerror="this.style.display=\'none\'" width="70px" class="img-fluid" src=' . $image . ' alt="">
                        <img onerror="this.style.display=\'none\'"  width="70px" class="img-fluid" src=' . 'imagesu/' . $image . ' alt="">
                    </td>
                    <td>' . $price . '</td>
                    <td>
                    <form action="" method="post">
                    <input type="hidden" value=' . $id . ' name="update_quantity_id"> 
                        <div>
                            <input type="number" min="1" style="width: 60px;" value=' . $quantity . ' name="update_quantity">
                            <input type="submit" class="bg-dark text-light rounded" value="Actualiser" name="update_product_quantity">
                        </div>

                        </form>
                    </td>
                    <td>' . number_format($price * $quantity) . ' FCFA' . '</td>
                    <td>
                        <a onclick="return confirm("etes vous sures")" href="cart.php?remove=' . $id . '" >
                            <i class="fa-solid fa-trash "></i>
                            Supprimer
                        </a>
                    </td>
                </tr>';

                    $grand_total = $grand_total + ($price * $quantity);
                }
                if (mysqli_num_rows($result) < 1) {
                    echo "<h2 class='text-center fw-bold'>Le panier est vide</h2>";
                }
                ?>




            </tbody>
        </table>

        <?php
        if ($grand_total > 0) {
            echo ' <div class="container p-4 mb-2 bg-dark  text-center">
            <div class="row  ">
                <div class="col bg-light text-dark mx-5 fw-bold py-2"> <a href="index.php"> Continuer</a></div>
                <div class="col bg-light text-dark mx-5 fw-bold py-2"> Grand total: <span>  ' . number_format($grand_total) . '</span> FCFA</div>
                <div class="col bg-light text-dark mx-5 fw-bold py-2"> <a href="">Achats</a></div>

            </div>

        </div>
        
        <div class=" text-center fw-bold my-2 ">
        <a class="bg-dark text-light p-2 " onclick="return confirm("etes vous sures?")"  href="cart.php?delete_all">
            <i class="fa-solid fa-trash "></i>
            Tout Supprimer
        </a>
        </div>';
        }
        ?>




    </div>

</body>

</html>