
	<main class="main">
		<nav aria-label="breadcrumb" class="breadcrumb-nav">
			<div class="container">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="index-2.html"><i class="icon-home"></i></a></li>
					<li class="breadcrumb-item active" aria-current="page">Dashboard</li>
				</ol>
			</div><!-- End .container -->
		</nav>

		<div class="container">
			<div class="row">
				<div class="col-lg-9 order-lg-last dashboard-content">
					<h2>Edit Account Information</h2>

					<?php echo validation_errors(); ?>
					<form action="<?= base_url()."index.php/Home/registerFormValidation" ?>" method="post">
						<div class="row">
							<div class="col-sm-12">
								<div class="row">
									<div class="col-md-6">
										<div class="form-group required-field">
											<label for="acc-name">Sponser ID</label>
											<input type="text" class="form-control" id="sponsor_id" name="sponsor_id" value="<?php echo set_value('sponsor_id'); ?>"  >
										</div><!-- End .form-group -->
									</div><!-- End .col-md-4 -->

									<div class="col-md-6">
										<div class="form-group">
											<label for="acc-mname">User Name</label>
											<input type="text" class="form-control" id="username" name="username" value="<?php echo set_value('username'); ?>"  >
										</div><!-- End .form-group -->
									</div><!-- End .col-md-4 -->
								</div><!-- End .row -->
							</div><!-- End .col-sm-11 -->
						</div><!-- End .row -->

						<div class="row">
						<div class="col-md-12">
							<div class="form-group required-field">
								<label for="acc-lastname">Email Address</label>
								<input type="text" class="form-control" id="email" name="email" value="<?php echo set_value('email'); ?>" required>
							</div><!-- End .form-group -->
						</div><!-- End .col-md-4 -->

						<div class="col-md-6">
							<div class="form-group required-field">
								<label for="acc-lastname">City</label>
								<input type="text" class="form-control" id="city" name="city" required>
							</div><!-- End .form-group -->
						</div>
						<div class="col-md-6">
							<div class="form-group required-field">
								<label for="acc-lastname">User ID</label>
								<input type="text" class="form-control" id="user_id" name="user_id" value="<?= $user_id + 1 ?>" disabled>
							</div><!-- End .form-group -->
						</div>


						<div class="col-md-6">
							<div class="form-group required-field">
								<label for="acc-lastname">Mobile</label>
								<input type="text" class="form-control" id="mobile" name="mobile" value="<?php echo set_value('mobile'); ?>" required>
							</div><!-- End .form-group -->
						</div>


						<div class="col-md-6">
							<div class="form-group required-field">
								<label for="acc-lastname">Province</label>
								<input type="text" class="form-control" id="province" name="province" value="<?php echo set_value('province'); ?>" required>
							</div><!-- End .form-group -->
						</div>

							<div class="col-md-6">
								<div class="form-group required-field">
									<label for="acc-lastname">Create Password</label>
									<input type="password" class="form-control" id="password" name="password" required>
								</div><!-- End .form-group -->
							</div>
							<div class="col-md-6">
								<div class="form-group required-field">
									<label for="acc-lastname">Confirm Password</label>
									<input type="password" class="form-control" id=confirmed_password" name="confirmed_password" required>
								</div><!-- End .form-group -->
							</div>
						</div>




						<div class="required text-right">* Required Field</div>
						<div class="form-footer">
							<a href="#"><i class="icon-angle-double-left"></i>Back</a>

							<div class="form-footer-right">
								<button type="submit" class="btn btn-primary">Save</button>
							</div>
						</div><!-- End .form-footer -->
					</form>
				</div><!-- End .col-lg-9 -->

				<aside class="sidebar col-lg-3">
					<div class="widget widget-dashboard">
						<h3 class="widget-title">My Account</h3>

						<ul class="list">
							<li class="active"><a href="#">Account Dashboard</a></li>
							<li><a href="#">Account Information</a></li>
							<li><a href="#">Address Book</a></li>
							<li><a href="#">My Orders</a></li>
							<li><a href="#">Billing Agreements</a></li>
							<li><a href="#">Recurring Profiles</a></li>
							<li><a href="#">My Product Reviews</a></li>
							<li><a href="#">My Tags</a></li>
							<li><a href="#">My Wishlist</a></li>
							<li><a href="#">My Applications</a></li>
							<li><a href="#">Newsletter Subscriptions</a></li>
							<li><a href="#">My Downloadable Products</a></li>
						</ul>
					</div><!-- End .widget -->
				</aside><!-- End .col-lg-3 -->
			</div><!-- End .row -->
		</div><!-- End .container -->

		<div class="mb-5"></div><!-- margin -->
	</main><!-- End .main -->


