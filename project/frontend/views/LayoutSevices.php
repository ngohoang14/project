<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Taki</title>
  <link rel="stylesheet" href="../assets/frontend/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../assets/frontend/css/style.css">
  <link rel="stylesheet" type="text/css" href="../assets/frontend/css/styleDatLich.css">
  <link href="../assets/frontend/fontawesome-free-5.14.0-web/css/all.css" rel="stylesheet"> 
  <!--load all styles -->
</head>
<body>
  <script type="text/javascript" src="../assets/frontend/js/jquery-3.5.1.js"></script>
  <script src="../assets/frontend/js/bootstrap.min.js"></script>
  <div class="mess">
    <a href="../assets/frontend/https://www.facebook.com/takisalon"><i class="fab fa-facebook-messenger"></i></a>
  </div>
  <?php 
    //load file HeaderView.php
    include "views/HeaderView.php";
  ?>
  <!-- navi -->
  <div class="navi">
  <form action="<?php echo $action; ?>" method="post"> 
    <div id="datlich">
      <nav class="title-dl"><h5>ĐẶT LỊCH LÀM ĐẸP</h5></nav>
      <div class="datlich-content">
      <div class="left-dl">
          <div class="content-booking"> 
            <div class="phone">
              <i class="fas fa-mobile-alt"></i>
              <input class="form-control pl" type="number" placeholder="Nhập số điện thoại" name="phone" value="<?php  echo isset($_SESSION["customer_phone"]) ? $_SESSION["customer_phone"] : ""; ?>" autocomplete="off" required>
            </div>
            <div class="hoten">
              <i class="far fa-user"></i>
              <input class="form-control pl" type="text" value="<?php echo isset($_SESSION['customer_name']) ? $_SESSION["customer_name"] : ""; ?>" name="name" autocomplete="off" placeholder="Họ tên">
            </div>
            <div class="dichvu">
              <i class="fas fa-list-ul"></i>
              <input class="form-control pl" type="text" name="sevice" value="<?php echo isset($record->name) ? $record->name:''; ?>" placeholder="Dịch vụ">
            </div>
            <div class="ghichu">
              <textarea name="note" placeholder="Ghi chú"></textarea>
            </div>
          </div>
        </div>
        <script type="text/javascript">
          $(document).ready(function(){
        //tao doi tuog thoi gian
        var date=new Date();
        var day=date.getDate();
        var nm=date.getDate()+1;
        var nk=date.getDate()+2;
        var month =date.getMonth()+1; // thang hcay tu 0-11
        var year=date.getFullYear();
        var hn=day + "/" + month;
        var ngaymai=day + 1 + "/"+month;
        var ngaykia=day + 2 + "/"+month;
        var day1=year+"/"+month+"/"+day;
        var day2=year+"/"+month+"/"+nm;
        var day3=year+"/"+month+"/"+nk;
        //hien thi thoi gian
        document.getElementById('labelday1').innerHTML = hn;
        document.getElementById('labelday2').innerHTML = ngaymai;
        document.getElementById('labelday3').innerHTML = ngaykia;
        $("#day1").val(day1);
        $("#day2").val(day2);
        $("#day3").val(day3);
    });
        </script>
        <div class="day-dl" id="dayDl">
          <label class="labeldl" for="day1" title="Hôm nay">
            <input class="ipdl" type="radio" id="day1" name="dayDl" value="" checked/>
            <div class="day">
            <nav>Hôm nay</nav>
            <div id="labelday1"></div>
            </div>
          </label>
          <label class="labeldl" for="day2" title="Ngay mai">
            <input class="ipdl" type="radio" id="day2" name="dayDl" value="" />
            <div class="day">
            <nav>Ngày mai</nav>
            <div id="labelday2"></div>
            </div>
          </label>
          <label class="labeldl" for="day3" title="kia">
            <input class="ipdl" type="radio" id="day3" name="dayDl" value="" />
            <div class="day">
            <nav>Ngày kia</nav>
            <div id="labelday3"></div>
            </div>
          </label>
          <style type="text/css" media="screen">
            .labeldl > input,.labeltimedl>input{display: none;} 
            .labeldl{
              width: 100%;
              cursor: pointer;
            }
            .labeldl .day{
              border-radius: 4px;
            }
            .ipdl:checked~.day nav{background-color: #fe5a3a; color: white; border-color: #fe5a3a;}
            .ipdl:checked~.day{ border-color: #fe5a3a; color: #fe5a3a;}
            .iptimedl:checked~li{background-color: #fe5a3a; color: white; border-color: #fe5a3a;}
            .labeltimedl{ margin: 0; padding: 0; }
            .okslot{color: green;}
            .noslot{color: red;}
            .iptimedl:disable~li{color: red;}
            .cacdichvu input:checked ~ .checkmark { background-color: #fe5a3a; }
          </style>
        </div>
        <script type="text/javascript">

        </script>
        <div class="time-dl">
          <!-- <ul>  -->
            <label class="labeltimedl" for="time1" title="">
            <input class="iptimedl" type="radio" id="time1" name="timedl" value="09:00" />
            <li class="btn">09:00<nav class="okslot">Còn chỗ</nav></li>
          </label>
          <label class="labeltimedl" for="time2" title="">
            <input class="iptimedl" type="radio" id="time2" name="timedl" value="10:00" />
            <li class="btn">10:00<nav class="okslot">Còn chỗ</nav></li>
          </label>
          <label class="labeltimedl" for="time3" title="">
            <input class="iptimedl" type="radio" id="time3" name="timedl" value="11:00" />
            <li class="btn">11:00<nav class="okslot">Còn chỗ</nav></li>
          </label>
          <label class="labeltimedl" for="time4" title="">
            <input class="iptimedl" type="radio" id="time4" name="timedl" value="10:30" />
            <li class="btn">12:00<nav class="okslot">Còn chỗ</nav></li>
          </label>
          <label class="labeltimedl" for="time5" title="">
            <input class="iptimedl" type="radio" id="time5" name="timedl" value="13:00" disabled/>
            <li class="btn">13:00<nav class="noslot">Hết chỗ&nbsp;</nav></li>
          </label>
          <label class="labeltimedl" for="time6" title="">
            <input class="iptimedl" type="radio" id="time6" name="timedl" value="14:00"  />
            <li class="btn">14:00<nav class="okslot">Còn chỗ</nav></li>
          </label>
          <label class="labeltimedl" for="time7" title="">
            <input class="iptimedl" type="radio" id="time7" name="timedl" value="15:00" />
            <li class="btn">15:00<nav class="okslot">Còn chỗ</nav></li>
          </label>
         <label class="labeltimedl" for="time8" title="">
            <input class="iptimedl" type="radio" id="time8" name="timedl" value="16:00" />
            <li class="btn">16:00<nav class="okslot">Còn chỗ</nav></li>
          </label>
          <label class="labeltimedl" for="time9" title="">
            <input class="iptimedl" type="radio" id="time9" name="timedl" value="17:00" />
            <li class="btn">17:00<nav class="okslot">Còn chỗ</nav></li>
          </label>
          <label class="labeltimedl" for="time10" title="">
            <input class="iptimedl" type="radio" id="time10" name="timedl" value="18:00" />
            <li class="btn">18:00<nav class="okslot">Còn chỗ</nav></li>
          </label>
          <label class="labeltimedl" for="time11" title="">
            <input class="iptimedl" type="radio" id="time11" name="timedl" value="19:00" />
            <li class="btn">19:00<nav class="okslot">Còn chỗ</nav></li>
          </label>
          <label class="labeltimedl" for="time12" title="">
            <input class="iptimedl" type="radio" id="time12" name="timedl" value="20:00" />
            <li class="btn">20:00<nav class="okslot">Còn chỗ</nav></li>
          </label>
          <label class="labeltimedl" for="time13" title="">
            <input class="iptimedl" type="radio" id="time13" name="timedl" value="21:00" />
            <li class="btn">21:00<nav class="okslot">Còn chỗ</nav></li>
          </label>
          <!-- </ul> --> 
        </div> 
    </div>
    <button type="submit" class="btdl" value="Process">ĐẶT LỊCH</button>
    </div>
  </form>
  </div>
  <!-- /navi -->
  <!-- main -->
  <div class="mainDatLich">
    <div class="boloc">
      <div class="title-boloc">
        <a href="index.php?controller=sevices&action=create"><b>Làm mới</b></a>
        <h5>Bộ lọc</h5>
      </div>
    <!-- <div class="xeploai">
      <nav><input type="checkbox">&nbsp&nbspKhuyến mại giảm giá</nav>
      <nav>Mức giá</nav>
      <nav></nav>
    </div> -->
      <div class="cacdichvu">
        <h5>Dịch vụ</h5>
        <?php $listSevices = $this->modelListSevicesCategories(); ?>
        <?php foreach($listSevices as $rows): ?>
        <div class="form-check">
          <input class="form-check-input" type="checkbox" name="dv" id="dv<?php echo $rows->id ?>">
          <label class="form-check-label" onclick="location.href='index.php?controller=sevices&action=category&id=<?php echo $rows->id; ?>'" for="dv<?php echo $rows->id ?>"><?php echo $rows->name ?></label>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
    <!-- /Boloc -->
    <?php echo $this->view; ?>
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