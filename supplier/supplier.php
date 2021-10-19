
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
    <a href="index.php" class="brand-link">
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
            <li class="nav-item has-treeview menu-open">
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
            <a href="supplier.php" class="nav-link active">
              <i class="nav-icon far fa-circle"></i>
              <p>
                Data Supplier
              </p>
            </a>
          </ul>
             <li class="nav-item has-treeview">
            <a href="laporan.php" class="nav-link">
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
                   <div class="form-group">
            <button class="btn-primary" data-toggle="modal" data-target="#tambahsup">Tambah Data</button></div>
<div class="modal fade" id="tambahsup" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content">
      <div class="modal-header">
      <h5 class="modal-title" >Tambah Data Supplier</h5>
      </div>
                              <div class="modal-body">
                                <form action="aksi.php" method="POST">
  <div class="form-group">
    <label>Nama Supplier</label>
<input type="text" class="form-control" name="namasup" value="">
  </div>
  <div class="form-group">
    <label>Alamat</label>
<input type="text" class="form-control" name="alamat"value="">
  </div>
  <div class="form-group">
    <label>Telepon</label>
<input type="text" class="form-control" name="telepon" value="">
  </div>
  <div class="form-group">
    <label>Email</label>
<input type="email" class="form-control" name="email" value="">
  </div>
 <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" name="supplier" class="btn btn-primary">Save changes</button>
      </div>
</form>
                              </div>
                            </div>
                            </div>
                          </div>

              <div class="table-responsive">
                <table class="table table-bordered" id="dataTables" class="display" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th >Kode Supplier</th>
                      <th >Nama Supplier</th>
                      <th >Alamat</th>
                      <th >Telepon</th>
                      <th >Email</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                   <tbody>
                    <?php 
                      $no=1;
                      $sql=mysql_query("SELECT * from supplier");
                      while ($user=mysql_fetch_array($sql)) {
                        //print_r($customer); untuk ngecek aja .. kalau udah muncul teruskan berikut //
                        echo "<tr>";

                        echo "<td>".$no++."</td>";
                        echo "<td>".$user['kdsup']."</td>";
                        echo "<td>".$user['nama']."</td>";
                        echo "<td>".$user['alamat']."</td>";
                        echo "<td>".$user['telepon']."</td>";
                        echo "<td>".$user['email']."</td>";
                        ?>
                        <td>
                          <a href="#" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#updatedata<?php echo $user['kdsup'] ?>"><svg class="bi bi-pencil" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                          <path fill-rule="evenodd" d="M11.293 1.293a1 1 0 011.414 0l2 2a1 1 0 010 1.414l-9 9a1 1 0 01-.39.242l-3 1a1 1 0 01-1.266-1.265l1-3a1 1 0 01.242-.391l9-9zM12 2l2 2-9 9-3 1 1-3 9-9z" clip-rule="evenodd"/>
                          <path fill-rule="evenodd" d="M12.146 6.354l-2.5-2.5.708-.708 2.5 2.5-.707.708zM3 10v.5a.5.5 0 00.5.5H4v.5a.5.5 0 00.5.5H5v.5a.5.5 0 00.5.5H6v-1.5a.5.5 0 00-.5-.5H5v-.5a.5.5 0 00-.5-.5H3z" clip-rule="evenodd"/>
                          </svg></i></a>
                          
                          <a class="btn btn-danger btn-sm " href="aksi.php?id=<?php echo $user['kdsup']?>"><svg class="bi bi-trash" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path d="M5.5 5.5A.5.5 0 016 6v6a.5.5 0 01-1 0V6a.5.5 0 01.5-.5zm2.5 0a.5.5 0 01.5.5v6a.5.5 0 01-1 0V6a.5.5 0 01.5-.5zm3 .5a.5.5 0 00-1 0v6a.5.5 0 001 0V6z"/><path fill-rule="evenodd" d="M14.5 3a1 1 0 01-1 1H13v9a2 2 0 01-2 2H5a2 2 0 01-2-2V4h-.5a1 1 0 01-1-1V2a1 1 0 011-1H6a1 1 0 011-1h2a1 1 0 011 1h3.5a1 1 0 011 1v1zM4.118 4L4 4.059V13a1 1 0 001 1h6a1 1 0 001-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z" clip-rule="evenodd"/>
                        </svg></a></td>
                        <div class="modal fade" id="updatedata<?php echo $user['kdsup'] ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel<?php echo $user['kdsup'] ?>" aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content">
      <div class="modal-header">
      <h5 class="modal-title" >Edit Data</h5>
      </div>
                              <div class="modal-body">
                                <form action="aksi.php" method="POST">
<input type="hidden" class="form-control" name="kdsup" value="<?php echo $user['kdsup'] ?>">
<div class="form-group">
  <label>Nama Supplier</label>
<input type="text" class="form-control" name="Nama" value="<?php echo $user['nama'] ?>">
  </div>
  <div class="form-group">
    <label>Alamat</label>
<input type="text" class="form-control" name="alamat" value="<?php echo $user['alamat'] ?>">
  </div>
  <div class="form-group">
    <label>Telepon</label>
<input type="text" class="form-control" name="telepon" value="<?php echo $user['telepon'] ?>">
  </div>
  <div class="form-group">
    <label>Email</label>
<input type="Email" class="form-control" name="Email" value="<?php echo $user['email'] ?>">
  </div>
 <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" name="edit" class="btn btn-primary">Save changes</button>
      </div>
</form>
                              </div>
                            </div></tr>
                       <?php 
                      }
                     ?>
                  </tbody>
                </table>
              </div>

            </div>
      
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
  </script>
<script type="text/javascript">
            /* Tanpa Rupiah */
    
    /* Dengan Rupiah */
    //var denga_rupiah = document.getElementById('dengan-rupiah');
    var bayar = document.getElementById('byr');
    bayar.addEventListener('keyup', function(e)
    {
        bayar.value = formatRupiah(this.value, 'Rp. ');
      //  denga_rupiah.value = formatRupiah(this.value);

    });
   
    /* Fungsi */
 
    function formatRupiah(angka, prefix)
    {
        var number_string = angka.replace(/[^,\d]/g, '').toString(),
            split    = number_string.split(','),
            sisa     = split[0].length % 3,
            rupiah     = split[0].substr(0, sisa),
            ribuan     = split[0].substr(sisa).match(/\d{3}/gi);
            
        if (ribuan) {
            separator = sisa ? '.' : '';
            rupiah += separator + ribuan.join('.');
        }
        
        rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
        return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
    }
 
</script>
</body>
</html>
