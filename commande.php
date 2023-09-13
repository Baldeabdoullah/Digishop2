<?php include 'header.php'; ?>

<body>
    <?php
    include "./connect.php";
    ?>

    <div class="container">
        <h2 class="text-center">Passez votre commande en ligne</h2>

        <form>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nom et Prenom</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Telephone</label>
                <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Adresse</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

            </div>


            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email </label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

            </div>

            <div class="mb-3 form-check">
                <label for="exampleCheck1">Votre commande</label>

                <select name="" id="exampleCheck1">


                    <?php
                    $sql = "Select * from `produits`    ";

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

                            echo '<option value=' . $nom . '>' . $nom . '</option> ';
                        }
                    }

                    ?>





                </select>
            </div>

            <button type="submit" class="btn btn-secondary">Envoyer</button>
        </form>

    </div>




    <!--FOOTER PHP-->
    <?php
    include "./footer.php";

    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

    <!-- <script src="main.js"></script> -->
    <script src="filtre.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

    <script src="main.js"></script>






</body>

</html>