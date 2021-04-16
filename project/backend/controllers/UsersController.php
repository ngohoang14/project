<?php 
	//include file model
	include "models/UsersModel.php";
	class UsersController extends Controller{
		//su dung file model
		use UsersModel;
		//ham tao
		public function __construct(){
			//kiem tra dang nhap
			$this->authentication();
		}
		//hien thi ds cac ban ghi co phan trang
		public function index(){
			//dinh nghia so ban ghi trn mot trang
			$recordPerPage = 5;
			//tinh tong so trang
			$numPage = ceil($this->totalRecord($recordPerPage)/$recordPerPage);
			//lay du lieu tu model
			$data= $this->modelRead($recordPerPage);
			$this->loadView("UsersView.php",["data"=>$data,"numPage"=>$numPage]);
		}
		// update ban ghi - trang thai GET
		public function update(){
			// lay bien id truyen tu url
			$id = isset($_GET["id"]) ? $_GET["id"] : 0;
			// goi ham tu model de lay du lieu
			$record = $this->modelGetRecord($id);
			// tao bien $action de dua vao thuoc tinh action cua form
			$action = "index.php?controller=users&action=updatePost&id=$id";
			//goi view, truyen du lieu ra view
			$this->loadView("UsersFormView.php",["record"=>$record,"action"=>$action]);
		}
		 //update bản ghi trạng thái POST
        public function updatePost(){
            //lấy biến id truyền từ url
            $id = isset($_GET["id"]) ? $_GET["id"] : 0;
            //gọi hàm từ model để lấy dữ liệu 
            $record = $this->modelUpdate($id);
	            //di chuyển đến url
	            header("location:index.php?controller=users");
        }
		public function create(){
            //tạo biến $action để đưa vào thuộc tính action của form 
            $action = "index.php?controller=users&action=createPost";
            //gọi view, truyền dữ liệu ra view
            $this->loadView("UsersFormView.php",["action"=>$action]);
        }
            public function createPost(){
            //gọi hàm từ model để lấy dữ liệu 
           	if($this->modelCreate())
            //di chuyển đến url
            header("location:index.php?controller=users");
            else header("location:index.php?controller=users&action=create&notify=emailExists");
        }
		public function delete(){
			// lay bien id truyen tu url
			$id = isset($_GET["id"]) ? $_GET["id"] : 0;
			//goi ham tu model de update du lieu
			$record = $this->modelDelete($id);
			//di chuyen den url
			header("location:index.php?controller=users");
		}
	}
 ?>