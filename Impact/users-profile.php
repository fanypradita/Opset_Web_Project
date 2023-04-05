<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Perhutani Property</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/logoo.png" rel="icon">
  <link href="assets/img/logoo.png" rel="apple-touch-icon">

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
  <!-- Profile Edit Form -->
  <style>
      .profile-picture {
        display: flex;
        align-items: center;
      }

      .upload-btn, .hapus-btn {
        display: inline-block;
        font-size: 14px;
        padding: 5px 10px;
        margin-right: 10px;
        border-radius: 5px;
        color: #fff;
        background-color: #007bff;
        border: none;
        cursor: pointer;
      }

      .upload-btn i, .hapus-btn i {
        margin-right: 5px;
      }

      .hapus-btn {
        background-color: #dc3545;
      }

      input[type="file"] {
        display: none;
      }
      .foto-wrapper {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
      }

      .foto-wrapper img {
        max-width: 100%;
      }

      .foto-wrapper form {
        margin-top: 10px;
        display: flex;
        justify-content: center;
        align-items: center;
      }

      .foto-wrapper form input[type="file"] {
        margin-right: 5px;
      }

      .foto-wrapper form input[type="submit"],
      .foto-wrapper form button[type="submit"] {
        font-size: 14px;
        padding: 5px 10px;
        border-radius: 5px;
        background-color: #007bff;
        color: #fff;
        border: none;
        cursor: pointer;
      }

      .foto-wrapper form input[type="submit"]:hover,
      .foto-wrapper form button[type="submit"]:hover {
        background-color: #0062cc;
      }
    


      </style>

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
        <h1 style="font-size:20px;">PerhutaniPro<span>.</span></h1>
      </a>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="index.html" style="font-size:15px;">Beranda</a></li>
          <li><a href="sewa.php" style="font-size:15px;">Sport Center</a></li>
          <li><a href="sewa.php" style="font-size:15px;">Bangunan</a></li>
          <li><a href="sewalahan.php" style="font-size:15px;">Lahan</a></li>
          <!--
          <li><a href="#about">Tentang Kami</a></li>
          <li><a href="#services">Services</a></li>
          <li><a href="#portfolio">Portfolio</a></li>
          <li><a href="#team">Team</a></li>
          <li><a href="blog.html">Properti</a></li>
          -->

          <!-- <li class="dropdown"><a href="#"><span>Opset</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="sewa.php">Sport Center</a></li>
              <li><a href="sewa.php">Bangunan</a></li>
              <li><a href="sewalahan.php">Lahan</a></li>
              <li><a href="sewakos.php">Kos</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
          </li> -->

          <li class="dropdown"><a href="info.html" style="font-size:15px;"><span>Pusat Informasi</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="info.html" style="font-size:13px;">Frequently Asked Questions</a></li>
              <li><a href="daftar.html" style="font-size:13px;">Tata cara pendaftaran</a></li>
              <li><a href="bayarr.html" style="font-size:13px;">Metode Pembayaran</a></li>
            </ul>
          </li>
          <!--
          <li><a href="#contact">Contact</a></li>
          -->
          <li><a href="konsultasi.php" style="font-size:15px;">Konsultasi</a></li>
          <li class="nav-item dropdown pe-3">
            <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <span class="d-none d-md-block dropdown-toggle ps-2"><i class="bi bi-person-circle" style="font-size:25px; color: white;"></i></span>
            </a><!-- End Profile Iamge Icon -->

            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">  
              <li>
                <a class="dropdown-item d-flex align-items-center" href="users-profile.php">
                  <i class="bi bi-gear"></i>
                  <span style="font-size:15px;">Account Settings</span>
                </a>
              </li>
              <li>
                <hr class="dropdown-divider">
              </li>
  
              <li>
                <a class="dropdown-item d-flex align-items-center" href="reindex.html">
                  <i class="bi bi-box-arrow-right"></i>
                  <span style="font-size:15px;">Sign Out</span>
                </a>
              </li>
  
            </ul><!-- End Profile Dropdown Items -->
          </li><!-- End Profile Nav -->
  
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

  <?php
                // Koneksi ke database
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "db_perhutani";

                $conn = mysqli_connect($servername, $username, $password, $dbname);

                // Mengecek koneksi
                if (!$conn) {
                  die("Koneksi gagal: " . mysqli_connect_error());
                }

                // Query untuk mengambil data terbaru dari tabel user
                $sql = "SELECT * FROM tbl_customer ORDER BY username DESC LIMIT 1";
                $result = mysqli_query($conn, $sql);

                // Menampilkan data terbaru
                if (mysqli_num_rows($result) > 0) {
                  $row = mysqli_fetch_assoc($result);
  ?>

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
              <img alt="Profile" class="rounded-circle" src="<?php echo $row['foto']; ?>">
              <h2><?php echo $row["nama"]; ?></h2>
              <h3>Costumer Perhutani Property</h3>
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
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#invoice">Invoice</button>
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
                    <div class="col-lg-3 col-md-4 label ">Nama</div>
                    <div class="col-lg-9 col-md-8"><?php echo $row['nama']; ?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Jenis Kelamin</div>
                    <div class="col-lg-9 col-md-8"><?php echo $row['jk']; ?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Tanggal Lahir</div>
                    <div class="col-lg-9 col-md-8"><?php echo $row['tgl_lahir']; ?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Alamat</div>
                    <div class="col-lg-9 col-md-8"><?php echo $row['alamat']; ?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">No.hp</div>
                    <div class="col-lg-9 col-md-8"><?php echo $row['nohp']; ?></div>
                  </div>
                  
                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">No.ktp</div>
                    <div class="col-lg-9 col-md-8"><?php echo $row['noktp']; ?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">NIK</div>
                    <div class="col-lg-9 col-md-8"><?php echo $row['nik']; ?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Email</div>
                    <div class="col-lg-9 col-md-8"><?php echo $row['email']; ?></div>
                  </div>
                  <?php
                } else {
                  echo "Tidak ada data yang ditemukan.";
                }

                // Menutup koneksi
                mysqli_close($conn);
                ?>
              </div>
    
         
                
