<?php
 include_once("Controller/Controller.php");
try {
   //code...
   $controller = new Controller();  
	
	if(isset($_GET['page'])){
	
	if($_GET['page']=='lien-he'){
		$controller->lienhe();
	}
	
	
	if($_GET['page']=="tuyen-dung"){
		$controller->tuyendung();
	}
		
		
}
	else   if(isset($_GET['page'])&&isset($_GET['danh-muc'])){
  
		if(isset($_GET['id-bai-viet'])){
		  $controller->loadPage($_GET['page'],$_GET['danh-muc'],$_GET['id-bai-viet']);
		}else{
		  $controller->loadPage($_GET['page'],$_GET['danh-muc'],"");
		}
	}
else{
      $controller->index() ;
}

	} catch (\Throwable $th) {
   echo $th;
}
	
	

	
	
   
	
	
	

?>