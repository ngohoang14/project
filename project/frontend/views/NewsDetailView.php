<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Taki</title>
  <link rel="stylesheet" href="../assets/frontend/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../assets/frontend/css/style.css">
  <link rel="stylesheet" type="text/css" href="../assets/frontend/css/style-sanpham.css">
  <link href="../assets/frontend/fontawesome-free-5.14.0-web/css/all.css" rel="stylesheet"> <!--load all styles -->

</head>
<body>
  <script type="text/javascript" src="../assets/frontend/js/jquery-3.5.1.js"></script>
  <script src="../assets/frontend/js/bootstrap.min.js"></script>
  <div class="mess">
    <a href="https://www.facebook.com/takisalon"><i class="fab fa-facebook-messenger"></i></a>
  </div>
  <?php 
    //load file HeaderView.php
    include "views/HeaderView.php";
  ?>
  <!-- navi -->
  <?php  $category_id = isset($_GET["id"]) ? $_GET["id"] : 0  ?>
  <!-- main -->
  <div class="main" style="display: flex;">
    <style type="text/css">
      .main img{ width: 100%; }
      .main {font-family: Quicksand; font-size: 16px;}
      .news-content{width: 75%; background: white; margin-top: 15px; padding: 20px; border-radius: 5px;}
      .qc{ width: 25%; background: white; margin-top: 15px;}
    </style>
    <div class="news-content">
    <?php echo $record->content; ?>
    </div>
    <div class="qc">
      <img src="../assets/upload/news/qc.jpg" >
      <h5 style="text-align: center;">Quảng cáo</h5>
    </div>
  </div>
  <!-- /main -->
  <!-- footer -->
   <?php 
    //load file FooterView.php
    include "views/FooterView.php";
  ?>
  <!-- /footer -->
  <script type="text/javascript" src="../assets/frontend/js/script.js"></script>
</body>
</html>