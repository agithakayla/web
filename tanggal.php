<?php
// Panggil koneksi database
include "koneksidb.php";
$tampil = mysqli_query($koneksidb, "SELECT * FROM tb_pinjam where id = '$_GET[id]'");
$data = mysqli_fetch_array($tampil);
?>


<html>
 <head>
  <title>
   Peminjaman Barang Sarpas
  </title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  
 </head>
 <body class="bg-purple-200" >
  
  <!-- As a link -->
  <nav class="navbar bg-body-tertiary">
  <div class="container-fluid bg-blue-200">
    <a class="navbar-brand">
    <img alt="School logo" class="h-12 w-14 mr-2" height="50" src="logolsekolah.png" width="50"/>
    <div class="flex items-center justify-center">
        <b><a href="halmanutama.php">Peminjaman Barang Sarpas</a></h1></a></b>
  </div>
    <img alt="School logo" class="h-12 w-12 mr-2" height="50" src="0.png" width="50"/>
   </div>
    </nav>
    <br>
    <br>
    <br>
    <div class="flex items-center justify-center">
    <form method="post">

                <div class="d-grid gap-2 col-18 ">
                    <label for="Tanggalpengembalian">Tanggal Pengembalian</label>
                    <input type="date" required name="TangggalPengembalian" class="form-control" value=" <?php echo $data['TangggalPengembalian']; ?>">
                <div class="d-grid gap-2 col-18 ">
                    <button class="bg-blue-300 text-gray-700 py-2 px-4 rounded mb-4" name="btnKirim" type="submit">Kirim</button>
                </div>

                <button class="bg-blue-300 text-gray-700 py-2 px-4 rounded mb-4"><a href="halmanutama.php">Halaman Utama</a></button>

            </div>
        
    </div>
    </form>
 </body>
</html>


<?php
include "koneksidb.php";
// Uji jika tombol ubah diklik
if (isset($_POST['btnKirim'])) {
    // Ambil id dari parameter GET
    $id = $_GET['id'];
    
    // Persiapan ubah data
    $ubah = mysqli_query($koneksidb, "UPDATE tb_pinjam SET
    TangggalPengembalian = '$_POST[TangggalPengembalian]'
    WHERE id = '$id'");

    // Jika ubah sukses
    if ($ubah) {
        echo "<script> alert ('Ubah Data Berhasil');
        document.location='history.php';
        </script>";
    } else {
        echo "<script> alert ('Ubah Data Gagal');
        document.location='tangal.php';
        </script>";
    }
}
?>
