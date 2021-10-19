<?php
 mysql_connect("localhost:3308","root","") or die(mysql_error());
mysql_select_db("toko") or die(mysql_error());


if(isset($_GET['idbbk'])){

    // ambil id dari query string
    $id = $_GET['idbbk'];
    $kode = mysql_query("SELECT * from barangkeluar WHERE idBKK='$id'");
    $SELECT=mysql_fetch_array($kode);
    $x=$SELECT['idprodk'];
    $j=$SELECT['jumlahkeluar'];
    
    // buat query hapus
    $sql = "DELETE FROM barangkeluar WHERE idBKK='$id'";
    $query = mysql_query($sql);
    // apakah query hapus berhasil?
    if( $query ){
        mysql_query("DELETE FROM transaksi WHERE idBKeluar='$id'");
        mysql_query("UPDATE produk set stok=stok+$j WHERE idproduk='$x'");
        header('Location: index.php?status=succes');
    } else {
        echo die(mysql_error());
    }

} 

?>
