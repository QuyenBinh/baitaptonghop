<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./libs/css/style.css">
    <link rel="stylesheet" href="./libs/css/footer_style.css">
</head>
<body>
<?php require_once './layout/header.php'; ?>
<main class = "main">
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="./images/1.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="./images/2.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="./images/3.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="./images/4.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="./images/5.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-target="#carouselExampleIndicators" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-target="#carouselExampleIndicators" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </button>
</div>
<section class = "section">
    <div class="module">
    <div class="container" style="margin: 0;">
         <h2 class="heading-2 text-primary-500 font-bold mb-lg-10 mb-6">Bạn cần tìm?</h2>
    </div>
    </div>
    <div class="home-cate-wrap">
    <div class="container" style="max-width: 100%;">
      <div class="text-secondary-200 mb-5">
        <p>
          <strong class="heading-5">Sản Phẩm Gia Dụng</strong>
          <br>
          <span class="body-1">Khách hàng tiêu dùng/ mua sỉ</span>
        </p>
      </div>
      <div class = "row">
      <div class="field__content__item">
		<div class="col-xs-12 col-md-6 col-lg-3 field__content__items wow zoomIn" data-wow-duration="1s" style="visibility: visible; animation-duration: 1s; animation-name: zoomIn;">
			<div class="field__item__thumb">
				<img src="https://www.duytan.com/Data/Sites/1/media/icon-san-pham/icon-san-pham-gia-dinh.jpg" alt="">
			</div>
			<h3>Thực phẩm, tiêu dùng</h3>
		</div>
		<div class="col-xs-12 col-md-6 col-lg-3 field__content__items wow zoomIn" data-wow-duration="1s" data-wow-delay="0.1s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.1s; animation-name: zoomIn;">
			<div class="field__item__thumb">
				<img src="https://www.duytan.com/Data/Sites/1/media/icon-san-pham/icon-san-pham-gia-dinh.jpg" alt="">
			</div>
			<h3>Dược phẩm, y tế</h3>
		</div>
		<div class="col-xs-12 col-md-6 col-lg-3 field__content__items wow zoomIn" data-wow-duration="1s" data-wow-delay="0.2s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.2s; animation-name: zoomIn;">
			<div class="field__item__thumb">
				<img src="https://www.duytan.com/Data/Sites/1/media/icon-san-pham/icon-san-pham-gia-dinh.jpg" alt="">
			</div>
			<h3>Nông nghiệp</h3>
		</div>
		<div class="col-xs-12 col-md-6 col-lg-3 field__content__items wow zoomIn" data-wow-duration="1s" data-wow-delay="0.3s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.3s; animation-name: zoomIn;">
			<div class="field__item__thumb">
				<img src="https://www.duytan.com/Data/Sites/1/media/icon-san-pham/icon-san-pham-gia-dinh.jpg" alt="">
			</div>
			<h3>Đồ uống, nước giải khát</h3>
		</div>
        <div class="col-xs-12 col-md-6 col-lg-3 field__content__items wow zoomIn" data-wow-duration="1s" data-wow-delay="0.3s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.3s; animation-name: zoomIn;">
			<div class="field__item__thumb">
				<img src="https://www.duytan.com/Data/Sites/1/media/icon-san-pham/icon-san-pham-gia-dinh.jpg" alt="">
			</div>
			<h3>Đồ uống, nước giải khát</h3>
		</div>
	</div> 
      </div>
    </div>
  </div>
</section>
<main>
<?php require_once './layout/footer.php'; ?>
</body>
</html>