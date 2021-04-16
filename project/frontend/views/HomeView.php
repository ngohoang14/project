<!-- load file layout chung -->
<?php $this->layoutPath = "LayoutTrangChu.php"; ?>
 <!-- main -->
  <div class="main">
    <!-- sevices -->
    <div class="sevices">
      <a href="index.php?controller=sevices&action=create"><div class="btn" ><img src="../assets/frontend/images/icon-booking.png"><br>Đặt lịch</div></a>
      <a href="index.php?controller=products"><div class="btn"><img src="../assets/frontend/images/icon-shop.png"><br>Mua hàng</div></a>
      <div class="btn"><img src="../assets/frontend/images/icon-quatang.png"><br>Tin tức</div>
    </div>
    <!-- /sevices -->
    <!-- hot-hair -->
    <div class="hot-hair">
      <nav class="hot-hair-title"><nav class="show-all"><a href="index.php?controller=sevices&action=create">Tất cả</a></nav><h4>MẪU TÓC HOT</h4></nav>
      <div class="container text-center my-3">
    <div id="hotHairCarousel" class="carousel slide w-100" data-ride="carousel">
        <div class="carousel-inner w-100" role="listbox">
            <div class="carousel-item row no-gutters active">
              <?php 
                  $hotSevices1 = $this->modelHotSevices1();
                 ?>
                 <?php foreach($hotSevices1 as $rows): ?>
                <div class="col-3 float-left pophair">
                  <nav class="hair-img">
                    <a  href="index.php?controller=sevices&action=create&id=<?php echo $rows->id; ?>">
                    <nav class="book-now"></nav>
                    <nav class="book-now-text">Đặt lịch ngay</nav>
                    <img class="img-fluid" src="../assets/upload/sevices/<?php echo $rows->photo; ?>" title="<?php echo $rows->name; ?>" alt="<?php echo $rows->name; ?>">
                  </nav>
                    </a> 
                  <nav class="hair-title"><h5><?php echo $rows->name; ?></h5></nav>
                  <nav class="hair-prices">từ <?php echo number_format($rows->minprice); ?> đ</nav>
                </div>
              <?php endforeach; ?>
            </div>
            <div class="carousel-item row no-gutters">
              <?php 
                  $hotSevices2 = $this->modelHotSevices2();
                 ?>
                 <?php foreach($hotSevices2 as $rows): ?>
                <div class="col-3 float-left pophair">
                  <nav class="hair-img">
                    <a  href="index.php?controller=sevices&action=create&id=<?php echo $rows->id; ?>">
                    <nav class="book-now"></nav>
                    <nav class="book-now-text">Đặt lịch ngay</nav>
                    <img class="img-fluid" src="../assets/upload/sevices/<?php echo $rows->photo; ?>" title="<?php echo $rows->name; ?>" alt="<?php echo $rows->name; ?>">
                  </nav>
                    </a> 
                  <nav class="hair-title"><h5><?php echo $rows->name; ?></h5></nav>
                  <nav class="hair-prices">từ <?php echo number_format($rows->minprice); ?> đ</nav>
                </div>
              <?php endforeach; ?>
            </div>
            <div class="carousel-item row no-gutters">
              <?php 
                  $hotSevices3 = $this->modelHotSevices3();
                 ?>
                 <?php foreach($hotSevices3 as $rows): ?>
                <div class="col-3 float-left pophair">
                  <nav class="hair-img">
                    <a  href="index.php?controller=sevices&action=create&id=<?php echo $rows->id; ?>">
                    <nav class="book-now"></nav>
                    <nav class="book-now-text">Đặt lịch ngay</nav>
                    <img class="img-fluid" src="../assets/upload/sevices/<?php echo $rows->photo; ?>" title="<?php echo $rows->name; ?>" alt="<?php echo $rows->name; ?>">
                  </nav>
                    </a> 
                  <nav class="hair-title"><h5><?php echo $rows->name; ?></h5></nav>
                  <nav class="hair-prices">từ <?php echo number_format($rows->minprice); ?> đ</nav>
                </div>
              <?php endforeach; ?>
            </div>
        </div>
        <a id="prev-hair" class="carousel-control-prev" href="#hotHairCarousel" role="button" data-slide="prev" >
            <i class="fas fa-angle-left"></i>
        </a>
        <a id="next-hair" class="carousel-control-next" href="#hotHairCarousel" role="button" data-slide="next" >
            <i class="fas fa-angle-right"></i>
        </a>
        </div>
      </div>
    </div>
    <!-- /hot hair -->
    <!-- hot-sell -->
    <div class="hot-sell">
      <nav class="hot-sell-title"><nav class="show-all"><a href="index.php?controller=products">Tất cả</a></nav><h4>SẢN PHẨM BÁN CHẠY</h4></nav>
      <div class="container text-center my-3">
    <div id="hotSellCarousel" class="carousel slide w-100" data-ride="carousel">
        <div class="carousel-inner w-100" role="listbox">
            <div class="carousel-item row no-gutters active">
              <?php 
                  $hotProducts1 = $this->modelHotProducts1();
                 ?>
                 <?php foreach($hotProducts1 as $rows): ?>
                <div class="float-left">
                  <nav class="sell-img"><a href="index.php?controller=products&action=detail&id=<?php echo $rows->id; ?>"><img src="../assets/upload/products/<?php echo $rows->photo; ?>" title="<?php echo $rows->name; ?>" alt="<?php echo $rows->name; ?>"></a> </nav>
                  <nav class="sell-brand"><?php echo $rows->brand; ?></nav>
                  <nav class="sell-name" style="height: 45px; overflow: hidden;"><?php echo $rows->description; ?></nav>
                  <nav class="sell-prices">Giá: <?php echo number_format($rows->price); ?> đ<br><s class="price-before"><?php if($rows->beforeprice>$rows->price) echo number_format($rows->beforeprice)." đ";?></s></nav>
                </div>
              <?php endforeach; ?>
            </div>
            <div class="carousel-item row no-gutters">
                <?php 
                  $hotProducts2 = $this->modelHotProducts2();
                 ?>
                 <?php foreach($hotProducts2 as $rows): ?>
                <div class="float-left">
                  <nav class="sell-img"><a href="index.php?controller=products&action=detail&id=<?php echo $rows->id; ?>"><img src="../assets/upload/products/<?php echo $rows->photo; ?>" title="<?php echo $rows->name; ?>" alt="<?php echo $rows->name; ?>"></a> </nav>
                  <nav class="sell-brand"><?php echo $rows->brand; ?></nav>
                  <nav class="sell-name" style="height: 45px; overflow: hidden;"><?php echo $rows->description; ?></nav>
                  <nav class="sell-prices">Giá: <?php echo number_format($rows->price); ?> đ<br><s class="price-before"><?php if($rows->beforeprice>$rows->price) echo $rows->beforeprice." đ";?></s></nav>
                </div>
              <?php endforeach; ?>
            </div>
        </div>
        <a id="prev-sell" class="carousel-control-prev" href="#hotSellCarousel" role="button" data-slide="prev" >
            <i class="fas fa-angle-left"></i>
        </a>
        <a id="next-sell" class="carousel-control-next" href="#hotSellCarousel" role="button" data-slide="next" >
            <i class="fas fa-angle-right"></i>
        </a>
        </div>
      </div>
    </div>
    <!-- /hot-sell -->
    <style type="text/css">
      .hot-news{
        width: 100%;
        margin-top: 30px;
        background-color: #f2f2f2;  
        border-radius: 5px;
      }
      #hotNewsCarousel div div div{
        margin: 10px;
        background-color: white;
        border-radius: 5px;
        overflow: hidden;
        width: 23%;
        position: relative;
      }
      #prev-news, #next-news{
        height: 35px; 
        width: 35px; 
        border-radius: 35px; 
        margin:auto;
        background-color: rgba(204, 204, 204, 0.3)
      }
      .news-title{
        margin-top: 10px;
        text-align: left;
        padding: 0 10px;
      }
      .news-img{
        height: 180px;
        overflow: hidden;
      }
      .news-img img{
        height: 100%;
        width: 100%;
      }
      .popnews{
        cursor: pointer;
        height: 235px;
        overflow: hidden;
      }
      .popnews:hover {
        color: #fe5a3a;
      }
    </style>
    <!-- hot-news -->
      <div class="hot-news">
      <nav class="hot-news-title"><nav class="show-all"></nav><h4>TIN MỚI</h4></nav>
      <div class="container text-center my-3" style="padding: 0;">
    <div id="hotNewsCarousel" class="carousel slide w-100" data-ride="carousel">
        <div class="carousel-inner w-100" role="listbox">
            <div class="carousel-item row no-gutters active" style="padding: 0;">
              <?php 
                  $hotNews1 = $this->modelHotNews1();
                 ?>
                 <?php foreach($hotNews1 as $rows): ?>
                <div class="col-3 float-left popnews">
                  <nav class="news-img">
                    <a  href="index.php?controller=news&action=detail&id=<?php echo $rows->id; ?>">
                    <img class="img-fluid" src="../assets/upload/news/<?php echo $rows->photo; ?>" title="<?php echo $rows->name; ?>" alt="<?php echo $rows->name; ?>">
                  </nav>
                    </a> 
                  <nav class="news-title"><h7><?php echo $rows->name; ?></h7></nav>
                </div>
              <?php endforeach; ?>
            </div>
            <div class="carousel-item row no-gutters">
              <?php 
                  $hotNews2 = $this->modelHotNews2();
                 ?>
                 <?php foreach($hotNews2 as $rows): ?>
                <div class="col-3 float-left popnews">
                  <nav class="news-img">
                    <a  href="index.php?controller=news&action=detail&id=<?php echo $rows->id; ?>">
                    <img class="img-fluid" src="../assets/upload/news/<?php echo $rows->photo; ?>" title="<?php echo $rows->name; ?>" alt="<?php echo $rows->name; ?>">
                  </nav>
                    </a> 
                  <nav class="news-title"><h7><?php echo $rows->name; ?></h7></nav>
                </div>
              <?php endforeach; ?>
            </div>
        </div>
        <a id="prev-news" class="carousel-control-prev" href="#hotNewsCarousel" role="button" data-slide="prev" >
            <i class="fas fa-angle-left"></i>
        </a>
        <a id="next-news" class="carousel-control-next" href="#hotNewsCarousel" role="button" data-slide="next" >
            <i class="fas fa-angle-right"></i>
        </a>
        </div>
      </div>
    </div>
    <!-- /hot-news -->
    <!-- comforts -->
    <div class="comforts">
      <div class="title"><h5>TIỆN ÍCH TAKI SALON<h5></div>
      <div class="tienich">
        <?php $utilities = $this->modelUtilities(); ?>
        <?php foreach ($utilities as $rows): ?>
        <nav class="ti"><img src="../assets/upload/utilities/<?php echo $rows->photo; ?>"><br><?php echo $rows->name; ?></nav>
      <?php endforeach; ?>
      </div>
    </div>
    <!-- /comfort -->
  </div>
  <!-- /main -->