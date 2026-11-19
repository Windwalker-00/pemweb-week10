<?php
// Ambil data dari form (method POST)
$nama = htmlspecialchars($_POST['nama'] ?? '');   
$tanggal_lahir = $_POST['tanggal_lahir'] ?? '';
$hobi = $_POST['hobi'] ?? [];                     

// Ubah format tanggal: 2006-01-07 -> 7 Januari 2006 
$bulan = [
    1 => 'Januari', 2 => 'Februari', 3 => 'Maret', 4 => 'April',
    5 => 'Mei', 6 => 'Juni', 7 => 'Juli', 8 => 'Agustus',
    9 => 'September', 10 => 'Oktober', 11 => 'November', 12 => 'Desember'
];
$pecah = explode('-', $tanggal_lahir);           
$tanggal_tampil = (int)$pecah[2] . ' ' . $bulan[(int)$pecah[1]] . ' ' . $pecah[0];


// Menggaabungkan hobi dengan koma dan spasi 
if (count($hobi) > 0) {
    $hobi_tampil = htmlspecialchars(implode(', ', $hobi));   
} else {
    $hobi_tampil = 'Tidak ada hobi yang dipilih';
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tampilan Data Anda</title>
  <style>
    body { font-family: Arial, sans-serif; background: #f0f0f0; margin: 0; padding: 40px 20px; }
    .card { max-width: 800px; margin: 0 auto; background: #fff; padding: 30px 40px; border-radius: 12px;
            box-shadow: 0 2px 8px rgba(0,0,0,.15); box-sizing: border-box; }
    h1 { margin-top: 0; padding-bottom: 20px; border-bottom: 1px solid #e5e5e5; }
    table td { padding: 14px 20px 14px 0; font-size: 22px; vertical-align: middle; }
    table td:first-child { font-weight: bold; }
    a { display: inline-block; margin-top: 24px; font-size: 20px; color: #007bff; text-decoration: none; }
  </style>
</head>
<body>
  <div class="card">
    <h1>Tampilan Data Anda</h1>
    <table>
      <tr><td>Nama Lengkap:</td><td><?= $nama ?></td></tr>
      <tr><td>Tanggal Lahir:</td><td><?= $tanggal_tampil ?></td></tr>
      <tr><td>Hobi:</td><td><?= $hobi_tampil ?></td></tr>
    </table>
    <a href="form_data_diri.html">&laquo; Kembali ke Form</a>
  </div>
</body>
</html>