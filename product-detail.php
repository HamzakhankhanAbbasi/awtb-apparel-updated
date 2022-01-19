<?php include 'includes/header.php';?>

<section class="inner-sec1 productDetail-sec1">
	<div class="innerBanner-content text-center">
		<p class="banner-heading">Products Detail</p>
	</div>
	<img src="assets/images/innerSec1-vector1.png" alt="img" class="img-fluid innerSec1-vector1">
</section>

<section class="productDetail-sec2">
	<div class="container">
		<div class="row align-items-center m-0">
			<div class="col-12 col-md-7 col-lg-7 product-img-col mb-4">
				<div class="swiper-container nav-slider loading">
					<div class="swiper-wrapper" role="navigation">
						<div class="swiper-slide">
							<figure class="slide-bgimg" style="background-image:url(assets/images/product-01.jpg)">
								<img src="assets/images/product-01.jpg" class="entity-img" />
							</figure>
						</div>
						<div class="swiper-slide">
							<figure class="slide-bgimg" style="background-image:url(assets/images/product-02.jpg)">
								<img src="assets/images/product-02.jpg" class="entity-img" />
							</figure>
						</div>
						<div class="swiper-slide">
							<figure class="slide-bgimg" style="background-image:url(assets/images/product-03.jpg)">
								<img src="assets/images/product-03.jpg" class="entity-img" />
							</figure>
						</div>
						<div class="swiper-slide">
							<figure class="slide-bgimg" style="background-image:url(assets/images/product-01.jpg)">
								<img src="assets/images/product-01.jpg" class="entity-img" />
							</figure>
						</div>
						<div class="swiper-slide">
							<figure class="slide-bgimg" style="background-image:url(assets/images/product-02.jpg)">
								<img src="assets/images/product-02.jpg" class="entity-img" />
							</figure>
						</div>
					</div>
				</div>

				<div class="swiper-container main-slider loading">
					<div class="swiper-wrapper">
						<div class="swiper-slide">
							<figure class="slide-bgimg" style="background-image:url(assets/images/product-01.jpg)">
								<img src="assets/images/product-01.jpg" class="entity-img" />
							</figure>
						</div>
						<div class="swiper-slide">
							<figure class="slide-bgimg" style="background-image:url(assets/images/product-02.jpg)">
								<img src="assets/images/product-02.jpg" class="entity-img" />
							</figure>
						</div>
						<div class="swiper-slide">
							<figure class="slide-bgimg" style="background-image:url(assets/images/product-03.jpg)">
								<img src="assets/images/product-03.jpg" class="entity-img" />
							</figure>
						</div>
						<div class="swiper-slide">
							<figure class="slide-bgimg" style="background-image:url(assets/images/product-01.jpg)">
								<img src="assets/images/product-01.jpg" class="entity-img" />
							</figure>
						</div>
						<div class="swiper-slide">
							<figure class="slide-bgimg" style="background-image:url(assets/images/product-02.jpg)">
								<img src="assets/images/product-02.jpg" class="entity-img" />
							</figure>
						</div>
					</div>
					<div class="swiper-button-prev swiper-button-white"></div>
					<div class="swiper-button-next swiper-button-white"></div>
				</div>
			</div>
			<div class="col-12 col-md-5 col-lg-5">
				<div class="productDetail-content">
					<p class="black-heading">AWTB Apparel</p>
					<div class="reviewwrap">
						<div class="product-rating mb-2">
							<span><i class="fas fa-star"></i></span>
							<span><i class="fas fa-star"></i></span>
							<span><i class="fas fa-star"></i></span>
							<span><i class="fas fa-star"></i></span>
							<span><i class="fas fa-star"></i></span>
						</div>
						<span class="paragraph">3 Reviews</span>
					</div>
					<div class="product-info mb-3">
						<span class="paragraph mb-2">Product code</span>
						<span class="paragraph mb-2">EILXFU</span> <br>
						<span class="paragraph mb-2">Availability</span>
						<span class="paragraph mb-2">83 in stock</span>
					</div>
					<span class="black-heading">$69.00</span>
					<div class="stockBar">
						<label for="stock-bar" class="paragraph">Hurry! Only 83 left in stock</label> 
						<progress id="stock-bar" value="75" max="100"></progress>
						<span>16 sold in last 24 hours</span>
					</div>
					<div class="productDetails-butotns">
						<div class="quntity-counter">
							<span class="minus"><i class="fas fa-minus"></i></span>
							<input type="tel" class="count" value="1" maxlength="1" disabled="disabled">
							<span class="plus"><i class="fas fa-plus"></i></span>
						</div>
						<a href="javascript:void(0)" class="cta-btn"><i class="fas fa-cart-plus"></i> Add To Cart</a>
					</div>
					<a href="javascript:void(0)" class="dashed-btn">Buy It Now</a>
				</div>
			</div>
	</div>
