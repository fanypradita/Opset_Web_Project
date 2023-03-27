<?php
// connect to the database
$conn = mysqli_connect("localhost", "root", "", "db_perhutani");

// get the id of the asset to delete
$id = $_GET["id"];

// delete the asset record from the database table
$query = "DELETE FROM wishlist WHERE id_aset = $id";
mysqli_query($conn, $query);

// close the database connection
mysqli_close($conn);

// set a success message to display in the alert
$message = "Data aset berhasil dihapus dari wishlist!";

// redirect back to the main page with the success message
header("Location: users-profile.php?success=" . urlencode($message));
exit();
?>
