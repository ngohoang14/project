<?php 
	class Controller{
		public $view = NULL;
		public $layoutPath = NULL;
		// ham load view
		public function loadView($viewPath,$data = NULL){
			if (file_exists("views/$viewPath")){
				ob_start();
				if($data != NULL)
					extract($data);
				include "views/$viewPath";
				
				$this->view = ob_get_contents();
			ob_get_clean();
		}
			//--
			if ($this->layoutPath != NULL)
				include "views/$this->layoutPath";
			else
				echo $this->view;
		}
		//ham tao
		public function authentication(){
			// kiem tra user da dang nhap chua, neu chua thi yeu cau dang nhap
			if (isset($_SESSION["email"])==false)
			 	header("location:index.php?controller=login");
		}
	}
 ?>