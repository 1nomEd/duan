<main>

	<!-- banner full  -->
	<div id="carousel-home">
		<div class="owl-carousel owl-theme">
			<div class="owl-slide" style="background-image: url(View/img/intel-365-1200-300-1200x300.png);">
				<div class="opacity-mask d-flex align-items-center" data-opacity-mask="rgba(0, 0, 0, 0.5)">
					<div class="container">
						<div class="row justify-content-center justify-content-md-end">
							<div class="col-lg-6 static">
								<div class="slide-text text-end white">
									<h2 class="owl-slide-animated owl-slide-title"><br>
									</h2>
									<p class="owl-slide-animated owl-slide-subtitle">

									</p>
									<div class="owl-slide-animated owl-slide-cta"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--/owl-slide-->
			<div class="owl-slide " style="background-image: url(View/img/Macbook-M1-1200-300-1200x300-1.png);">
				<div class="opacity-mask d-flex align-items-center" data-opacity-mask="rgba(0, 0, 0, 0.5)">
					<div class="container">
						<div class="row justify-content-center justify-content-md-start">
							<div class="col-lg-6 static">
								<div class="slide-text white">
									<h2 class="owl-slide-animated owl-slide-title"><br>
									</h2>
									<p class="owl-slide-animated owl-slide-subtitle">

									</p>
									<div class="owl-slide-animated owl-slide-cta"><a class="btn_1"
											href="listing-grid-1-full.html" role="button">Mua Ngay</a></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--/owl-slide-->
			<div class="owl-slide " style="background-image: url(View/img/118409265_3514647365249073_521981903733041853_n.png);">
				<div class="opacity-mask d-flex align-items-center" data-opacity-mask="rgba(0, 0, 0, 0.5)">
					<div class="container">
						<div class="row justify-content-center justify-content-md-start">
							<div class="col-lg-12 static">
								<div class="slide-text text-center  white">
									<h2 class="owl-slide-animated owl-slide-title"><br>
									</h2>
									<p class="owl-slide-animated owl-slide-subtitle">

									</p>
									<div class="owl-slide-animated owl-slide-cta"><a class="btn_1"
											href="listing-grid-1-full.html" role="button">Mua Ngay</a></div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!--/owl-slide-->
			</div>
		</div>
		<div id="icon_drag_mobile"></div>
	</div>
	<!-- hết banner full  -->

	<!-- banner grid  -->
	<ul id="banners_grid" class="clearfix">
		<li>
			<a href="#0" class="img_container">
				<img src="View/img/banner1.jpg" data-src="View/img/top_laptop_gaming_2023.jpg" alt="" class="lazy">
				<div class="short_info opacity-mask" data-opacity-mask="rgba(0, 0, 0, 0.5)">
					<h3>Hiệu năng</h3>
					<div><span class="btn_1">Mua Sắm Ngay</span></div>
				</div>
			</a>
		</li>
		<li>
			<a href="#0" class="img_container">
				<img src="View/img/banner3.jpg" data-src="View/img/23-730x408-1.jpg" alt="" class="lazy">
				<div class="short_info opacity-mask" data-opacity-mask="rgba(0, 0, 0, 0.5)">
					<h3>Tốc độ</h3>
					<div><span class="btn_1">Mua Sắm Ngay</span></div>
				</div>
			</a>
		</li>
		<li>
			<a href="#0" class="img_container">
				<img src="View/img/banner4.jpg" data-src="View/img/1_800x450.jpg" alt="" class="lazy">
				<div class="short_info opacity-mask" data-opacity-mask="rgba(0, 0, 0, 0.5)">
					<h3>Văn phòng</h3>
					<div><span class="btn_1">Mua Sắm Ngay</span></div>
				</div>
			</a>
		</li>
	</ul>
	<!-- hết banner grid  -->

	<!-- sp mới  -->
	<div class="container margin_60_35">
		<div class="main_title">
			<h2>Laptop </h2>
			<p>Chúng tôi luôn cập nhật những sản phẩm mới</p>
		</div>
		<div class="row small-gutters">
			<?php foreach ($loadall_sanpham as $key => $value):
				extract($value);
				?>

				<div class="col-sl-6 col-md-4 col-xl-3 pb-4">
					<form action="index.php?act=addtocart" method="post" class="">

						<div class="grid_item boxsp">
							
							<figure>
								<a href="index.php?act=chitietsp&idct_sp=<?= $product_id ?>">
									<img class="img-fluid lazy " src="image/<?= explode(',', $image)[0] ?>"
										data-src="image/<?= explode(',', $image)[0] ?>" alt="">
									<img class="img-fluid lazy" src="image/<?= explode(',', $image)[0] ?>"
										data-src="image/<?= explode(',', $image)[0] ?>" alt="">
								</a>
							</figure>
							<a href="index.php?act=chitietsp&idct_sp=<?= $product_id ?>">
								<h3>
									<?= $product_name ?>
								</h3>
							</a>
							<div class="price_box">
								<span class="new_price">
									<?=
										number_format($price, 0, '.', ','); ?> VND
								</span>
							</div>
						</div>
						<?php if ($user) { ?>
							<div class="spacer-20 d-flex justify-content-center	">
								<input type="submit" name="addcart" id="" value="Thêm vào giỏ hàng " class="btn_1">
							</div>
						<?php } else { ?>
							<div class="spacer-20 d-flex justify-content-center	">
								<!-- <input type="submit" name="addcart" id="" value="Thêm vào giỏ hàng " class="btn_1"> -->
							</div>
						<?php } ?>
						<input type="hidden" name="product_id" id="" value="<?= $product_id ?>">
						<input type="hidden" name="product_name" id="" value="<?= $product_name ?>">
						<input type="hidden" name="img" id="" value="<?= $image ?>">
						<input type="hidden" name="price" id="" value="<?= $price ?>">
					</form>
				</div>


			<?php endforeach; ?>


		</div>

	</div>
	<!-- hết sp mới  -->

	<!-- sản phẩm bán chạy  -->
	<div class="container margin_60_35">
		<div class="main_title">
			<h2>Sản phẩm bán chạy</h2>

			<p>Xu hướng với sản phẩm hot nhất</p>
		</div>
		<div class="owl-carousel owl-theme products_carousel">
			<?php foreach ($sp_banchay as $key => $value):
				extract($value);

				?>
				<form action="index.php?act=addtocart" method="post" class="">
					<div class="item">
						<div class="grid_item">
							<figure>
								<a href="index.php?act=chitietsp&idct_sp=<?= $product_id ?>">
									<img class="owl-lazy lazy" src="image/<?= explode(',', $image)[0] ?>"
										data-src="image/<?= explode(',', $image)[0] ?>" alt="">
								</a>
							</figure>

							<a href="index.php?act=chitietsp&idct_sp=<?= $product_id ?>">
								<h3>
									<?= $product_name ?>
								</h3>
							</a>
							<div class="price_box">
								<span class="new_price">
									<?=
										number_format($price, 0, '.', ','); ?> VND
								</span>
							</div>

						</div>

					</div>
					<?php if ($user) { ?>
						<div class="spacer-20 d-flex justify-content-center	">
							<input type="submit" name="addcart" id="" value="Thêm vào giỏ hàng " class="btn_1">
						</div>
					<?php } else { ?>
						<div class="spacer-20 d-flex justify-content-center	">
							<!-- <input type="submit" name="addcart" id="" value="Thêm vào giỏ hàng " class="btn_1"> -->
						</div>
					<?php } ?>
					<input type="hidden" name="product_id" id="" value="<?= $product_id ?>">
					<input type="hidden" name="product_name" id="" value="<?= $product_name ?>">
					<input type="hidden" name="img" id="" value="<?= $image ?>">
					<input type="hidden" name="price" id="" value="<?= $price ?>">
				</form>
			<?php endforeach; ?>


		</div>
	</div>
	<!-- hết sp đặc sắc  -->
</main>