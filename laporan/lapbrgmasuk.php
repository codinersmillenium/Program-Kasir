
<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php echo $role; ?> | Dashboard</title>
 <?php include '../part/header.php'; ?>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-yellow navbar-light">
    <!-- Left navbar links -->
<ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>

    </ul>
    <marquee style="font-size: 30px;" >SELAMAT DATANG </marquee>
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <button class="btn-danger"><i class="far fa fa-user-cog"></i></button>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right" style="background-color: red;">
          <a href="profil/" class="dropdown-item">
            <i class="fas fa-user"></i> <strong>Profil User</strong>
          </a>
          <div class="dropdown-divider"></div>
          <a href="../logout.php" class="dropdown-item">
            <i class="fas fa-power-off"></i> <strong>Logout</strong>
          </a>
        </div>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="../asset/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Admin</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../asset/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
           <li class="nav-item">
            <a href="../petugas/index.php" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
            <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Data Master
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
          <li class="nav-item has-treeview">
            <a href="produk.php" class="nav-link">
              <i class="nav-icon far fa-circle"></i>
              <p>
                Data Produk
              </p>
            </a>
            <li class="nav-item has-treeview">
            <a href="supplier.php" class="nav-link">
              <i class="nav-icon far fa-circle"></i>
              <p>
                Data Supplier
              </p>
            </a>
          </ul>
             <li class="nav-item has-treeview">
            <a href="laporan.php" class="nav-link active">
              <i class="nav-icon fa">&#xf080;</i>
              <p>
                Laporan
              </p>
            </a>
          </li>
          </li>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header   <marquee> <h1>Selamat Datang <?php echo $role; ?></h1></marquee>-->
    <?php  mysql_connect("localhost:3308","root","");
 mysql_select_db("toko"); 
 $query = mysql_query("SELECT max(idBKK) as kodeTerbesar FROM barangkeluar");
$data = mysql_fetch_array($query);
$kodeBarang = $data['kodeTerbesar'];
$urutan = (int) substr($kodeBarang, 3, 3);
$urutan++;
$huruf = "BKK";
$kodeBarang = $huruf . sprintf("%03s", $urutan);
 ?>

<div class="container-fluid">
  

 <?php  
 function rupiah($angka){
  
  $hasil_rupiah = "Rp " . number_format($angka,2,',','.');
  return $hasil_rupiah;
 
}
?>         
<form action="" method="GET" name="forminputtanggal" enctype="multipart/form-data">
      <button type="submit" name="cari" class="btn-warning" ><div class="fa fa-search"></div></button>
      <input name="tgl_upload" value="" size="12" placeholder="Tanggal" >&nbsp;<a href="javascript:void(0)" onClick="if(self.gfPop)gfPop.fPopCalendar(document.forminputtanggal.tgl_upload);return false;" ><img name="popcal" align="absmiddle" src="calender/calbtn.gif" width="34" height="22" border="0" alt="" ></a>
       <button>
    <a href="laporan.php">All</a>
  </button>
       <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Laporan Bulanan
  </button>
  <div class="dropdown-menu" style="background-color: yellow;">
    <a class="dropdown-item" href="laporan.php?bulan=01">Januari</a>
    <a class="dropdown-item" href="laporan.php?bulan=02">Februari</a>
    <a class="dropdown-item" href="laporan.php?bulan=03">Maret</a>
    <a class="dropdown-item" href="laporan.php?bulan=04">April</a>
    <a class="dropdown-item" href="laporan.php?bulan=05">Mei</a>
    <a class="dropdown-item" href="laporan.php?bulan=06">Juni</a>
    <a class="dropdown-item" href="laporan.php?bulan=07">Juli</a>
    <a class="dropdown-item" href="laporan.php?bulan=08">Agustus</a>
    <a class="dropdown-item" href="laporan.php?bulan=09">September</a>
    <a class="dropdown-item" href="laporan.php?bulan=10">Oktober</a>
    <a class="dropdown-item" href="laporan.php?bulan=11">November</a>
    <a class="dropdown-item" href="laporan.php?bulan=12">Desember</a>
  </div>
</div>
</form>
<iframe width=174 height=189 name="gToday:normal:agenda.js" id="gToday:normal:agenda.js" src="calender/ipopeng.htm" scrolling="no" frameborder="0" style="visibility:visible; z-index:999; position:absolute; top:-500px; left:-500px;">
</iframe></center>
<!-- Example single danger button -->

<br />                   
  <div class="row">
    <div class="col-sm-9">                
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTables" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th >Tanggal Masuk</th>
                      <th >Kode Barang</th>
                      <th >Nama Barang</th>
                      <th >Jumlah Masuk</th>
                      <th >Nama Supplier</th>
                      <th >Total Beli</th>
                    </tr>
                  </thead>
                   <tbody>
                    <?php 

