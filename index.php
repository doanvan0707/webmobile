<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Trang bán hàng</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="styles/style.css">
</head>
<body>
	<header>
		<div class="container">
			<img src="images/cover-image.png">
			<nav class="nav-menu">
				<ul>
					<li><a href="Controllers/MobileController.php?action=index">Trang chủ</a></li>
					<li><a href="#">Giới thiệu</a></li>
					<li><a href="#">Tin tức</a></li>
					<li><a href="#">Hướng dẫn mua hàng</a></li>
					<li><a href="#">Liên hệ</a></li>
				</ul>
			</nav>
		</div>
	</header>
	<div class="content">
		<div class="container">
			<div class="row">
				<div class="col-md-9">
					<!-- Slider chạy -->
					<section>
						<img src="images/RFGAMING.jpg">
					</section>
					<!-- Phần tìm kiếm, login, giỏ hàng -->
					<section>
						<div class="nav-login">
							<ul>
								<li><a href="Controllers/MobileController.php?action=registration
" target="_blank" class="btn btn-primary">Đăng ký tài khoản</a></li>
								<li><a href="Controllers/MobileController.php?action=login
" target="_blank" class="btn btn-primary">Đăng nhập</a></li>
								<li><a href="Controllers/MobileController.php?action=cart
" target="_blank" class="btn btn-primary">Giỏ hàng</a></li>
								 <li><a href="Controllers/MobileController.php?action=user
