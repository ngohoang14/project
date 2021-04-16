<?php 
	include "models/HomeModel.php";
	class HomeController extends Controller{
		use HomeModel;
		//ham mac dinh
		public function index(){
			//load view
			$this->loadView("HomeView.php");
		}
		//create ban ghi - trang thai GET
		public function createFast(){
			$this->modelCreateFast();
			header("location:index.php?controller=home&notify=datlichthanhcong");
		}
	}
 ?>