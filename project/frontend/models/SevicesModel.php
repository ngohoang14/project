<?php   
	trait SevicesModel{	
		public function modelRead($category_id ,$recordPerPage){
			//lay bien p truyen tu url
			$p = isset($_GET["p"]) && is_numeric($_GET["p"]) && $_GET["p"] > 0 ? ($_GET["p"]-1) : 0;			//lay tu ban ghi nao
			$from = $p * $recordPerPage;
			//lay bien ket noi csdl
			$where = ($category_id==0) ? "" : "where id=$category_id";
			$conn = Connection::getInstance();
			//thuc hien truy van
			$query = $conn->query("select * from sevicescategories $where  limit $from,$recordPerPage");
			//lay toan bo ket qua tra ve
			$result = $query->fetchAll();			
			//---
			return $result;
		}
		public function modelListSevices($recordPerPage){
			//lay bien p truyen tu url
			$p = isset($_GET["p"]) && is_numeric($_GET["p"]) && $_GET["p"] > 0 ? ($_GET["p"]-1) : 0;
			//lay tu ban ghi nao
			$from = $p * $recordPerPage;
			//---
			$orderBy = "order by id desc";
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			//thuc hien truy van
			$query = $conn->query("select * from sevicescategories where parent_id=0 limit $from,$recordPerPage");
			//lay toan bo ket qua tra ve
			$result = $query->fetchAll();			
			//---
			return $result;
		}	
		//tinh tong so ban ghi
		public function totalRecord($category_id,$recordPerPage){
			//lay bien ket noi
			$conn = Connection::getInstance();
			$query = $conn->query("select id from sevicescategories where id=$category_id");
			//tra ve tong so ban ghi
			return $query->rowCount();
		}
		public function modelListPriceSevices($sevicecategory_id){
			$conn = Connection::getInstance();
			$query = $conn->query("select * from sevices where sevicecategory_id=$sevicecategory_id");
			//tra ve mot ban ghi
			return $query->fetchAll();
		}
		public function modelListSevicesCategories(){
			$conn = Connection::getInstance();
			$query = $conn->query("select * from sevicescategories where parent_id=0");
			//tra ve mot ban ghi
			return $query->fetchAll();
		}
		public function modelGetSevicesCategories($id){
			$conn = Connection::getInstance();
			$query = $conn->query("select * from sevicescategories where id=$id");
			//tra ve mot ban ghi
			return $query->fetchAll();
		}
		public function modelCreate(){
			$phone = $_POST["phone"];
			$name= isset($_POST["name"]) ? $_POST["name"] : "";
			$sevice = isset($_POST["sevice"]) ? $_POST["sevice"] : "";
			$note= isset($_POST["note"]) ? $_POST["note"] : "";
			$daydl = $_POST["dayDl"];
			$timedl = $_POST["timedl"];
			//lay bien ket noi
			$conn = Connection::getInstance();
			//update du lieu tuong ung voi id truyen vao
			$conn->query("insert into schedule set phone='$phone',name='$name',sevice='$sevice',note='$note',date='$daydl',time='$timedl'");
		}
		//lay mot ban ghi
		public function modelGetRecord($id){
			//lay bien ket noi
			$conn = Connection::getInstance();
			$query = $conn->query("select * from sevices where id=$id");
			//tra ve mot ban ghi
			return $query->fetch();
		}	
		public function totalRecordAll(){
			//lay bien ket noi
			$conn = Connection::getInstance();
			$query = $conn->query("select * from sevicescategories where parent_id=0"); 
			//tra ve tong so ban ghi
			return $query->rowCount();
		}
		public function modelCheckTime($time,$date)
		{
			$conn = Connection::getInstance();
			//update du lieu tuong ung voi id truyen vao
			$query=$conn->query("SELECT COUNT(id) as tong  FROM `schedule` WHERE time='$time' and date = '$date'");
			$query->fetch();
			if ($query->tong>=5) return 0; else return 1;
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