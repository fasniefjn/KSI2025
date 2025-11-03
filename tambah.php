<?php include 'koneksi.php'; ?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah Data Mahasiswa</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container py-5">
  <h2 class="mb-4">Tambah Mahasiswa</h2>
  
  <form method="post" action="">
    <div class="mb-3">
      <label class="form-label">Nama</label>
      <input type="text" name="nama" class="form-control" required>
    </div>
    <div class="mb-3">
      <label class="form-label">NPM</label>
      <input type="text" name="npm" class="form-control" required>
    </div>
    <div class="mb-3">
      <label class="form-label">Prodi</label>
      <input type="text" name="prodi" class="form-control" required>
    </div>
    <button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
    <a href="index.php" class="btn btn-secondary">Kembali</a>
  </form>

  <?php
  if (isset($_POST['simpan'])) {
    $nama = $_POST['nama'];
    $npm = $_POST['npm'];
    $prodi = $_POST['prodi'];

    $sql = "INSERT INTO mahasiswa (nama, npm, prodi) VALUES ('$nama', '$npm', '$prodi')";
    if (mysqli_query($conn, $sql)) {
      echo "<div class='alert alert-success mt-3'>Data berhasil disimpan!</div>";
    } else {
      echo "<div class='alert alert-danger mt-3'>Error: " . mysqli_error($conn) . "</div>";
    }
  }
  ?>
</div>
</body>
</html>
