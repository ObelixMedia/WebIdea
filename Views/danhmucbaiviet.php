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
include("Views/layouts/banner.php");
?>

<div class="container">
      <div class="row">
         <h1>Quang Cao</h1>
<div class="container">
   <div class="row">
   <div class="card span4">
   <h3 class="card-heading simple">Simple News Card</h3>
   <div class="card-body">
      ...
   </div>
   <div class="card-comments">
      <div class="comments-collapse-toggle">
         <a data-toggle="collapse" data-target="#c1-comments" href="#c1-comments">34 comments <i class="icon-angle-down"></i></a>
      </div>
      <div id="c1-comments" class="comments collapse">
         <div class="media">
            <a class="pull-left" href="#">
               <img class="media-object" data-src="holder.js/28x28" alt="avatar"/>
            </a>
            <div class="media-body">
               <h4 class="media-heading">Comment title</h4>
               <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam...</p>
            </div>
         </div>
      </div>
   </div>
</div>
<div class="card span4">
   <h3 class="card-heading simple">Simple News Card</h3>
   <div class="card-body">
      ...
   </div>
   <div class="card-comments">
      <div class="comments-collapse-toggle">
         <a data-toggle="collapse" data-target="#c1-comments" href="#c1-comments">34 comments <i class="icon-angle-down"></i></a>
      </div>
      <div id="c1-comments" class="comments collapse">
         <div class="media">
            <a class="pull-left" href="#">
               <img class="media-object" data-src="holder.js/28x28" alt="avatar"/>
            </a>
            <div class="media-body">
               <h4 class="media-heading">Comment title</h4>
               <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam...</p>
            </div>
         </div>
      </div>
   </div>
</div> <div class="card span4">
   <h3 class="card-heading simple">Simple News Card</h3>
   <div class="card-body">
      ...
   </div>
   <div class="card-comments">
      <div class="comments-collapse-toggle">
         <a data-toggle="collapse" data-target="#c1-comments" href="#c1-comments">34 comments <i class="icon-angle-down"></i></a>
      </div>
      <div id="c1-comments" class="comments collapse">
         <div class="media">
            <a class="pull-left" href="#">
               <img class="media-object" data-src="holder.js/28x28" alt="avatar"/>
            </a>
            <div class="media-body">
               <h4 class="media-heading">Comment title</h4>
               <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam...</p>
            </div>
         </div>
      </div>
   </div>
</div>
   </div>
</div>
      </div> 
</div>






<?php
include("Views/layouts/js.php");
?>


</body>
</html>