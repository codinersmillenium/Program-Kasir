 <?php 
 mysql_connect("localhost:3308","root","") or die(mysql_error());
      mysql_select_db("toko") or die(mysql_error());

$nama = (isset($_POST['nama'])) ? $_POST['nama']:null;
$jabatan = (isset($_POST['jabatan'])) ? $_POST['jabatan']:null;

$query ="SELECT * FROM user,roleuser WHERE user.idrole=roleuser.id_role";

if ($nama != null) {
	$query.= " and nama like '%$nama%'";
	# code...
}
if ($email != null) {
	$query.= " and email like '%$email%'";
	# code...
}
if ($alamat != null) {
	$query.= " and alamat like '%$alamat%'";
	# code...
}
if ($jabatan != null) {
	$query.= " and roleuser.id_role='$jabatan'";
	# code...
}

$from_page = (($page-1)*$perpage);
$with_limit = " order by nama asc limit $from_page,$perpage";
$getQuery = mysql_query($query.$with_limit) or die(mysql_error());
$count = mysql_num_rows(mysql_query($query));
$firstpage = 1;
$currentpage = intval($page);
$lastpage = ceil($count/$perpage);
$nextpage = ($currentpage == $lastpage) ? null : $currentpage+1;
$prevpage = ($currentpage == 1 ) ? null : $currentpage-1;

$data = [];
while ($row = (mysql_fetch_array($getQuery))) {
	# code...
	$record = [
		'iduser' => $row['iduser'],
		'nama' => $row['nama'],
		'email' => $row['email'],
		'alamat' => $row['alamat'],
		'jabatan' => $row['nama_role'],
		'username' => $row['username'],
		'password' => $row['password'],
		'idrole' => $row['idrole'],

	];
	array_push($data, $record);
}

$response = [
	'first_page' => $firstpage,
	'current_page' => $currentpage,
	'last_page' => $lastpage,
	'next_page' => $nextpage,
	'prev_page' => $prevpage,
	'per_page' => $perpage,
	'total' => $count,
	'data' => $data
];

header('Content-Type: application/json');
echo json_encode($response);










       ?>