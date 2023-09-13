<?php include 'connect.php';
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

    <div class="container my-5">

        <!--LISTE DE PRODUITS-->
        <table class="table table-bordered ">
            <thead>
                <tr class="fs-5 fw-bold">
                    <th scope="col">ID</th>
                    <th scope="col">Marques</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Prix</th>
                    <th scope="col">disponibilite</th>
                    <th scope="col">Description</th>
                    <th scope="col">Image</th>
                    <th scope="col">Cathegorie</th>
                    <th scope="col">Ecran</th>
                    <th scope="col">Stockage</th>
                    <th scope="col">Performance</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>

                <?php
                $sql = "Select * from `produits`  ";
                $result = mysqli_query($connection, $sql);
                while ($row = mysqli_fetch_assoc($result)) {
                    $id = $row['id'];
                    $marques = $row['marques'];
                    $nom = $row['nom'];
                    $prix = $row['prix'];
                    $disponibilite = $row['disponibilite'];
                    $description = $row['description'];
                    $image1 = $row['image1'];
                    $cathegorie = $row['cathegorie'];
                    $ecran = $row['ecran'];
                    $stockage = $row['stockage'];
                    $performance = $row['performance'];

                    echo '<tr class="fw-bold">
                    <th scope="row">' . $id . '</th>
                    <td>' . $marques . '</td>
                    <td>' . $nom . '</td>
                    <td>' . $prix . '</td>
                     <td>' . $disponibilite . '</td>
                      <td>' . substr($description, 0, 30)  . '</td>

                       <td> 
                       
                       <img onerror="this.style.display=\'none\'" class="img-fluid" src=' . $image1 . '  />
                         <img onerror="this.style.display=\'none\'" class="img-fluid" src=' .  'imagesu/' . $image1 . ' />

                         </td>
                      
                        <td>' . $cathegorie . '</td>
                         <td>' . $ecran . '</td>
                          <td>' . substr($stockage, 0, 20) . '</td>
                          <td>' . substr($performance, 0, 30)   . '</td>
                    <td>
                        <div class="d-flex">
                        <a href="update.php?edit= ' . $id . ' " class="mx-1">
                         <i class="fa-regular fa-pen-to-square mx-1 btn btn-danger"></i>
                        </a>
                           <a href="delete.php?delete=' . $id . '"  class="mx-1"  onclick="return confirm(\'etes vous sures?\');">
                            <i class="fa-solid fa-trash mx-1 btn btn-success"></i>
                            </a>
                           
                        </div>

                    </td>
                </tr>';
                }
                ?>

            </tbody>
        </table>

    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>