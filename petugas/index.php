
<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php echo $role; ?> | Dashboard</title>
 <?php include '../part/header.php'; 
  ?>
 <script type="text/javascript">
function convertToRupiah(angka)
{
    var rupiah = '';        
    var angkarev = angka.toString().split('').reverse().join('');
    for(var i = 0; i < angkarev.length; i++) if(i%3 == 0) rupiah += angkarev.substr(i,3)+'.';
    return 'Rp. '+rupiah.split('',rupiah.length-1).reverse().join('')+',00';
}
function convertToAngka(no)
{
    return parseInt(no.replace(/,.*|[^0-9]/g, ''), 10);
}
  function saatEnter(inField, e) {
        var charCode;
        if(e && e.which){
            charCode = e.which;
        }else if(window.event){
            e = window.event;
            charCode = e.keyCode;
        }
        if(charCode == 13) {
                var a = document.getElementById('total').value; 
                var b = document.getElementById('byr').value;
                var c = convertToAngka(b);
                var d = convertToAngka(a);
                var total = c - d;
      if (b=='') {
        document.getElementById("hasil").innerHTML=document.getElementById("hasil").value='Transaksi Kosong';
      }
      else if (total<0) {
        document.getElementById("hasil").innerHTML=document.getElementById("hasil").value='Jml Bayar Kurang';
      }
      else{
            document.getElementById("hasil").innerHTML=document.getElementById("hasil").value=convertToRupiah(total);
        }}
    }
 </script>
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
          <button class="dropdown-item" data-toggle="modal" data-target="#exampleModal">
            <i class="fas fa-user"></i> <strong>Profil User</strong>
          </button>
          <div class="dropdown-divider"></div>
          <a href="../logout.php" class="dropdown-item">
            <i class="fas fa-power-off"></i> <strong>Logout</strong>
          </a>
        </div>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->
<?php include '../admin/profil.php'; ?>
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
            <a href="index.php" class="nav-link active">
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
            <a href="../laporan/produk.php" class="nav-link">
              <i class="nav-icon far fa-circle"></i>
              <p>
                Data Produk
              </p>
            </a>
            <li class="nav-item has-treeview">
            <a href="../laporan/produk.php" class="nav-link">
              <i class="nav-icon far fa-circle"></i>
              <p>
                Data Supplier
              </p>
            </a>
          </ul>
             <li class="nav-item has-treeview">
            <a href="../laporan/laporan.php" class="nav-link">
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
<div class="row">
<div class="col-sm-3">
<div class="card mb-4">

  
      <div class="card-header">
        Area Chart Example
      </div>

      <div class="card-body">
        <form method="GET">
          <div class="form-group">
            <div class="input-group">
          <input class="form-control" placeholder="Search for..." id="myInput" name="id" value="<?php if(isset($_GET['id'])){echo $_GET['id'];}?>">
          <div class="input-group-append">
            <button id="myBtn" onclick="pindah('index.php?id=<?php echo $_GET['id'] ?>')">
              <i class="fas fa-search"></i>
            </button>
          </div>
        </div>         
               </div>
            </form>
  <?php 
           //echo "string";$id="<script>document.getElementById('id').value;</script>";
 if (isset($_GET['id'])) {
   # code...

  $id=$_GET['id'];
            $cekid = mysql_num_rows(mysql_query("SELECT * FROM produk WHERE idproduk='$id'"));
if ($cekid > 0) {
  $sql4=mysql_query("SELECT * FROM produk where idproduk='".$id."'");
            $data4=mysql_fetch_array($sql4);
 }
 else{
   # code...
              # code...
              echo "<script type='text/javascript'>
  alert('data Kosong');document.location.href = 'index.php';
  </script>";
 }}

 else if(isset($_GET['status']) or !isset($_GET['id'])) {
  $sql4=mysql_query("SELECT * FROM produk where idproduk='0'");
            $data4=mysql_fetch_array($sql4);
 }

           
            ?>           
         <form role="form" name="form" action="insert.php" method="post">
                  <div class="form-group">
                    <input type="hidden" class="form-control" name="idproduk" value="<?php echo $data4['idproduk']; ?>">
                    <input type="hidden" class="form-control" name="kode" value="<?php echo $kodeBarang; ?>">
                    <input type="text" class="form-control" readonly name="nama" id="nama" placeholder="Nama Barang"value="<?php echo $data4['namaproduk']; ?>">
                  </div>
                  <div class="form-group">
                    <input type="hidden" class="form-control" readonly name="harga" placeholder="Harga" value="<?php echo $data4['hargajual']; ?>">
                    <input type="text" class="form-control" readonly name="hrg" id="hrg" placeholder="Harga" value="<?php echo rupiah($data4['hargajual']); ?>">
                  </div>
                  <div class="form-group">
                    <label>Stok</label>
                    <input type="text" class="form-control" readonly name="sisa" id="sisa" value="<?php echo $data4['stok']; ?>">
                  </div>
                  <div class="form-group">
                    <input type="number" class="form-control" name="Jumlah" placeholder="Jumlah Keluar">
                  </div>
                <div class="card-footer float-right">
                  <button type="submit"  name="tambah" class="btn btn-warning">Tambah</button>
                  <button type="reset" class="btn btn-danger">Reset</button>
                </div>
                <button type="submit" name="selesai" class="btn btn-primary btn-lg btn-block">Selesai</button>
              </form></div>
