<?php
session_start();

if (!isset($_SESSION['login'])) {
  header("Location: login.php");
  exit;
}

require 'functions.php';

if (isset($_POST['tambah'])) {
  if (tambah($_POST) > 0) {
    echo "<script>
            alert('data berhasil ditambahkan');
            document.location.href = 'index.php';
          </script>";
  } else {
    echo "data gagal ditambahkan!";
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah Data</title>
  <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<body>
  <h3 class="center">Form Tambah Alat Musik </h3>
  <form align="center" action="" method="POST">
    <div class="row">
      <div class="col s12">
        <div class="row">
          <div class="input-field col s12">
            <i class="material-icons prefix">dehaze</i>
            <input type="file" name="gambar" class="gambar" onchange="previewImage()" id="gambar autocomplete-input" class="autocomplete">
            <label for="cover"></label>
          </div>
          <div class="input-field col s12">
            <i class="material-icons prefix">dehaze</i>
            <input type="text" name="alat_musik" id="alat_musik autocomplete-input" class="autocomplete">
            <label for="judul buku">Alat musik</label>
          </div>
          <div class="input-field col s12">
            <i class="material-icons prefix">dehaze</i>
            <input type="text" name="alamat" id="alamat autocomplete-input" class="autocomplete">
            <label for="penulis">Alamat</label>
          </div>
          <div class="input-field col s12">
            <i class="material-icons prefix">dehaze</i>
            <input type="text" name="harga" id="harga autocomplete-input" class="autocomplete">
            <label for="harga">Harga </label>
          </div>
        </div>
      </div>
    </div>
    <button type="submit" name="tambah" style="text-decoration: none; color: black;" class="btn waves-effect waves-light blue">Tambah Data</button>
    <a href="index.php" style="text-decoration: none; color: black;" class="btn waves-effect waves-light blue">Kembali</a>
  </form>
  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>

</html>