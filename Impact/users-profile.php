<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Users / Profile - NiceAdmin Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <link href="assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin - v2.5.0
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

   <!-- ======= Header ======= -->
   <section id="topbar" class="topbar d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:contact@example.com">perhutanidivrejateng@example.com</a></i>
        <i class="bi bi-phone d-flex align-items-center ms-4"><span>+628 8765 0987</span></i>
      </div>
      <!--
      <div class="social-links d-none d-md-flex align-items-center">
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
      </div>
    -->
    </div>
  </section><!-- End Top Bar -->

  <header id="header" class="header d-flex align-items-center">

    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1>PerhutaniPro<span>.</span></h1>
      </a>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="index.html">Home</a></li>
          <!--
          <li><a href="#about">Tentang Kami</a></li>
          <li><a href="#services">Services</a></li>
          <li><a href="#portfolio">Portfolio</a></li>
          <li><a href="#team">Team</a></li>
          <li><a href="blog.html">Properti</a></li>
          -->

          <li class="dropdown"><a href="#"><span>Opset</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="sewa.php">Sewa</a></li>
              <li><a href="kerjasama.php">Kerjasama Aset</a></li>
              <!---
              <li><a href="#">Drop Down 4</a></li>
              -->
            </ul>
          </li>
          <li class="dropdown"><a href="info.html"><span>Pusat Informasi</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="info.html">Frequently Asked Questions</a></li>
              <li><a href="daftar.html">Tata cara pendaftaran</a></li>
              <li><a href="bayarr.html">Metode Pembayaran</a></li>
            </ul>
          </li>
          <!--
          <li><a href="#contact">Contact</a></li>
          -->
          <li><a href="index.html#about">Tentang Kami</a></li>
          <li><a href="konsultasi.php">Konsultasi</a></li>
 
        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <span class="d-none d-md-block dropdown-toggle ps-2">Akunmu</span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6>Kevin Anderson</h6>
              <span>Web Designer</span>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.php">
                <i class="bi bi-person"></i>
                <span>My Profile</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.php">
                <i class="bi bi-gear"></i>
                <span>Account Settings</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="pages-faq.html">
                <i class="bi bi-question-circle"></i>
                <span>Need Help?</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="logout.php">
                <i class="bi bi-box-arrow-right"></i>
                <span>Sign Out</span>
              </a>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  
  <main id="main" class="main">
    <div class="breadcrumbs">
      <div class="page-header d-flex align-items-center" style="background-image: url('');">
        <div class="container position-relative">
          <div class="row d-flex justify-content-center">
            <div class="col-lg-6 text-center">
              <h2>Profilku</h2>
            </div>
          </div>
        </div>
      </div>
      <nav>
        <div class="container">
          <ol>
            <li><a href="index.php">Home</a></li>
            <li>User</li>
            <li>profile</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Page Title -->

    <section class="section profile">
      <div class="row">
        <div class="col-xl-4">

          <div class="card">
            <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

              <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
              <h2>Fany Pradita</h2>
              <h3>CV.Teknologi kurniatama</h3>
              <!--
              <div class="social-links mt-2">
                <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
              </div>
            -->
            </div>
          </div>

        </div>

        <div class="col-xl-8">

          <div class="card">
            <div class="card-body pt-3">
              <!-- Bordered Tabs -->
              <ul class="nav nav-tabs nav-tabs-bordered">

                <li class="nav-item">
                  <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Overview</button>
                </li>

                <li class="nav-item">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Edit Profile</button>
                </li>

                <li class="nav-item">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#pengajuan">Pengajuan</button>
                </li>

                <li class="nav-item">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#wishlist">My wishlist</button>
                </li>

                <li class="nav-item">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-settings">Settings</button>
                </li>

                <li class="nav-item">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-change-password">Change Password</button>
                </li>

              </ul>

              <div class="tab-content pt-2">
                <div class="tab-pane fade show active profile-overview" id="profile-overview">
                  <h5 class="card-title">Profile Details</h5>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label ">Full Name</div>
                    <div class="col-lg-9 col-md-8">Kevin Anderson</div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Company</div>
                    <div class="col-lg-9 col-md-8">Lueilwitz, Wisoky and Leuschke</div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Job</div>
                    <div class="col-lg-9 col-md-8">Web Designer</div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Country</div>
                    <div class="col-lg-9 col-md-8">USA</div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Address</div>
                    <div class="col-lg-9 col-md-8">A108 Adam Street, New York, NY 535022</div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Phone</div>
                    <div class="col-lg-9 col-md-8">(436) 486-3538 x29071</div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Email</div>
                    <div class="col-lg-9 col-md-8">k.anderson@example.com</div>
                  </div>

                </div><!--END PROFILE DETAILS-->
                
                <div class="tab-pane fade profile-edit pt-3" id="profile-edit">

