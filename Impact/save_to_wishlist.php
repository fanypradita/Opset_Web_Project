<?php
session_start();

// Connect to the MySQL database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_perhutani";
$conn = new mysqli($servername, $username, $password, $dbname);

// Check if the id_aset parameter is set
if(isset($_POST['id_aset'])) {
  // Retrieve the id_aset values
  $id_aset = $_POST['id_aset'];

  $username = $_SESSION['username'];
  $sql = "SELECT id_customer FROM tbl_customer WHERE username = '$username'";
  $result = $conn->query($sql);
  $row = $result->fetch_assoc();
  $id_customer = $row['id_customer'];

  // Insert the id_aset value into the wishlist table using prepared statement
  $stmt = $conn->prepare("INSERT INTO wishlist (id_customer, id_aset, sub_kategori2, alamat_wishlist, kategori_aset, images) SELECT ?, id_aset, sub_kategori2, alamat, kategori_aset, images FROM opset WHERE id_aset = ?");
  $stmt->bind_param("ii", $id_customer, $id_aset);



  if ($stmt->execute()) {
    echo "Successfully saved to wishlist!";
  } else {
    echo "Error: " . $stmt->error;
  }
  $stmt->close();
}

// Close the database connection
$conn->close();

?>
