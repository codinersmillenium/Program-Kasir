
<?php
 mysql_connect("localhost:3308","root","") or die(mysql_error());
mysql_select_db("toko") or die(mysql_error());
// cek apakah tombol simpan sudah diklik atau blum?
 // ambil data dari formulir
 //$id = $_POST['id'];
# code...

if (isset($_POST['editproduk'])) {
 $id = $_POST['idproduk'];
 $nama = $_POST['namaprod'];
  $hrgawal = $_POST['hargaawal'];
 $hj = $_POST['hargajual'];
 $stok = $_POST['stok'];
 $sql = "UPDATE produk set namaproduk='$nama',hargaawal='$hrgawal',hargajual='$hj',stok='$stok' where idproduk='$id'";
 mysql_query($sql);
}
if (isset($_GET['hapus'])) {
$id = $_GET['hapus'];
 $sql = "DELETE from produk where idproduk='$id'";
 mysql_query($sql);
}
 header('Location: produk.php?status=succes');
?>