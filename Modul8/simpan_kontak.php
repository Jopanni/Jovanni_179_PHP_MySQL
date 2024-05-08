<?php
    include 'admin/koneksi.inc.php';
    //memindahkan nilai data form ke variabel sederhana agar mudah ditulis
    $vnama=$_POST['Nama'];
    $vjkel=$_POST['jkel'];
    $vemail=$_POST['Email'];
    $valamat=$_POST['Alamat'];
    $vkota=$_POST['Kota'];
    $vpesan=$_POST['Pesan'];
    $sql="insert into kontak set nama='$vnama',
            jkel='$vjkel',
            email='$vemail',
            alamat='$valamat',
            kota='$vkota',
            pesan='$vpesan'";
    mysqli_query($conn,$sql) or die("Proses simpan ke database gagal");
    mysqli_close($conn);
    header("location:kontak.php");
?>