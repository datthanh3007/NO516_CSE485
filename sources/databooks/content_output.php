<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
<?php
	// require_once "header.php";
?>

<?php
	require_once"config/database.php ";
	$database= new database();
	$db=$database->getConnection();
	$id = $_GET['id'];
	$chuong=$_GET['chuong'];
	// $id=isset($_GET['idsach'])? $_GET['idsach']:'';
		// $sql1= "select noidung from noidungsach where idSach = 'b1'and chuong = 'haha'";
	$sql1= "select noidung from noidungsach where idSach = '" .$id ."'and chuong = '" .$chuong ."'";
	$smst=$db->prepare($sql1);
	$smst->execute();
	while($row = $smst->fetch(PDO::FETCH_ASSOC)){ 
	                echo "<p>" .$row['noidung'] ."</p>" ; 
	            }
?>
	
</body>
</html>