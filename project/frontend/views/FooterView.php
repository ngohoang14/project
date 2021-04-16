<!-- footer -->
   <div class="footer">
    <div class="footer1">
      <div class="content">
        <div class="infor" style="width: 35%;">
          <div class="infor-title">Thông tin liên hệ</div>
          <?php $contact = $this->modelGetContact(); ?>
          <ul>
            
            <li><?php echo $contact->name; ?></li>
            <li>Địa chỉ: <?php echo $contact->address; ?></li>
            <li>Hotline: <?php echo $contact->hotline; ?></li>
            <li>Email: <?php echo $contact->email; ?></li>
          </ul>
        </div>
        <div class="contact" style="width: 25%;">
          <nav>Theo dõi Taki Salon tại</nav>
          <a href="http://<?php echo $contact->facebook; ?>" ><i class="fab fa-facebook"></i></a>
          <a href="http://<?php echo $contact->youtube; ?>"><i class="fab fa-youtube"></i></a>
          <a href="http://<?php echo $contact->instagram; ?>"><i class="fab fa-instagram-square"></i></a>  
        </div>
        <style type="text/css">
          .footer1 .infor a{
            color: #585979;
          }
          .footer1 .infor a:hover{
            color: #fe5a3a;
          }
        </style>
        <div class="infor" style="width: 20%;">
          <div class="infor-title">Dịch vụ</div>
          <?php $sevices = $this->modelGetSevicesF(); ?>
          <ul>
            <?php foreach ($sevices as $rows): ?>
            <li><a href="index.php?controller=sevices&action=category&id=<?php echo $rows->id; ?>"><?php echo $rows->name; ?></a></li>
            <?php endforeach; ?>
          </ul>
        </div>
        <div class="infor" style="width: 20%;">
          <div class="infor-title">Sản phẩm</div>
          <?php $sevices = $this->modelGetProductsF(); ?>
          <ul>
            <?php foreach ($sevices as $rows): ?>
            <li><a href="index.php?controller=products&action=category&id=<?php echo $rows->id; ?>"><?php echo $rows->name; ?></a></li>
            <?php endforeach; ?>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer2">
      <div class="content text-center">
        <nav>2020 takisalon.vn | Bản quyền thuộc về Công ty Malphai</nav>
      </div>
    </div>
  </div>
  <!-- /footer -->