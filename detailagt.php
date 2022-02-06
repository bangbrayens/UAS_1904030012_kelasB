<?php
require 'functions.php';
if (!isset($_GET['id'])) {
  header("location: anggota.php");
  exit;
}

$id = $_GET['id'];
$listagt = query("SELECT * FROM daftar_anggota WHERE id=$id");

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title>Dewa Perpustakaan</title>
  <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
  <!-- Font Awesome icons (free version)-->
  <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" crossorigin="anonymous"></script>
  <!-- Google fonts-->
  <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
  <!-- Core theme CSS (includes Bootstrap)-->
  <link href="css/style_buku.css" rel="stylesheet" />
</head>

<body id="page-top">
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand" href="#"><i class="fas fa-crown"></i> Dewa Pustaka</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="buku.php">Buku</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="anggota.php">Anggota</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Input
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="inputbk.php">Buku</a></li>
              <li><a class="dropdown-item" href="inputagt.php">Anggota</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php">Kontak</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- Signup-->
  <section class="signup-section" id="buku">
    <div class="container px-4 px-lg-5">
      <div class="row gx-4 gx-lg-5">
        <div class="col-md-10 col-lg-8 mx-auto text-center">
          <i class="fas fa-user fa-2x mb-2 text-white"></i>
          <h2 class="text-white mb-5">Detail Anggota Perpustakaan</h2>
          <!-- * * * * * * * * * * * * * * *-->
          <!-- * * SB Forms Contact Form * *-->
          <!-- * * * * * * * * * * * * * * *-->
          <!-- This form is pre-integrated with SB Forms.-->
          <!-- To make this form functional, sign up at-->
          <!-- https://startbootstrap.com/solution/contact-forms-->
          <!-- to get an API token!-->
          <ul class="list-group">
            <li class="list-group-item active"><?= $listagt['nama']; ?></li>
            <li class="list-group-item">Alamat : <?= $listagt['alamat']; ?></li>
            <li class="list-group-item">Nomor Telepon : <?= $listagt['no_telepon']; ?></li>
            <li class="list-group-item">Email : <?= $listagt['email']; ?></li>
            <li class="list-group-item">Jenis Kelamin : <?= $listagt['jenis_kelamin']; ?></li>
            <li class="list-group-item"><img src="assets/img/<?= $listagt['foto_anggota']; ?>" alt=""></li>
            <li class="list-group-item">
              <a href="editagt.php?id=<?= $listagt['id']; ?>" class="btn btn-warning" role="button">Edit</a> |
              <a href="hapusagt.php?id=<?= $listagt['id']; ?>" onclick="return confirm('Apakah anda yakin akan menghapus data anggota ini?');" class="btn btn-danger" role="button">Hapus</a> |
              <a href="anggota.php" class="btn btn-primary" role="button">Kembali</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <!-- Footer-->
  <footer class="footer bg-black small text-center text-white-50">
    <div class="container px-4 px-lg-5">Copyright &copy; Dewa Perpustakaan 2022</div>
  </footer>
  <!-- Bootstrap core JS-->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <!-- Core theme JS-->
  <script src="js/scripts.js"></script>
  <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
  <!-- * *                               SB Forms JS                               * *-->
  <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
  <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
  <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>

</html>