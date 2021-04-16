<?php  
	//include file model 
	include "models/SevicesModel.php";
	class SevicesController extends Controller{
		//su dung file model o day
		use SevicesModel;
		//ham tao
		public function __construct(){			
		}
		//hien thi danh sach cac ban ghi co phan trang
		public function category(){
			$category_id = isset($_GET["id"]) ? $_GET["id"] : 0;
			//dinh nghia so ban ghi tren mot trang
			$recordPerPage = 25;
			//tinh tong so trang
			$numPage = ceil($this->totalRecord($category_id,$recordPerPage)/$recordPerPage);
			//lay du lieu tu model
			$data = $this->modelRead($category_id,$recordPerPage);
			//load view, truyen du lieu ra view
			$this->loadView("SevicesView.php",["data"=>$data,"numPage"=>$numPage]);
		}		
		public function index(){
			$this->loadView("SevicesView.php");
		}
		//create ban ghi - trang thai GET
		public function create(){
			//lay bien id truyen tu url
			$id = isset($_GET["id"]) ? $_GET["id"] : 0;
			//goi ham tu model de lay du lieu
			$record = $this->modelGetRecord($id);
			$recordPerPage = 5;
			//tinh tong so trang
			$numPage = ceil($this->totalRecordALL()/$recordPerPage);
			//lay du lieu tu model
			$data = $this->modelListSevices($recordPerPage);	
			//tao bien $action de dua vao thuoc tinh action cua form
			$action = "index.php?controller=sevices&action=createPost";
			//goi view, truyen du lieu ra view
			$this->loadView("SevicesView.php",["record"=>$record,"action"=>$action,"data"=>$data,"numPage"=>$numPage]);

		}
		//create ban ghi - trang thai POST
		public function createPost(){
			//goi ham tu model de create du lieu
			$this->modelCreate();
			header("location:index.php?controller=sevices&action=create&notify=datlichthanhcong");
		}
		public function ajaxSevices(){
			$id = isset($_GET["id"]) ? $_GET["id"] : 0;
			$data = $this->modelGetSevicesCategories($id);
			foreach($data as $rows){
			$i++;
				echo "<div class='loaidichvu'>
				        <div class='imgDV'><img src='../assets/upload/sevices/$rows->photo' title='$rows->name' alt='$rows->name'></div>      
				        <div class='giachitiet'>
				          <div class='title-giact'>$rows->name</div>
				          <nav class='text-success'>$rows->note</nav>
				          <div class='box-gia clear-both' id='boxgia$i'>
				            $listPrices = $this->modelListPriceSevices($rows->id);
				            <?php foreach($listPrices as $rowsP): ?>
				            <div class='gia'>
				              <div class='float-right pNum'><?php echo number_format($rowsP->minprice); ?>đ - <?php echo number_format($rowsP->maxprice); ?>đ</div>
				              <nav><?php echo $rowsP->name; ?></nav>
				            </div>
				          <?php endforeach; ?>
				        </div>
				        <div id='morong<?php echo $i; ?>' class='morong text-success'>Xem tất cả giá</div>
				        </div>
				      </div>
				      <div style='clear: both;'></div>"; 
			}
		}
	}
 ?>