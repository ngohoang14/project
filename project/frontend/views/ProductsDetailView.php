<!-- load file layout chung -->
<?php $this->layoutPath = "LayoutTrangSanPham.php"; ?> 
  <!-- main-CTSP -->
  <div class="main">
    <!-- muaSP -->
    <style type="text/css" media="screen">
      .sort{ display: none; }
    </style>
    <div class="muaSP">
      <div class="anhSP"> 
          <div class="anh"> 
            <img src="../assets/upload/products/<?php echo $record->photo; ?>" class="img-responsive" id="large-image" itemprop="image" data-zoom-image="../assets/upload/products/<?php echo $record->photo; ?>" alt="<?php echo $record->name; ?>" />
          </div>  
      </div>  
      <div class="muakhong"> 
        <div class="muakhongTitle"> 
          <h5><?php echo $record->description; ?></h5>
        </div>  
        <nav class="float-left">Thương hiệu:&nbsp</nav><nav class="clear-both"><a href="#"><?php echo $record->brand; ?></a></nav>
        <nav>Miễn phí vận chuyển</nav>
        <div class="sell-prices"><?php echo number_format($record->price); ?>đ<br><strike class="price-before"><?php if($record->beforeprice>$record->price) echo number_format($record->beforeprice)."đ";?></strike></div>
        <nav>Khuyến mãi<br></nav>
        <nav class="float-left">Số lượng</nav> 
        <nav class="box-sl clear-both">         
          <input name="quant[1]" class="form-control input-number" value="1" id="quantity" type="number" style="width: 60px;">  
        </nav>
        <nav>Thể tích:<button><?php echo $record->volume; ?>ml</button></nav>
        <a href="index.php?controller=cart&action=checkOut" title=""><div class="btn muangay">MUA NGAY</div></a>
        <a href="#" onclick="addCart();"><div class="btn themvaogio">THÊM VÀO GIỎ</div></a>
        <script type="text/javascript">
        function addCart(){
                var quantity = document.getElementById('quantity').value;
                location.href="index.php?controller=cart&action=createWithNumber&id=<?php echo $record->id; ?>&quantity="+quantity;
        }
        </script>
      </div>  
      <div class="GQL"> 
        <div class="GQL-box"> 
          <div class="GQL-title"><i class="fas fa-shipping-fast text-danger"></i>Giao hàng</div>  
          <div class="QGL-box-content"> 
            <nav><i class="fas fa-map-marker-alt cam"></i>Vị trí của bạn</nav>
            <nav>Giao hàng tiêu chuẩn, 1-2 ngày</nav>
            <div class="bonus-t">Dự kiến giao hàng vào</div>
          </div>
        </div>
        <div class="GQL-box"> 
          <div class="GQL-title">Quyền lợi khách hàng</div>  
          <div class="QGL-box-content"> 
            <?php $benefits = $this->modelGetBenefits(); ?>
            <?php foreach ($benefits as $rows): ?>
            <nav><i class="fas fa-check-circle text-success"></i><?php echo $rows->benefit; ?></nav>
            <div class="bonus-t"><?php echo $rows->note; ?></div>
          <?php endforeach; ?>
          </div>
        </div>
        <?php $contact = $this->modelGetContact(); ?>
        <div class="GQL-box"> 
          <div class="GQL-title">Liên hệ</div>  
          <div class="QGL-box-content"> 
            <nav><i class="fas fa-phone text-success"></i>Hotline đặt hàng <?php echo $contact->hotline; ?></nav>
            <div class="bonus-t">(Cả Thứ 7, Chủ Nhật)</div>
            <nav><i class="fab fa-facebook-f text-primary"></i>Facebook: <?php echo $contact->facebook; ?></nav>
            <div class="btn bg-info text-white ntn">Nhắn tin ngay</div>
          </div>
        </div>
      </div>  
    </div>  
    <!-- muaSP -->
    <div class="box-m">
      <div class="title-box-m"><h4>Chi tiết sản phẩm</h4></div>
      <div class="nd-sp">
       	<?php echo $record->content; ?>
      </div>
      <div class="btn text-success border-success thurong">Mở rộng</div>
    </div>
    <div class="box-m">
      <div class="title-box-m"><h4>Đánh giá và nhận xét sản phẩm</h4></div>
      <div class="rating-container">
       <div class="start-container">
        <h4><?php echo $this->modelAvgStar($record->id);   ?>/5</h4>
        <div style="clear: both;"></div>
        <a href="index.php?controller=products&action=rating&star=5&id=<?php echo $record->id; ?>" class="start" title="quá tốt" style="margin-right: 15px;"><i class="fa fa-star" aria-hidden="true"></i></a>
        <a href="index.php?controller=products&action=rating&star=4&id=<?php echo $record->id; ?>" class="start" title="tốt"><i class="fa fa-star" aria-hidden="true"></i></a>
        <a href="index.php?controller=products&action=rating&star=3&id=<?php echo $record->id; ?>" class="start" title="cũng được"><i class="fa fa-star" aria-hidden="true"></i></a>
        <a href="index.php?controller=products&action=rating&star=2&id=<?php echo $record->id; ?>" class="start" title="Chưa hài lòng"><i class="fa fa-star" aria-hidden="true"></i></a>
        <a href="index.php?controller=products&action=rating&star=1&id=<?php echo $record->id; ?>" class="one-start start" title="tệ"><i class="fa fa-star" aria-hidden="true"></i></a>
        <nav style="clear: both;"></nav>
        <nav style="color: gray;">(<?php echo $this->modelGetRating($record->id);  ?> nhận xét và đánh giá)</nav>
       </div>
       <div class="rated">
         <div class="rate5"><i style="color: #ec971f;" class="fas fa-star"></i><i style="color: #ec971f;" class="fas fa-star"></i><i style="color: #ec971f;" class="fas fa-star"></i><i style="color: #ec971f;" class="fas fa-star"></i><i style="color: #ec971f;" class="fas fa-star"></i><?php echo $this->modelGetStar($record->id,5); ?></div>
         <div class="rate4"><i style="color: #ec971f;" class="fas fa-star"></i><i style="color: #ec971f;" class="fas fa-star"></i><i style="color: #ec971f;" class="fas fa-star"></i><i style="color: #ec971f;" class="fas fa-star"></i><i class="fas fa-star"></i><?php echo $this->modelGetStar($record->id,4); ?></div>
         <div class="rate3"><i style="color: #ec971f;" class="fas fa-star"></i><i style="color: #ec971f;" class="fas fa-star"></i><i style="color: #ec971f;" class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><?php echo $this->modelGetStar($record->id,3); ?></div>
         <div class="rate2"><i style="color: #ec971f;" class="fas fa-star"></i><i style="color: #ec971f;" class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><?php echo $this->modelGetStar($record->id,2); ?></div>
         <div class="rate1"><i style="color: #ec971f;" class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><?php echo $this->modelGetStar($record->id,1); ?></div>
       </div>
       <div style="margin-top: 30px;"><h5>Hãy đặt hàng để đánh giá sản phẩm nhé!</h5></div>
      </div>
      <style type="text/css">
        .start-container{ text-align: center; padding-right: 20px;}
        .rated i{padding-right: 5px;}
        .rated{padding-right: 20px; color: #ccc;}
        .rating-container{display: flex; padding-top: 15px;}
        .rating-container .start-container {
              width: 160px;
          }
          .rating-container .start-container a {
              float: right;
              font-size: 18px;
              box-sizing: border-box;
              padding-left: 5px;
              color: #ccc;
          }
          .rating-container .start-container a.one-start {
              padding-left: 0px;
          }
          .rating-container .start-container a.selected,
          .rating-container .start-container a.selected ~ a {
              color: #d9534f;
          }
          .rating-container .start-container:not(.view-mode) a.start:hover,
          .rating-container .start-container:not(.view-mode) a.start:hover ~ a {
              color: #ec971f;
          }
          .rating-container .start-container.view-mode a:hover {
              cursor: default;
          }
      </style>
    </div>
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
                  <nav class="sell-prices">Giá: <?php echo $rows->price; ?> đ<br><s class="price-before"><?php if($rows->beforeprice>$rows->price) echo $rows->beforeprice." đ";?></s></nav>
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
                  <nav class="sell-prices">Giá: <?php echo $rows->price; ?> đ<br><s class="price-before"><?php if($rows->beforeprice>$rows->price) echo $rows->beforeprice." đ";?></s></nav>
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
  </div>
  <!-- /main-CTSP -->