<div class="navbar navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container">
            <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <div class="nav-collapse collapse">
                <ul class="nav">
                    <li>
                        <a href="<?php echo $base_url?>">Home</a>
                    </li>
                    <?php foreach ($loaiDM as $item) {
                $danhMucBaiViet= new danhMucBaiViet();
                $danhmuc=$danhMucBaiViet->getIdLoai($item['id_loai']);
               

                if(count($danhmuc)!=0){
                    echo '<li class="dropdown"> <a href="index.php?page=danh-muc-bai-viet&danh-muc=test" class="dropdown-toggle" data-toggle="dropdown">'.$item['ten_loai'].'<b class="caret"></b></a><ul class="dropdown-menu">';
                    foreach($danhmuc as $itemDM){
                        echo '<li><a href="index.php?page=danh-muc-bai-viet&danh-muc='.$itemDM['id_danh_muc'].'">'.$itemDM['ten_danh_muc'].'</a></li>';
                        //echo json_encode($info);
                      }
                      echo '<li class="divider"></li><li><a class="btn" href="index.php?page=danh-muc-bai-viet&danh-muc=all&id='.$item['id_loai'].'">Xem Thêm</a></li>';

                    echo '</ul></li>';
                }else if($danhmuc==0){
                    //echo " <li><a href='index.php?page=danhmucbaiviet?danhmuc=".$item['url']."'>".$item['ten_loai']."</a></li>";
                }
                
            }
            ?>

                    <li class="">
                        <a href="index.php?page=lien-he">Liên Hệ</a>
                    </li>
                    <li class="">
                        <a href="index.php?page=tuyen-dung">Tuyển Dụng</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>