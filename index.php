<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="shortcut icon" href="img/lifestyleStore.png" />
        <title>Nhóm 4 Store</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- latest compiled and minified CSS -->
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <!-- jquery library -->
        <script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
        <!-- Latest compiled and minified javascript -->
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <!-- External CSS -->
        <link rel="stylesheet" href="css/style.css" type="text/css">
    </head>
    <body>
        <div>
           <?php
           include 'header.php';
            // require 'header.php';

            // headers.add("Access-Control-Allow-Origin", "*");
            // headers.add("Access-Control-Allow-Methods", "*");

            header("Access-Control-Allow-Origin:*");
            header("Access-Control-Allow-Methods:*");
           ?>
           <div id="bannerImage">
               <div class="container">
                   <center>
                   <div id="bannerContent">
                       <h1>Chúng tôi bán phong cách.</h1>
                       <p>GIẢM GIÁ 40% cố định cho tất cả các thương hiệu cao cấp.</p>
                       <a href="products.php" class="btn btn-danger">Mua ngay</a>
                   </div>
                   </center>
               </div>
           </div>
           <div class="container">
               <div class="row">
                   <div class="col-xs-4">
                       <div  class="thumbnail">
                           <a href="products.php">
                                <img src="img/camera.jpg" alt="Camera">
                           </a>
                           <center>
                                <div class="caption">
                                        <p id="autoResize">Máy ảnh</p>
                                        <p>Chọn trong số những thứ tốt nhất hiện có trên thế giới.</p>
                                </div>
                           </center>
                       </div>
                   </div>
                   <div class="col-xs-4">
                       <div class="thumbnail">
                           <a href="products.php">
                               <img src="img/watch.jpg" alt="Watch">
                           </a>
                           <center>
                                <div class="caption">
                                    <p id="autoResize">Đồng hồ</p>
                                    <p>Đồng hồ chính hãng từ những thương hiệu tốt nhất.</p>
                                </div>
                           </center>
                       </div>
                   </div>
                   <div class="col-xs-4">
                       <div class="thumbnail">
                           <a href="products.php">
                               <img src="img/shirt.jpg" alt="Shirt">
                           </a>
                           <center>
                               <div class="caption">
                                   <p id="autoResize">Áo sơ mi</p>
                                   <p>Bộ sưu tập áo sơ mi tinh tế của chúng tôi.</p>
                               </div>
                           </center>
                       </div>
                   </div>
               </div>
           </div>
            <br><br> <br><br><br><br>
           <footer class="footer"> 
               <div class="container">
               <center>
               <p>Copyright &copy Nhóm 4 Store. Tất cả đều đăng ký Bản Quyền. | Liên hệ với chúng tôi: +84 90000 00000</p>
                   <p>Trang web được phát triển bởi Nhóm 4</p>
               </center>
               </div>
           </footer>
        </div>
    </body>
</html>