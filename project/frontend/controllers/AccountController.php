<?php 
	include "models/AccountModel.php";
	class AccountController extends Controller{
		use AccountModel;
		//dang ky thanh vien
		public function register(){
			//$this->loadView("AccountRegisterView.php");
			$action = "index.php?controller=account&action=createPost";
			//goi view, truyen du lieu ra view
			$this->loadView("AccountRegisterView.php",["action"=>$action]);
		}		
		//khi an nut submit register
		public function registerPost(){
			if($this->modelRegister())
			{
				//di chuyen den url
				// alert("Đăng kí thành công! Đăng nhập");
				header("location:index.php?controller=account&action=login&notify=registersuccess");
			}
			else
				header("location:index.php?controller=account&action=register&notify=emailExists");		
		}
		//thong bao
		public function notify(){
			$this->loadView("AccountNotifyView.php");
		}
		//dang nhap
		public function login(){
			$this->loadView("AccountLoginView.php");
		}
		//dang nhap an nut submit
		public function loginPost(){
			$this->modelLogin();
		}
		//dang xuat
		public function logout(){
			unset($_SESSION["customer_email"]);
			header("location:index.php");
		}
	}
 ?>