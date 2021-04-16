<!-- load file layout chung -->
<?php $this->layoutPath = "LayoutTrangSanPham.php"; ?> 
  <!-- mainSp -->
    <!-- sort -->  
    <!-- /sort -->
    <?php  $category_id = isset($_GET["id"]) ? $_GET["id"] : 0  ?>
    <div class="sanpham">
      <div class="titleSp">
        <div class="sapxep">
          <nav>Sắp xếp: </nav>
          <select id="sxSP" onchange="location.href = 'index.php?controller=products&action=category&id=<?php echo $category_id; ?>&order='+this.value;">
            <option value="0" selected="selected">Mặc định</option>
            <option> Hàng mới</option>
            <option value="priceAsc"> Giá từ thấp đến cao</option>
            <option value="priceDesc"> Giá từ cao đến thấp</option>
            <option value="nameAsc"> Tên từ A-Z</option>
            <option value="nameDesc"> Tên từ Z-A</option>
          </select>
        </div>
       <div style="padding: 20px; color: red;"><h5><?php echo $this->modelGetCategory($category_id); ?>
         <?php if (isset($_GET["brand"])) echo " - ".$_GET["brand"]; ?>
         <?php if (isset($_GET["origin"])) echo " - ".$_GET["origin"]; ?>
         <?php if (isset($_GET["volume"])) echo " - ".$_GET["volume"]."ml"; ?>
       </h5></div>
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