<footer class="footer">
	<div class="container">
		<div class="footer-top">
			<div class="row">
				<div class="col-md-9">
					<div class="widget widget-newsletter">
						<div class="row">
							<div class="col-lg-6">
								<h4 class="widget-title">Subscribe newsletter</h4>
								<p>Get all the latest information on Events,Sales and Offers. Sign up for newsletter today</p>
							</div><!-- End .col-lg-6 -->

							<div class="col-lg-6">
								<form action="#">
									<input type="email" class="form-control" placeholder="Email address" required>

									<input type="submit" class="btn" value="Subscribe">
								</form>
							</div><!-- End .col-lg-6 -->
						</div><!-- End .row -->
					</div><!-- End .widget -->
				</div><!-- End .col-md-9 -->

				<div class="col-md-3 widget-social">
					<div class="social-icons">
						<a href="#" class="social-icon" target="_blank"><i class="icon-facebook"></i></a>
						<a href="#" class="social-icon" target="_blank"><i class="icon-twitter"></i></a>
						<a href="#" class="social-icon" target="_blank"><i class="icon-linkedin"></i></a>
					</div><!-- End .social-icons -->
				</div><!-- End .col-md-3 -->
			</div><!-- End .row -->
		</div><!-- End .footer-top -->
	</div><!-- End .container -->

	<div class="footer-middle">
		<div class="container">
			<div class="row">
				<div class="col-lg-3">
					<div class="widget">
						<h4 class="widget-title">Contact Us</h4>
						<ul class="contact-info">
							<li>
								<span class="contact-info-label">Address:</span>123 Street Name, City, England
							</li>
							<li>
								<span class="contact-info-label">Phone:</span>Toll Free <a href="tel:">(123) 456-7890</a>
							</li>
							<li>
								<span class="contact-info-label">Email:</span> <a href="mailto:mail@example.com">mail@example.com</a>
							</li>
						</ul>
					</div><!-- End .widget -->
				</div><!-- End .col-lg-3 -->

				<div class="col-lg-9">
					<div class="row">
						<div class="col-md-5">
							<div class="widget">
								<h4 class="widget-title">My Account</h4>

								<div class="row">
									<div class="col-sm-6 col-md-5">
										<ul class="links">
											<li><a href="about.html">About Us</a></li>
											<li><a href="contact.html">Contact Us</a></li>
											<li><a href="my-account.html">My Account</a></li>
										</ul>
									</div><!-- End .col-sm-6 -->
									<div class="col-sm-6 col-md-5">
										<ul class="links">
											<li><a href="#">Orders History</a></li>
											<li><a href="#">Advanced Search</a></li>
											<li><a href="#" class="login-link">Login</a></li>
										</ul>
									</div><!-- End .col-sm-6 -->
								</div><!-- End .row -->
							</div><!-- End .widget -->
						</div><!-- End .col-md-5 -->

						<div class="col-md-7">
							<div class="widget">
								<h4 class="widget-title">Main Features</h4>

								<div class="row">
									<div class="col-sm-6">
										<ul class="links">
											<li><a href="#">Super Fast Magento Theme</a></li>
											<li><a href="#">1st Fully working Ajax Theme</a></li>
											<li><a href="#">20 Unique Homepage Layouts</a></li>
										</ul>
									</div><!-- End .col-sm-6 -->
									<div class="col-sm-6">
										<ul class="links">
											<li><a href="#">Powerful Admin Panel</a></li>
											<li><a href="#">Mobile & Retina Optimized</a></li>
										</ul>
									</div><!-- End .col-sm-6 -->
								</div><!-- End .row -->
							</div><!-- End .widget -->
						</div><!-- End .col-md-7 -->
					</div><!-- End .row -->

					<div class="footer-bottom">
						<p class="footer-copyright">Porto eCommerce. &copy;  2018.  All Rights Reserved</p>

						<ul class="contact-info">
							<li>
								<span class="contact-info-label">Working Days/Hours:</span>
								Mon - Sun / 9:00AM - 8:00PM
							</li>
						</ul>
						<img src="<?php echo base_url('v2/assets/images/payments.png')?>" alt="payment methods" class="footer-payments">
					</div><!-- End .footer-bottom -->
				</div><!-- End .col-lg-9 -->
			</div><!-- End .row -->
		</div><!-- End .container -->
	</div><!-- End .footer-middle -->
