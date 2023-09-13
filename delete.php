<?php
include './connect.php';
if (isset($_GET['delete'])) {
    $delete_id = $_GET['delete'];
    $sql = "Delete  from `produits` where id = $delete_id";
    $delete_query = mysqli_query($connection, $sql) or die('echec');
    if ($delete_query) {
        echo "Le produits a ete supprime";
        header('location:produits.php');
    } else {
        echo "le produits n'a pas ete supprime";
        header('location:produits.php');
    }
}
