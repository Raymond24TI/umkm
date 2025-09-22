<?php
// Data detail produk Batik
$produk = [
    "nama" => "Batik Tulis Klasik",
    "gambar" => "https://jogjaasik.com/wp-content/uploads/2020/10/Batik-Tulis-Custom-Chastra-Oleh-Oleh-Batik-Premium-Asli-Jogja.jpeg",
    "harga" => "Rp 350.000",
    "deskripsi" => "Batik tulis klasik dengan motif khas Jawa. Dibuat secara manual dengan proses yang teliti dan penuh ketelitian. Setiap guratan lilin pada kain memberikan nilai seni yang tinggi dan menjadikan batik ini unik karena tidak ada dua motif yang benar-benar sama.",
    "bahan" => "Kain katun premium",
    "ukuran" => "200 cm x 115 cm",
    "asal" => "Yogyakarta, Indonesia",
    "lama_proses" => "± 2 minggu pengerjaan",
    "perawatan" => "Cuci menggunakan tangan dengan sabun khusus batik, jangan gunakan pemutih, jemur di tempat teduh.",
    "stok" => 5,
];
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title><?= $produk['nama']; ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }
    .produk-img {
        height: 450px;
        object-fit: cover;
        border-radius: 15px;
    }
    .info-list li {
        margin-bottom: 10px;
    }
  </style>
</head>
<body class="bg-light">

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand fw-bold" href="index.php">UMKM Kerajinan</a>
  </div>
</nav>

<!-- Detail Produk -->
<div class="container my-5">
  <div class="row g-4">
    <div class="col-md-6">
      <img src="<?= $produk['gambar']; ?>" class="img-fluid produk-img shadow" alt="<?= $produk['nama']; ?>">
    </div>
    <div class="col-md-6">
      <h2 class="fw-bold"><?= $produk['nama']; ?></h2>
      <h4 class="text-success fw-bold"><?= $produk['harga']; ?></h4>
      <p class="mt-3"><?= $produk['deskripsi']; ?></p>
      
      <ul class="list-group list-group-flush info-list">
        <li class="list-group-item"><strong>Bahan:</strong> <?= $produk['bahan']; ?></li>
        <li class="list-group-item"><strong>Ukuran:</strong> <?= $produk['ukuran']; ?></li>
        <li class="list-group-item"><strong>Asal:</strong> <?= $produk['asal']; ?></li>
        <li class="list-group-item"><strong>Lama Proses:</strong> <?= $produk['lama_proses']; ?></li>
        <li class="list-group-item"><strong>Perawatan:</strong> <?= $produk['perawatan']; ?></li>
        <li class="list-group-item"><strong>Stok Tersedia:</strong> <?= $produk['stok']; ?> pcs</li>
      </ul>

      <div class="mt-4">
        <a href="produk" class="btn btn-secondary me-2">Kembali ke Katalog</a>
        <a href="#" class="btn btn-primary">Beli Sekarang</a>
      </div>
    </div>
  </div>
</div>

<!-- Footer -->
<footer class="bg-dark text-light text-center py-3">
  <p class="mb-0">2025 UMKM Kerajinan Tangan | Batik Tulis Klasik</p>
</footer>

</body>
</html>
