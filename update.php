<?php
include './connect.php';
// La logique de la mise a jour
if (isset($_POST['update'])) {
    $update_id = $_POST['update_id'];
    $update_marques = $_POST['update_marques'];
    $update_nom = $_POST['update_nom'];
    $update_prix = $_POST['update_prix'];
    $update_disponibilite = $_POST['update_disponibilite'];
    $update_description = $_POST['update_description'];

    $update_image1 = $_FILES['update_image1']['name'];
    $update_image1_tmp_name = $_FILES['update_image1']['tmp_name'];
    $update_image1_folder = 'imagesu/' . $update_image1;

    $update_image2 = $_FILES['update_image2']['name'];
    $update_image2_tmp_name = $_FILES['update_image2']['tmp_name'];
    $update_image2_folder = 'imagesu/' . $update_image2;

    $update_image3 = $_FILES['update_image3']['name'];
    $update_image3_tmp_name = $_FILES['update_image3']['tmp_name'];
    $update_image3_folder = 'imagesu/' . $update_image3;

    $update_image4 = $_FILES['update_image4']['name'];
    $update_image4_tmp_name = $_FILES['update_image4']['tmp_name'];
    $update_image4_folder = 'imagesu/' . $update_image4;

    $update_image5 = $_FILES['update_image5']['name'];
    $update_image5_tmp_name = $_FILES['update_image5']['tmp_name'];
    $update_image5_folder = 'imagesu/' . $update_image5;

    $update_image6 = $_FILES['update_image6']['name'];
    $update_image6_tmp_name = $_FILES['update_image6']['tmp_name'];
    $update_image6_folder = 'imagesu/' . $update_image6;


    $update_cathegorie = $_POST['update_cathegorie'];
    $update_ecran = $_POST['update_ecran'];
    $update_stockage = $_POST['update_stockage'];
    $update_performance = $_POST['update_performance'];

    //Mise a jour

    $update_query = mysqli_query($connection, "Update `produits` set 
    marques = '$update_marques', nom = '$update_nom',
    prix='$update_prix', disponibilite='$update_disponibilite',
    description='$update_description', image1='$update_image1',
     image2='$update_image2',  image3='$update_image3',
      image4='$update_image4',  image5='$update_image5',
       image6='$update_image6', cathegorie = '$update_cathegorie',
       ecran='$update_ecran', stockage='$update_stockage',
       performance='$update_performance' where id =$update_id
      ");

    if ($update_query) {
        move_uploaded_file($update_image1_tmp_name, $update_image1_folder);
        move_uploaded_file($update_image2_tmp_name, $update_image2_folder);
        move_uploaded_file($update_image3_tmp_name, $update_image3_folder);
        move_uploaded_file($update_image4_tmp_name, $update_image4_folder);
        move_uploaded_file($update_image5_tmp_name, $update_image5_folder);
        move_uploaded_file($update_image6_tmp_name, $update_image6_folder);
        header('location:produits.php');
    } else {
        $display_message = "Il y'a une erreur dans la modification du produits";
    }
}

?>

<?php include './header.php'; ?>

<?php
if (isset($display_message)) {
    echo " <div class='display_message'>
        <span> $display_message </span>
        <i class='fa-solid fa-xmark' onclick='this.parentElement.style.display=`none`'></i>
    </div>";
}
?>

<body>

    <h2 class="text-center">Modifier le produit</h2>
    <!--Modifier  UN PRODUIT-->
    <div class="container my-5">

        <?php
        if (isset($_GET['edit'])) {
            $edit_id = $_GET['edit'];
            $update_query = mysqli_query($connection, "Select * from `produits` where id = $edit_id");
            if (mysqli_num_rows($update_query) > 0) {

                while ($fetch_data = mysqli_fetch_assoc($update_query)) {

        ?>


                    <form method="post" enctype="multipart/form-data" style="max-width: 700px;
        margin: 0 auto;">

                        <div class="mb-3">
                            <input type="hidden" value="<?php echo $fetch_data['id'] ?>" name="update_id" class="form-control">
                        </div>
                        <div class="mb-3">
                            <input type="text" value="<?php echo $fetch_data['marques']  ?>" name="update_marques" placeholder="marques" class="form-control">
                        </div>

                        <div class="mb-3">
                            <input type="text" value="<?php echo $fetch_data['nom']  ?>" name="update_nom" placeholder="nom" class="form-control">
                        </div>
                        <div class="mb-3">
                            <input type="number" value="<?php echo $fetch_data['prix']  ?>" name="update_prix" placeholder="prix" class="form-control">
                        </div>
                        <div class="mb-3">
                            <input type="text" value="<?php echo $fetch_data['disponibilite']  ?>" name="update_disponibilite" placeholder="disponibilite" class="form-control">
                        </div>

                        <div class="mb-3">
                            <textarea name="update_description" cols="30" placeholder="Description" rows="10" class="form-control">

                            <?php echo $fetch_data['description'] ?>
                            </textarea>
                        </div>

                        <div class="mb-3">
                            <label for="image1">Image1</label>
                            <input type="file" name="update_image1" id="image1" class="form-control" placeholder="image1" required>
                        </div>

                        <div class="mb-3">
                            <label for="image2">Image2</label>
                            <input type="file" name="update_image2" id="image2" class="form-control" placeholder="image2" required>
                        </div>

                        <div class="mb-3">
                            <label for="image3">Image3</label>
                            <input type="file" name="update_image3" id="image3" class="form-control" placeholder="image3" required>
                        </div>

                        <div class="mb-3">
                            <label for="image4">Image4</label>
                            <input type="file" name="update_image4" id="image4" class="form-control" placeholder="image4" required>
                        </div>

                        <div class="mb-3">
                            <label for="image5">Image5</label>
                            <input type="file" name="update_image5" id="image5" class="form-control" placeholder="image5">
                        </div>

                        <div class="mb-3">
                            <label for="image6">Image6</label>
                            <input type="file" name="update_image6" id="image6" class="form-control" placeholder="image6">
                        </div>

                        <div class="mb-3">
                            <input type="text" value="<?php echo $fetch_data['cathegorie']  ?>" name="update_cathegorie" class="form-control" placeholder="cathegorie">
                        </div>
                        <div class="mb-3">
                            <input type="text" value="<?php echo $fetch_data['ecran']  ?>" name="update_ecran" class="form-control" placeholder="ecran">
                        </div>
                        <div class="mb-3">
                            <input type="text" value="<?php echo $fetch_data['stockage']  ?>" name="update_stockage" class="form-control" placeholder="stockage">
                        </div>
                        <div class="mb-3">
                            <input type="text" value="<?php echo $fetch_data['performance']  ?>" name="update_performance" class="form-control" placeholder="performance">
                        </div>

                        <input type="submit" name="update" value="Modifier" class=" px-1 py-1 text-light bg-dark">
                    </form>

        <?php
                }
            }
        }

        ?>
    </div>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>