<?php 
	trait UtilitiesModel{
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
			$query = $conn->query("select * from utilities order by id desc limit $from,$recordPerPage");
			//lay toan bo ket qua tra ve
			$result = $query->fetchAll();			
			//---
			return $result;
		}
		//tinh tong so ban ghi
		public function totalRecord($recordPerPage){
			//lay bien ket noi
			$conn = Connection::getInstance();
			$query = $conn->query("select id from utilities");
			//tra ve tong so ban ghi
			return $query->rowCount();
		}
		//lay mot ban ghi
		public function modelGetRecord($id){
			//lay bien ket noi
			$conn = Connection::getInstance();
			$query = $conn->query("select * from utilities where id=$id");
			//tra ve mot ban ghi
			return $query->fetch();
		}		
		//update ban ghi
		public function modelUpdate($id){	
			$name = $_POST["name"];
			$photo = "";
			//lay bien ket noi
			$conn = Connection::getInstance();
			//update du lieu tuong ung voi id truyen vao
			$conn->query("update utilities set name='$name' where id=$id");
			//kiem tra xem user co chon anh de upload khong, neu co thi xoa anh cu, upload anh moi
			if($_FILES["photo"]["name"] != ""){
				//---
				//lay anh cu
				$queryOldPhoto = $conn->query("select photo from utilities where id=$id");
				//lay mot ban ghi
				$oldPhoto = $queryOldPhoto->fetch();
				if($oldPhoto->photo != "" && file_exists("../assets/upload/utilities/".$oldPhoto->photo))
					unlink("../assets/upload/utilities/".$oldPhoto->photo);
				//---
				$photo = time()."_".$_FILES["photo"]["name"];
				//upload anh
				move_uploaded_file($_FILES["photo"]["tmp_name"], "../assets/upload/utilities/$photo");
				//update lai truong photo
				$conn->query("update utilities set photo='$photo' where id=$id");
			}
		}
		//create bang ghi
		public function modelCreate(){
			$name = $_POST["name"];
			$photo = "";
			//kiem tra xem user co chon anh de upload khong, neu co thi xoa anh cu, upload anh moi
			if($_FILES["photo"]["name"] != ""){				
				$photo = time()."_".$_FILES["photo"]["name"];
				//upload anh
				move_uploaded_file($_FILES["photo"]["tmp_name"], "../assets/upload/utilities/$photo");	
			}
			//lay bien ket noi
			$conn = Connection::getInstance();
			//update du lieu tuong ung voi id truyen vao
			$conn->query("insert into utilities set name='$name',photo='$photo'");
		}
		//xoa ban ghi
		public function modelDelete($id){
			//lay bien ket noi
			$conn = Connection::getInstance();
			//---
			//lay anh cu
			$queryOldPhoto = $conn->query("select photo from utilities where id=$id");
			//lay mot ban ghi
			$oldPhoto = $queryOldPhoto->fetch();
			if($oldPhoto->photo != "" && file_exists("../assets/upload/utilities/".$oldPhoto->photo))
				unlink("../assets/upload/utilities/".$oldPhoto->photo);
			//---
			//---
			$conn->query("delete from utilities where id=$id");
		}	
	}
 ?>