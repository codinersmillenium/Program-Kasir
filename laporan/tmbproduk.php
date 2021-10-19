
<?php
 mysql_connect("localhost:3308","root","") or die(mysql_error());
mysql_select_db("toko") or die(mysql_error());
// cek apakah tombol simpan sudah diklik atau blum?
 // ambil data dari formulir
 //$id = $_POST['id'];
# code...

 
$kd = $_POST['idbmk'];
if (isset($_POST['produk'])) {
 $nama = $_POST['nama'];
 $hb = $_POST['hb'];
$harga_str = preg_replace("/[^0-9]/", "", $hb);
$hargabeli = (double) $harga_str;
 $hj = $_POST['hj'];
 $harga_str1 = preg_replace("/[^0-9]/", "", $hj);
$hargajual = (double) $harga_str1;
 $kategori = $_POST['kategori'];
 $query = mysql_query("SELECT max(idproduk) as kodeTerbesar FROM produk");
$data = mysql_fetch_array($query);
$id = $data['kodeTerbesar'];
$urutan = (int) substr($kodeBarang, 3, 3);
$urutan++;
if ($kategori==1) {
	$huruf = "MKN";
}
else if ($kategori==2) {
	$huruf = "MNM";
}
else if ($kategori==3) {
	$huruf = "DLL";
}
$id = $huruf . sprintf("%03s", $urutan);
 $sql = "INSERT INTO produk(idproduk,idjenisproduk,namaproduk,hargaawal,hargajual) VALUES ('$id','$kategori','$nama','$hargabeli','$hargajual')";
 $query = mysql_query($sql);
 header('Location: produk.php?status=succes');
}
if (isset($_POST['barang'])) {
$prd = $_POST['prd'];
 $sup = $_POST['sup'];
 $jml = $_POST['stok'];
 $tgl = date("Y-m-d");
 	$sql = "INSERT INTO barangmasuk(idBMK,tanggalmasuk,kdsuplier) VALUES ('$kd','$tgl','$sup')";
 $query = mysql_query($sql);
 if ($query) {
 	$kode = $_POST['idbmk'];
 	$sql1 = "INSERT INTO detbarangmasuk(jumlahmasuk,kdbrgmsk,idprodukm) VALUES ('$jml','$kode','$prd')";
 mysql_query($sql1);
 mysql_query("UPDATE produk set stok=stok+$jml where idproduk='$prd'");
 header('Location: produk.php?status=succes');
 }

}
?>