<!-- == TAB UPDATE PROFILE == -->
<div class="tab-pane fade profile-edit pt-3" id="profile-edit">
    <title>Edit Profil</title>

  <form action="update_profil.php" method="POST">
    <div class="row">
      <div class="profile-picture">
        <img alt="Profile" class="rounded-circle" src="<?php echo $row['foto']; ?>">
        <form action="upload.php" method="post" enctype="multipart/form-data">
          <label for="fileToUpload" class="upload-btn">
          <i class="fas fa-upload"></i> Upload
          </label>
          <input type="file" name="fileToUpload" id="fileToUpload" style="display:none;">
        </form>
        <form>
          <button type="submit" class="hapus-btn" name="submit">
          <i class="fas fa-trash-alt"></i> Hapus Foto
          </button>
          <input type="hidden" name="foto" value="<?php echo $row['foto']; ?>">
        </form>
      </div>
    </div>

    
    <div class="row">
            <label for="nama">Nama:</label>
            <input type="text" name="nama" value="<?php echo $row['nama']; ?>" required>
    </div>
    <div class="row">
            <label for="jk">Jenis Kelamin:</label>
            <input type="text" name="jk" value="<?php echo $row['jk']; ?>" required>
    </div>
    <div class="row">
            <label for="tgl_lahir">Tanggal Lahir:</label>
            <input type="date" name="tgl_lahir" value="<?php echo $row['tgl_lahir']; ?>" required>
    </div>
    <div class="row">
            <label for="alamat">Alamat:</label>
            <input type="text" name="alamat" value="<?php echo $row['alamat']; ?>" required>
    </div>
    <div class="row">
            <label for="nohp">No. HP:</label>
            <input type="nunmber" name="nohp" value="<?php echo $row['nohp']; ?>" required>
    </div>
    <div class="row">
            <label for="noktp">No.KTP:</label>
            <input type="number" name="noktp" value="<?php echo $row['noktp']; ?>" required>
    </div>
    <div class="row">
            <label for="nik">NIK:</label>
            <input type="number" name="nik" value="<?php echo $row['nik']; ?>" required>
    </div>
    <div class="row">
            <label for="email">Email:</label>
            <input type="email" name="email" value="<?php echo $row['email']; ?>" required>
    </div>
    <br>
            <button type="submit" name="submit">Update Profil</button>
    
  </form>