// format penanggalan di database MySQL
function tgl($tanggal){
// ambil atau pisahkan tanggal, bulan dan tahun
$ambiltahun  = substr($tanggal,0,4); 
$ambilbulan   = substr($tanggal,5,2);
$ambiltanggal = substr($tanggal,8,2); 

// ubah angka bulan menjadi nama bulan
/*if ($ambilbulan=="01")  $namabulan="Januari";
elseif ($ambilbulan=="02")  $namabulan="Februari";
elseif ($ambilbulan=="03")  $namabulan="Maret";
elseif ($ambilbulan=="04")  $namabulan="April";
elseif ($ambilbulan=="05")  $namabulan="Mei";
elseif ($ambilbulan=="06")  $namabulan="Juni";
elseif ($ambilbulan=="07")  $namabulan="Juli";
elseif ($ambilbulan=="08")  $namabulan="Agustus";
elseif ($ambilbulan=="09")  $namabulan="September";
elseif ($ambilbulan=="10")  $namabulan="Oktober";
elseif ($ambilbulan=="11")  $namabulan="November";
elseif ($ambilbulan=="12")  $namabulan="Desember";*/

return "$ambiltanggal-$ambilbulan-$ambiltahun";
}
function bulan($tanggal){
// ambil atau pisahkan tanggal, bulan dan tahun
$ambiltahun  = substr($tanggal,0,4); 
$ambilbulan   = substr($tanggal,5,2);
$ambiltanggal = substr($tanggal,8,2); 

// ubah angka bulan menjadi nama bulan
if ($ambilbulan=="01")  $namabulan="Januari";
elseif ($ambilbulan=="02")  $namabulan="Februari";
elseif ($ambilbulan=="03")  $namabulan="Maret";
elseif ($ambilbulan=="04")  $namabulan="April";
elseif ($ambilbulan=="05")  $namabulan="Mei";
elseif ($ambilbulan=="06")  $namabulan="Juni";
elseif ($ambilbulan=="07")  $namabulan="Juli";
elseif ($ambilbulan=="08")  $namabulan="Agustus";
elseif ($ambilbulan=="09")  $namabulan="September";
elseif ($ambilbulan=="10")  $namabulan="Oktober";
elseif ($ambilbulan=="11")  $namabulan="November";
elseif ($ambilbulan=="12")  $namabulan="Desember";

return "$namabulan";
}
function rp($angka){
  
  $hasil_rupiah = number_format($angka,0,',','.');
  return $hasil_rupiah;
 
}

                      $no=1;
                      if (isset($_GET['cari'])) {
                        $tgl=$_GET['tgl_upload'];
                        if ($tgl=="") {
                           echo "<script type='text/javascript'>
                           alert('Data Kosong');document.location.href = 'laporan.php';
                           </script>";
                          # code...
                        }
                        else{
                          $sql=mysql_query("SELECT * from produk,transaksi,barangkeluar where produk.idproduk=barangkeluar.idprodk and barangkeluar.idBKK=transaksi.idBKeluar and tanggaltransaksi='$tgl'");
                          $q=mysql_query("SELECT tanggaltransaksi,sum(jumlahkeluar) as jml,count(idtransaksi) as kd,sum(totalbayar) as total from produk,transaksi,barangkeluar where produk.idproduk=barangkeluar.idprodk and barangkeluar.idBKK=transaksi.idBKeluar and tanggaltransaksi='$tgl'");
                          $z=mysql_query("SELECT tanggaltransaksi,idproduk,namaproduk,sum(jumlahkeluar) as jml,count(idtransaksi) as kd,sum(totalbayar) as total,stok from produk,transaksi,barangkeluar where produk.idproduk=barangkeluar.idprodk and barangkeluar.idBKK=transaksi.idBKeluar and tanggaltransaksi='$tgl' group by idproduk order by jml desc");
                          $data2 = mysql_fetch_array($q);

                        }
                        # code...
                      }
                      else if (isset($_GET['bulan'])) {
                        $bln=$_GET['bulan'];
                        $cekid = mysql_num_rows(mysql_query("SELECT month(tanggaltransaksi) as bln FROM transaksi WHERE month(tanggaltransaksi)='$bln'"));
                        if ($cekid > 0) {
                          $sql=mysql_query("SELECT * from produk,transaksi,barangkeluar where produk.idproduk=barangkeluar.idprodk and barangkeluar.idBKK=transaksi.idBKeluar and month(tanggaltransaksi)='$bln'");
                            $q=mysql_query("SELECT tanggaltransaksi,sum(jumlahkeluar) as jml,count(idtransaksi) as kd,sum(totalbayar) as total from produk,transaksi,barangkeluar where produk.idproduk=barangkeluar.idprodk and barangkeluar.idBKK=transaksi.idBKeluar and month(tanggaltransaksi)='$bln'");
                            $z=mysql_query("SELECT idproduk,namaproduk,sum(jumlahkeluar) as jml,count(idtransaksi) as kd,sum(totalbayar) as total,stok from produk,transaksi,barangkeluar where produk.idproduk=barangkeluar.idprodk and barangkeluar.idBKK=transaksi.idBKeluar and month(tanggaltransaksi)='$bln' group by idproduk order by jml desc");
                          $data2 = mysql_fetch_array($q);
                        
                          }
                          else{
                             echo "<script type='text/javascript'>
                           alert('Data Kosong');document.location.href = 'laporan.php';
                           </script>";
                          }
                        
                      }
                      else if (!isset($_GET['bulan']) or !isset($_GET['tgl_upload'])) {
                        # code...
                        $sql=mysql_query("SELECT tanggalmasuk,idproduk,namaproduk,jumlahmasuk,(hargaawal*jumlahmasuk) as totalbeli from produk,detbarangmasuk,barangmasuk,supplier where produk.idproduk=detbarangmasuk.idprodukm and barangmasuk.idBMK=detbarangmasuk.kdbrgmsk");
                        $q=mysql_query("SELECT tanggaltransaksi,sum(jumlahkeluar) as jml,count(idtransaksi) as kd,sum(totalbayar) as total from produk,transaksi,barangkeluar where produk.idproduk=barangkeluar.idprodk and barangkeluar.idBKK=transaksi.idBKeluar");
                        $z=mysql_query("SELECT idproduk,namaproduk,sum(jumlahkeluar) as jml,count(idtransaksi) as kd,sum(totalbayar) as total,stok from produk,transaksi,barangkeluar where produk.idproduk=barangkeluar.idprodk and barangkeluar.idBKK=transaksi.idBKeluar group by idproduk order by jml desc");
                          $data2 = mysql_fetch_array($q);
                      }
                      
                      
                      while ($user=mysql_fetch_array($sql)) {
                        //print_r($customer); untuk ngecek aja .. kalau udah muncul teruskan berikut //

                        echo "<tr>";

                        echo "<td>".$no++."</td>";
                        echo "<td>".tgl($user['tanggalmasuk'])."</td>";
                        echo "<td>".$user['idproduk']."</td>";
                        echo "<td>".$user['namaproduk']."</td>";
                        echo "<td>".$user['jumlahmasuk']."</td>";
                       // echo "<td>".$user['nama']."</td>";
                        echo "<td>".rupiah($user['totalbeli'])."</td>";
                        ?>
                        
                          </tr>
                       <?php 
                      }
                     ?>
                  </tbody>
                </table>
              </div></div>

 <div class="col-sm-3 float-sm-right">
          <div class="card mb-4">
      <div class="card-body">
        <?php  

        
         /*$sql=mysql_query("SELECT tanggaltransaksi,sum(jumlahkeluar) as jml,count(idtransaksi) as kd,sum(totalbayar) as total from produk,transaksi,barangkeluar where produk.idproduk=barangkeluar.idprodk and barangkeluar.idBKK=transaksi.idBKeluar where tanggaltransaksi='$tgl'");*/
        
 ?>

         <form role="form" name="form" action="" method="post">
                  <div class="form-group">
                    <button type="button" class="btn-warning float-right" data-toggle="modal" data-target="#updatedata<?php echo $data2['tanggaltransaksi'] ?>">Detail Barang Keluar</button><br>
                    <?php if (isset($_GET['bulan'])) {
                      # code...
                    ?>
                    <label>Date</label>
                    <input type="text" class="" readonly name="nama" id="nama" placeholder="" value="<?php echo bulan($data2['tanggaltransaksi']);?>">
                    <?php }
                    else if (isset($_GET['tgl_upload'])) 
                    {  ?>
                    <label>Date</label>
                    <input type="text" class="" readonly name="nama" id="nama" placeholder="" value="<?php echo tgl($_GET['tgl_upload']);?>">
                     <?php }  
                     else if (!isset($_GET['bulan']) or !isset($_GET['tgl_upload'])) {
                      # code...
                    ?>
                    <label>Date</label>
                    <input type="text" class="" readonly name="nama" id="nama" placeholder="">
                    <?php }?>
                    <label>Jml Brg Keluar</label>
                    <input type='text' class='' readonly name='byr' id='byr' value="<?php echo $data2['jml'];?>" >
                    <label>Jml Transaksi</label>
                    <input type="text" class="" readonly name="hasil" id="hasil" value="<?php echo $data2['kd'];?>">
                    <label>Total</label>
                    <input type="text" class="" readonly name="hasil" id="hasil" value="<?php echo rupiah($data2['total']);?>">
                  </div>
                       
              </form></div></div>
          </div>

           
            </div></div>

      
</div>
</div>
</div>

  </div>


    <!-- Main content -->

    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->

        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
                        <!-- /.card -->
                      
          <!-- right col -->
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<?php include('../part/footer.php'); ?>
<script>
  $(document).ready(function() {
    $('#dataTables').DataTable();
  } );
  $(document).ready(function() {
    $('#dataTables2').DataTable();
  } );
</script>
</body>
</html>
