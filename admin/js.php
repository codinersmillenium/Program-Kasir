<?php 
	if (isset($_POST['data'])) {
		echo $_POST['data'];
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="" method="post" id="form">
		<input type="text" name="data" id="data">
	</form>
	<button id="btn">Click me</button>
</body>
	<script>
	function click() {
		var data = document.getElementById("data").value;
		document.getElementById("form").submit();
	}
	var klik = document.getElementById("btn");
	klik.addEventListener("click", click);
	var i;

   </script>
</html> 