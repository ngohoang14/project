  <!-- header -->
  <div class="header sticky-top">
    <div class="logo"><a href="index.php"><img src="../assets/frontend/images/logo.png"></a></div>
    <div class="menu">
      <ul>
        <li class="btn active" ><a href="index.php">TRANG CHỦ</a></li>
        <li class="btn"><a href="index.php?controller=sevices&action=create">LÀM ĐẸP</a>
        </li>
        <style type="text/css" media="screen">
            .menu .sp{ position: relative; }
            .menu .sp ul{position: absolute; margin-left: -280px; width: 500px; display: none; }
            .menu .sp li{
            padding: 0;
            display: inline-block;
            border: 0px solid red;
            height: 30px;
            }
            .menu .sp li a{color: black;}
            .menu .sp:hover ul{ display: block; }
            .menu .sp:hover ul li a{ color: grey; }
            .menu .sp ul li:hover a{ color: #fe5a3a; }
            .menu .sp ul li:hover{background-color: white;}
        </style>
        <li class="btn sp"><a href="index.php?controller=products">SẢN PHẨM</a> 
          <?php 
              //load MVC bang tay
              include "controllers/CategoriesController.php";
              $obj = new CategoriesController();
              $obj->index();
           ?>
        </li>
        <li><a href="#">TIN TỨC</a></li>
      </ul>
    </div>
    <div class="member">
      <?php 
        $numberOfProduct = 0;
        if(isset($_SESSION["cart"])){
          foreach($_SESSION["cart"] as $rows)
            $numberOfProduct++;
        } 
     ?>
     <script type="text/javascript">
       function cart(){
        document.location.href="index.php?controller=cart";
       }
     </script>
      <?php if(isset($_SESSION["customer_email"])): ?>
          <div class="dropdown">
              <button class="dropbtn" onclick="cart();"><i class="fas fa-cart-arrow-down"></i><div class="quantum"><?php echo $numberOfProduct; ?></div></button>
              <div class="dropdown-content" style="margin-left: -170px;">
                <?php if($numberOfProduct>0): ?>
                <?php foreach($_SESSION["cart"] as $rows): ?>
                <div class="miniCart" >
                  <div class="imgMini"><a href="index.php?controller=products&action=detail&id=<?php echo $rows["id"]; ?>"> <img style="height: 70px;" alt="<?php echo $rows["name"]; ?>" src="../assets/upload/products/<?php echo $rows["photo"]; ?>" title="<?php echo $rows["name"]; ?>" class="img-responsive"> </a></div>
                  <div class="miniContent">
                    <a style="padding: 0;" href="index.php?controller=products&action=detail&id=<?php echo $rows["id"]; ?>"><?php echo $rows["name"]; ?></a>
                    <a class="btn-danger" style="color:white; width: 42px; height: 42px; border-radius: 10px; float: right; margin-right: 10px; margin-top: -10px;"  href="index.php?controller=cart&action=delete&id=<?php echo $rows["id"]; ?>" data-id="2479395"><i class="fas fa-trash"></i></a>
                    <div class="miniPrice"> <?php echo $rows["number"]; ?> x <?php echo number_format($rows["price"]); ?>₫</div>
                  </div>
                </div>
                <?php endforeach; ?>
                <?php else: endif; ?>
                <a class="btn btn-info" href="index.php?controller=cart">XEM GIỎ HÀNG</a>
              </div>
          </div>
          <a class="btn register" href="#"><?php echo $_SESSION["customer_name"]; ?></a>
          <div class="btn login"><a style="color: white; text-decoration: none;" href="index.php?controller=account&action=logout">Đăng xuất</a></div>
            
        <?php else: ?>
      <div class="btn register"><a class="btn register" href="index.php?controller=account&action=register">Đăng kí thành viên</a></div>
      <div class="btn login"><a style="color: white; text-decoration: none;" href="index.php?controller=account&action=login">Đăng nhập</a></div>
    <?php endif; ?>
    </div>
<style >
</style>
  </div>
  <!-- /header -->