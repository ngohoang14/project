<?php 
	trait ContactModel{ 
		//ham lay danh sach cac ban ghi co phan trang
		public function modelRead(){
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			//thuc hien truy van
			$query = $conn->query("select * from contact");
			//lay toan bo ket qua tra ve
			$result = $query->fetch();			
			//---
			return $result;
		}
		//tinh tong so ban ghi
		public function totalRecord($recordPerPage){
			//lay bien ket noi
			$conn = Connection::getInstance();
			$query = $conn->query("select id from contact");
			//tra ve tong so ban ghi
			return $query->rowCount();
		}
		//lay mot ban ghi
		public function modelGetRecord($id){
			//lay bien ket noi
			$conn = Connection::getInstance();
			$query = $conn->query("select * from contact where id=$id");
			//tra ve mot ban ghi
			return $query->fetch();
		}		
		//update ban ghi
		public function modelUpdate($id){	
			$name = $_POST["name"];
			$address = $_POST["address"];
			$hotline = $_POST["hotline"];
			$email = $_POST["email"];
			$facebook = $_POST["facebook"];
			$youtube = $_POST["youtube"];
			$insta=$_POST["insta"];
			//lay bien ket noi
			$conn = Connection::getInstance();
			//update du lieu tuong ung voi id truyen vao
			$conn->query("update contact set name='$name',address='$address',hotline='$hotline',email='email',facebook='$facebook',youtube='$youtube',insta='$insta' where id=$id");
			
		}
		//create bang ghi
		public function modelCreate(){
			$name = $_POST["name"];
			$address = $_POST["address"];
			$hotline = $_POST["hotline"];
			$email = $_POST["email"];
			$facebook = $_POST["facebook"];
			$youtube = $_POST["youtube"];
			$insta=$_POST["insta"];
			//lay bien ket noi
			$conn = Connection::getInstance();
			//update du lieu tuong ung voi id truyen vao
			$conn->query("insert into contact set name='$name',address='$address',hotline='$hotline',email='email',facebook='$facebook',youtube='$youtube',insta='$insta'");
		}
		//xoa ban ghi
		public function modelDelete($id){
			//lay bien ket noi
			$conn = Connection::getInstance();
			//---
			$conn->query("delete from contact where id=$id");
		}	
		public function modelGetContact(){
			$conn = Connection::getInstance();
			$query = $conn->query("select * from contact");
			//tra ve tong so ban ghi
			return $query->fetch();
		}
	}
 ?>