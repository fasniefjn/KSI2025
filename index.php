<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Data Mahasiswa - KSI2025</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <nav class="navbar navbar-dark bg-primary">
    <div class="container">
      <a class="navbar-brand fw-bold" href="#">KSI2025</a>
    </div>
  </nav>

  <div class="container py-5">
    <h2 class="mb-4 text-center">Daftar Mahasiswa</h2>
    <?php
      $mahasiswa = [
        ["nama" => "Fasni Efwa Juniar", "npm" => "23753016", "prodi" => "Manajemen Informatika"],
        ["nama" => "Nazli Efwa", "npm" => "23752032", "prodi" => "Teknologi Rekayasa Internet"],
        ["nama" => "Khanum", "npm" => "23753030", "prodi" => "Teknologoli Rekayasa Perangkat Lunak"]
      ];
    ?>

    <table class="table table-bordered table-striped">
      <thead class="table-dark">
        <tr>
          <th>No</th>
          <th>Nama</th>
          <th>npm</th>
          <th>prodi</th>
        </tr>
      </thead>
      <tbody>
        <?php $no = 1; foreach($mahasiswa as $mhs): ?>
          <tr>
            <td><?= $no++; ?></td>
            <td><?= $mhs["nama"]; ?></td>
            <td><?= $mhs["npm"]; ?></td>
            <td><?= $mhs["prodi"]; ?></td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>

  <footer class="bg-dark text-white text-center py-3">
    <p class="mb-0">© 2025 KSI2025 | Dibuat oleh Fasni Efwa Juniar</p>
  </footer>
</body>
</html>
