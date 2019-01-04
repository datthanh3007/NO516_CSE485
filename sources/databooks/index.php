<?php  
    include 'config/core.php';
 ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link rel="stylesheet"  href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="libs/css/btl.css">
</head>
<body>
   
    <div id="head">
         <img src=" img/ebook-5.jpg"  width="80px" height="70px" style="float:left;margin-left:80px;margin-top:30px;"> 

         <a href="user/register.php" title="ĐĂNG KÝ" class="as">ĐĂNG KÝ </a> 

         <a href="user/login.php" title="ĐĂNG NHẬP" class="as">ĐĂNG NHẬP</a>
  
   </div>
   
  <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top" >
    <div class="container">
  <a class="navbar-brand" href="index.php">TRANG CHỦ </a>
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



  <div  id="carouselExampleControls" class=" carousel slide" carousel slide " data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block   "  width="1220" height="380" src="img/book1.jpg"  alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block " width="1220" height="380" src="img/book2.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block " width="1220" height="380" src="img/book4.jpg" alt="Third slide">
    </div>
    <div class="carousel-item">
      <img class="d-block " width="1220" height="380" src="img/book.jpg" alt="four slide">
    </div> 
    </div>
  </div>
<!--  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only" >Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a> -->





<div class="container">
   <div class="row mt-3">
      <h2 class="listsp-title">DANH SÁCH</h2>
      <div class="listsp-subtitle " style="margin-left: 100px;">
        <p >NỔI BẬT</p>
      </div>
      <div class="row " style="margin-left: 100px;" >
        <div class="col-md-3 col-sm-6 col-12">
                  <div class="card cardsp" >
                    <img class="card-img-top" src="img/hoadai.jpg" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title"></h5>
                      <div class="card-text">
                      <a class="btn btn-outline-info" href="ifbook.php?id=booktt1 ">XEM TRƯỚC</a> 
                      </div>
                    </div>
                  </div>
        </div>
        <div class="col-md-3 col-sm-6 col-12">
                  <div class="card cardsp" >
                    <img class="card-img-top" style=" height: 218px; " src="img/danhthucconnguoiphithuongtrongban.jpg" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title"></h5>
                      <div class="card-text">
                      <a class="btn btn-outline-info" href="ifbook.php?id=booktt2 ">XEM TRƯỚC</a> 
                      </div>
                    </div>
                  </div>
        </div>
        <div class="col-md-3 col-sm-6 col-12">
                  <div class="card cardsp" >
                    <img class="card-img-top" style=" height: 215px; " src="img/tuduynhanhvacham.jpg" alt="Card image cap">
                    <div class="card-body">
                     <h5 class="card-title"></h5>
                      <div class="card-text">
                      <a class="btn btn-outline-info"href="ifbook.php?id=bookkd1 ">XEM TRƯỚC</a> 
                      </div>
                    </div>
                  </div>
        </div>
        <div class="col-md-3 col-sm-6 col-12">
                  <div class="card cardsp" >
                    <img class="card-img-top" style=" height: 215px; " src="img/7tq.jpg" alt="Card image cap">
                    <div class="card-body">
                     <h5 class="card-title"></h5>
                      <div class="card-text">
                      <a class="btn btn-outline-info"href="ifbook.php?id=bookkd2 ">XEM TRƯỚC</a> 
                      </div>
                    </div>
                  </div>
        </div>
      </div> 
   </div>
    <div class="row mt-3">
      <h2 class="listsp-title"></h2>
      <div class="listsp-subtitle" >
        <p ></p>
      </div>
      <div class="row " style="margin-left: 100px;" >
        <div class="col-md-3 col-sm-6 col-12">
                  <div class="card cardsp" >
                    <img class="card-img-top" style=" height: 230px; " src="img/dacnhantam.jpg" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title"></h5>
                      <div class="card-text">
                      <a class="btn btn-outline-info" href="ifbook.php?id=bookkns1 ">XEM TRƯỚC</a> 
                      </div>
                    </div>
                  </div>
        </div>
        <div class="col-md-3 col-sm-6 col-12">
                  <div class="card cardsp" >
                    <img class="card-img-top"style=" height: 230px; " src="img/nhungngaythoau.jpg" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title"></h5>
                      <div class="card-text">
                      <a class="btn btn-outline-info" href="ifbook.php?id=booktt3 ">XEM TRƯỚC</a> 
                      </div>
                    </div>
                  </div>
        </div>
        <div class="col-md-3 col-sm-6 col-12">
                  <div class="card cardsp" >
                    <img class="card-img-top" style=" height: 230px; " src="img/dieubimat.jpg" alt="Card image cap">
                    <div class="card-body">
                     <h5 class="card-title"></h5>
                      <div class="card-text">
                      <a class="btn btn-outline-info">XEM TRƯỚC</a> 
                      </div>
                    </div>
                  </div>
        </div>
        <div class="col-md-3 col-sm-6 col-12">
                  <div class="card cardsp" >
                    <img class="card-img-top" style=" height: 230px; " src="img/hn36pp.jpg" alt="Card image cap">
                    <div class="card-body">
                     <h5 class="card-title"></h5>
                      <div class="card-text">
                      <a class="btn btn-outline-info">XEM TRƯỚC</a> 
                      </div>
                    </div>
                  </div>
            </div>
          </div> 
       </div>
 <?php
 require_once "footer.php"

 ?>
    
<script src="jquery/jquery.js"></script>
<script src="bootstrap/js/bootstrap.min.js "></script>
</body>
</html>