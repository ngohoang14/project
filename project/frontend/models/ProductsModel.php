<?php    
	trait ProductsModel{
		//ham lay danh sach cac ban ghi co phan trang
		public function modelRead($category_id ,$recordPerPage){
			//lay bien p truyen tu url
			$p = isset($_GET["p"]) && is_numeric($_GET["p"]) && $_GET["p"] > 0 ? ($_GET["p"]-1) : 0;			
			//lay tu ban ghi nao
			$from = $p * $recordPerPage;
			//---
			$brand = isset($_GET["brand"]) ? " = "."'".$_GET["brand"]."'" : " <> ''";
			$origin = isset($_GET["origin"]) ? " = "."'".$_GET["origin"]."'" : " <> ''";
			$volume = isset($_GET["volume"]) ? " = "."'".$_GET["volume"]."'" : " <> ''";
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
			$where = ($category_id==0) ? "where category_id !=0" : "where category_id=$category_id";
			$conn = Connection::getInstance();
			//thuc hien truy van
			$query = $conn->query("select * from products $where and brand $brand and origin $origin and volume $volume  $orderBy limit $from,$recordPerPage");
			//lay toan bo ket qua tra ve
			$result = $query->fetchAll();			
			//---
			return $result;
		}
		public function modelListProducts($recordPerPage){
			//lay bien p truyen tu url
			$p = isset($_GET["p"]) && is_numeric($_GET["p"]) && $_GET["p"] > 0 ? ($_GET["p"]-1) : 0;
			//lay tu ban ghi nao
			$from = $p * $recordPerPage;
			//---
			$brand = isset($_GET["brand"]) ? " = "."'".$_GET["brand"]."'" : " <> ''";
			$origin = isset($_GET["origin"]) ? " = "."'".$_GET["origin"]."'" : " <> ''";
			$volume = isset($_GET["volume"]) ? " = "."'".$_GET["volume"]."'" : " <> ''";
			$orderBy = "order by id desc";
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			//thuc hien truy van
			$query = $conn->query("select * from products  where brand $brand and origin $origin and volume $volume  limit $from,$recordPerPage");
			//lay toan bo ket qua tra ve
			$result = $query->fetchAll();			
			//---
			return $result;
		}
		//tinh tong so ban ghi
		public function totalRecord($category_id,$recordPerPage){
			//lay bien ket noi
			$conn = Connection::getInstance();
			$query = $conn->query("select id from products where category_id=$category_id");
			//tra ve tong so ban ghi
			return $query->rowCount();
		}
		//lay mot ban ghi
		public function modelGetRecord($id){
			//lay bien ket noi
			$conn = Connection::getInstance();
			$query = $conn->query("select * from products where id=$id");
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
		//lay danh sach san pham cha
		public function modelListProductsCategories(){
			$conn = Connection::getInstance();
			$query = $conn->query("select id,name from categories where parent_id=0");	
			$result =$query->fetchAll();
			return $result;		
		}	
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
		public function modelListBrands(){
			$conn = Connection::getInstance();
			$query = $conn->query("select distinct brand from products ");	
			$result =$query->fetchAll();
			return $result;		
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
		public function totalRecordAll($recordPerPage){
			//lay bien ket noi
			$conn = Connection::getInstance();
			$query = $conn->query("select * from products"); 
			//tra ve tong so ban ghi
			return $query->rowCount();
		}
		//lay tien ich
		public function modelGetBenefits(){
			$conn = Connection::getInstance();
			$query = $conn->query("select * from productbenefits");
			return $query->fetchAll();
		}
		//rating
		public function modelRating($product_id, $star){
			//insert ban ghi vao table rating
			//lay bien ket noi
			$conn = Connection::getInstance();
			$conn->query("insert into rating set product_id=$product_id, star=$star");
		}		
		//lay cac danh gia star
		public function modelGetStar($product_id, $star){
			//lay bien ket noi
			$conn = Connection::getInstance();
			$query = $conn->query("select id from rating where product_id=$product_id and star=$star");
			//tra ve so luong ban ghi
			return $query->rowCount();
		}
		public function modelGetRating($product_id){
			//lay bien ket noi
			$conn = Connection::getInstance();
			$query = $conn->query("select id from rating where product_id=$product_id");
			//tra ve so luong ban ghi
			return $query->rowCount();
		}
		public function modelAvgStar($product_id){
			$conn = Connection::getInstance();
			$query = $conn->query("select  round(AVG(star),1) as avgstar  from rating where product_id=$product_id");
			$result = $query->fetch();
			return $result->avgstar;
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
