<!DOCTYPE html>
<html lang="en">
<head>
<?php require "head.php"; ?>
</head>
  <body id="body" class="body-wrapper sidebar-dark version1 up-scroll">
	<?php $core->PreLoader(); ?>
    <div class="main-wrapper single-product">
      <div class="header clearfix">
		<?php require "mobileTopMenu.php"; ?>
		<?php require "pcTopMenu.php"; ?>
        <nav class="navbar navbar-main navbar-default navbar-expand-md navbar-scrollUp navbar-sticky d-none d-md-block" role="navigation">
          <div class="container">
            <a class="navbar-brand" href="index.php">
				<img src="<?php echo $core->site_logo;?>">
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".navbar-ex1-collapse" aria-controls="navbar-ex1-collapse" aria-expanded="false" aria-label="Toggle navigation">
              <span class="fa-solid fa-2x fa-align-center"></span>
            </button>


            <div class="collapse navbar-collapse navbar-ex1-collapse">
              <ul class="nav navbar-nav ms-auto">
                <li class="nav-item dropdown  active ">
                  <a href="javascript:void(0)" class="dropdown-toggle nav-link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Home</a>
                  <ul class="dropdown-menu dropdown-menu-left">
                    <li class="active"><a href="index-2.html">Home Default</a></li>
                    <li><a href="index-v2.html">Home Classic</a></li>
                    <li><a href="index-v3.html">Home Deals</a></li>
                    <li><a href="index-v4.html">Home Mega</a></li>
                    <li><a href="index-v5.html">Home Onepage</a></li>
                  </ul>
                </li>
                <li class="nav-item dropdown megaDropMenu ">
                  <a href="javascript:void(0)" class="dropdown-toggle nav-link" data-toggle="dropdown" data-hover="dropdown" data-delay="300" data-close-others="true" aria-expanded="false">Shop</b></a>
                  <ul class="dropdown-menu row">
                    <li class="col-md-3 col-12">
                      <ul class="list-unstyled">
                        <li>Products Grid View</li>
                        <li class=""><a href="product-grid-left-sidebar.html">Products Sidebar Left</a></li>
                        <li class=""><a href="product-grid-right-sidebar.html">Products Sidebar Right</a></li>
                        <li class=""><a href="product-grid-3-col-filter.html">Products 3 Columns V1</a></li>
                        <li class=""><a href="product-grid-3-col.html">Products 3 Columns V2</a></li>
                        <li class=""><a href="product-grid-4-col.html">Products 4 Columns</a></li>
                      </ul>
                    </li>
                    <li class="col-md-3 col-12">
                      <ul class="list-unstyled">
                        <li>Products List View</li>
                        <li class=""><a href="product-list-left-sidebar.html">Products Sidebar Left</a></li>
                        <li class=""><a href="product-list-right-sidebar.html">Products Sidebar Right</a></li>
                        <li class="listHeading">Product Single</li>
                        <li class=""><a href="single-product.html">Single Product</a></li>
                        <li class=""><a href="product-comparison.html">Product Comparison</a></li>
                      </ul>
                    </li>
                    <li class="col-md-3 col-12">
                      <ul class="list-unstyled">
                        <li>Checkout</li>
                        <li class=""><a href="checkout-step-1.html">Step 1 - Shipping</a></li>
                        <li class=""><a href="checkout-step-2.html">Step 2 - Payment</a></li>
                        <li class=""><a href="checkout-step-3.html">Step 3 - Review</a></li>
                        <li class=""><a href="checkout-step-4.html">Step 4 - Complete</a></li>
                      </ul>
                    </li>
                    <li class="col-md-3 col-12">
                      <ul class="list-unstyled">
                        <li>Others</li>
                        <li class=""><a href="product-categories.html">Product Categories</a></li>
                        <li class=""><a href="cart-page.html">Cart Page</a></li>
                      </ul>
                      <!-- <a href="#" class="menu-photo"><img src="assets/img/menu-photo.jpg" alt="menu-img"></a> -->
                    </li>
                  </ul>
                </li>
                <li class="nav-item dropdown ">
                  <a href="javascript:void(0)" class="dropdown-toggle nav-link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">pages</a>
                  <ul class="dropdown-menu dropdown-menu-left">
                    <li class=""><a href="about-us.html">About Us</a></li>
                    <li class=""><a href="contact-us.html">Contact Us</a></li>
                    <li class=""><a href="signup.html">Register</a></li>
                    <li class=""><a href="signup-login.html">Register or Login</a></li>
                    <li class=""><a href="login.html">Login</a></li>
                    <li class=""><a href="lost-password.html">Password Recovery</a></li>
                    <li class=""><a href="privacy-policy.html">Privacy Policy</a></li>
                    <li class=""><a href="terms-and-conditions.html">Terms &amp; Conditions</a></li>
                    <li class=""><a href="faq.html">FAQ</a></li>
                    <li><a href="404.html">404 Not Found</a></li>
                    <li><a href="coming-soon.html">Coming Soon</a></li>
                  </ul>
                </li>
                <li class="nav-item dropdown ">
                  <a href="javascript:void(0)" class="dropdown-toggle nav-link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">blog</a>
                  <ul class="dropdown-menu dropdown-menu-right">
                    <li class=""><a href="blog-right-sidebar.html">Right Sidebar</a></li>
                    <li class=""><a href="blog-left-sidebar.html">Left Sidebar</a></li>
                    <li class=""><a href="blog-fullwidth.html">Full Width</a></li>
                    <li class=""><a href="blog-single-fullwidth.html">Single Post</a></li>
                    <li class=""><a href="blog-single-right-sidebar.html">Single Right Sidebar</a></li>
                    <li class=""><a href="blog-single-left-sidebar.html">Single Left Sidebar</a></li>
                  </ul>
                </li>
                <li class="nav-item dropdown ">
                  <a href="javascript:void(0)" class="dropdown-toggle nav-link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">My Account</a>
                  <ul class="dropdown-menu dropdown-menu-right">
                    <li class=""><a href="account-dashboard.html">Dashboard</a></li>
                    <li class=""><a href="account-profile.html">Profile</a></li>
                    <li class=""><a href="account-all-orders.html">All Orders</a></li>
                    <li class=""><a href="account-single-order.html">Single Order</a></li>
                    <li class=""><a href="account-wishlist.html">Wishlist</a></li>
                    <li class=""><a href="account-address.html">Address</a></li>
                    <li class=""><a href="my-tickets.html">My tickets</a></li>
                    <li class=""><a href="single-ticket.html">Single ticket</a></li>
                  </ul>
                </li>
                <li class="nav-item dropdown megaDropMenu ">
                  <a href="javascript:void(0)" class="dropdown-toggle nav-link" data-toggle="dropdown" data-hover="dropdown" data-delay="300" data-close-others="true" aria-expanded="false">Components</b></a>
                  <ul class="dropdown-menu row">
                    <li class="col-md-4 col-12">
                      <ul class="list-unstyled">
                        <li>Basic Elements</li>
                        <li class=""><a href="basic-accordions.html">Accordions</a></li>
                        <li class=""><a href="basic-alert.html">Alert</a></li>
                        <li class=""><a href="basic-badge.html">Badge</a></li>
                        <li class=""><a href="basic-buttons.html">Buttons </a></li>
                        <li class=""><a href="basic-buttons-group.html">Button Group</a></li>
                        <li class=""><a href="basic-card.html">Cards</a></li>
                      </ul>
                    </li>
                    <li class="col-md-4 col-12">
                      <ul class="list-unstyled">
                        <li>Basic Elements</li>
                        <li class=""><a href="basic-countdown.html">Countdown </a></li>
                        <li class=""><a href="basic-divider.html">Divider </a></li>
                        <li class=""><a href="basic-forms.html">Forms</a></li>
                        <li class=""><a href="basic-heading.html">Heading </a></li>
                        <li class=""><a href="basic-icon-style.html">Icon Style </a></li>
                        <li class=""><a href="basic-iconset.html">Iconset (Font Awesome)</a></li>
                      </ul>
                    </li>
                    <li class="col-md-4 col-12">
                      <ul class="list-unstyled">
                        <li>Basic Elements</li>
                        <li class=""><a href="basic-modal.html">Modal </a></li>
                        <li class=""><a href="basic-progressbar.html">Progressbar</a></li>
                        <li class=""><a href="basic-tables.html">Tables </a></li>
                        <li class=""><a href="basic-tabs.html">Tabs</a></li>
                        <li class=""><a href="basic-typography.html">Typography </a></li>
                        <li class=""><a href="basic-video.html">Video </a></li>
                      </ul>
                    </li>
                  </ul>
                </li>
              </ul>
            </div><!-- /.navbar-collapse -->
            <div class="version2">
              <div class="dropdown cart-dropdown">
                <a href="javascript:void(0)" class="dropdown-toggle shop-cart" data-bs-toggle="dropdown" data-bs-display="static">
                  <i class="fa fa-shopping-cart"></i>
                  <span class="badge text-white">5</span>
                </a>
                <ul class="dropdown-menu dropdown-menu-end">
                  <li>Tooted sinu ostukorvis</li>

                  <li>
                    <a href="single-product.html">
                      <div class="media">
                        <img class="media-left media-object" src="assets/img/home/cart-items/cart-item-01.jpg" alt="cart-Image">
                        <div class="media-body">
                          <h5 class="media-heading text-uppercase">Perfumes <br><span>1 X $23</span></h5>
                        </div>
                      </div>
                    </a>
                  </li>
    
                  <li>
                    <a href="single-product.html">
                      <div class="media">
                        <img class="media-left media-object" src="assets/img/home/cart-items/cart-item-02.jpg" alt="cart-Image">
                        <div class="media-body">
                          <h5 class="media-heading text-uppercase">Watches <br><span>1 X $43</span></h5>
                        </div>
                      </div>
                    </a>
                  </li>
    
                  <li>
                    <a href="single-product.html">
                      <div class="media">
                        <img class="media-left media-object" src="assets/img/home/cart-items/cart-item-03.jpg" alt="cart-Image">
                        <div class="media-body">
                          <h5 class="media-heading text-uppercase">shoes <br><span>1 X $33</span></h5>
                        </div>
                      </div>
                    </a>
                  </li>
    
                  <li>
                    <a>
                      <div class="media">
                        <div class="media-body">
                          <h6 class="media-heading text-uppercase text-white fw-bold d-flex mb-0">
                            Total <span class="ms-auto">$99</span>
                          </h6>
                        </div>
                      </div>
                    </a>
                  </li>

                  <li>
                    <div class="btn-group" role="group" aria-label="...">
                      <button type="button" class="btn btn-default" onclick="location.href='cart-page.html';">Ostukorv</button>
                      <button type="button" class="btn btn-default" onclick="location.href='checkout-step-1.html';">Maksma</button>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </nav>
      </div>
	<?php require "leftmenu.php"; ?>
		<div class="header-form-area bg-primary d-md-none">
		  <form class="header-form" action="#" method="">
			<div class="input-group">
			  <input type="text" class="form-control py-0" required="" id="expire" placeholder="Otsi toote kategooria või disaineri järgi">
			  <div class="input-group-append">
				<button class="input-group-text border-0 btn bg-white color-black" type="submit">
				  <i class="fa-solid fa-magnifying-glass"></i>        
				</button>
			  </div>
			</div>
		  </form>
		</div>

      <section class="mainContent clearfix">
        <div class="container">

          <div class="row singleProduct singleProductTab">
            <div class="col-12">
				<input type="hidden" name="order_id" value="<?php echo $_GET["id"];?>">
				<input type="hidden" name="payment_token" value="<?php echo $_GET["payment_token"];?>">
					<h4><strong>Kontrollime makse laekumist.</strong></h4>
					<p>Palun oota, kohe suuname sind edasi :) </p>
				
            </div>
          </div>
        </div>
      </section>




      			<!-- FOOTER -->
			<div class="footer clearfix">
				<div class="container">
					<div class="row">
						<div class="col-md-2 col-12">
							<div class="footerLink">
								<h5>Accessories</h5>
								<ul class="list-unstyled">
									<li><a href="javascript:void(0)">Body care </a></li>
									<li><a href="javascript:void(0)">Chambray </a></li>
									<li><a href="javascript:void(0)">Floral </a></li>
									<li><a href="javascript:void(0)">Rejuvination </a></li>
									<li><a href="javascript:void(0)">Shaving </a></li>
									<li><a href="javascript:void(0)">Toilette </a></li>
								</ul>
							</div>
						</div>
						
						<div class="col-md-2 col-12">
							<div class="footerLink">
								<h5>BRANDS</h5>
								<ul class="list-unstyled">
									<li><a href="javascript:void(0)">Barbour </a></li>
									<li><a href="javascript:void(0)">Brioni </a></li>
									<li><a href="javascript:void(0)">Oliver Spencer</a></li>
									<li><a href="javascript:void(0)">Belstaff</a></li>
								</ul>
							</div>
						</div>

						<div class="col-md-2 col-12">
							<div class="footerLink">
								<h5>Accessories</h5>
								<ul class="list-unstyled">
									<li><a href="javascript:void(0)">Body care </a></li>
									<li><a href="javascript:void(0)">Chambray </a></li>
									<li><a href="javascript:void(0)">Floral </a></li>
									<li><a href="javascript:void(0)">Rejuvination </a></li>
									<li><a href="javascript:void(0)">Shaving </a></li>
									<li><a href="javascript:void(0)">Toilette </a></li>
								</ul>
							</div>
						</div>

						<div class="col-md-2 col-12">
							<div class="footerLink text-nowrap">
								<h5>Get in Touch</h5>
								<ul>
									<li><a href="tel:555-555-5555">Call us at (555)-555-5555</a></li>
									<li><a href="mailto:support@iamabdus.com">support@iamabdus.com</a></li>
								</ul>
								<ul class="list-inline">
									<li><a href="javascript:void(0)"><i class="fab fa-twitter"></i></a></li>
									<li><a href="javascript:void(0)"><i class="fab fa-facebook-f"></i></a></li>
									<li><a href="javascript:void(0)"><i class="fab fa-dribbble"></i></a></li>
									<li><a href="javascript:void(0)"><i class="fab fa-vimeo-v"></i></a></li>
									<li><a href="javascript:void(0)"><i class="fab fa-tumblr"></i></a></li>
								</ul>
							</div>
						</div>

						<div class="col-md-4 col-12">
							<div class="newsletter clearfix">
								<h4>Newsletter</h4>
								<h3>Sign up now</h3>
								<p>Enter your email address and get notified about new products. We hate spam!</p>
								<form class="input-group">
									<input type="text" class="form-control" required placeholder="your email address" aria-describedby="basic-addon2">
									<button type="submit" class="input-group-addon" id="basic-addon2">go <i class="fa fa-chevron-right"></i></button>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- COPY RIGHT -->
			<div class="copyRight clearfix">
				<div class="container">
					<div class="row">
						<div class="col-md-7 col-12">
							<p>&copy; <span id="copy-year"></span> Copyright Bigbag Store Bootstrap Template by <a target="_blank" href="https://www.iamabdus.com/">Abdus</a>.</p>
						</div>
						<div class="col-md-5 col-12">
							<ul class="list-inline">
								<li>
									<a href="javascript:void(0)"><img src="assets/img/home/footer/card1.png"></a>
								</li>

								<li>
									<a href="javascript:void(0)"><img src="assets/img/home/footer/card2.png"></a>
								</li>

								<li>
									<a href="javascript:void(0)"><img src="assets/img/home/footer/card3.png"></a>
								</li>

								<li>
									<a href="javascript:void(0)"><img src="assets/img/home/footer/card4.png"></a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	
	<?php require "footerMenu.php"; ?>
	<?php require "javascript.php"; ?>
	<script>
		CheckPayment();
		function CheckPayment() {
			payment_token = $("input[name=payment_token]").val();
			id = $("input[name=order_id]").val();	
			$.getJSON( "ajax/order.php", {'CheckPayment':"1","payment_token":payment_token,"id":id}, function( data ) {
			  location.href = data.url;
			});
		}
	</script>

</body>
</html>


     