</div>

<!-- == LAST TAB UPDATE PROFILE == -->


<!-- == TAB PENGAJUAN == -->

<div class="tab-pane fade pt-3" id="pengajuan">
  <form>
  
    <?php
    // Menghubungkan ke database
    $conn = mysqli_connect("localhost", "root", "", "db_perhutani");

    // Memeriksa koneksi
    if (!$conn) {
        die("Koneksi gagal: " . mysqli_connect_error());
    }

    // Mengambil data dari tabel pengajuan
    $sql = "SELECT pengajuan.nama,  pengajuan.instansi, pengajuan.tanggal, pengajuan.tgl_akhir, pengajuan.hal, pengajuan.sub_kategori2, pengajuan.status 
    FROM pengajuan 
    INNER JOIN tbl_customer ON pengajuan.id_customer = tbl_customer.id_customer";
    $result = mysqli_query($conn, $sql);

    // Menampilkan data dalam tabel
    echo "<style>
            table {
                border-collapse: collapse;
                width: 100%;
            }
            th, td {
                text-align: left;
                padding: 8px;
                border-bottom: 1px solid #ddd;
            }
            th {
                background-color: #f2f2f2;
                color: #333;
            }
        </style>";
        
        
    echo "<br>";
    echo "<table>";
    echo "<tr><th>Nama</th><th>Instansi</th><th>Tanggal Mulai</th><th>Tanggal Selesai</th><th>Perihal</th><th>Nama Aset</th><th>Status</th></tr>";
    while ($row = mysqli_fetch_assoc($result)) {
      echo "<tr><td>".$row["nama"]."</td><td>".$row["instansi"]."</td><td>".$row["tanggal"]."</td><td>".$row["tgl_akhir"]."</td><td>".$row["hal"]."</td><td>".$row["sub_kategori2"]."</td><td>";
      
      if ($row["status"] == "terima") {
        echo "<a href='#' style='color: blue;'>".$row["status"]."</a>";
      } else if ($row["status"] == "tolak") {
        echo "<a href='#' style='color: red;'>".$row["status"]."</a>";
      } else {
        echo $row["status"];
      }
      
      echo "</td></tr>";
    }
    
    echo "</table>";
    echo "<br>";
    echo "<br>";
    echo '
    <form>
      <div class="button-group">
      <button type="submit" class="btn btn-sm btn-primary" name="print_pdf">Print pdf</button>
        <button type="submit" class="btn btn-sm btn-primary" name="print_excel">Print Excel</button>
        <button type="submit" class="btn btn-primary" name="ajukan_lagi">Ingin mengajukan lagi?</button>
    </div>
    </form>
    <style>
    .button-group {
      display: flex;
      justify-content: center;
    }
    .button-group button {
      margin-right: 10px;
    }
    </style>';


    // Menutup koneksi
    mysqli_close($conn);
    ?>

  </form>
</div>
<!-- == LAST TAB PENGAJUAN == -->


<div class="tab-pane fade pt-3" id="invoice">
  <form>
  </form>
</div>

