        <main class="main">
            <div class="home-slider-container">
                <div class="home-slider owl-carousel owl-theme owl-theme-light">
                <?php foreach($sliders as $slider):?>
                    <div class="home-slide">
                        <div class="slide-bg owl-lazy"  data-src="<?php echo base_url($slider->img_path)?>"></div><!-- End .slide-bg -->
                        <div class="container">
                            <div class="home-slide-content">
                                <div class="slide-border-top">
                                    <img src="<?php echo base_url($slider->img_path)?>" alt="Border" width="290" height="38">
                                </div><!-- End .slide-border-top -->
                                <h3>80% off for select items</h3>
                                <h1>fashion mega sale</h1>
                                <a href="category.html" class="btn btn-primary">Shop Now</a>
                                <div class="slide-border-bottom">
                                    <img src="<?php echo base_url($slider->img_path)?>" alt="Border" width="290" height="111">
                                </div><!-- End .slide-border-bottom -->
                            </div><!-- End .home-slide-content -->
                        </div><!-- End .container -->
                    </div><!-- End .home-slide -->
                <?php endforeach;?>
                </div><!-- End .home-slider -->
            </div><!-- End .home-slider-container -->

            <div class="info-boxes-container">
                <div class="container">
                    <div class="info-box">
                        <i class="icon-shipping"></i>

                        <div class="info-box-content">
                            <h4>FREE SHIPPING & RETURN</h4>
                            <p>Free shipping on all orders over Pakistan</p>
                        </div><!-- End .info-box-content -->
                    </div><!-- End .info-box -->

                    <div class="info-box">
                        <i class="icon-us-dollar"></i>

                        <div class="info-box-content">
                            <h4>MONEY BACK GUARANTEE</h4>
                            <p>100% money back guarantee</p>
                        </div><!-- End .info-box-content -->
                    </div><!-- End .info-box -->

                    <div class="info-box">
                        <i class="icon-support"></i>

                        <div class="info-box-content">
                            <h4>ONLINE SUPPORT 24/7</h4>
                            <p>Team is ready to provide support</p>
                        </div><!-- End .info-box-content -->
                    </div><!-- End .info-box -->
                </div><!-- End .container -->
            </div><!-- End .info-boxes-container -->
            
        
           <main class="main">

            <div class="container">
                <!-- <nav class="toolbox">
                    <div class="toolbox-left">
                        <div class="toolbox-item toolbox-sort">
                            <div class="select-custom">
                                <select name="orderby" class="form-control">
                                    <option value="menu_order" selected="selected">Default sorting</option>
                                    <option value="popularity">Sort by popularity</option>
                                    <option value="rating">Sort by average rating</option>
                                    <option value="date">Sort by newness</option>
                                    <option value="price">Sort by price: low to high</option>
                                    <option value="price-desc">Sort by price: high to low</option>
                                </select>
                            </div>

                            <a href="#" class="sorter-btn btn-desc" title="Set Descending Direction"><span class="sr-only">Set Descending Direction</span></a>
                        </div>
                    </div>

                    <div class="toolbox-item toolbox-show">
                            <label>Showing 1–9 of 60 results</label>
                        </div>

                    <div class="layout-modes">
                        <a href="category.html" class="layout-btn btn-grid active" title="Grid">
                            <i class="icon-mode-grid"></i>
                        </a>
                        <a href="category-list.html" class="layout-btn btn-list" title="List">
                            <i class="icon-mode-list"></i>
                        </a>
                    </div>
                </nav> -->
                <div class="row row-sm">
                    <?php foreach($products as $product):?>
                    <div class="col-6 col-md-4 col-lg-3 col-xl-5col">
                        <div class="product">
                            <figure class="product-image-container">
                                <a href="product.html" class="product-image">
                                    <img style="width: 218px !important; height: 218px !important;"src="<?php echo base_url($product->img_path)?>" alt="product">
                                </a>
                                <a href="ajax/product-quick-view.html" class="btn-quickview">Quickview</a>
                            </figure>
                            <div class="product-details">
                                <div class="ratings-container">
                                    <div class="product-ratings">
                                        <span class="ratings" style="width:80%"></span><!-- End .ratings -->
                                    </div><!-- End .product-ratings -->
                                </div><!-- End .product-container -->
                                <h2 class="product-title">
                                    <a href="product.html"><?php echo $product->product_name?></a>
                                </h2>
                                <div class="price-box">
                                    <span class="product-price">Rs.<?php echo $product->product_price?></span>
                                </div><!-- End .price-box -->

                                <div class="product-action">
                                    <a href="#" class="paction add-wishlist" title="Add to Wishlist">
                                        <span>Add to Wishlist</span>
                                    </a>

                                    <a href="product.html" class="paction add-cart" title="Add to Cart">
                                        <span>Add to Cart</span>
                                    </a>

                                    <a href="#" class="paction add-compare" title="Add to Compare">
                                        <span>Add to Compare</span>
                                    </a>
                                </div><!-- End .product-action -->
                            </div><!-- End .product-details -->
                        </div><!-- End .product -->
                    </div>
                <?php endforeach;?>
                </div><!-- End .row -->

                <nav class="toolbox toolbox-pagination">
                    <div class="toolbox-item toolbox-show">
                        <label>Showing 1–9 of 60 results</label>
                    </div><!-- End .toolbox-item -->

                    <ul class="pagination">
                        <li class="page-item disabled">
                            <a class="page-link page-link-btn" href="#"><i class="icon-angle-left"></i></a>
                        </li>
                        <li class="page-item active">
                            <a class="page-link" href="#">1 <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">4</a></li>
                        <li class="page-item"><span>...</span></li>
                        <li class="page-item"><a class="page-link" href="#">15</a></li>
                        <li class="page-item">
                            <a class="page-link page-link-btn" href="#"><i class="icon-angle-right"></i></a>
                        </li>
                    </ul>
                </nav>
            </div><!-- End .container -->

            <div class="mb-5"></div><!-- margin -->
        </main><!-- End .main -->

            <div class="mb-5"></div><!-- margin -->

            <div class="info-section">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="feature-box feature-box-simple text-center">
                                <i class="icon-earphones-alt"></i>

                                <div class="feature-box-content">
                                    <h3>Customer Support<span>Need Assistence?</span></h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis nec vestibulum magna, et dapib.</p>
                                </div><!-- End .feature-box-content -->
                            </div><!-- End .feature-box -->
                        </div><!-- End .col-md-4 -->
                        
                        <div class="col-md-4">
                            <div class="feature-box feature-box-simple text-center">
                                <i class="icon-credit-card"></i>

                                <div class="feature-box-content">
                                    <h3>secured payment <span>Safe & Fast</span></h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis nec vestibulum magna, et dapibus lacus. Lorem ipsum dolor sit amet.consectetur adipiscing elit. </p>
                                </div><!-- End .feature-box-content -->
                            </div><!-- End .feature-box -->
                        </div><!-- End .col-md-4 -->

                        <div class="col-md-4">
                            <div class="feature-box feature-box-simple text-center">
                                <i class="icon-action-undo"></i>

                                <div class="feature-box-content">
                                    <h3>Returns <span>Easy & Free</span></h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis nec vestibulum magna, et dapibus lacus.</p>
                                </div><!-- End .feature-box-content -->
                            </div><!-- End .feature-box -->
                        </div><!-- End .col-md-4 -->
                    </div><!-- End .row -->
                </div><!-- End .container -->
            </div><!-- End .info-section -->

        

            <div class="partners-container">
                <div class="container">
                    <div class="partners-carousel owl-carousel owl-theme">
                        <a href="#" class="partner">
                            <img src="<?php echo base_url('v2/assets/images/logos/1.png')?>" alt="logo">
                        </a>
                        <a href="#" class="partner">
                            <img src="<?php echo base_url('v2/assets/images/logos/2.png')?>" alt="logo">
                        </a>
                        <a href="#" class="partner">
                            <img src="<?php echo base_url('v2/assets/images/logos/3.png')?>" alt="logo">
                        </a>
                        <a href="#" class="partner">
                            <img src="<?php echo base_url('v2/assets/images/logos/4.png')?>" alt="logo">
                        </a>
                        <a href="#" class="partner">
                            <img src="<?php echo base_url('v2/assets/images/logos/5.png')?>" alt="logo">
                        </a>
                        <a href="#" class="partner">
                            <img src="<?php echo base_url('v2/assets/images/logos/2.png')?>" alt="logo">
                        </a>
                        <a href="#" class="partner">
                            <img src="<?php echo base_url('v2/assets/images/logos/1.png')?>" alt="logo">
                        </a>
                    </div><!-- End .partners-carousel -->
                </div><!-- End .container -->
            </div><!-- End .partners-container -->

        
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
