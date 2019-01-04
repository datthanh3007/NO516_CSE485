<?php
	// session_start();
	// if(isset($_SESSION['username'])){ }
	// else{
	// 	header("location:user/login.php");
	// }
	$id = $_GET['id'];

?>
<!DOCTYPE html>
<html lang="vi">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
	<script src="jquery/jquery.js"></script>  
    <script>
       $(document).ready(function(){
            $id = $('.btnHienThi').val();
            $chap = $('select').val();
            $.get("content_output.php", {id:$id, chuong:$chap}, function(data){
                $(".content").html(data);
            });
            $(".btnHienThi").click(function(){
                $id = $('.btnHienThi').val();
                $chap = $('select').val();
                $.get("content_output.php", {id:$id, chuong:$chap}, function(data){
                    $(".content").html(data);
                });
            })
        })
    </script> 
</head>
<body>
	<?php
	require_once"header.php"
	?>
    
	<?php
	require_once"config/database.php";
	$database=new database();
    $db=$database->getConnection();
    $idbook=$_GET['id'];
    $sql="SELECT chuong FROM noidungsach where idSach='$idbook' ";
    $smst=$db->prepare($sql);
    $smst->execute();
    echo "chọn phần đọc: <select>";
    while($row = $smst->fetch(PDO::FETCH_ASSOC)){
                echo '<option>' .$row['chuong'] .'</option>';
            }
    echo " </select>";

    ?>
	<button class='btnHienThi' value="<?php echo $id ?>">Hien Thi</button>
	<div class="content"></div>
</body>
</html> 
