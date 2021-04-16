<?php  
	// load model
	include "models/LoginModel.php";
	// su dung class model
	
	class LoginController extends Controller{
		//ham tao de kiem tra dang nhap
		// public function __construct(){
		// 	$this->authentication();
		// }
		use LoginModel;
		public function index(){
			$this->loadView("LoginView.php");
		}
		public function login(){
		$this->modelLogin();
		//quay lai trang index
		header("location:index.php");
		}
		public function logout(){
			// huy session
			unset($_SESSION["email"]);
			header("location:index.php");
		}
	}
	
	
?>

