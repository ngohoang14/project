<?php 
	trait ProductBenefitsModel{
		//ham lay danh sach cac ban ghi co phan trang
		public function modelRead($recordPerPage){
			//lay bien p truyen tu url
			$p = isset($_GET["p"]) && is_numeric($_GET["p"]) && $_GET["p"] > 0 ? ($_GET["p"]-1) : 0;			
			//lay tu ban ghi nao
			$from = $p * $recordPerPage;
			//---
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			//thuc hien truy van
			$query = $conn->query("select * from productbenefits order by id desc limit $from,$recordPerPage");
			//lay toan bo ket qua tra ve
			$result = $query->fetchAll();			
			//---
			return $result;
		}
		//tinh tong so ban ghi
		public function totalRecord($recordPerPage){
			//lay bien ket noi
			$conn = Connection::getInstance();
			$query = $conn->query("select id from productbenefits");
			//tra ve tong so ban ghi
			return $query->rowCount();
		}
		//lay mot ban ghi
		public function modelGetRecord($id){
			//lay bien ket noi
			$conn = Connection::getInstance();
			$query = $conn->query("select * from productbenefits where id=$id");
			//tra ve mot ban ghi
			return $query->fetch();
		}		
		//update ban ghi
		public function modelUpdate($id){	
			$benefit = $_POST["benefit"];
			$note = isset($_POST["note"]) ? $_POST["note"] : "";
			//lay bien ket noi
			$conn = Connection::getInstance();
			//update du lieu tuong ung voi id truyen vao
			$conn->query("update productbenefits set benefit='$benefit',note='$note' where id=$id");
		}
		//create bang ghi
		public function modelCreate(){
			$benefit = $_POST["benefit"];
			$note = isset($_POST["note"]) ? $_POST["note"] : "";
			//lay bien ket noi
			$conn = Connection::getInstance();
			//update du lieu tuong ung voi id truyen vao
			$conn->query("insert into productbenefits set benefit='$benefit',note='$note'");
		}
		//xoa ban ghi
		public function modelDelete($id){
			//lay bien ket noi
			$conn = Connection::getInstance();
			//---
			//lay anh cu
			$queryOldPhoto = $conn->query("select photo from productbenefits where id=$id");
			$conn->query("delete from productbenefits where id=$id");
		}	
	}
 ?>