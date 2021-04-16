<?php 
	trait SearchModel{
		//ham lay danh sach cac ban ghi co phan trang
		public function modelReadSearchProductName($key,$recordPerPage){
			//lay bien p truyen tu url
			$p = isset($_GET["p"]) && is_numeric($_GET["p"]) && $_GET["p"] > 0 ? ($_GET["p"]-1) : 0;			
			//lay tu ban ghi nao
			$from = $p * $recordPerPage;
			//--- 
			$orderBy = "order by id desc";
			$order = isset($_GET["order"]) ? $_GET["order"] : "";
			switch($order){
				case "priceAsc":
					$orderBy = " order by price asc ";
					break;
				case "priceDesc":
					$orderBy = " order by price desc ";
					break;
				case "nameAsc":
					$orderBy = " order by name asc ";
					break;
				case "nameDesc":
					$orderBy = " order by name desc ";
					break;
			}
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			//thuc hien truy van
			$query = $conn->query("select * from products where description like '%$key%' $orderBy limit $from,$recordPerPage");
			//lay toan bo ket qua tra ve
			$result = $query->fetchAll();			
			//---
			return $result;
		}
		//tinh tong so ban ghi
		public function totalRecordSearchProductName($key,$recordPerPage){
			//lay bien ket noi
			$conn = Connection::getInstance();
			$query = $conn->query("select id from products where description like '%$key%'");
			//tra ve tong so ban ghi
			return $query->rowCount();
		}
		//ham lay danh sach cac ban ghi co phan trang
		public function modelReadSearchProductPrice($fromPrice,$toPrice,$recordPerPage){
			//lay bien p truyen tu url
			$p = isset($_GET["p"]) && is_numeric($_GET["p"]) && $_GET["p"] > 0 ? ($_GET["p"]-1) : 0;			
			//lay tu ban ghi nao
			$from = $p * $recordPerPage;
			//---
			$orderBy = "order by id desc";
			$order = isset($_GET["order"]) ? $_GET["order"] : "";
			switch($order){
				case "priceAsc":
					$orderBy = " order by price asc ";
					break;
				case "priceDesc":
					$orderBy = " order by price desc ";
					break;
				case "nameAsc":
					$orderBy = " order by name asc ";
					break;
				case "nameDesc":
					$orderBy = " order by name desc ";
					break;
			}
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			//thuc hien truy van
			$query = $conn->query("select * from products where price >= $fromPrice and price <= $toPrice $orderBy limit $from,$recordPerPage");
			//lay toan bo ket qua tra ve
			$result = $query->fetchAll();			
			//---
			return $result;
		}
		//tinh tong so ban ghi
		public function totalRecordSearchProductPrice($fromPrice,$toPrice,$recordPerPage){
			//lay bien ket noi
			$conn = Connection::getInstance();
			$query = $conn->query("select id from products where price >= $fromPrice and price <= $toPrice");
			//tra ve tong so ban ghi
			return $query->rowCount();
		}	
		//smart search
		public function modelSmartSearch($key){
			//lay bien ket noi
			$conn = Connection::getInstance();
			$query = $conn->query("select * from products where description like '%$key%'");
			return $query->fetchAll();
		}	
		//smart search
		public function modelSmartSevice($key){
			//lay bien ket noi
			$conn = Connection::getInstance();
			$query = $conn->query("select * from sevices where name like '%$key%'");
			return $query->fetchAll();
		}	
		//lay danh sach san pham cha
		public function modelListProductsCategories(){
			$conn = Connection::getInstance();
			$query = $conn->query("select id,name from categories where parent_id=0");	
			$result =$query->fetchAll();
			return $result;		
		}	
		public function modelListBrands(){
			$conn = Connection::getInstance();
			$query = $conn->query("select distinct brand from products ");	
			$result =$query->fetchAll();
			return $result;		
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
		public function modelListOrigins(){
			$conn = Connection::getInstance();
			$query = $conn->query("select distinct origin from products ");	
			$result =$query->fetchAll();
			return $result;		
		}
		public function modelListVolumes(){
			$conn = Connection::getInstance();
			$query = $conn->query("select distinct volume from products ");	
			$result =$query->fetchAll();
			return $result;		
		}
	}
 ?>