<!-- == TAB WISHLIST == -->
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
                $sql = "SELECT * FROM opset WHERE nama_aset LIKE '%bangunan%' OR alamat LIKE '%bangunan%' OR kategori_aset LIKE '%bangunan%'";
              } else {
                $sql = "SELECT * FROM wishlist AS u INNER JOIN opset AS i ON u.id_aset = i.id_aset";
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
    ?>
    <br>
    <style>
      table {
        border-collapse: collapse;
      }

      td, th {
        padding: 8px;
        border: 1px solid #ddd;
      }

      tr {
        margin-bottom: 10px;
      }
      .small-img {
        max-width: 100px;
        height: auto;
      }
      <style>
      table {
        border-collapse: collapse;
        width: 100%;
      }

      td, th {
        padding: 10px;
        border: 1px solid #ddd;
        text-align: left;
        font-size: 12px;
      }

      tr {
        margin-bottom: 10px;
      }

      th {
        background-color: #f2f2f2;
        font-weight: bold;
      }

      .small-img {
        max-width: 100px;
        height: auto;
      }
    </style>

    <table>
      <thead>
        <tr>
          <th>Nama Aset</th>
          <th>Alamat</th>
          <th>Kategori Aset</th>
          <th>Gambar</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        <?php while ($row = mysqli_fetch_assoc($result)) {
          if ($row["kategori_aset"] == "bangunan" || $row["kategori_aset"] == "lahan" || $row["kategori_aset"] == "sport center") {
            echo '<tr>';
            echo '<td><a href="sub-sewa.php?id_aset=' . $row["id_aset"] . '">' . $row["nama_aset"] . '</a></td>';
            echo '<td>' . $row["alamat"] . '</td>';
            echo '<td>' . $row["kategori_aset"] . '</td>';
            echo '<td><a href="sub-sewa.php?id_aset=' . $row["id_aset"] . '"><img src="' . $row["images"] . '" alt="" class="img-fluid small-img"></a></td>';
            echo '<td><button class="btn-delete" onclick="hapusAset(' . $row["id_aset"] . ')">Hapus</button></td>';
            echo '</tr>';
          }
        } ?>
      </tbody>
    </table>
    <script>
      function hapusAset(id) {
        if (confirm("Anda yakin ingin menghapus aset ini?")) {
          window.location.href = "hapus-aset.php?id=" + id;
        }
      }
    </script>
    <?php
              // generate pagination links
              $sql = "SELECT COUNT(*) as total_items FROM opset ";
              $result = mysqli_query($conn, $sql);
              $row = mysqli_fetch_assoc($result);
              $total_items = $row["total_items"];
              $total_pages = ceil($total_items / $items_per_page);
              ?>
    </br>
  </form>
</div>
<!-- == LAST TAB WISTLIST == -->

<!-- == TAB PROFILE SETTING == -->
<div class="tab-pane fade pt-3" id="profile-settings">
  <!-- Settings Form -->
  <form>

    <div class="row mb-3">
      <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Email Notifications</label>
        <div class="col-md-8 col-lg-9">

          <div class="form-check">
            <input class="form-check-input" type="checkbox" id="changesMade" checked>
            <label class="form-check-label" for="changesMade">Changes made to your account</label>
          </div>

          <div class="form-check">
            <input class="form-check-input" type="checkbox" id="newProducts" checked>
            <label class="form-check-label" for="newProducts">Information on new products and services</label>
          </div>
        
          <div class="form-check">
            <input class="form-check-input" type="checkbox" id="proOffers">
            <label class="form-check-label" for="proOffers">Marketing and promo offers</label>
          </div>
        
          <div class="form-check">
            <input class="form-check-input" type="checkbox" id="securityNotify" checked disabled>
            <label class="form-check-label" for="securityNotify">Security alerts</label>
          </div>

        </div>
    </div>
      <div class="text-center">
        <button type="submit" class="btn btn-primary">Save Changes</button>
      </div>
  </form><!-- End settings Form -->
</div>
<!-- == LAST TAB PROFILE SETTING == -->

<!-- == TAB CHANGE PASSWORD == -->
    <div class="tab-pane fade pt-3" id="profile-change-password">
      <!-- Change Password Form -->
      <form action="update_password.php" method="POST">

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
<!-- == LAST TAB CHANGE PASSWORD== -->


</div>

</div><!-- End Bordered Tabs -->

</div>
</div>
</div>
</div>
</div>
    </section>
    </main>

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