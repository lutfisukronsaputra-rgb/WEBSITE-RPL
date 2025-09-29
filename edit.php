<?php
include 'koneksi.php';

// Ambil ID dari URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Ambil data komentar berdasarkan ID
    $sql = "SELECT * FROM komentar WHERE id_komentar = $id";
    $result = mysqli_query($koneksi, $sql);

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
    } else {
        echo "<script>
                alert('Komentar tidak ditemukan!');
                window.location.href='tampil.php';
              </script>";
        exit;
    }
} else {
    echo "<script>
            alert('ID tidak ditemukan!');
            window.location.href='tampil.php';
          </script>";
    exit;
}

// Proses update
if (isset($_POST['btnupdate'])) {
    $nama     = mysqli_real_escape_string($koneksi, $_POST['nama']);
    $email    = mysqli_real_escape_string($koneksi, $_POST['email']);
    $komentar = mysqli_real_escape_string($koneksi, $_POST['komentar']);

    $sql_update = "UPDATE komentar 
                   SET nama='$nama', email='$email', komentar='$komentar' 
                   WHERE id_komentar=$id";

    if (mysqli_query($koneksi, $sql_update)) {
        echo "<script>
                alert('Komentar berhasil diperbarui!');
                window.location.href='tampil.php';
              </script>";
    } else {
        echo "<script>
                alert('Gagal memperbarui komentar!');
                window.location.href='tampil.php';
              </script>";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit Komentar</title>
  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
      background: #e6f0fa;
      padding: 40px;
      color: #0d1b2a;
    }
    .container {
      background: #fff;
      padding: 25px;
      max-width: 500px;
      margin: auto;
      border-radius: 10px;
      box-shadow: 0 3px 8px rgba(0,0,0,0.1);
    }
    h2 {
      text-align: center;
      margin-bottom: 20px;
      color: #3a7ca5;
    }
    label {
      display: block;
      margin-bottom: 6px;
      font-weight: 600;
    }
    input, textarea {
      width: 100%;
      padding: 10px;
      margin-bottom: 15px;
      border-radius: 5px;
      border: 1px solid #ccc;
    }
    button {
      background: #3a7ca5;
      color: white;
      border: none;
      padding: 10px 15px;
      border-radius: 5px;
      cursor: pointer;
      font-size: 1rem;
    }
    button:hover {
      background: #2e6287;
    }
    .back {
      display: inline-block;
      margin-top: 15px;
      color: #3a7ca5;
      text-decoration: none;
    }
  </style>
</head>
<body>

  <div class="container">
    <h2>Edit Komentar</h2>
    <form method="post">
      <label>Nama</label>
      <input type="text" name="nama" value="<?php echo htmlspecialchars($row['nama']); ?>" required>

      <label>Email</label>
      <input type="email" name="email" value="<?php echo htmlspecialchars($row['email']); ?>" required>

      <label>Komentar</label>
      <textarea name="komentar" rows="5" required><?php echo htmlspecialchars($row['komentar']); ?></textarea>

      <button type="submit" name="btnupdate">Update</button>
    </form>
    <a href="tampil.php" class="back">← Kembali</a>
  </div>

</body>
</html>
