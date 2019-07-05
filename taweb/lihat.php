<html>
<head>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
</head>

<?php
echo "<head><title>DATA BAYAR</title></head>";
$fp = fopen("databayar.txt","r");
echo "<table border=0>";
while ($isi = fgets($fp,80))
{
$pisah = explode("|",$isi);
echo "<tr><td>Nama Pelanggan</td><td>: $pisah[0]</td></tr>";
echo "<tr><td>Nama Barang </td><td>  : $pisah[1]</td></tr>";
echo "<tr><td>Jumlah </td><td>       : $pisah[2]</td></tr>";
echo "<tr><td>Harga </td><td>        : $pisah[3]</td></tr>";
echo "<tr><td>Total </td><td>        : $pisah[4]</td></tr>";
echo "<tr><td>Bukti </td><td>        : <img src=images/$pisah[5] width=200 height=200 ></td></tr>
<tr><td>&nbsp;<hr></td><td>&nbsp;<hr></td></tr>";
}
echo "</table>";
echo "<a class=btn href=buku.html> Isi Buku tamu </a>";
echo "<a class=btn href=index.php> Profile </a>";
?>

</html>