<!-- Profile Edit Form -->
<form>
  <div class="row mb-3">
    <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Profile Image</label>
    <div class="col-md-8 col-lg-9">
      <img src="assets/img/profile-img.jpg" alt="Profile">
      <div class="pt-2">
        <a href="#" class="btn btn-primary btn-sm" title="Upload new profile image"><i class="bi bi-upload"></i></a>
        <a href="#" class="btn btn-danger btn-sm" title="Remove my profile image"><i class="bi bi-trash"></i></a>
      </div>
    </div>
  </div>

  <div class="row mb-3">
    <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Username</label>
    <div class="col-md-8 col-lg-9">
      <input type="text" placeholder="Username" name="username" value="<?php echo $username; ?>" required>
    </div>
  </div>

  <div class="row mb-3">
    <label for="about" class="col-md-4 col-lg-3 col-form-label">Nama Lengkap</label>
    <div class="col-md-8 col-lg-9">
                <input type="text" placeholder="Nama Lengkap" name="nama" value="<?php echo $nama; ?>" required>
    </div>
  </div>

  <div class="row mb-3">
    <label for="company" class="col-md-4 col-lg-3 col-form-label">Tanggal lahir</label>
    <div class="col-md-8 col-lg-9">
                <input type="date" placeholder="Tanggal lahir" name="tgl_lahir" value="<?php echo $tgl_lahir; ?>" required>
    </div>
  </div>

  <div class="row mb-3">
    <label for="Job" class="col-md-4 col-lg-3 col-form-label">Jenis Kelamin</label>
    <div class="col-md-8 col-lg-9">
                <input type="text" placeholder="Jenis Kelamin" name="jenis_kelamin" value="<?php echo $jk; ?>" required>
    </div>
  </div>

  <div class="row mb-3">
    <label for="Country" class="col-md-4 col-lg-3 col-form-label">Alamat</label>
    <div class="col-md-8 col-lg-9">
                <input type="text box" placeholder="Alamat" name="alamat" value="<?php echo $alamat; ?>" required>
    </div>
  </div>

  <div class="row mb-3">
    <label for="Address" class="col-md-4 col-lg-3 col-form-label">No.HP</label>
    <div class="col-md-8 col-lg-9">
                <input type="text" placeholder="No. HP" name="nohp" value="<?php echo $nohp; ?>" required>
    </div>
  </div>

  <div class="row mb-3">
    <label for="Phone" class="col-md-4 col-lg-3 col-form-label">NIK</label>
    <div class="col-md-8 col-lg-9">
                <input type="text" placeholder="NIK" name="noktp" value="<?php echo $noktp; ?>" required>
    </div>
  </div>

  <div class="row mb-3">
    <label for="Email" class="col-md-4 col-lg-3 col-form-label">Email</label>
    <div class="col-md-8 col-lg-9">
      <input type="email" placeholder="Email" name="email" value="<?php echo $email; ?>" required>
    </div>
  </div>

  <div class="text-center">
    <button type="submit" class="btn btn-primary">Save Changes</button>
  </div>
</form><!-- End Profile Edit Form -->

</div>


<div class="tab-pane fade pt-3" id="pengajuan">

<!-- Settings Form -->
<form>
<div class="text">
    <button type="submit" class="btn btn-primary">Print pdf</button>
  </div>
  <div class="text">
    <button type="submit" class="btn btn-primary">Printf Excel</button>
  </div>
  
  <div class="text-center">
    <button type="submit" class="btn btn-primary">Ingin mengajukan lagi?</button>
  </div>
</form><!-- End settings Form -->

</div>

<div class="tab-pane fade pt-3" id="wishlist">

<!-- Wishlist Form -->
<form>
  