</section>

<section class="productDetail-sec3">
	<div class="container">
		<div class="product-details-tabs">
			<div class="product-details-tab-box">
				<ul class="nav nav-pills mb-5" id="pills-tab" role="tablist">
					<li class="nav-item" role="presentation">
						<button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#details-tab-1" type="button" role="tab" aria-controls="pills-home" >Description</button>
					</li>
					<li class="nav-item" role="presentation">
						<button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#details-tab-2" type="button" role="tab" aria-controls="pills-profile" >Tags</button>
					</li>
					<li class="nav-item" role="presentation">
						<button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#details-tab-3" type="button" role="tab" aria-controls="pills-contact" >Review</button>
					</li>
				</ul>
				<div class="tab-content" id="pills-tabContent">
					<div class="tab-pane fade show active" id="details-tab-1" role="tabpanel" >
						<div class="row align-items-center m-0">
							<div class="col-12 col-md-6 col-lg-5 mb-4">
								<div class="left-col">
									<p class="black-heading mb-3">Sed ut Perspiciatis Unde Iste Natus Error Sit Voluptatem Accusantium Doloremque</p>
									<p class="paragraph">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor.</p>
								</div>
							</div>
							<div class="col-12 col-md-6 col-lg-7">
								<div class="right-col">
									<img src="assets/images/productDetail-Sec3Img.jpg" alt="img" class="img-fluid">
								</div>
							</div>
						</div>
					</div>
					<div class="tab-pane fade" id="details-tab-2" role="tabpanel">
						<div class="row align-items-center m-0">
							<div class="col-12 col-md-6 col-lg-5 mb-4">
								<div class="left-col">
									<p class="black-heading mb-3">Sed ut Perspiciatis Unde Iste Natus Error Sit Voluptatem Accusantium Doloremque</p>
									<p class="paragraph">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor.</p>
								</div>
							</div>
							<div class="col-12 col-md-6 col-lg-7">
								<div class="right-col">
									<img src="assets/images/productDetail-Sec3Img.jpg" alt="img" class="img-fluid">
								</div>
							</div>
						</div>
					</div>
					<div class="tab-pane fade" id="details-tab-3" role="tabpanel">
						<div class="row align-items-center m-0">
							<div class="col-12 col-md-6 col-lg-5 mb-4">
								<div class="left-col">
									<p class="black-heading mb-3">Sed ut Perspiciatis Unde Iste Natus Error Sit Voluptatem Accusantium Doloremque</p>
									<p class="paragraph">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor.</p>
								</div>
							</div>
							<div class="col-12 col-md-6 col-lg-7">
								<div class="right-col">
									<img src="assets/images/productDetail-Sec3Img.jpg" alt="img" class="img-fluid">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="arrivals-sec3">
	<div class="container">
		<div class="section-heading text-center">
			<p class="black-heading">New Arrivals</p>
		</div>
		<div class="row m-0">
			<div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4">
				<div class="arrival-card">
					<div class="image">
						<img src="assets/images/arrival-img1.jpg" alt="img" class="img-fluid">
						<div class="product-icons">
							<a href="javascript:void(0)">
								<img src="assets/images/bag-icon.png" alt="img" class="img-fluid">
							</a>
							<a href="javascript:void(0)">
								<img src="assets/images/heart-icon.png" alt="img" class="img-fluid">
							</a>
							<a href="javascript:void(0)">
								<img src="assets/images/eye-icon.png" alt="img" class="img-fluid">
							</a>
						</div>
					</div>
					<div class="product-size">
						<span>Small</span>
						<span>Medium</span>
						<span>Large</span>
					</div>
					<div class="product-detail">
						<span class="product-name">Lorem Ipsum</span>
						<span class="product-price">$ 30.00</span>
					</div>
					<div class="product-rating mb-2">
						<span><i class="fas fa-star"></i></span>
						<span><i class="fas fa-star"></i></span>
						<span><i class="fas fa-star"></i></span>
						<span><i class="far fa-star"></i></span>
						<span><i class="far fa-star"></i></span>
					</div>
					<div class="arrivalCard-button">
						<a href="javascript:void(0)" class="cta-btn">Quick View</a>
					</div>
				</div>
			</div>
			<div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4">
				<div class="arrival-card">
					<div class="image">
						<img src="assets/images/arrival-img2.jpg" alt="img" class="img-fluid">
						<div class="product-icons">
							<a href="javascript:void(0)">
								<img src="assets/images/bag-icon.png" alt="img" class="img-fluid">
							</a>
							<a href="javascript:void(0)">
								<img src="assets/images/heart-icon.png" alt="img" class="img-fluid">
							</a>
							<a href="javascript:void(0)">
								<img src="assets/images/eye-icon.png" alt="img" class="img-fluid">
							</a>
						</div>
					</div>
					<div class="product-size">
						<span>Small</span>
						<span>Medium</span>
						<span>Large</span>
					</div>
					<div class="product-detail">
						<span class="product-name">Lorem Ipsum</span>
						<span class="product-price">$ 30.00</span>
					</div>
					<div class="product-rating mb-2">
						<span><i class="fas fa-star"></i></span>
						<span><i class="fas fa-star"></i></span>
						<span><i class="fas fa-star"></i></span>
						<span><i class="far fa-star"></i></span>
						<span><i class="far fa-star"></i></span>
					</div>
					<div class="arrivalCard-button">
						<a href="javascript:void(0)" class="cta-btn">Quick View</a>
					</div>
				</div>
			</div>
			<div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4">
				<div class="arrival-card">
					<div class="image">
						<img src="assets/images/arrival-img3.jpg" alt="img" class="img-fluid">
						<div class="product-icons">
							<a href="javascript:void(0)">
								<img src="assets/images/bag-icon.png" alt="img" class="img-fluid">
							</a>
							<a href="javascript:void(0)">
								<img src="assets/images/heart-icon.png" alt="img" class="img-fluid">
							</a>
							<a href="javascript:void(0)">
								<img src="assets/images/eye-icon.png" alt="img" class="img-fluid">
							</a>
						</div>
					</div>
					<div class="product-size">
						<span>Small</span>
						<span>Medium</span>
						<span>Large</span>
					</div>
					<div class="product-detail">
						<span class="product-name">Lorem Ipsum</span>
						<span class="product-price">$ 30.00</span>
					</div>
					<div class="product-rating mb-2">
						<span><i class="fas fa-star"></i></span>
						<span><i class="fas fa-star"></i></span>
						<span><i class="fas fa-star"></i></span>
						<span><i class="far fa-star"></i></span>
						<span><i class="far fa-star"></i></span>
					</div>
					<div class="arrivalCard-button">
						<a href="javascript:void(0)" class="cta-btn">Quick View</a>
					</div>
				</div>
			</div>
			<div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4">
				<div class="arrival-card">
					<div class="image">
						<img src="assets/images/arrival-img1.jpg" alt="img" class="img-fluid">
						<div class="product-icons">
							<a href="javascript:void(0)">
								<img src="assets/images/bag-icon.png" alt="img" class="img-fluid">
							</a>
							<a href="javascript:void(0)">
								<img src="assets/images/heart-icon.png" alt="img" class="img-fluid">
							</a>
							<a href="javascript:void(0)">
								<img src="assets/images/eye-icon.png" alt="img" class="img-fluid">
							</a>
						</div>
					</div>
					<div class="product-size">
						<span>Small</span>
						<span>Medium</span>
						<span>Large</span>
					</div>
					<div class="product-detail">
						<span class="product-name">Lorem Ipsum</span>
						<span class="product-price">$ 30.00</span>
					</div>
					<div class="product-rating mb-2">
						<span><i class="fas fa-star"></i></span>
						<span><i class="fas fa-star"></i></span>
						<span><i class="fas fa-star"></i></span>
						<span><i class="far fa-star"></i></span>
						<span><i class="far fa-star"></i></span>
					</div>
					<div class="arrivalCard-button">
						<a href="javascript:void(0)" class="cta-btn">Quick View</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<?php include 'includes/footer.php';?>