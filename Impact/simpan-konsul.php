<?php

$nama = $email = $pesan = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $nama = test_input($_POST["nama"]);
  $email = test_input($_POST["email"]);
  $pesan = test_input($_POST["pesan"]);

  // connect to MySQL database
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "db_perhutanii";

  $conn = mysqli_connect($servername, $username, $password, $dbname);

  // check connection
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }

  // insert data into database
  $sql = "INSERT INTO konsultasi (nama, email, pesan) VALUES ('$nama', '$email', '$pesan')";

  if (mysqli_query($conn, $sql)) {
    echo "<script type='text/javascript'>alert('submitted successfully!')</script>";
    // header("location:konsultasi.html");
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }

  mysqli_close($conn);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

// mengalihkan ke halaman index.php


?>