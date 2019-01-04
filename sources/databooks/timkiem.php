<?php 
     require_once "config/database.php";
    $database = new Database();
    $db = $database->getConnection();
	$tensach = $_POST['tensach'];
	$sql ="SELECT * FROM sach where tensach='" .$tensach ."'";
	$smst=$db->prepare($sql);
	$smst->execute();
	while ($rs = $smst->fetch(PDO::FETCH_ASSOC)) {
		echo "<a  href='ifbook.php?id=".$rs["idSach"]."'>" .$rs["tenSach"]. "</a><br>";
		
	}
?>