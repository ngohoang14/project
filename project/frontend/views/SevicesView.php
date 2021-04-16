<!-- load file layout chung -->
<?php $this->layoutPath = "LayoutSevices.php"; ?> 
<!-- PriceView -->
    <div class="giadichvu"> 
      <?php $i=0; ?>
      <?php foreach($data as $rows): ?>
      <?php $i++; ?>
      <div class="loaidichvu">
        <div class="imgDV"><img src="../assets/upload/sevices/<?php echo $rows->photo; ?>" title="<?php echo $rows->name; ?>" alt="<?php echo $rows->name; ?>"></div>      
        <div class="giachitiet">
          <div class="title-giact"><?php echo $rows->name; ?></div>
          <nav class="text-success"><?php echo $rows->note; ?></nav>
          <div class="box-gia clear-both" id="boxgia<?php echo $i; ?>">
            <?php  $listPrices = $this->modelListPriceSevices($rows->id); ?>
            <?php foreach($listPrices as $rowsP): ?>
            <div class="gia">
              <div class="float-right pNum"><?php echo number_format($rowsP->minprice); ?>đ - <?php echo number_format($rowsP->maxprice); ?>đ</div>
              <nav><?php echo $rowsP->name; ?></nav>
            </div>
          <?php endforeach; ?>
        </div>
        <div id="morong<?php echo $i; ?>" class="morong text-success">Xem tất cả giá</div>
        </div>
      </div>
    <script type="text/javascript">
      $('#morong<?php echo $i; ?>').click(function(){
          if ($('#morong<?php echo $i; ?>').text()=="Thu gọn") 
          { 
            $('#boxgia<?php echo $i; ?>').css("height","320px");
            $('#morong<?php echo $i; ?>').html("Xem tất cả giá");
          } else
          {
            $('#boxgia<?php echo $i; ?>').css("height","auto");
          $('#morong<?php echo $i; ?>').html("Thu gọn");
          }
    });
    </script>
    <?php endforeach; ?>
      <div style="clear: both;"></div>
      <div style="float: right; margin-top: 5px;">
        <ul class="pagination">
          <li class="page-item btn"><span>Trang</span></li>
          <?php for($i = 1; $i <= $numPage; $i++): ?>
          <li class="page-item"><a class="page-link" href="index.php?controller=sevices&action=create&p=<?php echo $i; ?>"><?php echo $i; ?></a></li>
          <?php endfor; ?>
        </ul>
      </div>
    </div>
    <!-- /PriceView -->
