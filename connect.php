<?php
$connection = new mysqli("localhost", "root", "", "digishop");

if (!$connection) {
    die(mysqli_error($connection));
}
