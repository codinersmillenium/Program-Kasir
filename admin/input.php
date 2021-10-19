<?php
 mysql_connect("localhost","root","") or die(mysql_error());
mysql_select_db("dbkonsumen") or die(mysql_error());
// cek apakah tombol simpan sudah diklik atau blum?
 // ambil data dari formulir
 //$id = $_POST['id'];
if (isset($_POST['simpan'])) {
	# code...
	$nama = $_POST['nama'];
 $email = $_POST['email'];
 $alamat = $_POST['alamat'];
 $agama = $_POST['agama'];
 // buat query update
 $sql = "INSERT INTO coba(nama,agama,email,alamat) VALUES ('$nama','$agama','$email','$alamat')";
 $query = mysql_query($sql);
 // apakah query update berhasil?
 if( $query ) {
 // kalau berhasil alihkan ke halaman list-siswa.php
 header('Location: coba.html');
 } else {
 // kalau gagal tampilkan pesan
 echo die(mysql_error());
 }
}
 
?>