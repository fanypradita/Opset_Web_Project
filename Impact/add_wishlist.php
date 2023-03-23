<?php
// Establish a connection to the db_perhutani database
$host = 'localhost';
$user = 'username';
$password = 'password';
$database = 'db_perhutani';

$conn = mysqli_connect($host, $user, $password, $database);
if (!$conn) {
  die('Could not connect to database: ' . mysqli_connect_error());
}

// Retrieve the item data from the database
$id_aset = $_POST['id_aset']; // Assume this is the ID of the item to add to the wishlist
$sql = "SELECT nama_aset, images, harga FROM tbl_opset WHERE id_aset = $id_aset";
$result = mysqli_query($conn, $sql);
if (!$result) {
  die('Error retrieving item data from database: ' . mysqli_error($conn));
}

// Insert the item data into the wishlist table
$row = mysqli_fetch_assoc($result);
$name = $row['name'];
$description = $row['description'];
$image = $row['image'];
$price = $row['price'];
$sql = "INSERT INTO wishlist (name, description, image, price) VALUES ('$name', '$description', '$image', $price)";
if (!mysqli_query($conn, $sql)) {
  die('Error inserting item data into wishlist: ' . mysqli_error($conn));
}

// Close the database connection
mysqli_close($conn);

// Send a success response to the client
echo 'Item has been added to the wishlist!';
?>
