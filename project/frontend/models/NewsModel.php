<?php    
	trait NewsModel{
		//lay mot ban ghi
		public function modelGetRecord($id){
			//lay bien ket noi
			$conn = Connection::getInstance();
			$query = $conn->query("select * from news where id=$id");
			//tra ve mot ban ghi
			return $query->fetch();
		}								
		//lay ten danh muc san pham
		public function modelGetCategory($category_id){
			//lay bien ket noi
			$conn = Connection::getInstance();
			$query = $conn->query("select name from categories where id=$category_id");
			$result = $query->fetch();
			return isset($result->name) ? $result->name : "";
		}
		public function totalRecordAll($recordPerPage){
			//lay bien ket noi
			$conn = Connection::getInstance();
			$query = $conn->query("select * from news"); 
			//tra ve tong so ban ghi
			return $query->rowCount();
		}
		public function modelGetContact(){
			$conn = Connection::getInstance();
			$query = $conn->query("select * from contact");
			return $query->fetch();
		}
		public function modelGetSevicesF(){
			$conn = Connection::getInstance();
			$query = $conn->query("select * from sevicescategories where parent_id=0 limit 0,5");
			return $query->fetchALl();
		}
		public function modelGetProductsF(){
			$conn = Connection::getInstance();
			$query = $conn->query("select * from categories where parent_id=0 limit 0,5");
			return $query->fetchALl();
		}
	}
 ?>		
