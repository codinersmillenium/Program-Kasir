<?php 

mysql_connect("localhost:3308","root","") or die(mysql_error());
mysql_select_db("toko") or die(mysql_error());
session_start();
if (isset($_SESSION['id_user'])) 
{
	# code...
	$id_user = $_SESSION['id_user'];
	$query = mysql_query("SELECT * FROM user WHERE iduser=".$id_user."");
	$user = mysql_fetch_array($query);
	if ($user['status']=="Administrator") {
		$_SESSION['role']=$user['status'];
			$_SESSION['username']=$user['username'];
		header("Location: admin/");
	}
	if ($user['status']=="Pimpinan") {
		# code...
		$_SESSION['role']=$user['status'];
			$_SESSION['username']=$user['username'];
		header("Location: laporan/");
	}
			
}

else{
	header("Location: logout.php");
}

 ?>
<button><a href="logout.php">logout</a></button>