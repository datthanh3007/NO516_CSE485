<?php
    require_once "../config/database.php";
    $database = new Database();
    $db = $database->getConnection();
    $sosach1trang = 6;
   // $page_layout = isset($_GET['page_layout']) ? $_GET['page_layout'] : '';

    $trang = isset($_GET["trang"])? $_GET["trang"]:'';
    settype($trang, 'int');

    $from = ($trang - 1) * $sosach1trang;

    //$sql = " Select tenSach from Sach limit $from, $sosach1trang "; */
    $idTheLoai=isset($_GET['idTheLoai'])? $_GET['idTheLoai']:'';
    $stmt = $db->prepare("SELECT idSach ,tenSach FROM sach where idTheLoai='kns' limit  $from, $sosach1trang ");
    //$sql2 = " SELECT COUNT(idSach) as dem FROM sach";  
    $stmt->execute(); 
    $sach=array();
    while ($rs = $stmt->fetch(PDO::FETCH_ASSOC)) { // 
           $row=array();
           $row['tenSach']=(string)$rs["tenSach"];
           $row['idSach']=(string)$rs["idSach"];
           $sach[]=$row;
    }
   // $sach->stmt->fetchALL(dpo::fetch_assoc);
   //  var_dump($sach);


    if(count($sach) > 0){
        foreach ($sach as $value){
            echo "<a  href='../ifbook.php?id=".$value["idSach"]."'>" .$value["tenSach"]. "</a><br>";
        }
    }
?>

    
