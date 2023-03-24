<?php
// Connect to the MySQL database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_perhutani";
$conn = new mysqli($servername, $username, $password, $dbname);

// Check if the id_aset parameter is set
if(isset($_POST['id_aset'])) {
  // Retrieve the id_aset value
  $id_aset = $_POST['id_aset'];

  // Insert the id_aset value into the wishlist table
  $sql = "INSERT INTO wishlist (id_aset) VALUES ('$id_aset')";
  if ($conn->query($sql) === TRUE) {
    echo "Successfully saved to wishlist!";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
}

// Close the database connection
$conn->close();
?>
