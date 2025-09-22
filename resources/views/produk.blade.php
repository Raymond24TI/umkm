<?php
$produk = [
    [
        "nama" => "Kerajinan Anyaman Bambu",
        "deskripsi" => "Anyaman bambu tradisional dengan motif khas Nusantara.",
        "harga" => "Rp 150.000",
        "gambar" => "https://tse1.mm.bing.net/th/id/OIP.KhIG7227AWAu2ZA2tkbdgQHaEK?rs=1&pid=ImgDetMain&o=7&rm=3"
    ],
    [
        "nama" => "Ukiran Kayu Jati",
        "deskripsi" => "Ukiran kayu jati asli dengan detail seni tinggi.",
        "harga" => "Rp 450.000",
        "gambar" => "https://3.bp.blogspot.com/-CZscPG1B7AY/U7esFYLz8qI/AAAAAAAAAFo/psyIVEeAPXU/s1600/ramayana+4.jpg"
    ],
    [
        "nama" => "Batik Tulis",
        "deskripsi" => "Batik tulis khas Jawa dengan motif klasik elegan.",
        "harga" => "Rp 350.000",
        "gambar" => "https://jogjaasik.com/wp-content/uploads/2020/10/Batik-Tulis-Custom-Chastra-Oleh-Oleh-Batik-Premium-Asli-Jogja.jpeg"
    ],
    [
        "nama" => "Tas Rotan Bali",
        "deskripsi" => "Tas rotan handmade khas Bali, cocok untuk gaya kasual.",
        "harga" => "Rp 200.000",
        "gambar" => "https://www.harapanrakyat.com/wp-content/uploads/2020/11/Tas-Rotan-Bali-Buat-Tampilan-Menarik-dan-Lebih-Unik.jpg"
    ],
    [
        "nama" => "Keramik Kasongan",
        "deskripsi" => "Keramik khas Kasongan, Yogyakarta, buatan tangan.",
        "harga" => "Rp 300.000",
        "gambar" => "https://cdn.linkumkm.id/library/6/5/3/5/9/65359_840x576.jpeg"
    ],
    [
        "nama" => "Dompet Tenun Ikat",
        "deskripsi" => "Dompet unik berbahan kain tenun ikat tradisional.",
        "harga" => "Rp 120.000",
        "gambar" => "https://i.pinimg.com/originals/c9/fb/08/c9fb08b64765af8d6471645f609a37fd.jpg"
    ],
    [
        "nama" => "Lukisan Batik",
        "deskripsi" => "Lukisan batik modern dengan motif kontemporer.",
        "harga" => "Rp 500.000",
        "gambar" => "https://i.pinimg.com/originals/97/d4/03/97d4039ab3d8339874d798c172b5e4b2.jpg"
    ],
    [
        "nama" => "Lampu Hias Kaleng",
        "deskripsi" => "Lampu hias kreatif hasil daur ulang kaleng.",
        "harga" => "Rp 180.000",
        "gambar" => "https://1.bp.blogspot.com/-HRoBteOUOq0/VlaHjiUGR1I/AAAAAAAAB8Y/xbmPCBtXUMs/s400/lentera%2Bsederhana%2Bdari%2Bkaleng%2Bbekas.jpg"
    ],
];
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Katalog UMKM Kerajinan Tangan</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
      background-color: #f8f5f0;
    }
    /* Hero dengan background kayu/batik */
    .hero {
      background: url('https://www.toptal.com/designers/subtlepatterns/uploads/wood_pattern.png') center/cover no-repeat;
      position: relative;
      color: white;
      padding: 120px 20px;
    }
    .hero::after {
      content: "";
      position: absolute;
      top:0; left:0; right:0; bottom:0;
      background: rgba(0,0,0,0.6);
    }
    .hero-content {
      position: relative;
      z-index: 1;
    }
    /* Card Produk */
    .card {
      border: none;
      border-radius: 12px;
      overflow: hidden;
      transition: transform 0.3s, box-shadow 0.3s;
    }
    .card:hover {
      transform: translateY(-6px);
      box-shadow: 0 10px 25px rgba(0,0,0,0.15);
    }
    .card img {
      height: 200px;
      object-fit: cover;
    }
    .btn-custom {
      background-color: #6f4e37;
      color: white;
      border-radius: 20px;
    }
    .btn-custom:hover {
      background-color: #8b5e3c;
      color: #fff;
    }
    footer {
      background-color: black;
    }
  </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm sticky-top">
  <div class="container">
    <a class="navbar-brand fw-bold" href="#">UMKM Kerajinan</a>
  </div>
</nav>

<!-- Hero -->
<header class="hero text-center">
  <div class="hero-content">
    <h1 class="display-4 fw-bold text-warning">Katalog Produk UMKM</h1>
    <p class="lead">Kreativitas Kerajinan Tangan Indonesia</p>
  </div>
</header>

<!-- Produk -->
<div class="container my-5">
  <div class="row">
    <?php foreach ($produk as $item): ?>
    <div class="col-md-3 mb-4">
      <div class="card h-100 shadow-sm">
        <img src="<?= $item['gambar']; ?>" class="card-img-top" alt="<?= $item['nama']; ?>">
        <div class="card-body">
          <h6 class="card-title fw-bold text-dark"><?= $item['nama']; ?></h6>
          <p class="card-text small text-muted"><?= $item['deskripsi']; ?></p>
          <p class="fw-bold text-success"><?= $item['harga']; ?></p>
        </div>
        <div class="card-footer bg-white text-center">
          <a href="detail"<?= urlencode($item['nama']); ?>" class="btn btn-custom btn-sm">Lihat Detail</a>
        </div>
      </div>
    </div>
    <?php endforeach; ?>
  </div>
</div>

<!-- Footer -->
<footer class="text-light text-center py-3">
  <p class="mb-0">UMKM Kerajinan Tangan | Elegan & Berkualitas</p>
</footer>

</body>
</html>
