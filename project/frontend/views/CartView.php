<!-- load file layout chung -->
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
        #smart-search ul{padding:0px; margin:0px; list-style: none; }
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
    <?php if($this->cartNumber() > 0): ?>
<!-- main -->
<?php 
        $numberOfProduct = 0;
        if(isset($_SESSION["cart"])){
          foreach($_SESSION["cart"] as $rows)
            $numberOfProduct++;
        } 
     ?>
	<div class="mainCart">
		<div class="leftCart">
			<form action="index.php?controller=cart&action=update" method="post">
			<div class="title"><h5>Giỏ hàng của bạn (<?php echo $numberOfProduct; ?> sản phẩm)</h5></div>
			<div class="cartContent">
				<?php foreach($_SESSION["cart"] as $rows): ?>
				<div class="productBox">
					<div class="imgPro"><img src="../assets/upload/products/<?php echo $rows["photo"] ?>" alt=""></div>
					<div class="productDes" style="padding-left: 16px;">
						<div class="productName"><a href="index.php?controller=products&action=detail&id=<?php echo $rows["id"]; ?>"><?php echo $rows["name"] ?></a></div>
						<div class="productBrand"><?php echo $rows["brand"] ?></div>
						<div class="productPrice"><b><?php echo number_format($rows["price"]) ?>₫</b></div>
						<div class="productBeforePrice"><s><?php echo number_format($rows["beforeprice"]) ?>₫</s></div>
						<a href="index.php?controller=cart&action=delete&id=<?php echo $rows["id"]; ?>" data-id="2479395"><div class="xoaPro btn btn-danger"><i class="fas fa-trash"></i></div></a>
						<div class="productQuan"><input type="number" id="qty" min="1" class="input-control" value="<?php echo $rows["number"] ?>" name="product_<?php echo $rows["id"] ?>" required="Không thể để trống"></div>
					</div>
				</div>
			<?php endforeach; ?>
			<a href="index.php?controller=cart&action=destroy" class="btn btn-danger">Xóa toàn bộ</a>
			<a style="margin-left: 10px;" href="index.php?controller=products" class="btn btn-info float-right">Tiếp tục mua hàng</a>
			<input type="submit" class="button btn btn-success float-right" value="Cập nhật"></td>
			</div>
		</form>
		</div>
		<!-- /leftCart -->
		<div class="rightCart">
			<div class="title">
				<div><i class="fas fa-shipping-fast text-danger"></i>  Địa điểm giao hàng</div>
				<div><i class="fas fa-map-marker-alt"></i></div>
			</div>
			<div class="thongtindon">
				<div>Thông tin đơn hàng</div>
				<div style="float: right; color: grey;"><?php echo number_format($this->cartTotal()); ?>₫</div>
				<div style="color: grey;">Tạm tính(<?php echo $numberOfProduct; ?> sản phẩm)</div>
				<div style="float: right; color: grey;">0đ</div>
				<div style="color: grey;">Phí giao hàng</div>
				<div>Mã giảm giá</div>
				<div style="float: right; color: grey;">0đ</div>
				<div style="color: grey;">Giảm giá</div>
				<div style="float: right; color: #fe5a3a"><?php echo number_format($this->cartTotal()); ?>₫</div>
				<div>Tổng cộng</div>
				<a href="index.php?controller=cart&action=checkOut"><div style="width: 100%;" class="btn btn-success align-center">Thanh toán giỏ hàng</div></a>
			</div>
		</div>
	</div>
<!-- /main -->
<?php else: ?>
    <div class="mainCart">
    <div class="leftCart">
      <form action="index.php?controller=cart&action=update" method="post">
      <div class="title"><h5>Giỏ hàng của bạn (<?php echo $numberOfProduct; ?> sản phẩm)</h5></div>
      <div class="cartContent">
        <?php if (isset($_GET["notify"])=="checkoutsuccess"): ?>
          <h4 class="text-success">Thanh toán thành công</h4>
          <?php else: ?>
          <h4>Bạn chưa có sản phẩm nào!</h4>
    <?php endif; ?>
      <a style="margin-left: 10px;" href="index.php?controller=products" class="btn btn-info float-right">Tiếp tục mua hàng</a>
      </div>
    </form>
    </div>
    <!-- /leftCart -->
    <div class="rightCart">
      <div class="title">
        <div><i class="fas fa-shipping-fast text-danger"></i>  Địa điểm giao hàng</div>
        <div><i class="fas fa-map-marker-alt"></i></div>
      </div>
      <div class="thongtindon">
        <div>Thông tin đơn hàng</div>
        <div style="float: right; color: grey;"><?php echo number_format($this->cartTotal()); ?>₫</div>
        <div style="color: grey;">Tạm tính(<?php echo $numberOfProduct; ?> sản phẩm)</div>
        <div style="float: right; color: grey;">0đ</div>
        <div style="color: grey;">Phí giao hàng</div>
        <div>Mã giảm giá</div>
        <div style="float: right; color: grey;">0đ</div>
        <div style="color: grey;">Giảm giá</div>
        <div style="float: right; color: #fe5a3a"><?php echo number_format($this->cartTotal()); ?>₫</div>
        <div>Tổng cộng</div>
        <a href="index.php?controller=cart&action=checkOut"><div style="width: 100%;" class="btn btn-success align-center">Thanh toán giỏ hàng</div></a>
      </div>
    </div>
  </div>
<?php endif; ?>
    <!-- /main-sp -->
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
