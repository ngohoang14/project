<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Taki</title>
  <link rel="stylesheet" href="../assets/frontend/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../assets/frontend/css/style.css">
  <link href="../assets/frontend/fontawesome-free-5.14.0-web/css/all.css" rel="stylesheet">
  <link rel="stylesheet" href="../assets/backend/vendors/core/core.css">
 <!--load all styles -->
</head>
<body>
  <script type="text/javascript" src="../assets/frontend/js/jquery-3.5.1.js"></script>
  <script src="../assets/frontend/js/bootstrap.min.js"></script>
  <div class="mess">
    <a href="../assets/frontend/https://www.facebook.com/takisalon"><i class="fab fa-facebook-messenger"></i></a>
  </div>
  <!-- header -->
  <?php include "HeaderView.php"; ?>
  <!-- /header -->
  <!-- navi -->
  <div class="navi">
    <div class="navi-box">
      <div class="card box1">
        <div class="header">
            <div class="btn bookingf active" id="tab1">
              <i class="fas fa-calendar-alt"></i><br>
              <nav>Đặt lịch nhanh</nav>
            </div>
            <div class="btn shopf" id="tab2">
              <i class="fab fa-shopify"></i><br>
              <nav>Tìm sản phẩm</nav>
            </div> 
        </div>
  <script type="text/javascript">
    function createFast(){
      var phone = document.getElementById('phoneF').value;
      var sevice = document.getElementById('seviceF').value;
      var time = document.getElementById('timeF').value;
      //di chuyen den trang search
      location.href="index.php?controller=home&action=createFast&phone="+phone+"&sevice="+sevice+"&note="+time;
    };
    function search(){
      var key = document.getElementById('searchF').value;
      //di chuyen den trang search
      location.href="index.php?controller=search&action=productName&key="+key;
    };
    function smartSearch2(){
      var key = document.getElementById('searchF').value;
      if(key != ""){
        document.getElementById('smart-search2').setAttribute("style","display:block;");
        //---
        $.ajax({
          url: "index.php?controller=search&action=smartSearch2&key="+key,
          success: function( result ) {
            $( "#smart-search2 ul" ).empty();
            $( "#smart-search2 ul" ).append(result);
          } 
        });
        //---
      }else{
        document.getElementById('smart-search2').setAttribute("style","display:none;");
      };
      $("#searchF").keypress(function(event){
      if(event.keyCode == 13){
        $("#searchIcon").click();
      }
      });
    }
    function smartSevice(){
      var key = document.getElementById('seviceF').value;
      if(key != ""){
        document.getElementById('smartsevice').setAttribute("style","display:block;");
        //---
        $.ajax({
          url: "index.php?controller=search&action=smartSevice&key="+key,
          success: function( result ) {
            $( "#smartsevice ul" ).empty();
            $( "#smartsevice ul" ).append(result);
          } 
        });
        //---
      }else{
        document.getElementById('smartsevice').setAttribute("style","display:none;");
      };
    }
    function getsevice(i){
      var x="smartseviceli"+i;
      var ab=document.getElementById(x);
      document.getElementById("seviceF").value=ab.innerText;
      document.getElementById('smartsevice').setAttribute("style","display:none;");
      
    }
  </script>
    <style type="text/css">
    #smart-search2 ul{
      margin-left: -33px;
      padding-right: 6px;
      max-height: 300px;
      overflow: hidden;
    }
    #smart-search2 ul li{ height: 30px; line-height: 30px; border: 1px solid #dddddd; border-top: none; background: #fafafa; width: 100%; padding: 0 10px; overflow: hidden;}
    #smart-search2 ul li a{ color: black; }
    #smart-search2 ul li a:hover{color: #fe5a3a;}
    #smartsevice ul{
      margin-left: -33px;
      padding-right: 6px;
      max-height: 300px;
      overflow: hidden;
      position: absolute;
      z-index: 1;
    }
    #smartsevice ul li{ height: 30px; line-height: 30px; border: 1px solid #dddddd; border-top: none; background: #fafafa; width: 330px; padding: 0 10px; overflow: hidden; margin-left: 2px;}
    #smartsevice ul li a{ color: black; }
    #smartsevice ul li a:hover{color: #fe5a3a;}
  </style>
        <div class="content-box1">
          <div class="content-booking">
            <div class="phone">
              <i class="fas fa-mobile-alt"></i>
              <input class="form-control pl" id="phoneF" type="text" placeholder="Nhập số điện thoại">
            </div>
            <div class="dichvu">
              <i class="fas fa-list-ul"></i>
              <input type="text" onkeyup="smartSevice();" class="form-control pl" id="seviceF" placeholder="Dịch vụ">
            </div>
            <div id="smartsevice">
              <ul>
              </ul>
            </div>
            <div class="thoigian">
              <i class="far fa-clock"></i>
              <input type="text" class="form-control pl" id="timeF" placeholder="Thời gian">
            </div>
            <div class="btn datlichluon" onclick="createFast();">Đặt lịch ngay</div>
          </div>
          <div class="content-search">
            <div class="search">
              <i id="searchIcon" class="fas fa-search" onclick="return search();"></i>
              <input class="form-control" onkeyup="smartSearch2();" id="searchF" placeholder="Tìm kiếm sản phẩm">
            </div>
            <div id="smart-search2">
              <ul>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <!-- slide banner -->
      <div class="box2">
        <div id="slider">
          <div id="naviCarousel" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#naviCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#naviCarousel" data-slide-to="1"></li>
                <li data-target="#naviCarousel" data-slide-to="2"></li>
                <li data-target="#naviCarousel" data-slide-to="3"></li>
              </ol>
            <div class="carousel-inner">
              <div class="carousel-item active"><img class="d-block w-100" src="../assets/frontend/images/banner1.png" alt="First slide">
              </div>
              <div class="carousel-item"><img class="d-block w-100" src="../assets/frontend/images/banner2.png" alt="Second slide">
              </div>
              <div class="carousel-item"><img class="d-block w-100" src="../assets/frontend/images/banner3.png" alt="Third slide">
              </div>
              <div class="carousel-item"><img class="d-block w-100" src="../assets/frontend/images/banner4.png" alt="fourth slide">
              </div>
            </div>
              <a class="carousel-control-prev" href="#naviCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#naviCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
          </div>
        </div>
      </div>
      <!-- slide banner -->
    </div>
  </div>
  <!-- /navi -->
  <?php echo $this->view; ?>
  <!-- footer -->
  <?php 
    //load file FooterView.php
    include "views/FooterView.php";
  ?>
  <!-- /footer -->
  <script type="text/javascript" src="../assets/frontend/js/script.js"></script>
</body>
</html>