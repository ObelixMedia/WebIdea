<?php
 include_once("Controller/Controller.php");
try {
   //code...
  
   $controller = new Controller();
  

if(isset($_GET['page'])=="lien-he"){
	
	$controller->lienhe();
}
 if(isset($_GET['page'])&&isset($_GET['danh-muc'])){
         $controller->loadPage($_GET['page'],$_GET['danh-muc']); 
   }else{
      $controller->index() ;
}
} catch (\Throwable $th) {
   echo $th;
}


?>