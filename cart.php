<?php include 'includes/header.php';?>

<section class="inner-sec1 cart-sec1">
	<div class="innerBanner-content text-center">
		<p class="banner-heading">CART</p>
	</div>
	<img src="assets/images/innerSec1-vector1.png" alt="img" class="img-fluid innerSec1-vector1">
</section>

<section class="cart-sec-2">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-md-12 col-sm-12 mb-4">
				<div class="cart-list">
					<div class="cart-list-item">
						<div class="product-img">
							 <img src="assets/images/p-product-01.jpg" class="img-fluid" alt="product">
						</div>
						<div class="product-name">
							<p class="name">Lorem Ipsum</p>
							<p class="price">$50.00</p>
						</div>
						<div class="product-quantity-wrap y-center">
							<div class="quaitity-box">
								<form>
									<div class="plus-minus">
										<span class="minus"><i class="fas fa-minus"></i></span>
										<input type="number" class="count" name="qty" value="1" disabled="">
										<span class="plus"><i class="fas fa-plus"></i></span>
									</div>
								</form>
							</div>
						</div>
						<div class="product-action-price y-center">
							<p>$50.00</p>
							<a href="#!" class="remove-cart-item"><i class="far fa-trash-alt"></i></a>
						</div>
					</div>
					<div class="cart-list-item">
						<div class="product-img">
							 <img src="assets/images/p-product-02.jpg" class="img-fluid" alt="product">
						</div>
						<div class="product-name">
							<p class="name">Lorem Ipsum</p>
							<p class="price">$50.00</p>
						</div>
						<div class="product-quantity-wrap y-center">
							<div class="quaitity-box">
								<form>
									<div class="plus-minus">
										<span class="minus"><i class="fas fa-minus"></i></span>
										<input type="number" class="count" name="qty" value="1" disabled="">
										<span class="plus"><i class="fas fa-plus"></i></span>
									</div>
								</form>
							</div>
						</div>
						<div class="product-action-price y-center">
							<p>$50.00</p>
							<a href="#!" class="remove-cart-item"><i class="far fa-trash-alt"></i></a>
						</div>
					</div>
					<div class="cart-list-item">
						<div class="product-img">
							 <img src="assets/images/p-product-03.jpg" class="img-fluid" alt="product">
						</div>
						<div class="product-name">
							<p class="name">Lorem Ipsum</p>
							<p class="price">$50.00</p>
						</div>
						<div class="product-quantity-wrap y-center">
							<div class="quaitity-box">
								<form>
									<div class="plus-minus">
										<span class="minus"><i class="fas fa-minus"></i></span>
										<input type="number" class="count" name="qty" value="1" disabled="">
										<span class="plus"><i class="fas fa-plus"></i></span>
									</div>
								</form>
							</div>
						</div>
						<div class="product-action-price y-center">
							<p>$99.00</p>
							<a href="#!" class="remove-cart-item"><i class="far fa-trash-alt"></i></a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-12 col-sm-12">
				<div class="order-summary-card">
					<div class="summary-group">
						<p class="title">Order Summary</p>
					</div>
					<div class="summary-group">
						<ul>
							<li>
								<span>Subtotal</span>
								<span>$15.00</span>
							</li>
							<li>
								<span>Delivery</span>
								<span>$5.00</span>
							</li>
						</ul>
					</div>
					<div class="summary-group">
						<ul>
							<li>
								<span class="total">Total (incl VAT)</span>
								<span>$20.00</span>
							</li>
						</ul>
						<a href="checkout.php" class="cta-btn text-center mt-3 w-100">Checkout<i class="ms-3 fas fa-chevron-right"></i></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<?php include 'includes/footer.php';?>