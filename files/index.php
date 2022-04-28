<!DOCTYPE html>
<html lang="en">
<head>
<?php require "head.php"; ?>
</head>
  <body id="body" class="body-wrapper sidebar-dark version1 up-scroll">
	<?php $core->PreLoader(); ?>
    <div class="main-wrapper home">
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
		<section class="banner_slider_wrapper clearfix">
		  <div class="banner_slider_inner">
			<div class="container">
			  <div class="banner_slider mb-0">
				<div class="item">
				  <div class="row align-items-center">
					<div class="col-6">
					  <div class="content">
						<h6>Siia väike pealkiri</h6>

						<h1>Siia suur pealkiri</h1>

						<p class="text-truncate">Siia mingi tekst</p>

						<a target="_blank" href="Siirdu rentima" class="btn btn-primary-outlined btn-sm">
						  Asu rentima <span><i class="fa fa-chevron-right"></i></span>
						</a>
					  </div>
					</div>

					<div class="col-6">
					  <picture class="image">
						<source srcset="assets/img/home/banner-slider/sl1.png" media="(min-width: 1000px)">
						<source srcset="assets/img/home/banner-slider/sl1-md.png" media="(min-width: 600px)">
						<img class="img-fluid" src="assets/img/home/banner-slider/sl1-sm.png" alt="slider-image">
					  </picture>
					</div>
				  </div>
				</div>

				<div class="item">
				  <div class="row align-items-center">
					<div class="col-6">
					  <picture class="image">
						<source srcset="assets/img/home/banner-slider/sl2.png" media="(min-width: 1000px)">
						<source srcset="assets/img/home/banner-slider/sl2-md.png" media="(min-width: 600px)">
						<img class="img-fluid" src="assets/img/home/banner-slider/sl2-sm.png" alt="slider-image">
					  </picture>
					</div>

					<div class="col-6">
					  <div class="content">
						<h6>Siia väike tekst!</h6>

						<h1>Siia suur tekst</h1>

						<p class="text-truncate">Siia nagu võiks ka midagi panna</p>

						<a target="_blank" href="" class="btn btn-primary-outlined btn-sm">
						  Asu rentima <span><i class="fa fa-chevron-right"></i></span>
						</a>
					  </div>
					</div>
				  </div>
				</div>

				<div class="item">
				  <div class="row align-items-center">
					<div class="col-6">
					  <div class="content">
						<h6>siia väike pealkiri!</h6>

						<h1>Siia suur pealkiri</h1>

						<p class="text-truncate">Paneme siia ka midagi</p>

						<a target="_blank" href="" class="btn btn-primary-outlined btn-sm">
						  Asu rentima <span><i class="fa fa-chevron-right"></i></span>
						</a>
					  </div>
					</div>
					
					<div class="col-6">
					  <picture class="image">
						<source srcset="assets/img/home/banner-slider/shoe1.png" media="(min-width: 1000px)">
						<source srcset="assets/img/home/banner-slider/shoe1-md.png" media="(min-width: 600px)">
						<img class="img-fluid" src="assets/img/home/banner-slider/shoe1-sm.png" alt="slider-image">
					  </picture>
					</div>
				  </div>
				</div>

			  </div>
			</div>
		  </div>
		</section>

			<?php $cats = $product->LoadCategory(); ?>
		<?php if ($cats["success"] === "0") { ?>
      <section class="mainContent clearfix featured_collection_slider_area">
        <div class="container">
          <div class="page-header">
            <h4>Kategooriad</h4>
          </div>
        </div>

        <div class="container container-inner">
          <div class="featuredCollection  featured_collection_slider slider">
			
			<?php foreach($cats["data"] as $key => $value): ?>
            <div class="thumbnail" onclick="location.href='single-product.html';">
              <div class="imageWrapper">
                <img src="<?php echo $value["picture"];?>" alt="feature-collection-image">
                <div class="caption">
                    <h3><?php echo $value["name"];?></h3>
                    <small><?php echo $value["description"];?></small>
                </div>
                <div class="masking">
                  <a href="product-grid-left-sidebar.html" class="btn viewBtn">Vaata kategooriat</a>
                </div>
              </div>
            </div>
			<?php endforeach; ?>
          </div>
        </div>
      </section>
		<?php } ?>
		
		<?php $sugg = $product->LoadSuggestedProducts(); ?>
			<?php if ($sugg["success"] === "1") { ?>  
      <section class="mainContent clearfix featured_products_slider_area pt-4">
        <div class="container">
          <div class="page-header">
            <h4>Soovitame</h4>
          </div>
        </div>

        <div class="container container-inner">
          <div class=" featuredProducts featuredProductsSlider featured_products_slider mb-0" dir="ltr">
		  
			<?php foreach($sugg["data"] as $key => $value): ?>
            <div class="slide">
              <div class="productImage clearfix">
                <img src="<?php echo $value["cover"];?>" alt="featured-product-img">
                <div class="productMasking">
                  <ul class="list-inline btn-group" role="group">
                    <li><a data-bs-toggle="modal" href="-2.html" class="btn btn-default"><i class="fa fa-eye"></i></a></li>
                  </ul>
                </div>
              </div>

              <div class="productCaption clearfix">
                <a href="single-product.html">
                  <h4><?php echo $value["name"];?></h4>
                </a>
                <h3><?php echo $value["rentPrice"];?>€/päev</h3>
              </div>
            </div>
			<?php endforeach; ?>
          </div>
        </div>
      </section>
			<?php } ?>

	<?php $prod = $product->LoadAllProducts(); ?>
	<?php if ($prod["success"] === "1") { ?>
      <section class="mainContent clearfix pt-4">
        <div class="container">
          <div class="page-header content">
          </div>
          <div class="row latestArticles">
          <?php $prod = $product->LoadAllProducts(); ?>
		  <?php foreach($prod["data"] as $key => $value): ?>
			<div class="col-6">
              <div class="thumbnail">
                <a href="product/<?php echo $value["id"];?>">
                  <img src="<?php echo $value["cover"];?>" alt="article-image">
                </a>
                <h5><a href="product/<?php echo $value["id"];?>"><?php echo $value["name"];?></a></h5>
                <span class="meta"> by <a class="pe-1" href="brand/<?php echo $value["brand"];?>"><?php echo $value["brand"]; ?> </a></span>
                <div class="caption">
                  <p><?php echo $value["description"];?></p>
                  <p>Rendihind <strong><?php echo $value["rentPrice"];?>€ / päev</strong></p>
                  <p>Müügihind <strong><?php echo $value["sellPrice"];?>€</strong></p>
                </div>
              </div>
            </div>
			<?php endforeach; ?>

          </div>
        </div>
      </section>
	<?php } ?>
      <section class="lightSection clearfix">
        <div class="container">
          <div class="owl-carousel partnersLogoSlider" dir="ltr">
            <div class="slide">
              <div class="partnersLogo clearfix">
                <img src="assets/img/home/partners/partner-01.png" alt="partner-img">
              </div>
            </div>
            <div class="slide">
              <div class="partnersLogo clearfix">
                <img src="assets/img/home/partners/partner-02.png" alt="partner-img">
              </div>
            </div>
            <div class="slide">
              <div class="partnersLogo clearfix">
                <img src="assets/img/home/partners/partner-03.png" alt="partner-img">
              </div>
            </div>
            <div class="slide">
              <div class="partnersLogo clearfix">
                <img src="assets/img/home/partners/partner-04.png" alt="partner-img">
              </div>
            </div>
            <div class="slide">
              <div class="partnersLogo clearfix">
                <img src="assets/img/home/partners/partner-05.png" alt="partner-img">
              </div>
            </div>
            <div class="slide">
              <div class="partnersLogo clearfix">
                <img src="assets/img/home/partners/partner-01.png" alt="partner-img">
              </div>
            </div>
            <div class="slide">
              <div class="partnersLogo clearfix">
                <img src="assets/img/home/partners/partner-02.png" alt="partner-img">
              </div>
            </div>
            <div class="slide">
              <div class="partnersLogo clearfix">
                <img src="assets/img/home/partners/partner-03.png" alt="partner-img">
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- PORDUCT QUICK VIEW MODAL -->
      <div class="modal fade quick-view" tabindex="-1" role="dialog">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-body">
              <button type="button" class="close top-0 lh-1 px-3" data-bs-dismiss="modal" aria-hidden="true">×</button>
              
              <div class="media flex-wrap">
                <div class="media-left px-0">
                  <img class="media-object" src="assets/img/products/quick-view/quick-view-01.jpg" alt="Image">
                </div>
                
                <div class="media-body">
                  <h2>Old Skool Navy</h2>
                  <h3>$149</h3>
                  <p>Classic sneaker from Vans. Cotton canvas and suede upper. Textile lining with heel stabilizer and ankle support. Contrasting laces. Sits on a classic waffle rubber sole.</p>
                  
                  <span class="quick-drop">
                    <select name="guiest_id3" id="guiest_id3" class="select-drop">
                      <option value="0">Size</option>
                      <option value="1">Size 1</option>
                      <option value="2">Size 2</option>
                      <option value="3">Size 3</option>
                    </select>
                  </span>
                  
                  <span class="quick-drop resizeWidth">
                    <select name="guiest_id4" id="guiest_id4" class="select-drop">
                      <option value="0">Qty</option>
                      <option value="1">Qty 1</option>
                      <option value="2">Qty 2</option>
                      <option value="3">Qty 3</option>
                    </select>
                  </span>
                  
                  <div class="btn-area">
                    <a href="cart-page.html" class="btn btn-primary btn-block">Add to cart <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>


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
</body>
</html>


     