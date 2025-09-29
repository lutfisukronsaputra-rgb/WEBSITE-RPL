<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Galeri - REKAYASA PRANGKAT LUNAK</title>
  <style>
    /* ===== Global ===== */
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    body {
      line-height: 1.6;
      background-color: #e6f0fa;
      color: #0d1b2a;
    }

    a {
      text-decoration: none;
      color: inherit;
    }

    img {
      max-width: 100%;
      height: auto;
      border-radius: 10px;
    }

    /* ===== Header ===== */
    header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 15px 50px;
      background-color: #3a7ca5;
      color: white;
      box-shadow: 0 2px 5px rgba(0,0,0,0.1);
    }

    .logo-title {
      display: flex;
      align-items: center;
      gap: 15px;
    }

    .logo-title h1 {
      font-size: 1.8rem;
    }

    nav ul {
      list-style: none;
      display: flex;
      gap: 25px;
    }

    nav ul li a {
      font-weight: 500;
      padding: 8px 12px;
      border-radius: 4px;
      transition: background-color 0.3s;
    }

    nav ul li a:hover {
      background-color: rgba(255,255,255,0.2);
    }

    /* ===== Article ===== */
    article {
      padding: 60px 50px 30px 50px;
      text-align: center;
    }

    article h2 {
      font-size: 2rem;
      margin-bottom: 40px;
      color: #0d1b2a;
    }

    /* ===== Section / Galeri ===== */
    .gallery {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-around;
      gap: 30px;
      padding: 0 50px 60px 50px;
    }

    .gallery .card {
      background-color: white;
      border-radius: 10px;
      padding: 15px;
      flex: 1 1 300px;
      box-shadow: 0 4px 10px rgba(0,0,0,0.1);
      transition: transform 0.3s, box-shadow 0.3s;
      text-align: center;
    }

    .gallery .card:hover {
      transform: translateY(-5px);
      box-shadow: 0 8px 20px rgba(0,0,0,0.15);
    }

    .gallery .card h3 {
      margin: 15px 0 10px 0;
      color: #0d1b2a;
    }

    .gallery .card p {
      color: #1b263b;
      font-size: 1rem;
    }

    /* ===== Footer ===== */
    footer {
      background-color: #3a7ca5;
      color: white;
      text-align: center;
      padding: 20px;
    }

    footer p {
      font-size: 0.95rem;
    }

    /* ===== Responsive ===== */
    @media (max-width: 768px) {
      header {
        flex-direction: column;
        gap: 15px;
      }

      nav ul {
        flex-direction: column;
        gap: 10px;
      }

      .gallery {
        padding: 0 20px 60px 20px;
      }
    }
  </style>
</head>
<body>

  <!-- ===== Header ===== -->
  <header>
    <div class="logo-title">
      <img src="ChatGPT_Image_25_Sep_2025__17.48.29-removebg-preview.png" alt="Logo Jurusan RPL" width="60">
      <h1>REKAYASA PRANGKAT LUNAK</h1>
    </div>
    <nav>
      <ul>
        <li><a href="index.php">Beranda</a></li>
        <li><a href="profil.php">Profil</a></li>
        <li><a href="galeri.php">Galeri</a></li>
        <li><a href="kontak.php">Kontak</a></li>
      </ul>
    </nav>
  </header>

  <!-- ===== Article ===== -->
  <article>
    <h2>Galeri Kegiatan Jurusan RPL</h2>
    <p>Berikut beberapa momen kegiatan dan kunjungan industri yang dilakukan oleh siswa-siswi Jurusan Rekayasa Perangkat Lunak.</p>
  </article>

  <!-- ===== Galeri Section ===== -->
  <section class="gallery">
    <div class="card">
      <img src="WhatsApp Image 2025-09-25 at 18.04.40_7cb4445b.jpg" alt="Kunjungan Industri Bali">
      <h3>Kunjungan Industri Bali</h3>
      <p>Mempelajari berbagai industri sesuai bidang jurusan RPL.</p>
    </div>
    <div class="card">
      <img src="ddddd.jpg" alt="Tempat Istirahat">
      <h3>Tempat Istirahat</h3>
      <p>Sesi relaksasi dan istirahat selama kegiatan berlangsung.</p>
    </div>
    <div class="card">
      <img src="bbsdsh.jpg" alt="Pantai Pandawa">
      <h3>Bedugul</h3>
      <p>Kegiatan outdoor dan pengenalan lingkungan sekitar selama kunjungan.</p>
    </div>
  </section>

  <footer>
  <h4>Total Pengunjung</h4>
  <?php
  include 'koneksi.php';
  
  $ip = $_SERVER['REMOTE_ADDR']; // ambil IP pengunjung
  $tanggal = date("Y-m-d");

  // cek apakah sudah ada record untuk pengunjung ini hari ini
  $cek_visitor = mysqli_query($koneksi, "SELECT * FROM pengunjung WHERE alamat='$ip' AND tanggal='$tanggal'");
  if (mysqli_num_rows($cek_visitor) == 0) {
      mysqli_query($koneksi, "INSERT INTO pengunjung (alamat, tanggal) VALUES('$ip', '$tanggal')");
  }

  // total semua pengunjung
  $sql = "SELECT COUNT(*) AS total FROM pengunjung";
  $result = mysqli_query($koneksi, $sql);
  $row = mysqli_fetch_assoc($result);

  // total pengunjung hari ini
  $sql_hari_ini = "SELECT COUNT(*) AS total_hari_ini FROM pengunjung WHERE tanggal = '$tanggal'";
  $result_hari_ini = mysqli_query($koneksi, $sql_hari_ini);
  $row_hari_ini = mysqli_fetch_assoc($result_hari_ini);

  echo "Hari ini: " . $row_hari_ini['total_hari_ini'];
  echo "<br>Jumlah pengunjung: " . $row['total'];
  ?>
  <p>&copy; 2025 SMK Bhakti Nusantara - Jurusan Rekayasa Perangkat Lunak</p>
</footer>


</body>
</html>
