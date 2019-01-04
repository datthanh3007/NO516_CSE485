<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
	<link rel="stylesheet"  href="bootstrap/css/bootstrap.min.css">
</head>
<body>
<?php
require_once "header.php";
?>
	
		
	</table>
        <p class="title" style="font-size: 20px"><b>Thông tin cuốn sách</b></p>
        <?php
       
             require_once "config/database.php";
             //require_once "";
              $database=new database();
              $db=$database->getConnection();
              $id = isset($_GET['id']) ?$_GET['id']:'';
              $sql = "SELECT * FROM sach join theloai on sach.idTheLoai=theloai.idTheLoai WHERE idSach = '$id'";
              $stmt = $db->prepare($sql);
              $stmt->execute();
             // $smst=$db->prepare("SELECT  idsach, tensach, tacgia, tentheloai from sach JOIN theloai on sach.idTheLoai = theloai.idTheLoai where tensach='".""."'");
              // $smst->execute(); 
              //$ifsach=array( );
              echo '<table>
		<tr>
			<th>Tên sách_</th> 
			<th>Tác giả_</th> 
			<th>thể loại</th>
		</tr>';
              while ($rs = $stmt->fetch(PDO::FETCH_ASSOC)) {
              	echo '<tr>
						<td>'.$rs['tenSach'].'</td> 
						<td>'.$rs['tacgia'].'</td> 
						<td>'.$rs['tenTheLoai'].'</td>
						
					</tr>';
              	
	           //$row=array();
	           // $row['tenSach']=(string)$rs["tenSach"];
	           // $row['tentheloai']=$rs["tentheloai"];
	           // $row['tacgia']=$rs["tacgia"];
	           // $ifsach[]=$row;
					echo "<a href='content.php?id=".$rs["idSach"]." '> <button style='margin-left:20px;'>Đọc</button></a>";
              }
              echo "</table>"
             
        ?>


   
</body>
</html>