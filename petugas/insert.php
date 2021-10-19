<?php
 mysql_connect("localhost:3308","root","") or die(mysql_error());
mysql_select_db("toko") or die(mysql_error());
// cek apakah tombol simpan sudah diklik atau blum?
 // ambil data dari formulir
 //$id = $_POST['id'];
# code...
$id = $_POST['idproduk'];
 $nama = $_POST['nama'];
 $hrg = $_POST['harga'];
 $stok = $_POST['Jumlah'];
 $kode = $_POST['kode'];
 $tgl = date("Y-m-d");
if (isset($_POST['tambah'])) {
 //$total 
 // buat query update
 	$stk = mysql_query("SELECT * from produk WHERE idproduk='".$id."'");
 $q=mysql_fetch_array($stk);
 $hs=$q['stok'];
 
 if($hs<$stok) {
 echo "<script type='text/javascript'>
  alert('stok tidak mencukupi');document.location.href = 'index.php';
  </script>"; 
 }
else if ($id=="") {
	echo "<script type='text/javascript'>
  alert('Data Kosong');document.location.href = 'index.php';
  </script>";
}
 else
 {
 if ($stok=="") {
	echo "<script type='text/javascript'>
  alert('Masukkan jumlah barang keluar');document.location.href = 'index.php?id=$id';
  </script>";
}
 else {
 $sql = "INSERT INTO barangkeluar(idBKK,tanggalkeluar,idprodk,jumlahkeluar) VALUES ('$kode','$tgl','$id','$stok')";
 $query = mysql_query($sql);
 // apakah query update berhasil?
 if( $query ) {
$total = $hrg*$stok;
 	$sql1 = "INSERT INTO transaksi(idtransaksi,tanggaltransaksi,idBKeluar,totalbayar,keterangan) VALUES ('','$tgl','$kode','$total','Belum')";
 	 mysql_query($sql1);
 	 mysql_query("UPDATE produk set stok=stok-$stok where idproduk='".$id."'");
 // kalau berhasil alihkan ke halaman list-siswa.php
 header('Location: index.php?status=succes');
 } else {
 // kalau gagal tampilkan pesan
 echo die(mysql_error());
 }
}}
}
if (isset($_POST['selesai'])) {

 	$sql2 = "UPDATE transaksi set keterangan='Lunas'";
 	 mysql_query($sql2);

 // kalau berhasil alihkan ke halaman list-siswa.php
 header('Location: index.php');

}
?>