<?php
          // connect to the MySQL database
          $host = "localhost";
          $username = "root";
          $password = "";
          $dbname = "db_perhutani";
          $conn = mysqli_connect($host, $username, $password, $dbname);

          // check if the connection is successful
          if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
          }

          // process the search query
          if (isset($_GET["search"])) {
            $search_query = $_GET["search"];
            $sql = "SELECT * FROM tbl_opset WHERE nama_aset LIKE '%bangunan%' OR alamat LIKE '%bangunan%' OR kategori_aset LIKE '%bangunan%'";
          } else {
            $sql = "SELECT * FROM wishlist AS u INNER JOIN tbl_opset AS i ON u.id_aset = i.id_aset";
          }

          // retrieve data from the MySQL database with pagination
          $items_per_page = 4;
          if (isset($_GET["page"])) {
            $current_page = $_GET["page"];
          } else {
            $current_page = 1;
          }
          $offset = ($current_page - 1) * $items_per_page;
          $sql .= " LIMIT $offset, $items_per_page";

          $result = mysqli_query($conn, $sql);

          // generate HTML code for the search bar
          echo '<form class="form-inline mb-4" method="get">';
          echo '<div class="input-group" style="width: 97.5%;">';
          echo '<input type="text"  style="margin-right:10px" class="form-control" name="search" placeholder="Cari Properti yang anda inginkan ">';
          echo '<div class="input-group-append">';
          echo '<button type="submit" class="btn btn-primary"><i class="fa fa-search">Search</i></button>';
          echo '</div>';
          echo '</div>';
          echo '</form>';

          // generate HTML code for each item in the loop
          echo '<div class="row" style="margin-bottom:20px;">';
          while ($row = mysqli_fetch_assoc($result)) {
            if ($row["kategori_aset"] == "bangunan") {
              echo '<div class="col-xl-3 col-md-4" style="margin-bottom:20px;">';
              echo '<article>';
              echo '<div class="post-img" style="width:250px; height:250px;">';
              echo '<a href="sub-sewa.php?id_aset=' . $row["id_aset"] . '"><img src="' . $row["images"] . '" alt="" class="img-fluid"></a>';
              echo '</div>';
              echo '<h2 class="title">';
              echo '<a href="sub-sewa.php?id_aset=' . $row["id_aset"] . '">' . $row["nama_aset"] . '</a>';
              echo '<p class="post-category">' . $row["alamat"] . '</p>';
              echo '<p class="post-category">' . $row["kategori_aset"] . '</p>';
              echo '</h2>';
              echo '</article>';
              echo '</div>';
            }
          }
          echo '</div>';
          

          // generate pagination links
          $sql = "SELECT COUNT(*) as total_items FROM tbl_opset ";
          $result = mysqli_query($conn, $sql);
          $row = mysqli_fetch_assoc($result);
          $total_items = $row["total_items"];
          $total_pages = ceil($total_items / $items_per_page);
          ?>

</form>

</div>

<div class="tab-pane fade pt-3" id="profile-settings">

<!-- Settings Form -->
<form>

  <div class="row mb-3">
    <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Email Notifications</label>
    <div class="col-md-8 col-lg-9">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" id="changesMade" checked>
        <label class="form-check-label" for="changesMade">
          Changes made to your account
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" id="newProducts" checked>
        <label class="form-check-label" for="newProducts">
          Information on new products and services
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" id="proOffers">
        <label class="form-check-label" for="proOffers">
          Marketing and promo offers
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" id="securityNotify" checked disabled>
        <label class="form-check-label" for="securityNotify">
          Security alerts
        </label>
      </div>
    </div>
  </div>

  <div class="text-center">
    <button type="submit" class="btn btn-primary">Save Changes</button>
  </div>
</form><!-- End settings Form -->

</div>

<div class="tab-pane fade pt-3" id="profile-change-password">
<!-- Change Password Form -->
<form>

  <div class="row mb-3">
    <label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">Current Password</label>
    <div class="col-md-8 col-lg-9">
            <input type="password" name="update_password" placeholder="enter previous password" class="box">
    </div>
  </div>

  <div class="row mb-3">
    <label for="newPassword" class="col-md-4 col-lg-3 col-form-label">New Password</label>
    <div class="col-md-8 col-lg-9">
            <input type="password" name="new_pass" placeholder="enter new password" class="box">
    </div>
  </div>

  <div class="row mb-3">
    <label for="renewPassword" class="col-md-4 col-lg-3 col-form-label">Re-enter New Password</label>
    <div class="col-md-8 col-lg-9">
            <input type="password" name="confirm_password" placeholder="confirm new password" class="box">
    </div>
  </div>

  <div class="text-center">
    <button type="submit" class="btn btn-primary">Change Password</button>
  </div>
</form><!-- End Change Password Form -->

</div>

</div><!-- End Bordered Tabs -->

</div>
</div>

</div>
</div>
</section>


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
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>

  </footer> 
  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <script src="assets/js/main.js"></script>

   
</body>

</html>