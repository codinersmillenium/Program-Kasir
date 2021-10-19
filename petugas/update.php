<?php
 mysql_connect("localhost:3308","root","") or die(mysql_error());
mysql_select_db("toko") or die(mysql_error());
// cek apakah tombol simpan sudah diklik atau blum?
 // ambil data dari formulir
 $id = $_POST['produk'];
 $idbkk = $_POST['idbkk'];
 $jml = $_POST['jumlahkeluar'];
 $stok = $_POST['stock'];

 // buat query update
//$sql = "INSERT INTO barangkeluar(idBKK,tanggalkeluar,idprodk,jumlahkeluar) VALUES ('$kode','$tgl','$id','$stok')";
 $kod = mysql_query("SELECT idprodk from barangkeluar WHERE idBKK='$idbkk'");
 $dt=mysql_fetch_array($kod);
 $y=$dt['idprodk'];
 if ($dt) {
 	# code... 
 $sql = "UPDATE barangkeluar SET idprodk='$id',jumlahkeluar=$jml WHERE idBKK='$idbkk'";
 $query = mysql_query($sql);
 // apakah query update berhasil?
 if( $query ) {
 // kalau berhasil alihkan ke halaman list-siswa.php
 	$kode = mysql_query("SELECT * from barangkeluar WHERE idBKK='$idbkk'");
 	$SELECT=mysql_fetch_array($kode);
 	$x=$SELECT['idprodk'];
 	$j=$SELECT['jumlahkeluar'];
 	$stk = mysql_query("SELECT * from produk WHERE idproduk='".$x."'");
 $q=mysql_fetch_array($stk);
 $hs=$q['stok'];
 $hrg=$q['hargajual'];
$total=$hrg*$j;
 if($hs<$jml) {
 	mysql_query("UPDATE produk set stok=stok+$stok where idproduk='".$x."'");
 	mysql_query("UPDATE barangkeluar SET jumlahkeluar=0 WHERE idBKK='$idbkk'");
 	mysql_query("UPDATE transaksi SET totalbayar=0 WHERE idBKeluar='$idbkk'");
 echo "<script type='text/javascript'>
  alert('stok tidak mencukupi');document.location.href = 'index.php';
  </script>"; 

 }
 else{
 	if ($x==$y) {
 		# code...
 		mysql_query("UPDATE produk set stok=stok+$stok-$jml where idproduk='".$x."'");
 		//mysql_query("UPDATE barangkeluar SET jumlahkeluar=$jml WHERE idBKK='$idbkk'");
 	}
 	else if ($x!=$y) {
        	mysql_query("UPDATE produk set stok=stok-$jml where idproduk='".$x."'");
 		    mysql_query("UPDATE produk set stok=stok+$stok where idproduk='".$y."'");
 		
 		//mysql_query("UPDATE barangkeluar SET jumlahkeluar=$jml WHERE idBKK='$idbkk'");
 	}
 	mysql_query("UPDATE transaksi SET totalbayar='$total' where idBKeluar='$idbkk'");
 header('Location: index.php?status=succes');}
 } else {
 // kalau gagal tampilkan pesan
 echo die(mysql_error());

 }}
?>