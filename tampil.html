<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Komentar Pengunjung - RPL</title>
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
    }

    article h1 {
      text-align: center;
      font-size: 2rem;
      margin-bottom: 30px;
      color: #0d1b2a;
    }

    /* ===== Komentar ===== */
    .komentar-box {
      background: #fff;
      padding: 20px;
      margin-bottom: 15px;
      border-radius: 10px;
      box-shadow: 0 3px 8px rgba(0,0,0,0.1);
    }

    .komentar-box h3 {
      margin-bottom: 10px;
      color: #3a7ca5;
    }

    .komentar-box h3 small {
      font-size: 0.85rem;
      color: #666;
    }

    .komentar-box p {
      font-size: 1rem;
      color: #1b263b;
    }

    .btn-group {
      margin-top: 10px;
      display: flex;
      gap: 10px;
    }

    .btn-edit,
    .btn-hapus {
      padding: 6px 12px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      font-size: 0.9rem;
      color: #fff;
      text-decoration: none;
    }

    .btn-edit {
      background-color: #3a7ca5;
    }

    .btn-edit:hover {
      background-color: #2e6287;
    }

    .btn-hapus {
      background-color: #e74c3c;
    }

    .btn-hapus:hover {
      background-color: #c0392b;
    }

    /* ===== Footer ===== */
    footer {
      background-color: #3a7ca5;
      color: white;
      text-align: center;
      padding: 20px;
      margin-top: 50px;
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

      article {
        padding: 40px 20px 20px 20px;
      }

      .btn-group {
        flex-direction: column;
      }
    }
  </style>
</head>
<body>

  <!-- ===== Header ===== -->
  <header>
    <div class="logo-title">
      <img src="ChatGPT_Image_25_Sep_2025__17.48.29-removebg-preview.png" alt="Logo Jurusan RPL" width="60">
      <h1>REKAYASA PERANGKAT LUNAK</h1>
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

  <!-- ===== Article / Komentar ===== -->
  <article>
    <h1>Komentar Pengunjung</h1>
    <?php
    include 'koneksi.php';
    $sql = "SELECT * FROM komentar ORDER BY tanggal DESC";
    $result = mysqli_query($koneksi, $sql);

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<div class='komentar-box'>";
            echo "<h3>" . htmlspecialchars($row['nama']) . 
                 " <small>(" . htmlspecialchars($row['email']) . ") - " . $row['tanggal'] . "</small></h3>";
            echo "<p>" . htmlspecialchars($row['komentar']) . "</p>";
            echo "<div class='btn-group'>
                    <a href='edit.php?id=" . $row['id_komentar'] . "' class='btn-edit'>Edit</a>
                    <form method='post' action='hapus.php' style='margin:0; display:inline;'>
                        <input type='hidden' name='id_komentar' value='" . $row['id_komentar'] . "'>
                        <button type='submit' name='btnhapus' class='btn-hapus' onclick=\"return confirm('Yakin hapus komentar ini?');\">Hapus</button>
                    </form>
                  </div>";
            echo "</div>";
        }
    } else {
        echo "<p style='text-align:center;'>Belum ada komentar.</p>";
    }
    mysqli_close($koneksi);
    ?>
     <a href="index.php" class="back">← Kembali</a>
  </article>

  <!-- ===== Footer ===== -->
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
