<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
 $base_url='Views/layouts/';
 ?>
<body data-spy="scroll" data-target=".bs-docs-sidebar" style="background-image:url('assets/img/bg-integrity-1-1.png');">
 
<?php
include("Views/layouts/link.php");
include("Views/layouts/menu.php");
include("Views/layouts/header.php");
//include("Views/layouts/banner.php");
?>

<div class="container">
      <div class="row">

      <section id="examples">
      <?php foreach ($loaiDM as $item) {
                $danhMucBaiViet= new danhMucBaiViet();
                $danhmuc=$danhMucBaiViet->getIdLoai($item['id_loai']);
              

                if(count($danhmuc)!=0){
                  echo '<div class="page-header">
                  <h3>'.$item['ten_loai'].'</h3>
                </div>';
                    echo ' <ul class="thumbnails bootstrap-examples">';
                    foreach($danhmuc as $itemDM){
                     echo '<li class="span2">
                     <a class="thumbnail" href="examples/starter-template.html">
                       <img src="'.$base_url.'assets/img/'.$itemDM['hinh_danh_muc'].'" alt="'.$base_url.'assets/img/'.$itemDM['hinh_danh_muc'].'">
                     </a>
                     <h4>'.$itemDM['ten_danh_muc'].'</h4>
                    
                   </li>';

                      
                      }
                      echo '<li><a class="btn" href="index.php?page=danh-muc-bai-viet&danh-muc=all&id='.$item['id_loai'].'">Xem Thêm '.$item['ten_loai'].'</a></li>';

                    echo '</ul>';
                }else if($danhmuc==0){
                    //echo " <li><a href='index.php?page=danhmucbaiviet?danhmuc=".$item['url']."'>".$item['ten_loai']."</a></li>";
                }
                
            }
            ?>


        </section>

        
      
      </div> 
</div>






<?php
include("Views/layouts/footer.php");
?>


</body>
</html>