<?php
include_once("Model/loaiDanhMuc.php");
include_once("Model/danhMucBaiViet.php");
class Controller {
  
  
      
    public function loadPage($page,$danhmuc){
        
        print "$page <br>"."$danhmuc";
    }
    public function index()
    {
		$loaiDanhMuc=new loaiDanhMuc();
		$loaiDM=$loaiDanhMuc->getAll();
    include 'Views/danhMucBaiViet.php';
    }public function lienhe()
		
    {
			$loaiDanhMuc=new loaiDanhMuc();
		$loaiDM=$loaiDanhMuc->getAll();
	
    include 'Views/lienhe.php';
    }
   
	
   
}