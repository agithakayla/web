<?php
//panggil koneksi terbatas
include "koneksidb.php";
//uji tombol simpan diklik
if(isset($_POST['btnKirim'])){
    //persiapan simpan data
    $nama = $_POST['Nama'];
    $kelas = $_POST['Kelas'];
    $Barang = $_POST['Barang'];
    $tanggal = $_POST['Tanggalpinjam']; // Ubah ke $tanggal

    $Kirim = mysqli_query($koneksidb, "INSERT INTO tb_pinjam(Nama, Kelas, Barang, Tanggalpinjam)
    VALUES
    ('$nama','$kelas','$Barang','$tanggal')");
    
    //jika simpan sukses
    if($Kirim){
        echo "<script> alert ('berhasil kirim')</script>";
        echo "<script> window.location.href='input.php'</script>";
    }
    else {
        echo "<script> alert ('Gagal Kirim')</script>";
        echo "<script> window.location.href='input.php'</script>";
    }
}
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
    <div class="flex items-center justify-center">
    <h1 class="mx-auto text-center" style="font-size: 2rem;">Peminjaman Barang</h1></a>
  </div>
    <img alt="School logo" class="h-12 w-12 mr-2" height="50" src="0.png" width="50"/>
   </div>
    </nav>
    <br>
    <br>
    <div class="flex items-center justify-center">
    <div class="bg-purple-300 card text-center d-grid gap-2 col-18">
  <div class="card-header">
    <b>Input Peminjaman Barang Sarpas</b>
  </div>

    <div class="flex items-center justify-center">
    <form method="post">
                 <div class="d-grid gap-2 col-18 ">
                    <label for="Nama">Nama</label>
                    <input type="text" required name="Nama" class="form-control">
                </div>
                <div class="d-grid gap-2 col-18 ">
                    <label for="Kelas">Kelas</label>
                    <input type="text" required name="Kelas" class="form-control">
                </div>

                <div class="d-grid gap-2 col-18 ">
                    <label for="Barang">Nama Barang</label>
                <input type="text" name="Barang" class = "form-control">
                </div>

                <div class="d-grid gap-2 col-18 ">
                    <label for="Tanggalpinjam">Tanggal pinjam</label>
                    <input type="date" required name="Tanggalpinjam" class="form-control">
             
                
                    
                <div class="d-grid gap-2 col-18 ">
                    <button class="bg-blue-300 text-gray-700 py-2 px-4 rounded mb-4" name="btnKirim" type="submit">Kirim</button>
                </div>

                <button class="bg-blue-300 text-gray-700 py-2 px-4 rounded mb-4"><a href="halmanutama.php">Halaman Utama</a></button>

            </div>
            </div>
        
    </div>
    </form>
 </body>
</html>