</div>
</div>
<div class="col-sm-6 mt-3">
        <div class="form-group float-right">
          <style type="text/css">
            .uang {
font-size: 30px;
text-align: right;
}
            .textboxclass {
height:40px;
width: 230px;
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
 <?php  
 function rupiah($angka){
  
  $hasil_rupiah = "Rp " . number_format($angka,2,',','.');
  return $hasil_rupiah;
 
}
function rp($angka){
  
  $hasil_rupiah = number_format($angka,0,',','.');
  return $hasil_rupiah;
 
}
$fq = mysql_query("SELECT sum(hargajual*jumlahkeluar) as byr FROM barangkeluar,produk,transaksi where barangkeluar.idprodk=produk.idproduk and barangkeluar.idBKK=transaksi.idBKeluar and transaksi.keterangan='Belum'");
$data = mysql_fetch_array($fq);
$total = $data['byr'];?>         

                    <label>Total Belanja</label> <input type="text" class="textboxclass" id="total" name="total" readonly value="<?php echo rupiah($total) ?>">
                   
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
                   <tbody>
                    <?php 
                      $no=1;
                      $sql=mysql_query("SELECT idproduk,idBKK,namaproduk,hargajual,jumlahkeluar,(hargajual*jumlahkeluar) as sub from transaksi,barangkeluar,produk where transaksi.idBKeluar=barangkeluar.idBKK and barangkeluar.idprodk=produk.idproduk and transaksi.keterangan='Belum'");
                      while ($user=mysql_fetch_array($sql)) {
                        //print_r($customer); untuk ngecek aja .. kalau udah muncul teruskan berikut //
                        echo "<tr>";

                        echo "<td>".$no++."</td>";
                        echo "<td>".$user['idproduk']."</td>";
                        echo "<td>".$user['namaproduk']."</td>";
                        echo "<td>".rp($user['hargajual'])."</td>";
                        echo "<td>".$user['jumlahkeluar']."</td>";
                        echo "<td>".rp($user['sub'])."</td>";
                        ?>
                        <td>
                          <a href="#" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#updatedata<?php echo $user['idBKK'] ?>"><svg class="bi bi-pencil" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                          <path fill-rule="evenodd" d="M11.293 1.293a1 1 0 011.414 0l2 2a1 1 0 010 1.414l-9 9a1 1 0 01-.39.242l-3 1a1 1 0 01-1.266-1.265l1-3a1 1 0 01.242-.391l9-9zM12 2l2 2-9 9-3 1 1-3 9-9z" clip-rule="evenodd"/>
                          <path fill-rule="evenodd" d="M12.146 6.354l-2.5-2.5.708-.708 2.5 2.5-.707.708zM3 10v.5a.5.5 0 00.5.5H4v.5a.5.5 0 00.5.5H5v.5a.5.5 0 00.5.5H6v-1.5a.5.5 0 00-.5-.5H5v-.5a.5.5 0 00-.5-.5H3z" clip-rule="evenodd"/>
                          </svg></i></a>
                          
                          <a class="btn btn-danger btn-sm " href="delete.php?idbbk=<?php echo $user['idBKK']?>"><svg class="bi bi-trash" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path d="M5.5 5.5A.5.5 0 016 6v6a.5.5 0 01-1 0V6a.5.5 0 01.5-.5zm2.5 0a.5.5 0 01.5.5v6a.5.5 0 01-1 0V6a.5.5 0 01.5-.5zm3 .5a.5.5 0 00-1 0v6a.5.5 0 001 0V6z"/><path fill-rule="evenodd" d="M14.5 3a1 1 0 01-1 1H13v9a2 2 0 01-2 2H5a2 2 0 01-2-2V4h-.5a1 1 0 01-1-1V2a1 1 0 011-1H6a1 1 0 011-1h2a1 1 0 011 1h3.5a1 1 0 011 1v1zM4.118 4L4 4.059V13a1 1 0 001 1h6a1 1 0 001-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z" clip-rule="evenodd"/>
                        </svg></a></td>
                        <div class="modal fade" id="updatedata<?php echo $user['idBKK'] ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel<?php echo $user['idBKK'] ?>" aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content">
      <div class="modal-header">
      <h5 class="modal-title" >Edit Data</h5>
      </div>
                              <div class="modal-body">
                                <form action="update.php" method="POST">
<input type="hidden" class="form-control" name="idbkk" value="<?php echo $user['idBKK'] ?>">
<div class="form-group">
<label >Nama Produk</label>
    <select class="form-control" name="produk">
           <option value="<?php echo $user['idproduk'] ?>"><?php echo $user['idproduk'] ?> <strong>--</strong> <?php echo $user['namaproduk'] ?></option>"
           <?php  $produk = mysql_query("SELECT * from produk where idproduk!='".$user['idproduk']."'"); ?>
           <?php while ( $row= mysql_fetch_array($produk)) {
             # code... 
             echo "<option value=".$row['idproduk'].">".$row['idproduk']." -- ".$row['namaproduk']."</option>";
             } ?>

         </select>
  </div>
  <div class="form-group">
    <label >Jumlah Keluar</label>
    <input type="number" class="form-control" name="jumlahkeluar" value="<?php echo $user['jumlahkeluar'] ?>">
    <input type="hidden" class="form-control" name="stock" value="<?php echo $user['jumlahkeluar'] ?>">
  </div>
 <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
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
             <div class="col-sm-3 mt-3 float-sm-right">
          <div class="card mb-4">
      <div class="card-body">
        <?php  $fx = mysql_query("SELECT sum(jumlahkeluar) as jml FROM barangkeluar,transaksi where barangkeluar.idBKK=transaksi.idBKeluar and transaksi.keterangan='Belum'");
$data = mysql_fetch_array($fx);
$jml = $data['jml'];
 ?>
 

            
            
         <form role="form" name="form" action="" method="">
                  <div class="form-group">
                    <label>Jumlah Barang Keluar</label>
                    <input type="text" class="form-control uang" readonly name="nama" id="nama" placeholder="" value="<?php echo $jml;  ?>">
                  </div>
                  <div class="form-group">
                    <?php 
                    if (isset($_GET['status'])) {
                      # code...
                      if ($_GET['status']=="succes") {
                      # code...
                      echo " <label>Jumlah Bayar</label>
                    <input type='text' class='form-control uang' name='byr' id='byr' autofocus='' onkeypress='saatEnter(this, event)'>";
                    }
                    else {
                       echo " <label>Jumlah Bayar</label>
                    <input type='text' class='form-control uang' readonly name='byr' id='byr'>";
                    }
                    }
                    else {
                       echo " <label>Jumlah Bayar</label>
                    <input type='text' class='form-control uang' readonly name='byr' id='byr'>";
                    }
                     ?>
                  </div>
                  <div class="form-group">
                    <label>Kembalian</label>
                    <input type="text" class="textboxclass" readonly name="hasil" id="hasil">
                  </div>
                 
              </form></div></div>
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
     
    
function pindah(url)
{
window.location = url;
}
var input = document.getElementById("myInput");
input.addEventListener("keyup", function(event) {
  if (event.keyCode === 13) {
   event.preventDefault();
   document.getElementById("myBtn").click();
  }
});

   
function pindah(url)
{
window.location = url;
}
var input = document.getElementById("myInput");
input.addEventListener("keyup", function(event) {
  if (event.keyCode === 13) {
   event.preventDefault();
   document.getElementById("myBtn").click();
  }
});

/*function Enter(inField, e) {
        var charCode;
        if(e && e.which){
            charCode = e.which;
        }else if(window.event){
            e = window.event;
            charCode = e.keyCode;
        }
        if(charCode == 13) { 
           var id = document.getElementById('id').value;
           //document.getElementById('id').value = z;
           //id=<?php $id; ?>;
           <?php 
           //echo "string";$id="<script>document.getElementById('id').value;</script>";
           //echo "<script>document.getElementById('id').value;</script>";
           //$sql4=mysql_query("SELECT * FROM produk where idproduk='".$id."'");
            //$data4=mysql_fetch_array($sql4);
             //$n = $data4['namaproduk'];
            ?>
            //var nm ="<?php  $n ?>";
            document.getElementById("name").innerHTML=document.getElementById("name").value=nm;
        }
    } 
*/  
</script>
</body>
</html>