</footer><!-- End .footer -->
</div><!-- End .page-wrapper -->

<div class="mobile-menu-overlay"></div><!-- End .mobil-menu-overlay -->

<div class="mobile-menu-container">
	<div class="mobile-menu-wrapper">
		<span class="mobile-menu-close"><i class="icon-cancel"></i></span>
		<nav class="mobile-nav">
			<ul class="mobile-menu">
				<li class="active"><a href="index-2.html">Home</a></li>
				<li>
					<a href="category.html">Categories</a>
					<ul>
						<li><a href="category.html">Full Width Banner</a></li>
						<li><a href="category-banner-boxed-slider.html">Boxed Slider Banner</a></li>
						<li><a href="category-banner-boxed-image.html">Boxed Image Banner</a></li>
						<li><a href="category.html">Left Sidebar</a></li>
						<li><a href="category-sidebar-right.html">Right Sidebar</a></li>
						<li><a href="category-flex-grid.html">Product Flex Grid</a></li>
						<li><a href="category-horizontal-filter1.html">Horizontal Filter 1</a></li>
						<li><a href="category-horizontal-filter2.html">Horizontal Filter 2</a></li>
						<li><a href="#">Product List Item Types</a></li>
						<li><a href="category-infinite-scroll.html">Ajax Infinite Scroll<span class="tip tip-new">New</span></a></li>
						<li><a href="category.html">3 Columns Products</a></li>
						<li><a href="category-4col.html">4 Columns Products</a></li>
						<li><a href="category-5col.html">5 Columns Products</a></li>
						<li><a href="category-6col.html">6 Columns Products</a></li>
						<li><a href="category-7col.html">7 Columns Products</a></li>
						<li><a href="category-8col.html">8 Columns Products</a></li>
					</ul>
				</li>
				<li>
					<a href="product.html">Products</a>
					<ul>
						<li>
							<a href="#">Variations</a>
							<ul>
								<li><a href="product.html">Horizontal Thumbnails</a></li>
								<li><a href="product-full-width.html">Vertical Thumbnails<span class="tip tip-hot">Hot!</span></a></li>
								<li><a href="product.html">Inner Zoom</a></li>
								<li><a href="product-addcart-sticky.html">Addtocart Sticky</a></li>
								<li><a href="product-sidebar-left.html">Accordion Tabs</a></li>
							</ul>
						</li>
						<li>
							<a href="#">Variations</a>
							<ul>
								<li><a href="product-sticky-tab.html">Sticky Tabs</a></li>
								<li><a href="product-simple.html">Simple Product</a></li>
								<li><a href="product-sidebar-left.html">With Left Sidebar</a></li>
							</ul>
						</li>
						<li>
							<a href="#">Product Layout Types</a>
							<ul>
								<li><a href="product.html">Default Layout</a></li>
								<li><a href="product-extended-layout.html">Extended Layout</a></li>
								<li><a href="product-full-width.html">Full Width Layout</a></li>
								<li><a href="product-grid-layout.html">Grid Images Layout</a></li>
								<li><a href="product-sticky-both.html">Sticky Both Side Info<span class="tip tip-hot">Hot!</span></a></li>
								<li><a href="product-sticky-info.html">Sticky Right Side Info</a></li>
							</ul>
						</li>
					</ul>
				</li>
				<li>
					<a href="#">Pages<span class="tip tip-hot">Hot!</span></a>
					<ul>
						<li><a href="cart.html">Shopping Cart</a></li>
						<li>
							<a href="#">Checkout</a>
							<ul>
								<li><a href="checkout-shipping.html">Checkout Shipping</a></li>
								<li><a href="checkout-shipping-2.html">Checkout Shipping 2</a></li>
								<li><a href="checkout-review.html">Checkout Review</a></li>
							</ul>
						</li>
						<li><a href="about.html">About</a></li>
						<li><a href="#" class="login-link">Login</a></li>
						<li><a href="forgot-password.html">Forgot Password</a></li>
					</ul>
				</li>
				<li><a href="blog.html">Blog</a>
					<ul>
						<li><a href="single.html">Blog Post</a></li>
					</ul>
				</li>
				<li><a href="contact.html">Contact Us</a></li>
				<li><a href="#">Special Offer!<span class="tip tip-hot">Hot!</span></a></li>
				<li><a href="#">Buy Porto!</a></li>
			</ul>
		</nav><!-- End .mobile-nav -->

		<div class="social-icons">
			<a href="#" class="social-icon" target="_blank"><i class="icon-facebook"></i></a>
			<a href="#" class="social-icon" target="_blank"><i class="icon-twitter"></i></a>
			<a href="#" class="social-icon" target="_blank"><i class="icon-instagram"></i></a>
		</div><!-- End .social-icons -->
	</div><!-- End .mobile-menu-wrapper -->
