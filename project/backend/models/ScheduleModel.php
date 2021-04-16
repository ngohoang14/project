<?php 
	trait ScheduleModel{
		//ham liet ke danh sach cac ban ghi, co phan trang
		public function modelRead($recordPerPage){
			//lay tong to so ban ghi
			$total = $this->modelTotal();
			//tinh so trang
			$numPage = ceil($total/$recordPerPage);
			//lay so trang hien tai truyen tu url
			$page = isset($_GET["p"]) && $_GET["p"] > 0 ? $_GET["p"]-1 : 0;
			//lay tu ban ghi nao
			$from = $page * $recordPerPage;
			//thuc hien truy van
			$conn = Connection::getInstance();
			$query = $conn->query("select * from schedule order by date,time asc limit $from, $recordPerPage");
			//tra ve tat ca cac ban truy van duoc
			return $query->fetchAll();
		}

		//ham tinh tong so ban ghi
		public function modelTotal(){
			//---
			$conn = Connection::getInstance();
			$query = $conn->query("select id from schedule");
			//lay tong so ban ghi
			return $query->rowCount();
			//---
		}
		//lay mot ban ghi table schedule
		public function modelGetSchedule($id){
			//---
			$conn = Connection::getInstance();
			$query = $conn->query("select * from schedule where id = $id");
			//tra ve mot ban ghi
			return $query->fetch();
			//---
		}
		public function modelDelete($id){
			$conn = Connection::getInstance();
			$query = $conn->query("delete from schedule where id=$id");
		}
	}
 ?>