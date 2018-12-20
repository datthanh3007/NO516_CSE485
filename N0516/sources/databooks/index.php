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
    <link rel="stylesheet" href="btl.css">
</head>
<body>
   <header >
    <div id="head">
         <img src=" img/ebook-5.jpg" width="80px" height="70px" style="float:left;margin-left:80px;margin-top:30px;"> 
         <a href="user/register.php" title="ĐĂNG KÝ" class="as">ĐĂNG KÝ </a>
         <a href="user/login.php" title="ĐĂNG NHẬP" class="as">ĐĂNG NHẬP</a>
        <!--  <label class="search" for="inpt_search" >
            <input id="inpt_search" title="TÌM KIẾM" type="text"  />
          </label>  -->
   </div>
   <!--  <div id ="--under">
     <div style="float: right; margin-top:10px;margin-right:18px;"> </div>  
       
    </div> -->
   <!-- <div class="menu">
     <a href="index.php" title="TRANG CHỦ" class="as">TRANG CHỦ</a></li>
     <a href="#" title="SÁCH ĐIỆN TỬ" class="as">SÁCH ĐIỆN TỬ</a></li>   
     <a href="#" title="SÁCH NÓI"class="as" >SÁCH NÓI</a></li>
     <a href="#" title="TRUYỆN TRANH" class="as">TRUYỆN TRANH</a></li>

   </div>
 </div>
</header>  -->  
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
          <a class="dropdown-item" href="#">kinh doanh-làm giàu</a>
          <a class="dropdown-item" href="#">tiểu thuyết-hồi ký</a>
          <!-- <div class="dropdown-divider"></div> -->
         
        </div>
      </li>
      <li class=" dropdown">
        <a class="nav-link " href="#" id="navbarDropdown" >
          SÁCH ĐIỆN TỬ
        </a>
        <div class="dropdown-content" >
          <a class="dropdown-item" href="#">khoa học</a>
          <a class="dropdown-item" href="#">văn hóa-xã hội</a>
          <!-- <div class="dropdown-divider"></div> -->
          <a class="dropdown-item" href="#">kĩ năng sống</a>
          <a class="dropdown-item" href="#">kinh doanh-đầu tư</a>
          <a class="dropdown-item" href="#">thiếu nhi</a>
        </div>
      </li>
     
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="nhập từ khóa" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">TÌM KIẾM</button>
    </form>
  </div>
    </div>
  </nav>



  <div  id="carouselExampleControls" class=" carousel slide" carousel slide " data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="https://via.placeholder.com/1920x530" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="https://via.placeholder.com/1920x530 " alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="https://via.placeholder.com/1920x530" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>




<div class="container">
   <div class="row mt-3">
      <h2 class="listsp-title">SẢN PHẨM</h2>
      <div class="listsp-subtitle " style="margin-left: 100px;">
        <p >DANH MỤC</p>
      </div>
      <div class="row " style="margin-left: 100px;" >
        <div class="col-md-3 col-sm-6 col-12">
                  <div class="card cardsp" >
                    <img class="card-img-top" src="https://via.placeholder.com/150x200" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title">book</h5>
                      <div class="card-text">
                      <a class="btn btn-outline-info">XEM TRƯỚC</a> 
                      </div>
                    </div>
                  </div>
        </div>
        <div class="col-md-3 col-sm-6 col-12">
                  <div class="card cardsp" >
                    <img class="card-img-top" src="https://via.placeholder.com/150x200" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title">book</h5>
                      <div class="card-text">
                      <a class="btn btn-outline-info">XEM TRƯỚC</a> 
                      </div>
                    </div>
                  </div>
        </div>
        <div class="col-md-3 col-sm-6 col-12">
                  <div class="card cardsp" >
                    <img class="card-img-top" src="https://via.placeholder.com/150x200" alt="Card image cap">
                    <div class="card-body">
                     <h5 class="card-title">book</h5>
                      <div class="card-text">
                      <a class="btn btn-outline-info">XEM TRƯỚC</a> 
                      </div>
                    </div>
                  </div>
        </div>
        <div class="col-md-3 col-sm-6 col-12">
                  <div class="card cardsp" >
                    <img class="card-img-top" src="https://via.placeholder.com/150x200" alt="Card image cap">
                    <div class="card-body">
                     <h5 class="card-title">book</h5>
                      <div class="card-text">
                      <a class="btn btn-outline-info">XEM TRƯỚC</a> 
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
                    <img class="card-img-top" src="https://via.placeholder.com/150x200" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title">book</h5>
                      <div class="card-text">
                      <a class="btn btn-outline-info">XEM TRƯỚC</a> 
                      </div>
                    </div>
                  </div>
        </div>
        <div class="col-md-3 col-sm-6 col-12">
                  <div class="card cardsp" >
                    <img class="card-img-top" src="https://via.placeholder.com/150x200" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title">book</h5>
                      <div class="card-text">
                      <a class="btn btn-outline-info">XEM TRƯỚC</a> 
                      </div>
                    </div>
                  </div>
        </div>
        <div class="col-md-3 col-sm-6 col-12">
                  <div class="card cardsp" >
                    <img class="card-img-top" src="https://via.placeholder.com/150x200" alt="Card image cap">
                    <div class="card-body">
                     <h5 class="card-title">book</h5>
                      <div class="card-text">
                      <a class="btn btn-outline-info">XEM TRƯỚC</a> 
                      </div>
                    </div>
                  </div>
        </div>
        <div class="col-md-3 col-sm-6 col-12">
                  <div class="card cardsp" >
                    <img class="card-img-top" src="https://via.placeholder.com/150x200" alt="Card image cap">
                    <div class="card-body">
                     <h5 class="card-title">book</h5>
                      <div class="card-text">
                      <a class="btn btn-outline-info">XEM TRƯỚC</a> 
                      </div>
                    </div>
                  </div>
        </div>
      </div> 
   </div>

    
<script src="jquery/jquery.js"></script>
<script src="bootstrap/js/bootstrap.min.js "></script>
</body>
</html>