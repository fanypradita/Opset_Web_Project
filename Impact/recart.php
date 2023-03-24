<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Sewa Aset</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/logoo.png" rel="icon">
  <link href="assets/img/logoo.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">


  <!-- =======================================================
  * Template Name: Impact - v1.2.0
  * Template URL: https://bootstrapmade.com/impact-bootstrap-business-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  <?php
            session_start();

            ?>
  <style>
    @media (min-width: 1025px) {
.h-custom {
height: 100vh !important;
}
}
  </style>
</head>

<body>

<header id="header" class="header d-flex align-items-center">

    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
      <a href="reindex.html" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1 style="font-size:20px;">PerhutaniPro<span>.</span></h1>
      </a>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="reindex.html" style="font-size:15px;">Beranda</a></li>
          <li><a href="resewa.php" style="font-size:15px;">Sport Center</a></li>
          <li><a href="resewa.php" style="font-size:15px;">Bangunan</a></li>
          <li><a href="resewalahan.php" style="font-size:15px;">Lahan</a></li>
          <!--
          <li><a href="#about">Tentang Kami</a></li>
          <li><a href="#services">Services</a></li>
          <li><a href="#portfolio">Portfolio</a></li>
          <li><a href="#team">Team</a></li>
          <li><a href="blog.html">Properti</a></li>
          -->
<!-- 
          <li class="dropdown"><a href="#"><span>Opset</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="resewa.php">Sport Center</a></li>
              <li><a href="resewa.php">Bangunan</a></li>
              <li><a href="resewalahan.php">Lahan</a></li>
              <li><a href="resewakos.php">Kos</a></li>
            </ul>
          </li> -->
       
          <li class="dropdown"><a href="reinfo.html" style="font-size:15px;"><span>Pusat Informasi</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="reinfo.html" style="font-size:13px;">Frequently Asked Questions</a></li>
              <li><a href="redaftar.html" style="font-size:13px;">Tata cara pendaftaran</a></li>
              <li><a href="rebayar.html" style="font-size:13px;">Metode Pembayaran</a></li>
            </ul>
          </li>
          <!--
          <li><a href="#contact">Contact</a></li>
          -->
          <!-- <li><a href="reindex.html">Tentang Kami</a></li> -->
          <li><a href="rekonsultasi.php" style="font-size:15px;">Konsultasi</a></li>
          <li>
          <div class="d-grid gap-2 d-md-block">
            <button class="btn btn-secondary btn-lg" type="button" ><a href="login1.php">Login</button></a>
          </div>
        </li>
          </ul>
        </ul>
       
      </ul>
    </nav><!-- End Icons Navigation -->

      </nav><!-- .navbar -->

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

    </div>
  </header><!-- End Header -->
  <!-- End Header -->

 
  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
      <div class="page-header d-flex align-items-center" style="background-image: url('');">
        <div class="container position-relative">
          <div class="row d-flex justify-content-center">
            <div class="col-lg-6 text-center">
              <h2>Property Cart</h2>
              <!--<p>Sewa Bangunan dan Tanah Dengan Harga Murah, Proses Mudah, insyallah Berkah.</p>-->
            </div> 
          </div>
        </div>
      </div>
      

    <!-- ======= Blog Section ======= -->
        <script type="text/javascript" charset="utf8" src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-2.0.3.js"></script>
 
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">
        <div class="row gy-4 posts-list">
          <div class="row">
            <?php

            // Check if the cart is not empty
            if(isset($_SESSION["cart"]) && !empty($_SESSION["cart"])){
            
                // Connect to your database and retrieve the details of the items
                // Replace the variables with your database credentials
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "db_perhutani";
            
                // Create a new database connection
                $conn = new mysqli($servername, $username, $password, $dbname);
            
                // Check if the connection is successful
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }
            
                // Loop through the cart items and retrieve their details
                foreach($_SESSION["cart"] as $id_aset => $value){
            
                    // Prepare a SQL query to retrieve the details of the item
                    $sql = "SELECT sub_aset, kategori_aset, harga FROM  subkategori JOIN tbl_opset WHERE subkategori.id_aset = tbl_opset.id_aset";
            
                    // Execute the query and retrieve the result
                    $result = $conn->query($sql);
            
                    // Check if the query is successful and retrieve the details of the item
                    if($result && $result->num_rows > 0){
                        $row = $result->fetch_assoc();
            
                        // Display the details of the item in a table row
                        echo "<tr>";
                        echo "<td>" . $row["sub_aset"] . "</td>";
                        echo "<td>" . $row["kategori_aset"] . "</td>";
                        echo "<td>" . $row["harga"] . "</td>";
                        echo "<td>" . $value . "</td>"; // This displays the quantity (if using quantity)
                        echo "</tr>";
                    }
                }
                
            
                // Close the database connection
                $conn->close();
            }
            
            ?>
            </div>
        </div><!-- End blog pagination -->
      </div>
    </section><!-- End Blog Section -->
            <script>
              $(document).ready(function(){
              // Handle the "Remove" button click event
              $(".remove").click(function(){
                  // Get the ID of the item to be removed
                  var id_aset = $(this).data("id");
                  
                  // Send an AJAX request to remove the item from the cart
                  $.ajax({
                      url: "removecart.php",
                      type: "POST",
                      data: {id_aset: id_aset},
                      success: function(response){
                          // Reload the page to update the cart
                          location.reload();
                      }
                  });
              });
          });

              </script>
          
  </main><!-- End #main -->
  

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="container">
      <div class="row gy-4">
        <div class="col-lg-5 col-md-12 footer-info">
          <a href="index.html" class="logo d-flex align-items-center">
            <span>Perhutani Property</span>
          </a>
          <p>Situs yang menyediakan berbagai pilihan properti dengan fasilitas yang bervariatif, selain itu kami juga memiliki berbagai aset dengan lokasi yang strategis sehingga sangat efektif untuk menunjang berbagai kegiatan bisnis.</p>
          <div class="social-links d-flex mt-4">
            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
          </div>
        </div>

        <div class="col-lg-2 col-6 footer-links">
          <h4>Useful Links</h4>
          <ul>
            <li><a href="index.html">Home</a></li>
            <li><a href="index.html#about">Tentang Kami</a></li>
            <li><a href="konsultasi.html">Konsultasi</a></li>
            <li><a href="sewa.html">Sewa Aset</a></li>
            <li><a href="#">Contact</a></li>
          </ul>
        </div>

        <div class="col-lg-2 col-6 footer-links">
          <h4>Sewa properti</h4>
          <ul>
            <li><a href="#">Tanah</a></li>
            <li><a href="#">Rumah</a></li>
            <li><a href="#">Ruko</a></li>
            <li><a href="#">Gedung</a></li>
            <li><a href="#">Unit Apartement</a></li>
          </ul>
        </div>

        <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
          <h4>Contact Us</h4>
          <p>
            A108 Adam Street <br>
            New York, NY 535022<br>
            United States <br><br>
            <strong>Phone:</strong> +1 5589 55488 55<br>
            <strong>Email:</strong> info@example.com<br>
          </p>

        </div>

      </div>
    </div>

    <div class="container mt-4">
      <div class="copyright">
        &copy; Copyright <strong><span>Impact</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/impact-bootstrap-business-website-template/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>

  </footer><!-- End Footer -->
  <!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

  
</body>

</html>