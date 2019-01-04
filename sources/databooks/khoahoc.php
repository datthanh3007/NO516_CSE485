<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script type="text/javascript"></script>
    <link rel="stylesheet"  href="bootstrap/css/bootstrap.min.css">
    <title>Document</title>
    <script src="jquery/jquery.js"></script>
    <script>
        $(document).ready(function(){
            $.get("khoahoc_ajax.php", {trang:1}, function(data){
                $(".listBook").html(data);
            });
            $dem = 1;
            $(".next").click(function(){
                $dem = $dem + 1;
                $.get("khoahoc_ajax.php", {trang:$dem}, function(data){ 
                    $(".listBook").html(data);
                });
            });
        });
    </script>
</head>
<body>
    <?php
    require_once "header.php";
    ?>
    <div class="containers-listBook">
            <div class="listBook"></div>
            <div class="ctrlPage">
                <button class="next" style="color: #FFFFFF; background-color: #00FF00">Tiếp</button>
      		</div>
	<div>
</body>
</html>
