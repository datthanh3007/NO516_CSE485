<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet"  href="../bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="../libs/css/btl.css">
</head>
<body>
	<?php
		include_once "../header.php";
		include_once "../config/core.php";
		include_once "login_checker.php";
		// set page title
		$page_title = "thêm sách";
		 
		// include login checker
		 
		// include classes
		include_once '../config/database.php';
		include_once '../objects/user.php';

		if($_POST){
		 
		    // get database connection
		    $database = new Database();
		    $db = $database->getConnection();
		 
		    // initialize objects
		    $user = new User($db);
		    // $stmt = $user->TenbhExists();
		    // set user email to detect if it already exists
		    $user->tenSach= $_POST['tenSach'];
		    // check if email already exists
		    if($user->bookExist()){
		        echo "<div class='alert alert-danger'>";
		            echo "sách này đã có,hãy thử lại !";
		        echo "</div>";
		    }
		    else{
		    	$user->tenSach=$_POST['tenSach'];
                // $user->tenSach='gjgjhgjh';
		        $user->idSach=$_POST['idSach'];
		        $user->tenTheLoai=$_POST['tenTheLoai'];
		        $user->idTheLoai=$_POST['idTheLoai'];
		        $user->noidung=$_POST['noidung'];
		        $user->chuong=$_POST['chuong'];
		        $user->tacgia=$_POST['tacgia'];
		    }
		}

?>
<form action='add_data.php' method='post'>
            
    <!-- <div class="container"> -->
        <div class="col-md-7">
            <form id="song-create-form" action="addsong.php" method="post" class="col-md-12">
                <label for="">
                    Tên sách:
                </label>
                <div>
                <input  name="tenSach" type="text" class='form-control' class="hac-input" autofocus="true" autocomplete="off" placeholder="nhập tên sách" required value="<?php echo isset($_POST['tenSach']) ? htmlspecialchars($_POST['tenSach'], ENT_QUOTES) : "";  ?>" style="width:100%">
                </div>


                <label for="">
                    ID sách:
                </label>
                <div>
                <input  name="idSach" type="text" class='form-control' class="hac-input" autofocus="true" autocomplete="off" placeholder="nhập id" required value="<?php echo isset($_POST['idSach']) ? htmlspecialchars($_POST['idSach'], ENT_QUOTES) : "";  ?>" style="width:100%">
                </div> 

                <label for="bool-lyric">
                    nội dung sách:
                </label>
                <div id="toolbox">
                    <div class="pull-right">
                        <button type="button" id="preview-btn" class="hac-button">
                            <i class="fa fa-eye"></i> Xem trước                        </button>
                    </div>
                </div>
                <textarea name="noidung" class='form-control' required class="hac-input large" rows="10" style="width: 635px;height: 600px;"><?php echo isset($_POST['noidung']) ? htmlspecialchars($_POST['noidung'], ENT_QUOTES) : "";  ?></textarea>

              <!--  <div id="toolbox-bottom">
                    Hợp âm: <span id="chord-list"><span class="search-chord-content"></span></span>
                </div> -->

              <div class="preview-panel">
                <div id="preview-content" class="pre"></div>
              </div> <!-- /.preview-panel -->

                <div>
                    <div class="col-md-5">
                        <label for="book-authors">
                           ID loại sách:
                        </label>
                        <input type="text" class='form-control' class="hac-input artist-autocomplete ui-autocomplete-input" name="idTheLoai" required placeholder="nhập id" value="<?php echo isset($_POST['idTheLoai']) ? htmlspecialchars($_POST['idTheLoai'], ENT_QUOTES) : "";  ?>" autocomplete="off">
                    </div>
                    <div class="col-md-5 ">
                        <label for="song-genres">
                            thể loại:
                        </label>
                        <input type="text" class='form-control' class="genre-autocomplete hac-input ui-autocomplete-input" name="tenTheLoai" required placeholder=" nhập tên thể loại" value="<?php echo isset($_POST['tenTheLoai']) ? htmlspecialchars($_POST['tenTheLoai'], ENT_QUOTES) : "";  ?>" autocomplete="off">
                    </div>
                    <div class="col-md-3">
                        <label for="song-genres">
                            tác giả:
                        </label>
                        <input type="text" class='form-control' class="genre-autocomplete hac-input ui-autocomplete-input" name="tacgia" required placeholder="tên tác giả" value="<?php echo isset($_POST['tacgia']) ? htmlspecialchars($_POST['tacgia'], ENT_QUOTES) : "";  ?>" autocomplete="off">
                    </div>
                    <div class="col-md-3 ">
                        <label for="song-genres">
                           chương:
                        </label>
                        <input type="text" class='form-control' class="genre-autocomplete hac-input ui-autocomplete-input" name="chuong" placeholder="nhập chương" value="<?php echo isset($_POST['chuong']) ? htmlspecialchars($_POST['chuong'], ENT_QUOTES) : "";  ?>" autocomplete="off">
                    </div>
                </div>
          
                <div class="submit-area">
                    <button style="margin-top:20px;" id="submit-btn" type="submit" class='btn btn-lg btn-primary btn-block'>
                        <i class="fa fa-check" style="margin-top:20px;"></i> Đăng   </button>
                </div>
                <!-- <input type="hidden" id="song-chords" name="song-chords" value="">
                <input type="hidden" id="from-request-id" name="from-request-id" value=""> -->
            </form>
        </div>
</form>        
       
<?php
// include page footer HTML
include_once "layout_foot.php";
?>
</body>
</html>