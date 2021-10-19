
<?php
 mysql_connect("localhost:3308","root","") or die(mysql_error());
mysql_select_db("toko") or die(mysql_error());
// cek apakah tombol simpan sudah diklik atau blum?
 // ambil data dari formulir
 //$id = $_POST['id'];
# code...

if (isset($_POST['supplier'])) {
 $nama = $_POST['namasup'];
 $alamat = $_POST['alamat'];
 $telp = $_POST['telepon'];
 $email = $_POST['email'];
 $sql = "INSERT INTO supplier(nama,alamat,telepon,email) VALUES ('$nama','$alamat','$telp','$email')";
 mysql_query($sql);
 header('Location: supplier.php?status=succes');
}
if (isset($_POST['edit'])) {
$id = $_POST['kdsup'];
 $nama = $_POST['Nama'];
 $alamat = $_POST['alamat'];
 $telp = $_POST['telepon'];
 $email = $_POST['Email'];
 $sql = "UPDATE supplier set nama='$nama',alamat='$alamat',telepon='$telp',email='$email' where kdsup=$id";
 mysql_query($sql);
 header('Location: supplier.php?status=succes');
}
if (isset($_GET['id'])) {
$id = $_GET['id'];
 $sql = "DELETE from supplier where kdsup=$id";
 mysql_query($sql);
 header('Location: supplier.php?status=succes');
}
?>