<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script type="text/javascript"></script>
    <title>Document</title>
    <link rel="stylesheet" href="../libs/css/btl.css">
    <link rel="stylesheet"  href="../bootstrap/css/bootstrap.min.css">
    <script src="../jquery/jquery.js"></script>
    <script>
        $(document).ready(function(){
            $.get("kinhdoanh_ajax.php", {trang:1}, function(data){
                $(".listBook").html(data);
            });
            $dem = 1;
            $(".next").click(function(){
                $dem = $dem + 1;
                $.get("kinhdoanh_ajax.php", {trang:$dem}, function(data){ 
                    $(".listBook").html(data);
                });
            });
        });
    </script>
</head>
<body>
    <div id="head">
       <img src=" img/ebook-5.jpg"  width="80px" height="70px" style="float:left;margin-left:80px;margin-top:30px;"> 

       <a href="user/register.php" title="ĐĂNG KÝ" class="as">ĐĂNG KÝ </a> 

       <a href="user/login.php" title="ĐĂNG NHẬP" class="as">ĐĂNG NHẬP</a>
       
   </div>
   
   <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top" >
    <div class="container">
      <a class="navbar-brand" href="../index.php">TRANG CHỦ </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
         <li class=" dropdown">
            <a class="nav-link " href="#" id="navbarDropdown" >
              TRUYỆN TRANH
          </a>
          <div class="dropdown-content" >
              <a class="dropdown-item" href="#">manga</a>
              <a class="dropdown-item" href="#">hài hước</a>
              <!-- <div class="dropdown-divider"></div> -->
              <a class="dropdown-item" href="#">cổ tích-dân gian</a>
          </div>
      </li>
      <li class=" dropdown">
        <a class="nav-link " href="#" id="navbarDropdown" >
          SÁCH NÓI
      </a>
      <div class="dropdown-content" >
          <a class="dropdown-item" href="loaisach/kinhdoanh.php">kinh doanh-làm giàu</a>
          <a class="dropdown-item" href="loaisach/tieuthuyet.php">tiểu thuyết-hồi ký</a>
          <!-- <div class="dropdown-divider"></div> -->
          
      </div>
  </li>
  <li class=" dropdown">
    <a class="nav-link " href="#" id="navbarDropdown" >
      SÁCH ĐIỆN TỬ
  </a>
  <div class="dropdown-content" >
      <a class="dropdown-item" href="khoahoc.php">khoa học</a>
      <a class="dropdown-item" href="#">văn hóa-xã hội</a>
      <!-- <div class="dropdown-divider"></div> -->
      <a class="dropdown-item" href="loaisach/kinangsong.php">kĩ năng sống</a>
      <a class="dropdown-item" href="#">thiếu nhi</a>
  </div>
</li>
</ul>
<form class="form-inline my-2 my-lg-0" action="timkiem.php" method="post">
  <input class="form-control mr-sm-2" name="tensach" type="search" placeholder="nhập từ khóa" aria-label="Search">
  <button class="btn btn-outline-success my-2 my-sm-0" type="submit">TÌM KIẾM</button>
    </form>
</div>
</div>
</nav>



    <div class="containers-listBook">
            <div class="listBook"></div>
            <div class="ctrlPage">
                <button class="next" style="color: #FFFFFF; background-color: #00FF00">Tiếp</button>
            </div>
    </div>
</body>
</html>
