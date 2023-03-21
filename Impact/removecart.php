<?php
session_start();

// Check if the ID of the item to be removed is received
if(isset($_POST["id_aset"])){
    $id_aset = $_POST["id_aset"];

    // Remove the item from the cart
    unset($_SESSION["cart"][$id_aset]);
}

?>