<?php 
	trait SevicesCategoriesModel{
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
			$query = $conn->query("select * from sevicescategories where parent_id = 0 order by id desc limit $from,$recordPerPage");
			//lay toan bo ket qua tra ve
			$result = $query->fetchAll();			
			//---
			return $result;
		}
		//tinh tong so ban ghi
		public function totalRecord($recordPerPage){
			//lay bien ket noi
			$conn = Connection::getInstance();
			$query = $conn->query("select id from sevicescategories where parent_id = 0");
			//tra ve tong so ban ghi
			return $query->rowCount();
		}
		//lay mot ban ghi
		public function modelGetRecord($id){
			//lay bien ket noi
			$conn = Connection::getInstance();
			$query = $conn->query("select * from sevicescategories where id=$id");
			//tra ve mot ban ghi
			return $query->fetch();
		}
		//lay cac danh muc con
		public function modelReadSubSevicesCategories($category_id){
			//lay bien ket noi
			$conn = Connection::getInstance();
			$query = $conn->query("select * from sevicescategories where parent_id = $category_id order by id asc");
			//tra ve mot ban ghi
			return $query->fetchAll();
		}
		//update ban ghi
		public function modelUpdate($id){
			$name = $_POST["name"];
			$parent_id = $_POST["parent_id"];
			//lay bien ket noi
			$conn = Connection::getInstance();
			$query = $conn->query("update sevicescategories set name='$name', parent_id=$parent_id where id=$id");
			//kiem tra xem user co chon anh de upload khong, neu co thi xoa anh cu, upload anh moi
			if($_FILES["photo"]["name"] != ""){
				//---
				//lay anh cu
				$queryOldPhoto = $conn->query("select photo from sevices where id=$id");
				//lay mot ban ghi
				$oldPhoto = $queryOldPhoto->fetch();
				if($oldPhoto->photo != "" && file_exists("../assets/upload/sevices/".$oldPhoto->photo))
					unlink("../assets/upload/sevices/".$oldPhoto->photo);
				//---
				$photo = time()."_".$_FILES["photo"]["name"];
				//upload anh
				move_uploaded_file($_FILES["photo"]["tmp_name"], "../assets/upload/sevices/$photo");
				//update lai truong photo
				$conn->query("update sevicescategories set photo='$photo' where id=$id");
			}
		}
		//create bang hi
		public function modelCreate(){
			$name = $_POST["name"];
			$parent_id = $_POST["parent_id"];
			$photo = "";
			if($_FILES["photo"]["name"] != ""){				
				$photo = time()."_".$_FILES["photo"]["name"];
				//upload anh
				move_uploaded_file($_FILES["photo"]["tmp_name"], "../assets/upload/sevices/$photo");				
			}
			//lay bien ket noi
			$conn = Connection::getInstance();
			$query = $conn->query("insert into sevicescategories set name='$name',photo='$photo', parent_id=$parent_id");

		}
		//xoa ban ghi
		public function modelDelete($id){
			//lay bien ket noi
			$conn = Connection::getInstance();
			$conn->query("delete from sevicescategories where id=$id");
		}
		//liet ke cac danh muc (cho chu nang create, update)
		public function modelListSevicesCategories($category_id){
			//lay bien ket noi
			$conn = Connection::getInstance();
			$query = $conn->query("select * from sevicescategories where parent_id = 0 and id <> $category_id order by id asc");
			//tra ve mot ban ghi
			return $query->fetchAll();
		}
	}
 ?>