" target="_blank" class="btn btn-primary">Thông tin Người dùng</a></li> 
							</ul>
						</div>

					</section>
					<div class="grid">
				    <form action="" method="get" class="search">

				      <div class="form__field">
				        <input type="search" name="search" placeholder="Tìm kiếm ..." class="form__input">
				        <input type="submit" value="Search" class="button">
				      </div>

				    </form>

				  </div>
					<!-- Phần sản phẩm bán chạy/ selling products
 -->
					<section>
						<div class="selling-products">
							<h3>Sản phẩm bán chạy</h3>
							<div class="selling-products-1">
								<div class="row">
									<div class="col-md-4">
										<div class="selling-products-1-1">
											<img src="images/sanphambanchay/samsung-galaxy-j7.jpg">
											<p>Galaxy J7 Pro</p>
											<p>6.090.000đ</p>
											<a href="#" class="text-center">Thêm vào giỏ hàng</a>
										</div>	
									</div>
									<div class="col-md-4"> 
										<div class="selling-products-1-1">
											<img src="images/sanphambanchay/Vivo-V85.jpg">
											<p>Vivo V85</p>
											<p>5.990.000đ</p>
											<a href="#">Thêm vào giỏ hàng</a>
										</div>	
									</div>
									<div class="col-md-4">
										<div class="selling-products-1-1">
											<img src="images/sanphambanchay/Nokia-7-Plus.jpg">
											<p>Nokia 7 Plus</p>
											<p>8.990.000đ</p>
											<a href="#">Thêm vào giỏ hàng</a>
										</div>	
									</div>
								</div>
							</div>	
							<div>
								<div class="row">	
									<div class="col-md-4">
										<div class="selling-products-1-1">
											<img src="images/sanphambanchay/samsung-galaxy-j4.jpg">
											<p>Samsung Galaxy J4</p>
											<p>3.790.000đ</p>
											<a href="#">Thêm vào giỏ hàng</a>
										</div>	
									</div>
									<div class="col-md-4"> 
										<div class="selling-products-1-1">
											<img src="images/sanphambanchay/samsung-galaxy-note8.jpg">
											<p>Samsung Galaxy Note 8</p>
											<p>22.490.000đ</p>
											<a href="#">Thêm vào giỏ hàng</a>
										</div>	
									</div>
									<div class="col-md-4">
										<div class="selling-products-1-1">
											<img src="images/sanphambanchay/oppo-f5-youth-vang-hong.jpg">
											<p>OPPO F5 YOUTH</p>
											<p>5.990.000đ</p>
											<a href="#">Thêm vào giỏ hàng</a>
										</div>	
									</div>
								</div>
							</div>
						</div>	
					</section>
					<!-- Phần sản phẩm mới/ new-products -->
					<section>
						<div class="new-products">
							<h3>Sản phẩm mới</h3>
							<div class="new-products-1">
								<div class="row">
									<div class="col-md-4">
										<div class="new-products-1-1">
											<img src="images/sanphambanchay/samsung-galaxy-j7.jpg">
											<p>Galaxy J7 Pro</p>
											<p>6.090.000đ</p>
											<a href="#">Thêm vào giỏ hàng</a>	
										</div>	
									</div>
									<div class="col-md-4"> 
										<div class="new-products-1-1">
											<img src="images/sanphambanchay/Vivo-V85.jpg">
											<p>Vivo V85</p>
											<p>5.990.000đ</p>
											<a href="#">Thêm vào giỏ hàng</a>
										</div>	
									</div>
									<div class="col-md-4">
										<div class="new-products-1-1">
											<img src="images/sanphambanchay/Nokia-7-Plus.jpg">
											<p>Nokia 7 Plus</p>
											<p>8.990.000đ</p>
											<a href="#">Thêm vào giỏ hàng</a>
										</div>	
									</div>
								</div>
							</div>
							<div class="new-products-1">
								<div class="row">
									<div class="col-md-4">
										<div class="new-products-1-1">
											<img src="images/sanphambanchay/samsung-galaxy-j4.jpg">
											<p>Samsung Galaxy J4</p>
											<p>3.790.000đ</p>
											<a href="#">Thêm vào giỏ hàng</a>
										</div>	
									</div>
									<div class="col-md-4"> 
										<div class="new-products-1-1">
											<img src="images/sanphambanchay/samsung-galaxy-note8.jpg">
											<p>Samsung Galaxy Note 8</p>
											<p>22.490.000đ</p>
											<a href="#">Thêm vào giỏ hàng</a>
										</div>	
									</div>
									<div class="col-md-4">
										<div class="new-products-1-1">
											<img src="images/sanphambanchay/oppo-f5-youth-vang-hong.jpg">
											<p>OPPO F5 YOUTH</p>
											<p>5.990.000đ</p>
											<a href="#">Thêm vào giỏ hàng</a>
										</div>	
									</div>
								</div>
							</div>
						</div>	
					</section>
				</div>
				<div class="col-md-3">
					<aside>
						<!-- Danh mục sản phẩm -->
						<nav class="nav-sub-menu">
							<ul>
								<li><a href="" class="btn btn-success">HÃNG ĐIỆN THOẠI</a></li>
								<li><a href="#" class="btn btn-info">Iphone</a></li>
								<li><a href="#" class="btn btn-info">Sam Sung</a></li>
								<li><a href="#" class="btn btn-info">Sony Ericsion</a></li>
								<li><a href="#" class="btn btn-info">LG</a></li>
								<li><a href="#" class="btn btn-info">HTC</a></li>
								<li><a href="#" class="btn btn-info">Nokia</a></li>
								<li><a href="#" class="btn btn-info">Asus</a></li>
								<li><a href="#" class="btn btn-info"	>Blackberry</a></li>
							</ul>
						</nav>
						<!-- Khuyến mãi -->
						<div>
							
						</div>
						<!-- Hỗ trợ trực tuyến -->
						<div>
							
						</div>
						<!-- Tin tức -->
						<div>
							
						</div>
						<!-- Video -->
						<div>
							
						</div>
					</aside>
				</div>
			</div>
		</div>
		<div class="quangcao">
			<div class="row">
				<div class="col-md-4">
					<img src="images/quangcao/quangcao(1).jpg">
				</div>
				<div class="col-md-4">
					<img src="images/quangcao/quangcao(2).jpg">
				</div>
				<div class="col-md-4">
					<img src="images/quangcao/quangcao(3).jpg">
				</div>
			</div>
		</div>	
	</div>
	<footer class="main-footer">
		<div class="container">
	    <div class="pull-right hidden-xs">
	      <b>Version</b> 2.4.0
	    </div>
	    <strong>Copyright © 2018 <a href="#">Trang Bán Hàng</a>.</strong> All rights
	    reserved.
	  </div>  
  </footer>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
</body>
</html>