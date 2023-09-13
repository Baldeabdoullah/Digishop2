<?php include 'connect.php';
if (isset($_POST['submit'])) {
    $marques = $_POST['marques'];
    $nom = $_POST['nom'];
    $prix = $_POST['prix'];
    $disponibilite = $_POST['disponibilite'];
    $description = $_POST['description'];

    $image1 = $_FILES['image1']['name'];
    $image1_tmp_name = $_FILES['image1']['tmp_name'];
    $image1_folder = 'imagesu/' . $image1;

    $image2 = $_FILES['image2']['name'];
    $image2_tmp_name = $_FILES['image2']['tmp_name'];
    $image2_folder = 'imagesu/' . $image2;

    $image3 = $_FILES['image3']['name'];
    $image3_tmp_name = $_FILES['image3']['tmp_name'];
    $image3_folder = 'imagesu/' . $image3;

    $image4 = $_FILES['image4']['name'];
    $image4_tmp_name = $_FILES['image4']['tmp_name'];
    $image4_folder = 'imagesu/' . $image4;

    $image5 = $_FILES['image5']['name'];
    $image5_tmp_name = $_FILES['image5']['tmp_name'];
    $image5_folder = 'imagesu/' . $image5;

    $image6 = $_FILES['image6']['name'];
    $image6_tmp_name = $_FILES['image6']['tmp_name'];
    $image6_folder = 'imagesu/' . $image6;

    $cathegorie = $_POST['cathegorie'];
    $ecran = $_POST['ecran'];
    $stockage = $_POST['stockage'];
    $performance = $_POST['performance'];

    $insertion = mysqli_query($connection, "insert into `produits`
     (marques, nom, prix, disponibilite, description, image1, image2, image3, image4, image5, image6, cathegorie, ecran, stockage, performance)
     values(' $marques', '$nom', '$prix','$disponibilite' , '$description', '$image1', '$image2', '$image3', '$image4', '$image5', '$image6', ' $cathegorie', '$ecran', '$stockage', '$performance')") or die("echeque d'ajout du produits");

    if ($insertion) {
        move_uploaded_file($image1_tmp_name, $image1_folder);
        move_uploaded_file($image2_tmp_name, $image2_folder);
        move_uploaded_file($image3_tmp_name, $image3_folder);
        move_uploaded_file($image4_tmp_name, $image4_folder);
        move_uploaded_file($image5_tmp_name, $image5_folder);
        move_uploaded_file($image6_tmp_name, $image6_folder);

        $afficher = "produits ajouté avec succès";
    } else {
        $afficher = "Erreure d'ajout du produit";
    }
}

?>

<?php
include 'header.php'; ?>

<body>
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
                        <a class="nav-link active" aria-current="page" href="produits.php">Voir les produits</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <?php
    if (isset($afficher)) {
        echo "
        <div class='text-center'> 
        <span>$afficher</span>
         <i class='fa-solid fa-xmark' onclick='this.parentElement.style.display=`none`'></i>
         </div>
        ";
    }

    ?>

    <!--AJOUTER UN PRODUIT-->
    <div class="container my-5">
        <form method="post" enctype="multipart/form-data" style="max-width: 700px;
        margin: 0 auto;">
            <div class="mb-3">
                <input type="text" name="marques" placeholder="marques" class="form-control">
            </div>

            <div class="mb-3">
                <input type="text" name="nom" placeholder="nom" class="form-control">
            </div>
            <div class="mb-3">
                <input type="number" name="prix" placeholder="prix" class="form-control">
            </div>
            <div class="mb-3">
                <input type="text" name="disponibilite" placeholder="disponibilite" class="form-control">
            </div>

            <div class="mb-3">
                <textarea name="description" cols="30" placeholder="Description" rows="10" class="form-control"></textarea>
            </div>

            <div class="mb-3">
                <label for="image1">Image1</label>
                <input type="file" name="image1" id="image1" class="form-control" placeholder="image1" required>
            </div>

            <div class="mb-3">
                <label for="image2">Image2</label>
                <input type="file" name="image2" id="image2" class="form-control" placeholder="image2" required>
            </div>

            <div class="mb-3">
                <label for="image3">Image3</label>
                <input type="file" name="image3" id="image3" class="form-control" placeholder="image3" required>
            </div>

            <div class="mb-3">
                <label for="image4">Image4</label>
                <input type="file" name="image4" id="image4" class="form-control" placeholder="image4" required>
            </div>

            <div class="mb-3">
                <label for="image5">Image5</label>
                <input type="file" name="image5" id="image5" class="form-control" placeholder="image5">
            </div>

            <div class="mb-3">
                <label for="image6">Image6</label>
                <input type="file" name="image6" id="image6" class="form-control" placeholder="image6">
            </div>

            <div class="mb-3">
                <input type="text" name="cathegorie" class="form-control" placeholder="cathegorie">
            </div>
            <div class="mb-3">
                <input type="text" name="ecran" class="form-control" placeholder="ecran">
            </div>
            <div class="mb-3">
                <input type="text" name="stockage" class="form-control" placeholder="stockage">
            </div>
            <div class="mb-3">
                <input type="text" name="performance" class="form-control" placeholder="performance">
            </div>

            <input type="submit" name="submit" value="Ajouter" class=" px-1 py-1 text-light bg-dark">
        </form>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>