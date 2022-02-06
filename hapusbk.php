<?php
require "functions.php";

// agar tidak bisa masuk secara pengetikan manual pada URL
if (!isset($_GET['id'])) {
  header("location: buku.php");
  exit;
}

$id = $_GET['id'];
if (hapusbk($id) > 0) {
  echo
  "<script>
  alert('data berhasil di hapus');
  document.location.href = 'buku.php';
  </script>";
} else {
  echo
  "<script>
  alert('data gagal dihapus');
 </script>";
}
