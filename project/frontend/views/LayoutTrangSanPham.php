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
  <script type="text/javascript">
    function search(){
        var key = document.getElementById('key').value;
        //di chuyen den trang search
        location.href="index.php?controller=search&action=productName&key="+key;
      }
    //--
    function smartSearch(){
        var key = document.getElementById('key').value;
        if(key != ""){
          document.getElementById('smart-search').setAttribute("style","display:block;");
          //---
          $.ajax({
            url: "index.php?controller=search&action=smartSearch&key="+key,
            success: function( result ) {
              $( "#smart-search ul" ).empty();
              $( "#smart-search ul" ).append(result);
            }
          });
          //---
        }else{
          document.getElementById('smart-search').setAttribute("style","display:none;");
        };
        $("#key").keypress(function(event){
        if(event.keyCode == 13){
            $("#keyBtn").click();
        }
        });
      }
      //---
  </script>
      <?php  $category_id = isset($_GET["id"]) ? $_GET["id"] : 0  ?>
  <div class="navi-sp">
    <div class="navi-content">
      <div class="box-timkiem"> 
        <i class="fas fa-search"></i>
        <input id="key" onkeyup="smartSearch();" type="text" name="timSp" placeholder="Tìm kiếm sản phẩm">
        <div id="smart-search">
          <ul>
          </ul>
        </div>
      </div>
    <div id="keyBtn" class="btn tim-sp" onclick="return search();">Tìm kiếm</div> 
    <style type="text/css">
        .navi-content{position: relative;}
        #smart-search ul{padding:0px; margin:0px; list-style: none; height: 500px; overflow-y: scroll; }
        #smart-search ul li{border-bottom: 1px solid #dddddd; }
        #smart-search{position: absolute; width: 99%; z-index: 1; background: white; display: none; margin-top: -13px; border-radius: 5px; overflow: hidden;}
        #smart-search ul li a{color: black;}
        #smart-search ul li a:hover{color: #fe5a3a;}
      </style>
    
  </div>
  </div>
  <!-- /navi -->
  <!-- main -->
  <div class="main">
    <!-- chon san pham nhanh -->
    <div class="chon-nhanh">
      <nav class="cl">
          <a href="index.php?controller=products&action=category&id=10" >
          <nav class="btn">
            <img src="../assets/frontend/images/icon-daugoi.png">
            <p>Dầu gội</p>
          </nav>
        </a>
      </nav>
      <nav class="cl">
        <a href="index.php?controller=products&action=category&id=12" title="">
        <nav class="btn"><img src="../assets/frontend/images/icon-dauxa.png">
          <p>Dầu xả</p>
        </nav>
      </a>
      </nav>
      <nav class="cl">
        <a href="index.php?controller=products&action=category&id=26">
        <nav class="btn"><img src="../assets/frontend/images/icon-combo.png">
        <p>Combo</p></nav>
      </a>
      </nav>
      <nav class="cl">
        <a href="index.php?controller=products&action=category&id=15">
        <nav class="btn"><img src="../assets/frontend/images/icon-tinhdau.png">
        <p>Tinh dầu, kem dưỡng</p></nav>
      </a>
      </nav>
      <nav class="cl">
        <a href="index.php?controller=products&action=category&id=16">
        <nav class="btn"><img src="../assets/frontend/images/icon-tinhchat.png">
        <p>Tinh chất, huyết thanh</p></nav>
      </a>
      </nav>
    </div>
    <!-- /chn san pham nhanh -->
    <!-- main-sp -->
    <div class="mainSp">
      <div class="sort">
      <div class="loai">
        <div class="title">Các ngành hàng</div>
        <div class="loaigi">
          <?php 
                $listProducts = $this->modelListProductsCategories();
               ?>
               <?php foreach($listProducts as $rows): ?>
          <a href="index.php?controller=products&action=category&id=<?php echo $rows->id; ?>"><nav class="item btn"><?php echo $rows->name; ?></nav></a>
          <?php endforeach; ?>   
          <div style="clear: both;"></div>   
        </div>
      </div>
      <script type="text/javascript">
      </script>
      <div class="loai">
        <div class="title">Thương hiệu</div>
        <div class="loaigi">
          <?php 
                $listBrands = $this->modelListBrands();
               ?>
               <?php foreach($listBrands as $rows): ?>
          <a><nav onclick="addSort('&brand=<?php echo $rows->brand; ?>');" class="item btn"><?php echo $rows->brand; ?></nav></a>
          <?php endforeach; ?>   
        </div>
        <div style="clear: both;"></div>     
      </div>
      <div class="loai">
        <div class="title">Giá</div>
        <div>Từ:<input type="number" min="0" value="0" id="fromPrice" class="form-control" /> Đến <input type="number" min="0" value="0" id="toPrice" class="form-control" /></div>
        <div style="border-radius: 5px; width: 100%;" class="tim-sp btn" onclick="location.href = 'index.php?controller=search&action=productPrice&fromPrice=' + document.getElementById('fromPrice').value + '&toPrice=' + document.getElementById('toPrice').value;">Tìm kiếm</div>
      </div>
      <!-- <div class="loai">
        <div class="title">Xếp hạng sao</div>
      </div> -->
      <div class="loai">
        <div class="title">Xuất sứ</div>
        <div class="loaigi">
          <?php 
                $listOrigins = $this->modelListOrigins();
               ?>
               <?php foreach($listOrigins as $rows): ?>
          <a><nav onclick="addSort('&origin=<?php echo $rows->origin; ?>');" class="item btn"><?php echo $rows->origin; ?></nav></a>
          <?php endforeach; ?>       
        </div>
        <div style="clear: both;"></div> 
      </div>
      <div class="loai">
        <div class="title">Thể tích</div>
        <div class="loaigi">
          <?php 
                $listVolumes = $this->modelListVolumes();
               ?>
               <?php foreach($listVolumes as $rows): ?>
          <a><nav onclick="addSort('&volume=<?php echo $rows->volume; ?>');" class="item btn"><?php echo $rows->volume; ?>ml</nav></a>
          <?php endforeach; ?>        
        </div>
        <div style="clear: both;"></div> 
      </div>
    </div>
    <?php echo $this->view; ?>
      </div>
    <!-- /main-sp -->
    <script type="text/javascript">
      function addSort(url){
        var x=location.href;
        x=x+url;
        document.location.href=x;
      }
    </script>
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