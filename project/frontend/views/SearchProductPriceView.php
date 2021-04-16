<!-- load file layout chung -->
<?php $this->layoutPath = "LayoutTrangSanPham.php"; ?>
  <!-- mainSp -->
    <!-- sort --> 
    <!-- /sort -->
    <?php  $category_id = isset($_GET["id"]) ? $_GET["id"] : 0  ?>
    <?php 
      $fromPrice = isset($_GET["fromPrice"]) ? $_GET["fromPrice"] : 0;
      $toPrice = isset($_GET["toPrice"]) ? $_GET["toPrice"] : 0;
     ?>
    <div class="sanpham">
      <div class="titleSp">
        <div class="sapxep"> 
          <nav>Sắp xếp: </nav>
          <select onclick="location.href = 'index.php?controller=search&action=productPrice&fromPrice=$fromPrice&toPrice=$toPrice&order='+this.value;" id="sxSP">
            <option selected="selected">Mặc định</option>
            <option> Hàng mới</option>
            <option value="priceAsc"> Giá từ thấp đến cao</option>
            <option value="priceDesc"> Giá từ cao đến thấp</option>
            <option value="nameAsc"> Tên từ A-Z</option>
            <option value="nameDesc"> Tên từ Z-A</option>
          </select>
        </div>
       <div style="padding: 20px; color: red;"><h4>TÌM KIẾM</h4></div>
      </div>
      <!-- content sp -->
<div class="contentSP">
<?php foreach($data as $rows): ?>
  <a href="index.php?controller=products&action=detail&id=<?php echo $rows->id; ?>">
  <div class="btn itemSP" style="height: 420px;">
    <div class="imgItemSP"> 
      <img src="../assets/upload/products/<?php echo $rows->photo; ?>" title="<?php echo $rows->name; ?>" alt="<?php echo $rows->name; ?>">
    </div>
    <nav class="sell-brand"><?php echo $rows->brand; ?></nav>
    <nav class="sell-name" style="height: 45px; overflow: hidden;"><?php echo $rows->description; ?></nav>
    <nav class="sell-prices"><?php echo number_format($rows->price); ?> đ</nav>
    <nav style="text-align: left; color:grey; font-size: 14px;"><s><?php if($rows->beforeprice>$rows->price) echo number_format($rows->beforeprice)." đ";?></s></nav>
  </div>
</a>
  <?php endforeach; ?>
  <!-- paging -->
  <div style="clear: both;"></div>
  <div style="float: right;">
    <ul class="pagination">
      <li class="page-item btn"><span>Trang</span></li>
      <?php for($i = 1; $i <= $numPage; $i++): ?>
      <li class="page-item"><a class="page-link" href="index.php?controller=products&p=<?php echo $i; ?>"><?php echo $i; ?></a></li>
      <?php endfor; ?>
    </ul>
  </div>
  <!-- end paging --> 
</div>  
<!-- content sp -->
    </div>

  <!-- /mainSp -->