</div><!-- End .mobile-menu-container -->

<div class="newsletter-popup mfp-hide" id="newsletter-popup-form" style="background-image: url(v2/assets/images/newsletter_popup_bg.jpg)">
	<div class="newsletter-popup-content">
		<img src="<?php echo base_url('v2/assets/images/logo-black.png')?>" alt="Logo" class="logo-newsletter">
		<h2>BE THE FIRST TO KNOW</h2>
		<p>Subscribe to the Porto eCommerce newsletter to receive timely updates from your favorite products.</p>
		<form action="#">
			<div class="input-group">
				<input type="email" class="form-control" id="newsletter-email" name="newsletter-email" placeholder="Email address" required>
				<input type="submit" class="btn" value="Go!">
			</div><!-- End .from-group -->
		</form>
		<div class="newsletter-subscribe">
			<div class="checkbox">
				<label>
					<input type="checkbox" value="1">
					Don't show this popup again
				</label>
			</div>
		</div>
	</div><!-- End .newsletter-popup-content -->
</div><!-- End .newsletter-popup -->

<a id="scroll-top" href="#top" title="Top" role="button"><i class="icon-angle-up"></i></a>

<!-- Plugins JS File -->
<script src="<?php echo base_url('v2/assets/js/jquery.min.js')?>"></script>
<script src="<?php echo base_url('v2/assets/js/bootstrap.bundle.min.js')?>"></script>
<script src="<?php echo base_url('v2/assets/js/plugins.min.js')?>"></script>

<!-- Main JS File -->
<script src="<?php echo base_url('v2/assets/js/main.min.js')?>"></script>
</body>
</html>
