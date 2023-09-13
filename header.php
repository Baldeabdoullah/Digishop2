<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="robot" content="none">
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous" />
    <title>Vente de Produits en ligne à Dakar Digishop</title>
    <meta name="description" content="Trouver des produits Apple à Dakar? Téléphone Apple en vente à Dakar. Visitez Digishop boutique en ligne au Sénégal Achat de téléphone portable au sénégal">
    <link rel="stylesheet" href="style.css" />

    <!--Font awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<?php
include './connect.php';
$select_product = mysqli_query($connection, "Select * from `cart`") or die('echec');
$row_count = mysqli_num_rows($select_product);
?>