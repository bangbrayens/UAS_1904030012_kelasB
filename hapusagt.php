<?php
require "functions.php";

// agar tidak bisa masuk secara pengetikan manual pada URL
if (!isset($_GET['id'])) {
  header("location: anggota.php");
  exit;
}

$id = $_GET['id'];
if (hapusagt($id) > 0) {
  echo
  "<script>
  alert('data berhasil di hapus');
  document.location.href = 'anggota.php';
  </script>";
} else {
  echo
  "<script>
  alert('data gagal dihapus');
 </script>";
}
