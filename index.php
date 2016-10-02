<!DOCTYPE html>
<html>
	<head>
		<title>Sublime Theme</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<script type="text/javascript" src="js/jquery-1.12.4.min.js"></script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
	</head>
	<body>
		<div id="wrap">
			<?php
				include("header.php");
			?>
			<div class="top-box-content">
				<div class="row">
					<div class="container">
						<div class="box-content-container">
							<div class="col-md-3">
								<div class="list-left-menu">
									<h2><span class="glyphicon glyphicon-menu-hamburger" style="margin-right: 20px;" aria-hidden="true"></span>Menu</h2>
									<ul style="padding:0px;">
										<li><a href="">Hoa quả nhập khẩu</a></li>
										<li><a href="">Rau củ quả</a></li>
										<li><a href="">Hoa quả sạch</a></li>
										<li><a href="">Đồ ăn nhẹ</a></li>
										<li><a href="">Bánh các loại</a></li>
										<li><a href="">Pizza đặc biệt</a></li>
										<li><a href="">Đặc sản vùng miền</a></li>
										<li><a href="">Đồ ăn nhanh</a></li>
										<li><a href="">Rau củ hữu cơ</a></li>
										<li><a href="">Bánh sinh nhật</a></li>
										<li><a href="">Món ngon mỗi ngày</a></li>
									</ul>
								</div>
							</div>
							<div class="col-md-6" style="padding-left:10px;">
								<div class="content-slider">
									<img src="img/slider.png">
								</div>
								<div class="banner">
									<img src="img/banner1.png">
								</div>
							</div>
							<div class="col-md-3">
								<div class="content-right-product">
									<div class="content-headding-right">
										<p>Sản phẩm hot<a href=""><span class="glyphicon glyphicon-arrow-right" style="margin-left: 10px;"  aria-hidden="true"></span></a></p>
									</div>
									<div class="content-right">
										<div class="top-img">
											<img src="img/right-km.png">
										</div>
										<div class="text-top-img">
											<p>240.000đ</p>
											<p>Cam Naval ruột vàng</p>
										</div>
									</div>
									<div class="bottom-right">
										<div class="bottom-img">
											<img src="img/right-km2.png">
										</div>
										<div class="text-top-img">
											<p>240.000đ</p>
											<p>Cam Naval ruột vàng</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- end -->
			<!-- box-content2 -->
			<div class="middle-box-content">
				<div class="row">
					<div class="container">
						<div class="mid-box-content-container">
							<div class="col-md-3">
								<div class="content-headding-right">
									<div class="list-left">
										<div class="top-top-heading">
											<p>Sản phẩm hot<span class="glyphicon glyphicon-arrow-right" style="margin-left: 10px;"  aria-hidden="true"></span>
										</p>
									</div>
									<div class="left-top-img" style="border-bottom: 1px solid #E9E9E9; padding:28px;">
										<img src="img/spm1.png" style=" margin-left: -5px;">
										<div class="left-top-img-text" style="float: right; ">
											<h6>Quả óc chó</h6>
											<h4 style="color: #F16C52;">340.000₫</h4>
											<h5>450.000₫</h5>
										</div>
									</div>
									
									<div class="left-top-img" style="padding:22px;">
										<img src="img/spm2.png" >
										<div class="left-top-img-text" style="float: right; margin-top: -100px;">
											<h6>Cam Navel ruột vàng</h6>
											<h4 style="color: #F16C52;">340.000₫</h4>
											<h5>450.000₫</h5>
										</div>
									</div>
								</div>
								
							</div>
						</div>
						<div class="col-md-9" style="padding-left: 9px;padding-right: 0px;">
							<div class="content-headding-right">
								<div class="list-right">
									<div class="top-heading">
										<p>Khuyến mại trong ngày
											<span class="glyphicon glyphicon-arrow-right" style="margin-left: 10px;"  aria-hidden="true">
											</span>
											
										</p>
									</div>
									<div class="row no-mar-h product-top-heading">
										<?php
											$products = array(
												array(
													'img' => 'img/anh-nho.png',
													'price' => '245.000',
													'price2' => '265.000₫',
													'name' => 'Nho mỹ nhập khẩu',
												),
												array(
													'img' => 'img/quadao.png',
													'price' => '245.000',
													'price2' => '265.000₫',
													'name' => 'Đào đỏ Mỹ',
												),
												array(
													'img' => 'img/vaithieu.png',
													'price' => '245.000',
													'price2' => '265.000₫',
													'name' => 'Vải thiều Thanh Hà',
												),
												array(
													'img' => 'img/dautay.png',
													'price' => '245.000',
													'price2' => '265.000₫',
													'name' => 'Dâu tây Đà Lạt',
												),
												array(
													'img' => 'img/taole.png',
													'price' => '245.000',
													'price2' => '265.000₫',
													'name' => 'Táo xanh Mỹ',
												),
											);
										?>
										<?php foreach ($products as $sanpham) { ?>
										<div class="col-md-3 no-pad-h sanpham">
											<div class="sanpham-content">
												<div class="text-img-sanpham">
													<img src="<?php echo $sanpham['img']; ?>">
													<p><?php echo $sanpham['price']; ?> <span class="text-cl"><?php echo $sanpham['price2']; ?></span></p>
													<p style="color: #363636;"><a href="#"><?php echo $sanpham['name']; ?></a></p>
												</div>
											</div>
										</div>
										<?php } ?>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- end -->
			<div class="main-box-product-middle" style="margin-top: 40px;">
				<div class="row">
					<div class="container">
						<div class="container-content-main">
							<div class="col-md-3">
								<div class="content-headding-right">
									<div class="top-heading-main">
										<div class="list-support">
											<div class="content-list-support">
												<p>Hỗ trợ trực tuyến
													<span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>
												</p>
												<div class="tuvan is live" style="margin-top: 20px;">
													<div class="tuvan">
														<span class="tuvan-text"><p>Tư vấn bán hàng 1</p></span>
														<span class="tuvan-name"><p>Mrs.Dung: (04) 3786 8904</p></span>
													</div>
													<div class="tuvan">
														<span class="tuvan-text"><p>Tư vấn bán hàng 2</p></span>
														<span class="tuvan-name"><p>Mr. Tuấn: (04) 3786 8904</p></span>
													</div>
													<div class="tuvan">
														<span class="tuvan-text"><p>Email liên hệ</p></span>
														<span class="tuvan-name"><p>support@bizweb.vn</p></span>
													</div>
												</div>
												
											</div>
										</div>
									</div>
								</div>
								<div class="content-headding-right">
									<div class="top-heading-main">
										<div class="list-news">
											<p>Tin tức nổi bật
												<span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span>
											</p>
											<div class="img-hoatuoi"><img src="img/hoatuoi.png"></div>
											<span class="hoatuoi-text">
												<p>Cách cắm hoa tươi lâu chị em nên biết</p>
											</span>
											<div class="date-time">
												<span class="glyphicon glyphicon-calendar" aria-hidden="true">
													<li>26/03/2016</li>
												</span>
												<span class="glyphicon glyphicon-comment" id="icon-comment"  aria-hidden="true">
													<li> 0:Bình luận</li>
												</span>
											</div>
											<div class="text-camhoa">
												<h6>Để tránh cảnh chưa hết Tết hoa đã héo úa rụng cành trước hết phải chọn hoa thật tươi để mua
												Với hoa hồng, cần chọn mua những hoa không bị nở toét. Nếu mua cả đóa, nên loại những hoa có dấu hiệu héo úa ra khỏi đóa...<a href="/">[Xem thêm]</a>
												</h6>
											</div>
										</div>
									</div>
								</div>
								<!-- luottruycap -->
								<div id="box-online">
									<div class="content-box-online">
										<div class="box-main-online">
											<div class="top-follow">
												<ul>
													<li>Lượt truy cập</li>
												</ul>
											</div>
											<div class="top-follow-info">
												<ul>
													<li>Đang trực tuyến:[0]</li>
													<li>Hôm nay: [0]</li>
													<li>Hôm qua:[0]</li>
													<li>Tất cả: [0]</li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-9" style="padding-left: 9px;
								padding-right: 0px;" >
								<div class="content-col no-pad-h">
									<div class="list-right-two">
										<div class="row">
											<div class="content-row">
												<div class="content-headding-right">
													<div class="top-heading-main">
														<div class="row">
															<div class="col-md-3">
																<div class="content-col-3">
																	<div class="top-heading" style="margin-left: 15px;">
																		<p>Sản phẩm bán chạy
																			<span class="glyphicon glyphicon-arrow-right"  aria-hidden="true">
																			</span>
																		</p>
																	</div>
																</div>
															</div>
															<div class="col-md-9">
																<div class="content-col-9">
																	<div class="list-ul-li">
																		<ul>
																			<li>
																				<li><a href="#">Đồ ăn nhẹ</a></li>
																				<li><a href="#">Bánh các loại</a></li>
																				<li><a href="#">Pizza đặc biệt</a></li>
																				<li><a href="#">Rau củ quả</a></li>
																				<li><a href="#">Hoa quả nhập khẩu</a></li>
																			</li>
																		</ul>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										
										<div class="list-product-main">
											<div class="content-list-product">
												<?php
													$products = array(
												array(
													'img' => 'img/camnavel.png',
													'price' => '245.000',
													'price2' => '265.000₫',
													'name' => 'Cam Navel ruột vàng',
													// product1
												),
												array(
													'img' => 'img/dautay.png',
													'price' => '245.000',
													'price2' => '265.000₫',
													'name' => 'Dâu tây Đà Lạt',
												),
												array(
													'img' => 'img/taole.png',
													'price' => '245.000',
													'price2' => '265.000₫',
													'name' => 'Táo xanh Mỹ',
												),
												array(
													'img' => 'img/duale.png',
													'price' => '245.000',
													'price2' => '265.000₫',
													'name' => 'Lê xanh Mỹ',
												),
												array(
													'img' => 'img/quadao.png',
													'price' => '245.000',
													'price2' => '265.000₫',
													'name' => 'Táo xanh Mỹ',
												),
												array(
													'img' => 'img/vaithieu.png',
													'price' => '245.000',
													'price2' => '265.000₫',
													'name' => 'Vải thiều Thanh Hà',
												),
												array(
													'img' => 'img/quaoccho.png',
													'price' => '245.000',
													'price2' => '265.000₫',
													'name' => 'Quả óc chó',
												),
												array(
													'img' => 'img/hatdieu.png',
													'price' => '245.000',
													'price2' => '265.000₫',
													'name' => 'Hạt điều khô',
												),
												array(
													'img' => 'img/anh-nho.png',
													'price' => '245.000',
													'price2' => '265.000₫',
													'name' => 'Nho mỹ nhập khẩu',
												),
												array(
													'img' => 'img/hatdieutrang.png',
													'price' => '245.000',
													'price2' => '265.000₫',
													'name' => 'Hạt điều trắng',
												),
												);
												?>
												<?php foreach ($products as $sanpham) { ?>
												<div class="col-md-3 no-pad-h sanpham">
													<div class="sanpham-content">
														<div class="text-img-sanpham">
															<a href="#"><img src="<?php echo $sanpham['img']; ?>"></a>
															<p><?php echo $sanpham['price']; ?> <span class="text-cl"><?php echo $sanpham['price2']; ?></span></p>
															<p style="color: #363636;"><a href="#"><?php echo $sanpham['name']; ?></a></p>
														</div>
													</div>
												</div>
												<?php } ?>
											</div>
										</div>
									</div>
								</div>
								
								<div class="banner-bottom">
									<div class="content-banner">
										<div class="one-banner" style="padding-top: 20px;">
											<div class="content-one-banner">
												<img src="img/banner2.png" style="display: inline-block;margin-top: 20px;">
												<img src="img/banner3.png" style="float: right;margin-top: 20px;">
											</div>
										</div>
									</div>
								</div>
								
								<!-- box~ ender -->
								<div class="row">
									<div class="content-row">
										<div class="content-headding-right">
											<div class="top-heading" style="margin-left: 15px; margin-right: 15px; margin-top: 30px;">
												<p>Khuyến mại trong ngày
													<span class="glyphicon glyphicon-arrow-right" style="margin-left: 10px;"  aria-hidden="true">
													</span>
													
												</p>
											</div>
										</div>
									</div>
								</div>
								<div class="list-product-main">
									<div class="content-list-product">
										<?php
											$products = array(
										array(
											'img' => 'img/camnavel.png',
											'price' => '245.000',
											'price2' => '265.000₫',
											'name' => 'Cam Navel ruột vàng',
											// product1
										),
										array(
											'img' => 'img/dautay.png',
											'price' => '245.000',
											'price2' => '265.000₫',
											'name' => 'Dâu tây Đà Lạt',
										),
										array(
											'img' => 'img/taole.png',
											'price' => '245.000',
											'price2' => '265.000₫',
											'name' => 'Táo xanh Mỹ',
										),
										array(
											'img' => 'img/duale.png',
											'price' => '245.000',
											'price2' => '265.000₫',
											'name' => 'Lê xanh Mỹ',
										),
										array(
											'img' => 'img/quadao.png',
											'price' => '245.000',
											'price2' => '265.000₫',
											'name' => 'Táo xanh Mỹ',
										),
										);
										?>
										<?php foreach ($products as $sanpham) { ?>
										<div class="col-md-3 no-pad-h sanpham">
											<div class="sanpham-content">
												<div class="text-img-sanpham">
													<a href="#"><img src="<?php echo $sanpham['img']; ?>"></a>
													<p><?php echo $sanpham['price']; ?> <span class="text-cl"><?php echo $sanpham['price2']; ?></span></p>
													<p style="color: #363636;"><a href="#"><?php echo $sanpham['name']; ?></a></p>
												</div>
											</div>
										</div>
										<?php } ?>
									</div>
								</div>
							</div>
						</div>
						
						<!-- top footer -->
						<div id="top-footer">
							<div class="contetn-top-footer">
								<div class="row">
									<div class="content-row">
										<div class="col-md-12">
											<div class="content-md-12">
												<div class="top-heading-12">
													<div class="contetn-top-heading">
													<p>Tin tức nổi bật</p>
													
													</div>
												</div>
											</div>
										</div>
									</div>	
								</div>
							</div>
						</div>
					</div>
					
				</div>
				
			</div>
		</div>
		<?php include 'footer.php'; ?>
	</body>
</html>