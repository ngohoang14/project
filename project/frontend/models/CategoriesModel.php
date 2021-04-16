<?php 
	trait CategoriesModel{
		//liet ke cac danh muc cap cha
		public function modelListCategories(){
			$conn = Connection::getInstance();
			$query = $conn->query("select * from categories where parent_id = 0 order by id desc");
			return $query->fetchAll();
		}
		public function modelListCategoriesHot(){
			$conn = Connection::getInstance();
			$query = $conn->query("select * from categories where name='Dầu gội' or name='Dầu xả' or name='Combo' or name='Tinh dầu, Kem dưỡng' or name='Tinh chất, Huyết thanh'  order by id asc");
			return $query->fetchAll();
		}
		//liet ke cac danh muc cap con
		public function modelListCategoriesSub($category_id){
			$conn = Connection::getInstance();
			$query = $conn->query("select * from categories where parent_id = $category_id order by id desc");
			return $query->fetchAll();
		}
	}
 ?>