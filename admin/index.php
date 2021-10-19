
<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php echo $role; ?> | Dashboard</title>
 <?php include '../part/header.php'; ?>
 <script >
  <?php $no=1; ?>
         function inputdata(){
        var no=1;
        var nom=<?php echo $no++; ?>;
       var n=document.forms['form']['barang'].value;
       var e=document.forms['form']['nama'].value;
       var p=document.forms['form']['hrg'].value;
                                               
       var tabel = document.getElementById("databel");
       var baris = tabel.insertRow(1);
       var kol1 = baris.insertCell(1);
       var kol2 = baris.insertCell(2);
       var kol3 = baris.insertCell(3);
       var kol4 = baris.insertCell(4);
               
       kol1.innerHTML = n;
       kol2.innerHTML = e;
       kol3.innerHTML = p;
       kol4.innerHML ="hapus";
       
      }
      </script>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index.php" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="../asset/dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Brad Diesel
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Call me whenever you can...</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="../asset/dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  John Pierce
                  <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">I got your message bro</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="../asset/dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Nora Silvester
                  <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">The subject goes here</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../logout.php" role="button">
          <i>Logout</i>
        </a>
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
      <span class="brand-text font-weight-light">AdminLTE 3</span>
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
            <a href="index.php" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Data User
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="datauser/datauser.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>List Data</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="datauser/CRUD/Forminput.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Input Data</p>
                </a>
              </li>
            </ul>
             <li class="nav-item has-treeview">
            <a href="mailbox/mailbox.php" class="nav-link">
              <i class="nav-icon far fa-envelope"></i>
              <p>
                Mailbox
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
    <?php  mysql_connect("localhost","root","");
 mysql_select_db("menu"); ?>

<div class="container-fluid">
<div class="row">
<div class="col-sm-4">
<div class="card mb-4">
      <div class="card-header">
        Area Chart Example
      </div>
      <div class="card-body">
         <form role="form" name="form" action="tambahdata.php" method="post">
                  <div class="form-group">
                    <select id="barang" name="barang" onchange="changeValue(this.value)">
          <option>Pilih Produk</option>
          <?php 
            $sql=mysql_query("SELECT * FROM menu");
            $no=1;
            $jsArray = "var prdName = new Array();\n";
            $jsArrayharga = "var harga = new Array();\n";
            while ($data=mysql_fetch_array($sql)) {
           
             echo '<option value="'.$data['idmenu'].'">'.$data['idmenu'].' -- '.$data['nmmenu'].'</option> ';
             $jsArray .= "prdName['" . $data['idmenu'] . "'] = {nama:'" . addslashes($data['nmmenu']) . "'};\n";
             $jsArrayharga .= "harga['" . $data['idmenu'] . "'] = {hrg:'" . addslashes($data['harga']) . "'};\n";
           
            }
           ?>
        </select>  
           </div>
                  <div class="form-group">
                    <input type="text" class="form-control" readonly name="nama" id="nama" placeholder="Nama Barang">
                    <input type="text" class="form-control"  name="no" id="no" placeholder="Nama Barang" value="<?php for ($i=0; $i <20 ; $i++) { 

           } ?>">
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control" readonly name="hrg" id="hrg" placeholder="Harga">
                  </div>
                  <div class="form-group">
                    <label>Jumlah</label>
                    <input type="text" class="form-control" name="Jumlah" placeholder="">
                  </div>
                <div class="card-footer float-right">
                  <button type="button" onClick='inputdata()' class="btn btn-warning">Tambah</button>
                  <button type="reset" class="btn btn-danger">Reset</button>
                </div>
                <button type="submit" class="btn btn-primary btn-lg btn-block">Selesai</button>
              </form></div>
</div>
</div>
<script type="text/javascript">    
    <?php echo $jsArray;echo $jsArrayharga; ?>  
    function changeValue(x){  
    document.getElementById('nama').value = prdName[x].nama;
    document.getElementById('hrg').value = harga[x].hrg;    
    };  
    </script>
<div class="col-sm-6 mt-3">
        <div class="form-group float-right">
          <style type="text/css">
            .textboxclass {
height:40px;
width: 250px;
background-color: yellow;
color: black;
font-size: 30px;
text-align: right;
}
.jml {
height:20px;
width: 20px;
}
          </style>

                    <label>Total</label> <input type="text" class="textboxclass"  name="Jumlah" placeholder="">
                  </div>
              <div class="table-responsive">
                <table class="table table-bordered" id="databel" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th scope="col">Kode Barang</th>
                      <th scope="col">Nama Barang</th>
                      <th scope="col">Harga</th>
                      <th scope="col">Qty</th>
                      <th>Sub Total</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  
       
                </table>
              </div>
            </div>
            <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
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
    <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.0.5
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
</body>
</html>
