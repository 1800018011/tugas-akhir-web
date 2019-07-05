<html>
<head>

</head>
<body background="belajar.jpg">
<div class="jumbotron">
<!--fungsi php untuk mnampilkan input data-->
<?php
echo "<head><title>DATA BAYAR</head></title>";
$fp = fopen("databayar.txt","a+");
$nama = $_POST['nama'];
$nama_barang = $_POST['nama_barang'];
$jumlah = $_POST['jumlah'];
$harga = $_POST['harga'];
$total = $jumlah*$harga;
$file = $_FILES["file"]["name"];
$tmp_name = $_FILES["file"]["tmp_name"];
move_uploaded_file($tmp_name, "images/".$file);

fputs($fp,"$nama|$nama_barang|$jumlah|$harga|$total|$file\n");
fclose($fp);
echo " Terima Kasih Atas Partisipasi Anda Mengisi Pembayaran<br>";
echo "<a class=btn href=buku.html> Isi Buku Tamu </a><br>";
echo "<a class=btn href=lihat.php> Lihat Profile </a><br> ";
?>
</div>
</body>
</html>