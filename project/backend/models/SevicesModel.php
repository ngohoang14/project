<?php 
	trait SevicesModel{
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
			$query = $conn->query("select * from sevices order by id desc limit $from,$recordPerPage");
			//lay toan bo ket qua tra ve
			$result = $query->fetchAll();			
			//---
			return $result;
		}
		//tinh tong so ban ghi
		public function totalRecord($recordPerPage){
			//lay bien ket noi
			$conn = Connection::getInstance();
			$query = $conn->query("select id from sevices");
			//tra ve tong so ban ghi
			return $query->rowCount();
		}
		//lay mot ban ghi
		public function modelGetRecord($id){
			//lay bien ket noi
			$conn = Connection::getInstance();
			$query = $conn->query("select * from sevices where id=$id");
			//tra ve mot ban ghi
			return $query->fetch();
		}		
		//update ban ghi
		public function modelUpdate($id){	
			$name = $_POST["name"];
			$discount=0;
			$minprice=$_POST["minprice"];
			$maxprice=$_POST["maxprice"];
			$description = $_POST["description"];
			$hot = isset($_POST["hot"]) ? 1 : 0;
			$photo = "";
			$photo1 = "";
			$photo2 = "";
			$photo3 = ""; 
			$price = $_POST["price"];
			if ($_POST["discount"]!= "") $discount=$_POST["discount"]; else $discount=0;
			$sevicecategory_id = $_POST["sevicecategory_id"];
			//lay bien ket noi
			$conn = Connection::getInstance();
			//update du lieu tuong ung voi id truyen vao
			$conn->query("update sevices set name='$name',description='$description',hot=$hot,minprice=$minprice,maxprice=$maxprice,discount=$discount,sevicecategory_id=$sevicecategory_id where id=$id");
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
				$conn->query("update sevices set photo='$photo' where id=$id");
			}
			if($_FILES["photo1"]["name"] != ""){
				//---
				//lay anh cu
				$queryOldPhoto = $conn->query("select photo1 from sevices where id=$id");
				//lay mot ban ghi
				$oldPhoto = $queryOldPhoto->fetch();
				if($oldPhoto->photo1 != "" && file_exists("../assets/upload/sevices/".$oldPhoto->photo1))
					unlink("../assets/upload/sevices/".$oldPhoto->photo1);
				//---
				$photo1 = time()."_".$_FILES["photo1"]["name"];
				//upload anh
				move_uploaded_file($_FILES["photo1"]["tmp_name"], "../assets/upload/sevices/$photo1");
				//update lai truong photo1
				$conn->query("update sevices set photo1='$photo1' where id=$id");
			}
			if($_FILES["photo2"]["name"] != ""){
				//---
				//lay anh cu
				$queryOldPhoto = $conn->query("select photo2 from sevices where id=$id");
				//lay mot ban ghi
				$oldPhoto = $queryOldPhoto->fetch();
				if($oldPhoto->photo2 != "" && file_exists("../assets/upload/sevices/".$oldPhoto->photo2))
					unlink("../assets/upload/sevices/".$oldPhoto->photo2);
				//---
				$photo2 = time()."_".$_FILES["photo2"]["name"];
				//upload anh
				move_uploaded_file($_FILES["photo2"]["tmp_name"], "../assets/upload/sevices/$photo2");
				//update lai truong photo2
				$conn->query("update sevices set photo2='$photo2' where id=$id");
			}
			if($_FILES["photo3"]["name"] != ""){
				//---
				//lay anh cu
				$queryOldPhoto = $conn->query("select photo3 from sevices where id=$id");
				//lay mot ban ghi
				$oldPhoto = $queryOldPhoto->fetch();
				if($oldPhoto->photo3 != "" && file_exists("../assets/upload/sevices/".$oldPhoto->photo3))
					unlink("../assets/upload/sevices/".$oldPhoto->photo3);
				//---
				$photo3 = time()."_".$_FILES["photo3"]["name"];
				//upload anh
				move_uploaded_file($_FILES["photo3"]["tmp_name"], "../assets/upload/sevices/$photo3");
				//update lai truong photo3
				$conn->query("update sevices set photo3='$photo3' where id=$id");
			}
		}
		//create bang ghi
		public function modelCreate(){
			$name = $_POST["name"];
			$discount=0;
			$minprice=isset($_POST["minprice"]) ? $_POST["minprice"] : 0;
			$maxprice=$_POST["maxprice"];
			$description = $_POST["description"];
			$hot = isset($_POST["hot"]) ? 1 : 0;
			$photo = "";
			$photo1 = "";
			$photo2 = "";
			$photo3 = "";
			$price = $_POST["price"];
			if ($_POST["discount"]!= "") $discount=$_POST["discount"]; else $discount=0;
			$sevicecategory_id = $_POST["sevicecategory_id"];
			//kiem tra xem user co chon anh de upload khong, neu co thi xoa anh cu, upload anh moi
			if($_FILES["photo"]["name"] != ""){				
				$photo = time()."_".$_FILES["photo"]["name"];
				//upload anh
				move_uploaded_file($_FILES["photo"]["tmp_name"], "../assets/upload/sevices/$photo");				
			}
			if($_FILES["photo1"]["name"] != ""){				
				$photo1 = time()."_".$_FILES["photo1"]["name"];
				//upload anh
				move_uploaded_file($_FILES["photo1"]["tmp_name"], "../assets/upload/sevices/$photo1");				
			}
			if($_FILES["photo2"]["name"] != ""){				
				$photo2 = time()."_".$_FILES["photo2"]["name"];
				//upload anh
				move_uploaded_file($_FILES["photo2"]["tmp_name"], "../assets/upload/sevices/$photo2");				
			}
			if($_FILES["photo3"]["name"] != ""){				
				$photo3 = time()."_".$_FILES["photo3"]["name"];
				//upload anh
				move_uploaded_file($_FILES["photo3"]["tmp_name"], "../assets/upload/sevices/$photo3");				
			}
			//lay bien ket noi
			$conn = Connection::getInstance();
			//update du lieu tuong ung voi id truyen vao
			$conn->query("insert into sevices set name='$name',description='$description',hot=$hot,photo='$photo',photo1='$photo1',photo2='$photo2',photo3='$photo3',minprice=$minprice,maxprice=$maxprice,discount=$discount,sevicecategory_id=$sevicecategory_id");
		}
		//xoa ban ghi
		public function modelDelete($id){
			//lay bien ket noi
			$conn = Connection::getInstance();
			//---
			//lay anh cu
			$queryOldPhoto = $conn->query("select photo from sevices where id=$id");
			//lay mot ban ghi
			$oldPhoto = $queryOldPhoto->fetch();
			if($oldPhoto->photo != "" && file_exists("../assets/upload/sevices/".$oldPhoto->photo))
				unlink("../assets/upload/sevices/".$oldPhoto->photo);
			//---
			//---
			//lay anh cu
			$queryOldPhoto = $conn->query("select photo1 from sevices where id=$id");
			//lay mot ban ghi
			$oldPhoto = $queryOldPhoto->fetch();
			if($oldPhoto->photo1 != "" && file_exists("../assets/upload/sevices/".$oldPhoto->photo1))
				unlink("../assets/upload/sevices/".$oldPhoto->photo1);
			//---
			//---
			//lay anh cu
			$queryOldPhoto = $conn->query("select photo2 from sevices where id=$id");
			//lay mot ban ghi
			$oldPhoto = $queryOldPhoto->fetch();
			if($oldPhoto->photo2 != "" && file_exists("../assets/upload/sevices/".$oldPhoto->photo2))
				unlink("../assets/upload/sevices/".$oldPhoto->photo2);
			//---
			//---
			//lay anh cu
			$queryOldPhoto = $conn->query("select photo3 from sevices where id=$id");
			//lay mot ban ghi
			$oldPhoto = $queryOldPhoto->fetch();
			if($oldPhoto->photo3 != "" && file_exists("../assets/upload/sevices/".$oldPhoto->photo3))
				unlink("../assets/upload/sevices/".$oldPhoto->photo3);
			//---
			//---
			$conn->query("delete from sevices where id=$id");
		}	
		//lay ten danh muc san pham
		public function modelGetCategory($sevicecategory_id){
			//lay bien ket noi
			$conn = Connection::getInstance();
			$query = $conn->query("select name from sevicescategories where id=$sevicecategory_id");
			$result = $query->fetch();
			return isset($result->name) ? $result->name : "";
		}	
		//lay danh sach danh muc san pham
		public function modelListCategory(){
			//lay bien ket noi
			$conn = Connection::getInstance();
			$query = $conn->query("select * from sevicescategories where parent_id = 0 order by id desc");
			$result = $query->fetchAll();
			return $result;
		}
		//lay danh muc con
		public function modelListCategorySub($sevicecategory_id){
			//lay bien ket noi
			$conn = Connection::getInstance();
			$query = $conn->query("select * from sevicescategories where parent_id = $category_id order by id desc");
			$result = $query->fetchAll();
			return $result;
		}
	}
 ?>