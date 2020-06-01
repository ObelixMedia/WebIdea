<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
 $base_url='Views/layouts/';
 ?>
<body data-spy="scroll" data-target=".bs-docs-sidebar" style="background-image:url('<?php echo $base_url?>assets/img/bg-integrity-1-1.png');">
 
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


          <div class="page-header">
            <h1>5. Examples</h1>
          </div>
          <p class="lead">Move beyond the base template with a few example layouts. We encourage folks to iterate on these examples and not simply use them as an end result.</p>
          <ul class="thumbnails bootstrap-examples">
            <li class="span2">
              <a class="thumbnail" href="examples/starter-template.html">
                <img src="<?php echo $base_url?>assets/img/examples/bootstrap-example-starter.png" alt="">
              </a>
              <h4>Starter template</h4>
              <p>A barebones HTML document with all the Bootstrap CSS and JavaScript included.</p>
            </li>
            <li class="span2">
              <a class="thumbnail" href="examples/hero.html">
                <img src="<?php echo $base_url?>assets/img/examples/bootstrap-example-marketing.png" alt="">
              </a>
              <h4>Basic marketing site</h4>
              <p>Featuring a hero unit for a primary message and three supporting elements.</p>
            </li>
            <li class="span2">
              <a class="thumbnail" href="examples/fluid.html">
                <img src="<?php echo $base_url?>assets/img/examples/bootstrap-example-fluid.png" alt="">
              </a>
              <h4>Fluid layout</h4>
              <p>Uses our new responsive, fluid grid system to create a seamless liquid layout.</p>
            </li>

            <li class="span2">
              <a class="thumbnail" href="examples/marketing-narrow.html">
                <img src="<?php echo $base_url?>assets/img/examples/bootstrap-example-marketing-narrow.png" alt="">
              </a>
              <h4>Narrow marketing</h4>
              <p>Slim, lightweight marketing template for small projects or teams.</p>
            </li>
            <li class="span2">
              <a class="thumbnail" href="examples/justified-nav.html">
                <img src="<?php echo $base_url?>assets/img/examples/bootstrap-example-justified-nav.png" alt="">
              </a>
              <h4>Justified nav</h4>
              <p>Marketing page with equal-width navigation links in a modified navbar.</p>
            </li>
            <li class="span2">
              <a class="thumbnail" href="examples/signin.html">
                <img src="<?php echo $base_url?>assets/img/examples/bootstrap-example-signin.png" alt="">
              </a>
              <h4>Sign in</h4>
              <p>Barebones sign in form with custom, larger form controls and a flexible layout.</p>
            </li>

            <li class="span2">
              <a class="thumbnail" href="examples/sticky-footer.html">
                <img src="<?php echo $base_url?>assets/img/examples/bootstrap-example-sticky-footer.png" alt="">
              </a>
              <h4>Sticky footer</h4>
              <p>Pin a fixed-height footer to the bottom of the user's viewport.</p>
            </li>
            <li class="span2">
              <a class="thumbnail" href="examples/carousel.html">
                <img src="<?php echo $base_url?>assets/img/examples/bootstrap-example-carousel.png" alt="">
              </a>
              <h4>Carousel jumbotron</h4>
              <p>A more interactive riff on the basic marketing site featuring a prominent carousel.</p>
            </li>
          </ul>
        </section>
      
      </div> 
</div>






<?php
include("Views/layouts/js.php");
?>


</body>
</html>