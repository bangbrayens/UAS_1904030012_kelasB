<?php
$konn = mysqli_connect('localhost', 'root', '', 'uas_1904030012');

// pemanggilan tabel
function query($query)
{
  global $konn;

  //mengambil seluruh data pada tabel
  $result = mysqli_query($konn, $query);

  if (mysqli_num_rows($result) == 1) {
    return mysqli_fetch_assoc($result);
  }

  // pemanggilan elemen data dengan rapih
  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }
  return $rows;
}
function tambahbk($data)
{
  global $konn;

  $judul = htmlspecialchars($data['judul']);
  $penulis =  htmlspecialchars($data['penulis']);
  $penerbit =  htmlspecialchars($data['penerbit']);
  $tahun_terbit =  htmlspecialchars($data['tahun_terbit']);
  $edisi =  htmlspecialchars($data['edisi']);
  $cover_buku =  htmlspecialchars($data['cover_buku']);

  $query = "INSERT INTO daftar_buku
  VALUES
  (null,'$judul','$penulis','$penerbit','$tahun_terbit','$edisi','$cover_buku');";
  mysqli_query($konn, $query);

  echo mysqli_error($konn);
  return mysqli_affected_rows($konn);
}

function hapusbk($id)
{
  global $konn;
  mysqli_query($konn, "DELETE FROM daftar_buku WHERE id =$id") or die(mysqli_error($konn));
  return mysqli_affected_rows($konn);
}

function edit($data)
{
  global $konn;

  $id = $data['id'];
  $judul = htmlspecialchars($data['judul']);
  $penulis =  htmlspecialchars($data['penulis']);
  $penerbit =  htmlspecialchars($data['penerbit']);
  $tahun_terbit =  htmlspecialchars($data['tahun_terbit']);
  $edisi =  htmlspecialchars($data['edisi']);
  $cover_buku =  htmlspecialchars($data['cover_buku']);

  $query = "UPDATE daftar_buku SET
  judul ='$judul',
  penulis ='$penulis',
  penerbit ='$penerbit',
  tahun_terbit ='$tahun_terbit',
  edisi ='$edisi',
  cover_buku ='$cover_buku'
  WHERE id =$id;";

  mysqli_query($konn, $query);

  echo mysqli_error($konn);
  return mysqli_affected_rows($konn);
}

function caribk($keyword)
{
  global $konn;

  $query = "SELECT * FROM daftar_buku WHERE judul LIKE'%$keyword%'";
  $result = mysqli_query($konn, $query);

  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }

  return $rows;
}

function cariagt($keyword)
{
  global $konn;

  $query = "SELECT * FROM daftar_anggota WHERE nama LIKE'%$keyword%'";
  $result = mysqli_query($konn, $query);

  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }

  return $rows;
}

function hapusagt($id)
{
  global $konn;
  mysqli_query($konn, "DELETE FROM daftar_anggota WHERE id =$id") or die(mysqli_error($konn));
  return mysqli_affected_rows($konn);
}

function editagt($data)
{
  global $konn;

  $id = $data['id'];
  $nama = htmlspecialchars($data['nama']);
  $alamat =  htmlspecialchars($data['alamat']);
  $no_telepon =  htmlspecialchars($data['no_telepon']);
  $email =  htmlspecialchars($data['email']);
  $jenis_kelamin =  htmlspecialchars($data['jenis_kelamin']);
  $foto_anggota =  htmlspecialchars($data['foto_anggota']);

  $query = "UPDATE daftar_anggota SET
  nama ='$nama',
  alamat ='$alamat',
  no_telepon ='$no_telepon',
  email ='$email',
  jenis_kelamin ='$jenis_kelamin',
  foto_anggota ='$foto_anggota'
  WHERE id =$id;";

  mysqli_query($konn, $query);

  echo mysqli_error($konn);
  return mysqli_affected_rows($konn);
}

function tambahagt($data)
{
  global $konn;

  $nama = htmlspecialchars($data['nama']);
  $alamat =  htmlspecialchars($data['alamat']);
  $no_telepon =  htmlspecialchars($data['no_telepon']);
  $email =  htmlspecialchars($data['email']);
  $jenis_kelamin =  htmlspecialchars($data['jenis_kelamin']);
  $foto_anggota =  htmlspecialchars($data['foto_anggota']);

  $query = "INSERT INTO daftar_anggota
  VALUES
  (null,'$nama','$alamat','$no_telepon','$email','$jenis_kelamin','$foto_anggota');";
  mysqli_query($konn, $query);

  echo mysqli_error($konn);
  return mysqli_affected_rows($konn);
}
