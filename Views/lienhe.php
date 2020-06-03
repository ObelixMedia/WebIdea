<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
 
<?php
 $base_url='Views/layouts/';
 ?>
<body data-spy="scroll" data-target=".bs-docs-sidebar" style="background-image:url('<?php echo $base_url?>assets/img/bg-integrity-1-1.png');">
 
<?php
include("Views/layouts/link.php");
include("Views/layouts/header.php");
include("Views/layouts/menu.php");

?>

<div class="container">
	<div class="">
		<h1 class="text-cty">Công ty TNHH TM In Ấn - Quảng Cáo Ý Tưởng</h1>
		<p class="text-ll">MST: 6001569449</p>
	</div>
	<div class="row border-1">
		<div class="span6 border-2" style="text-align: left; margin-bottom: 30px; margin-top: 30px">
			<p class="text-ll" style=""><i class="icon-map-marker">  30 Bùi Thị Xuân, Tự An, Thành phố Buôn Ma Thuột, Đắk Lắk</i></p>
			<p class="text-ll" style="margin-top: 15px;"><i class="icon-phone">  0964 55 44 99 (Ms Hiếu)</i></p>
			<p class="text-ll" style="margin-top: 15px;"><i class="icon-phone">  098 5656 123 (Mr Nam)</i></p>
			<p class="text-ll" style="margin-top: 15px;"><i class="icon-envelope">  inanytuongbmt@gmail.com</i></p>
		</div>
		<div class="span5" style="">
			<h2 style="margin-top: 25px; margin-bottom: 20px; font-weight: bold">Thời gian làm việc</h2>
			<p class="text-ll">Sáng từ: 7h30 - 11h30</p>
			<p class="text-ll">Chiều từ: 13h30 - 17h30(Nghỉ ngày CN)</p>
		</div>
	</div>
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3892.4257738474457!2d108.05380681529195!3d12.685609791043968!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3171f7d112d9684f%3A0xfc3ed710e6f168e1!2zMzAgQsO5aSBUaOG7iyBYdcOibiwgVOG7sSBBbiwgVGjDoG5oIHBo4buRIEJ1w7RuIE1hIFRodeG7mXQsIMSQ4bqvayBM4bqvaywgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1590986006428!5m2!1svi!2s" width="100%	" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
	<div>
		<h2 style="text-align: center; font-weight: bold">Đối tác của chúng tôi</h2>
		<p class="text-ll" style="text-align: center; font-size: 18px">Chúng tôi tạo ra giá trị thông qua quản lý chuỗi cung ứng từ nhiều đối tác, nhờ đó giảm thời gian dự án. New Ocean không ngừng hoàn thành tốt vai trò nhà tích hợp hệ thống và hợp tác với các nhà cung cấp sản phẩm công nghiệp hàng đầu tại Châu Âu và trên thế giới. Sự hỗ trợ của các đối tác giúp chúng tôi phát triển các hệ thống tiên tiến nhất, đem lại sự hài lòng cho khách hàng.</p>
	</div>
	<div class="customer-logos">
      <div class="slide"><img src="<?php echo $base_url?>/assets/img/biasaigon.png"></div>
      <div class="slide"><img src="<?php echo $base_url?>/assets/img/hoaphat.png"></div>
      <div class="slide"><img src="<?php echo $base_url?>/assets/img/intimex.png"></div>
      <div class="slide"><img src="<?php echo $base_url?>/assets/img/mobifone.png"></div>
      <div class="slide"><img src="<?php echo $base_url?>/assets/img/ocean.png"></div>
      <div class="slide"><img src="<?php echo $base_url?>/assets/img/sobek.png"></div>
      <div class="slide"><img src="<?php echo $base_url?>/assets/img/total.png"></div>
      <div class="slide"><img src="<?php echo $base_url?>/assets/img/viettel.png"></div>
      <div class="slide"><img src="<?php echo $base_url?>/assets/img/vinaphone.png"></div>
   </div>
	<script>
	$(document).ready(function(){
			$('.customer-logos').slick({
				slidesToShow: 6,
				slidesToScroll: 1,
				autoplay: true,
				autoplaySpeed: 2000,
				arrows: false,
				dots: false,
					pauseOnHover: false,
					responsive: [{
					breakpoint: 768,
					settings: {
						slidesToShow: 3
					}
				}, {
					breakpoint: 520,
					settings: {
						slidesToShow: 2
					}
				}]
			});
		});
	</script>
</div>



<?php
include("Views/layouts/footer.php");
?>


</body>
</html>
<style>
	.border-1{
		border-style: dashed;
    	border-width: 2px 0px 2px 0px;
    	border-color: #b2b2b2;
		margin-bottom: 30px
	}
	.border-2{
		border-style: dashed;
    	border-width: 0px 2px 0px 0px;
    	border-color: #b2b2b2;
	}
	.text-cty{
		font-weight: bold;
		margin-top: 80px;
		margin-bottom: 20px
	}
	.text-ll{
		font-family: "Quicksand-Bold", Sans-serif;
    	font-size: 21px;
	}
/*--------------------------------------- Slider ----------------------------------------*/
.slick-slide {
    margin: 0px 30px;
}

.slick-slide img {
    width:;
	height: 50px;
}

.slick-slider
{
    position: relative;

    display: block;
    box-sizing: border-box;

    -webkit-user-select: none;
       -moz-user-select: none;
        -ms-user-select: none;
            user-select: none;

    -webkit-touch-callout: none;
    -khtml-user-select: none;
    -ms-touch-action: pan-y;
        touch-action: pan-y;
    -webkit-tap-highlight-color: transparent;
}

.slick-list
{
    position: relative;

    display: block;
    overflow: hidden;

    margin: 0;
    padding: 0;
}
.slick-list:focus
{
    outline: none;
}
.slick-list.dragging
{
    cursor: pointer;
    cursor: hand;
}

.slick-slider .slick-track,
.slick-slider .slick-list
{
    -webkit-transform: translate3d(0, 0, 0);
       -moz-transform: translate3d(0, 0, 0);
        -ms-transform: translate3d(0, 0, 0);
         -o-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
}

.slick-track
{
    position: relative;
    top: 0;
    left: 0;

    display: block;
}
.slick-track:before,
.slick-track:after
{
    display: table;

    content: '';
}
.slick-track:after
{
    clear: both;
}
.slick-loading .slick-track
{
    visibility: hidden;
}

.slick-slide
{
    display: none;
    float: left;

    height: 100%;
    min-height: 1px;
}
[dir='rtl'] .slick-slide
{
    float: right;
}
.slick-slide img
{
    display: block;
}
.slick-slide.slick-loading img
{
    display: none;
}
.slick-slide.dragging img
{
    pointer-events: none;
}
.slick-initialized .slick-slide
{
    display: block;
}
.slick-loading .slick-slide
{
    visibility: hidden;
}
.slick-vertical .slick-slide
{
    display: block;

    height: auto;

    border: 1px solid transparent;
}
.slick-arrow.slick-hidden {
    display: none;
}
</style>