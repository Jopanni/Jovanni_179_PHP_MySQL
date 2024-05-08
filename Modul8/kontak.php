<!DOCTYPE html>
<html>
<head>
    <title>Kontak</title>
</head>
<body>

<h2>Kontak</h2>

<form action="simpan_kontak.php" method="POST">
  <div>
    <label for="nama">Nama:</label><br>
    <input type="text" id="nama" name="Nama" required><br>
  </div>
  <div>
    <label for="jenis_kelamin">Jenis Kelamin:</label><br>
    <input type="radio" id="laki-laki" name="jkel" value="Laki-laki" required>
    <label for="laki-laki">Laki-laki</label>
    <input type="radio" id="perempuan" name="jkel" value="Perempuan" required>
    <label for="perempuan">Perempuan</label><br>
  </div>
  <div>
    <label for="email">Email:</label><br>
    <input type="email" id="email" name="Email"><br>
  </div>
  <div>
    <label for="alamat">Alamat:</label><br>
    <textarea id="alamat" name="Alamat" required></textarea><br>
  </div>
  <div>
    <label for="kota">Kota:</label><br>
    <input type="text" id="kota" name="Kota" required><br>
  </div>
  <div>
    <label for="pesan">Pesan:</label><br>
    <textarea id="pesan" name="Pesan" required></textarea><br>
  </div>
  <div>
    <input type="submit" value="Kirim">
  </div>
</form>

</body>
</html>