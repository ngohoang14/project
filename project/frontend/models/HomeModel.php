<?php 
	trait HomeModel{
		public function modelCreateFast(){
			$phone = $_GET["phone"];
			$sevice = $_GET["sevice"];
			$note = $_GET["note"];
			//lay bien ket noi
			$conn = Connection::getInstance();
			//update du lieu tuong ung voi id truyen vao
			$conn->query("insert into schedule set phone='$phone',sevice='$sevice',note='$note'");
		}
		//lay 5 san pham noi bat
		public function modelHotProducts1(){
			$conn = Connection::getInstance();
			$query = $conn->query("select * from products where hot=1 order by id desc limit 0,5");
			return $query->fetchAll();
		}		
		//lay 5 san pham noi bat
		public function modelHotProducts2(){
			$conn = Connection::getInstance();
			$query = $conn->query("select * from products where hot=1 order by id desc limit 5,5");
			return $query->fetchAll();
		}	
		//lay 5 dich vu noi bat
		public function modelHotSevices1(){
			$conn = Connection::getInstance();
			$query = $conn->query("select * from sevices where hot=1 order by id desc limit 0,4");
			return $query->fetchAll();
		}	
		//lay 5 dich vu noi bat
		public function modelHotSevices2(){
			$conn = Connection::getInstance();
			$query = $conn->query("select * from sevices where hot=1 order by id desc limit 4,4");
			return $query->fetchAll();
		}			//lay 5 dich vu noi bat
		public function modelHotSevices3(){
			$conn = Connection::getInstance();
			$query = $conn->query("select * from sevices where hot=1 order by id desc limit 8,4");
			return $query->fetchAll();
		}		
		//lay 4 tin noi bat
		public function modelHotNews1(){
			$conn = Connection::getInstance();
			$query = $conn->query("select * from news where hot=1 order by id desc limit 0,4");
			return $query->fetchAll();
		}
		public function modelHotNews2(){
			$conn = Connection::getInstance();
			$query = $conn->query("select * from news where hot=1 order by id desc limit 4,4");
			return $query->fetchAll();
		}
		//hien thi cac danh muc co truong displayhome=1
		public function modelListCategories(){
			$conn = Connection::getInstance();
			$query = $conn->query("select * from categories where displayhome=1 order by id desc");
			return $query->fetchAll();
		}
		//lay 6 san pham thuoc danh muc co id truyen vao
		public function modelListProducts($category_id){
			$conn = Connection::getInstance();
			$query = $conn->query("select * from products where category_id=$category_id order by id desc limit 0,6");
			return $query->fetchAll();
		}
		//lay 6 tin tuc noi bat
		public function modelHotNews(){
			$conn = Connection::getInstance();
			$query = $conn->query("select * from news where hot=1 order by id desc limit 0,6");
			return $query->fetchAll();
		}
		//lay cac tien ich
		public function modelUtilities(){
			$conn = Connection::getInstance();
			$query = $conn->query("select * from utilities");
			return $query->fetchAll();
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