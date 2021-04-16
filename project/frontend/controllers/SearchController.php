 <?php 
	//include file model
	include "models/SearchModel.php";
	class SearchController extends Controller{
		//su dung file model o day
		use SearchModel;
		//ham tao
		public function __construct(){			
		}
		//hien thi danh sach cac ban ghi co phan trang
		public function productName(){
			$key = isset($_GET["key"]) ? $_GET["key"] : "";
			//dinh nghia so ban ghi tren mot trang
			$recordPerPage = 16;
			//tinh tong so trang
			$numPage = ceil($this->totalRecordSearchProductName($key,$recordPerPage)/$recordPerPage);
			//lay du lieu tu model
			$data = $this->modelReadSearchProductName($key,$recordPerPage);
			//load view, truyen du lieu ra view
			$this->loadView("SearchProductNameView.php",["data"=>$data,"numPage"=>$numPage]);
		}
		public function productPrice(){
			$fromPrice = isset($_GET["fromPrice"]) ? $_GET["fromPrice"] : 0;
			$toPrice = isset($_GET["toPrice"]) ? $_GET["toPrice"] : 0;
			//dinh nghia so ban ghi tren mot trang
			$recordPerPage = 16;
			//tinh tong so trang
			$numPage = ceil($this->totalRecordSearchProductPrice($fromPrice,$toPrice,$recordPerPage)/$recordPerPage);
			//lay du lieu tu model
			$data = $this->modelReadSearchProductPrice($fromPrice,$toPrice,$recordPerPage);
			//load view, truyen du lieu ra view
			$this->loadView("SearchProductPriceView.php",["data"=>$data,"numPage"=>$numPage]);
		}
		public function smartSearch(){
			$key = isset($_GET["key"]) ? $_GET["key"] : "";
			$data = $this->modelSmartSearch($key);
			foreach($data as $rows){
				echo "<li>
						<img style='height:80px; width:60px; float:left; margin-right:10px;' src='../assets/upload/products/$rows->photo'>
						<a style='line-height:40px;' href='index.php?controller=products&action=detail&id=$rows->id'>$rows->description 
						</a>
						<nav style='line-height:10px; margin-top:-10px; color:#fe5a3a;'>$rows->price đ</nav>
						<div style='clear:both'></div>
					  </li>";
			}
		}	
		public function smartSearch2(){
			$key = isset($_GET["key"]) ? $_GET["key"] : "";
			$data = $this->modelSmartSearch($key);
			foreach($data as $rows){
				echo "<li><a href='index.php?controller=products&action=detail&id=$rows->id'>
						$rows->description 
					  </a></li>";
			}
		}	
		public function smartSevice(){
			$key = isset($_GET["key"]) ? $_GET["key"] : "";
			$data = $this->modelSmartSevice($key);
			$i=0;
			foreach($data as $rows){
			$i++;
				echo "<li ><a id='smartseviceli$i' onclick='getsevice($i)'>
						$rows->name 
					  </a></li>";
			}
		}
	}
 ?>