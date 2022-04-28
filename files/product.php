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
          <div class="row singleProduct">
			<div class="d-flex justify-content-between">
				<div class="">
					<a href="index.php" class=" color-black"><i class="fa fa-reply" aria-hidden="true"></i>
                        Tagasi esilehele
                    </a>
				</div>
				<div class="mb-1">
					Jaga: 
					<a class="SingleSocialIcon color-black" href="javascript:void(0)">
						<i class="fa-brands fa-facebook-f"></i>
					</a>
					<a class="SingleSocialIcon color-black" href="javascript:void(0)">
						<i class="fa-brands fa-instagram"></i>
					</a>
				</div>
			</div>
            <div class="col-md-12">

              <div class="media flex-wrap mb-5">
                <div class="media-left productSlider">
                  <div id="carousel" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner SingleProductItem">
                      <div class="carousel-item active productImage SingleProductImage" data-thumb="0">
                        <img src="<?php echo $core->site_url;?><?php echo $pro["cover_dir"];?>">
                        <a data-fancybox="images" href="<?php echo $core->site_url;?><?php echo $pro["cover_dir"];?>" class="product-content">
                          <div class="MaskingIcon"><i class="fa fa-plus"></i></div>
                        </a>
                      </div>
					  <?php $pictures = $product->GetProductPictures($pro["id"]);?>	
					  <?php if ($pictures["success"] === "1") { ?>
					  <?php foreach ($pictures["data"] as $key => $value): ?>
                      <div class="carousel-item SingleProductImage" data-thumb="1">
                        <img src="<?php echo $core->site_url;?><?php echo $value["dir"];?>">
                        <a data-fancybox="images" href="<?php echo $core->site_url;?><?php echo $value["dir"];?>" class="product-content">
                          <div class="MaskingIcon"><i class="fa fa-plus"></i></div>
                        </a>
                      </div>
					  <?php endforeach; ?>
					  <?php } ?>
                    </div>
                  </div>
				<?php if ($pictures["success"] === "1") { ?>
				<?php $i=0; foreach ($pictures["data"] as $key => $value): ?>
                  <div class="clearfix">
                    <div id="thumbcarousel" class="carousel slide" data-interval="false">
                      <div class="carousel-inner">
                          <div data-bs-target="#carousel" data-bs-slide-to="<?php echo $i;?>" class="thumb"><img src="<?php echo $core->site_url;?><?php echo $value["dir"];?>"></div>
                      </div>
                      <a class="left carousel-control" href="#thumbcarousel" role="button" data-bs-slide="prev">
                        <i class="fa-solid fa-angle-left"></i>
                      </a>
                      <a class="right carousel-control" href="#thumbcarousel" role="button" data-bs-slide="next">
                        <i class="fa-solid fa-angle-right"></i>
                      </a>
                    </div>
                  </div>
				<?php $i++; endforeach; ?>
				<?php } ?>  
                </div>
                <div class="media-body">
                  <h2>
				  <?php echo $pro["name"];?>
				  </h2>
				  <small class="dblock">
					<a class="color-black font-15 text-muted" href="<?php echo $core->site_url;?>brand/<?php echo $pro["slug"];?>"><?php echo $pro["brandName"];?></a>
				  </small>
                  <p><?php echo $pro["description"];?></p>
				  <ul class="mt-1">
					<li class="font-22"><strong><?php echo $pro["rentPrice"];?>€ / päev</strong></li>
				  </ul>
				  <form method="POST" action="javascript:void(0)" id="bronProduct">
				  <input type="hidden" name="bronProduct" value="1">
				  <input type="hidden" name="product_id" value="<?php echo $pro["id"];?>">
				  <input type="hidden" name="start">
				  <input type="hidden" name="end">
					  <div class="row mt-3">
						<div class="col-12">
							<label>Vali rendi kuupäevad:</label>
							<input type="text" name="range" class="rangePicker d-none">
						</div>
					  </div>
					  <div class="btn-area mb-0 mt-3">
						<button type="submit" class="btn btn-primary btn-default">Broneeri <i class="fa fa-angle-right" aria-hidden="true"></i></button>
					  </div>
				  </form>
                  <div class="tabArea d-none">
                    <ul class="nav nav-tabs bar-tabs">
                      <li class="nav-item"><a class="nav-link active" data-bs-toggle="tab" href="#details">details</a></li>
                      <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#about-art">about art</a></li>
                      <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#sizing">sizing</a></li>
                      <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#shipping">shipping</a></li>
                    </ul>
                    <div class="tab-content">
                      <div id="details" class="tab-pane fade show active">
                        <p>LContrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin liter ature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia.</p>
                        <ul class="list-unstyled">
                          <li>Black, Crew Neck</li>
                          <li>75% Cotton, 25% Rayon</li>
                          <li>Waterbased Ink</li>
                          <li>Wash Cold, dry low</li>
                        </ul>
                      </div>
                      <div id="about-art" class="tab-pane fade">
                        <p>Nulla facilisi. Mauris efficitur, massa et iaculis accumsan, mauris velit ultrices purus, quis condimentum nibh dolor ut tortor. Donec egestas tortor quis mattis gravida. Ut efficitur elit vitae dignissim volutpat. </p>
                      </div>
                      <div id="sizing" class="tab-pane fade">
                        <p>Praesent dui felis, gravida a auctor at, facilisis commodo ipsum. Cras eu faucibus justo. Nullam varius cursus nisi, sed elementum sem sagittis at. Nulla tellus massa, vestibulum a commodo facilisis, pulvinar convallis nunc.</p>
                      </div>
                      <div id="shipping" class="tab-pane fade">
                        <p>Mauris lobortis augue ex, ut faucibus nisi mollis ac. Sed volutpat scelerisque ex ut ullamcorper. Cras at velit quis sapien dapibus laoreet a id odio. Sed sit amet accumsan ante, eu congue metus. Aenean eros tortor, cursus quis feugiat sed, vestibulum vel purus.</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="row singleProduct singleProductTab">
            <div class="col-12">
              <div class="media mb-4">
                <div class="media-body">
                  <div class="tabArea">
                    <ul class="nav nav-tabs bar-tabs">
                      <li class="nav-item"><a class="nav-link active" data-bs-toggle="tab" href="#OurDetails">Details</a></li>
                      <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#OurSizing">Sizing</a></li>
                      <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#Reviews">Reviews</a></li>
                      <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#OurShipping">shipping</a></li>
                    </ul>
                    <div class="tab-content">
                      <div id="OurDetails" class="tab-pane fade show active">
                        <p>LContrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical
                          Latin
                          liter ature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at
                          Hampden-Sydney
                          College in Virginia.</p>
                        <ul class="list-unstyled">
                          <li>Black, Crew Neck</li>
                          <li>75% Cotton, 25% Rayon</li>
                          <li>Waterbased Ink</li>
                          <li>Wash Cold, dry low</li>
                        </ul>
                      </div>

                      <div id="OurSizing" class="tab-pane fade">
                        <div class="SingleCartListWrapper SingleCartSizing">
                          <div class="cartListInner">
                            <div class="table-responsive">
                              <table class="table">
                                <thead>
                                  <tr>
                                    <th>Inches</th>
                                    <th>US size</th>
                                    <th>EN size</th>
                                  </tr>
                                </thead>

                                <tbody>
                                  <tr>
                                    <td class="">9.65</td>
                                    <td class="">6.5</td>
                                    <td class="">39</td>
                                  </tr>

                                  <tr>
                                    <td class="">9.84</td>
                                    <td class="">7</td>
                                    <td class="">40</td>
                                  </tr>

                                  <tr>
                                    <td class="">10.04</td>
                                    <td class="">8</td>
                                    <td class="">41</td>
                                  </tr>

                                  <tr>
                                    <td class="">10.24</td>
                                    <td class="">8.5</td>
                                    <td class="">42</td>
                                  </tr>

                                  <tr>
                                    <td class="">10.43</td>
                                    <td class="">9.5</td>
                                    <td class="">43</td>
                                  </tr>

                                  <tr>
                                    <td class="">10.63</td>
                                    <td class="">10.0</td>
                                    <td class="">44</td>
                                  </tr>

                                  <tr>
                                    <td class="">10.83</td>
                                    <td class="">11.0</td>
                                    <td class="">45</td>
                                  </tr>

                                  <tr>
                                    <td class="">11.02</td>
                                    <td class="">12.0</td>
                                    <td class="">46</td>
                                  </tr>

                                  <tr>
                                    <td class="">11.2</td>
                                    <td class="">12.5</td>
                                    <td class="">47</td>
                                  </tr>

                                  <tr>
                                    <td class="">11.42</td>
                                    <td class="">13</td>
                                    <td class="">48</td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div id="Reviews" class="tab-pane fade">
                        <div class="media mb-5">
                          <img class="me-4 rounded rounded-circle" src="assets/img/blog/blog-small2-01.jpg" alt="Generic placeholder image">
                          <div class="media-body">
                            <h4 class="mt-0 mb-2">Lorem ipsum dolor</h4>

                            <ul class="text-warning d-flex mb-1">
                              <li class="me-1"><i class="fa fa-star" aria-hidden="true"></i></li>
                              <li class="me-1"><i class="fa fa-star" aria-hidden="true"></i></li>
                              <li class="me-1"><i class="fa fa-star" aria-hidden="true"></i></li>
                              <li class="me-1"><i class="fa fa-star" aria-hidden="true"></i></li>
                              <li class=""><i class="fas fa-star-half-alt" aria-hidden="true"></i></li>
                            </ul>

                            <p class="mt-0 mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio dolorum quasi magni mollitia suscipit blanditiis nihil id autem? Voluptates, minima expedita doloremque amet consequuntur quam aliquid repellat architecto accusamus fuga.</p>
                            <h6 class="mt-0"><em>Rodney Artichoke</em></h6>
                          </div>
                        </div>

                        <div class="media mb-5">
                          <img class="me-4 rounded rounded-circle" src="assets/img/blog/blog-small-02.jpg" alt="Generic placeholder image">
                          <div class="media-body">
                            <h4 class="mt-0 mb-2">Feugiat primis</h4>

                            <ul class="text-warning d-flex mb-1">
                              <li class="me-1"><i class="fa fa-star" aria-hidden="true"></i></li>
                              <li class="me-1"><i class="fa fa-star" aria-hidden="true"></i></li>
                              <li class="me-1"><i class="fa fa-star" aria-hidden="true"></i></li>
                              <li class="me-1"><i class="fa fa-star" aria-hidden="true"></i></li>
                              <li class=""><i class="far fa-star" aria-hidden="true"></i></li>
                            </ul>

                            <p class="mt-0 mb-3">Feugiat primis reprehenderit proident cumque nec diam eligendi, qui iure, torquent quod sequi, taciti! Tempus leo
                            architecto accusantium cillum, taciti nascetur? Iusto facilisi dolores adipisci eros fuga, laoreet culpa molestie, arcu
                            lectus felis sunt accusantium alias mollitia eius anim eget. voluptatibus facilisi.</p>
                            <h6 class="mt-0"><em>Samanta Doe</em></h6>
                          </div>
                        </div>

                        <div class="media mb-0">
                          <img class="me-4 rounded rounded-circle" src="assets/img/blog/blog-small-03.jpg" alt="Generic placeholder image">
                          <div class="media-body">
                            <h4 class="mt-0 mb-2">Auctor vitae egestas</h4>

                            <ul class="text-warning d-flex mb-1">
                              <li class="me-1"><i class="fa fa-star" aria-hidden="true"></i></li>
                              <li class="me-1"><i class="fa fa-star" aria-hidden="true"></i></li>
                              <li class="me-1"><i class="fa fa-star" aria-hidden="true"></i></li>
                              <li class="me-1"><i class="fa fa-star" aria-hidden="true"></i></li>
                              <li class=""><i class="fa fa-star" aria-hidden="true"></i></li>
                            </ul>

                            <p class="mt-0 mb-2">Auctor vitae egestas et. Accumsan quis nunc. Duis leo justo. Condimentum at purus eu. Amana sed dolor sem. Etiam massa
                            libero. massa libero, auctor vitae egestas et, accumsan quis nunc. Dous leou justi, condimentam at purus eus actor.
                            Auctor vitae egestas et duis Condimentum at purus eu. Aemean sed dolor sem. Etiam massa libero.</p>
                            <h6 class="mt-0"><em>Amanda Smith</em></h6>
                          </div>
                        </div>

                        <div class="mt-5 mb-2 border p-4 p-md-5">
                          <form>
                            <div class="media flex-column flex-md-row mb-0">
                              <img class="m-auto m-md-0 me-md-4 rounded rounded-circle" src="assets/img/blog/profile-image.jpg" alt="Generic placeholder image">
                              
                              <div class="media-body mt-4 mt-md-0">
                                <h6 class="text-center text-md-start text-capitalize mt-0"><em>Rodney samp</em></h6>
                                <h6 class="text-center text-md-start ReviewsPost mt-0">Posting publicly</h6>
                            
                                <div class="rating-view mb-4">
                                  <span class="add-rating-large ps-0 m-auto m-md-0"></span>
                                </div>

                                <div class="row">
                                  <div class="form-group col-md-12">
                                    <input type="text" class="form-control" id="exampleInputPhone" placeholder="Subject" required="">
                                  </div>

                                  <div class="form-group col-md-12">
                                    <textarea class="form-control" rows="5" placeholder="Review"></textarea>
                                  </div>
                                </div>

                                <div class="text-center text-md-start">
                                  <button type="submit" class="btn btn-default btn-primary custom-btn">Submit Review</button>
                                </div>
                              </div>
                            </div>
                          </form>
                        </div>
                      </div>

                      <div id="OurShipping" class="tab-pane fade">
                        <div class="SingleCartListWrapper SingleCartShipping">
                          <div class="cartListInner">
                            <div class="table-responsive">
                              <table class="table">
                                <thead>
                                  <tr>
                                    <th>Shipping method</th>
                                    <th>Estimated Time</th>
                                    <th>Fees</th>
                                  </tr>
                                </thead>

                                <tbody>
                                  <tr>
                                    <td class="">
                                      <div class="form-check ps-0 mb-0">
                                        <input id="radio-1" class="radio-custom form-check-input" name="radio-group" type="radio" checked="">
                                        <label for="radio-1" class="form-check-label radio-custom-label media align-items-center mb-0">
                                          <div class="media-body">
                                            Pickup from store
                                          </div>
                                        </label>
                                      </div>
                                    </td>
                                  
                                    <td class="">—</td>
                                    <td class="">$0</td>
                                  </tr>

                                  <tr>
                                    <td class="">
                                      <div class="form-check ps-0 mb-0">
                                        <input id="radio-2" class="radio-custom form-check-input" name="radio-group" type="radio">
                                        <label for="radio-2" class="form-check-label radio-custom-label media align-items-center mb-0">
                                          <div class="media-body">
                                            Local Shipping
                                          </div>
                                        </label>
                                      </div>
                                    </td>
                                  
                                    <td class="">2-7 days</td>
                                    <td class="">$4</td>
                                  </tr>

                                  <tr>
                                    <td class="">
                                      <div class="form-check ps-0 mb-0">
                                        <input id="radio-3" class="radio-custom form-check-input" name="radio-group" type="radio">
                                        <label for="radio-3" class="form-check-label radio-custom-label media align-items-center mb-0">
                                          <div class="media-body">
                                            Courier
                                          </div>
                                        </label>
                                      </div>
                                    </td>

                                    <td class="">3-5 days</td>
                                    <td class="">$5</td>
                                  </tr>
                      
                                  <tr>
                                    <td class="">
                                      <div class="form-check ps-0 mb-0">
                                        <input id="radio-4" class="radio-custom form-check-input" name="radio-group" type="radio">
                                        <label for="radio-4" class="form-check-label radio-custom-label media align-items-center mb-0">
                                          <div class="media-body">
                                            International Shipping
                                          </div>
                                        </label>
                                      </div>
                                    </td>
                                    
                                    <td class="">7-15 days</td>
                                    <td class="">$15</td>
                                  </tr>
                                </tbody>
                              </table>
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

          <div class="page-header content">
            <h4>Related Products</h4>
          </div>
          <div class="row productsContent">
            
            <div class="col-md-3 col-12 ">
              <div class="productBox">
                <div class="productImage clearfix">
                  <img src="assets/img/products/products-01.jpg" alt="products-img">
                  <div class="productMasking">
                    <ul class="list-inline btn-group" role="group">
                      <li><a data-bs-toggle="modal" href=".html" class="btn btn-default"><i class="far fa-heart"></i></a></li>
                      <li><a href="cart-page.html" class="btn btn-default"><i class="fa fa-shopping-basket"></i></a></li>
                      <li><a class="btn btn-default" data-bs-toggle="modal" href="-2.html" ><i class="fa fa-eye"></i></a></li>
                    </ul>
                  </div>
                </div>
                <div class="productCaption clearfix">
                 <h5>Nike Sportswear</h5>
                 <h3>$199</h3>
                </div>
              </div>
            </div>
            <div class="col-md-3 col-12 ">
              <div class="productBox">
                <div class="productImage clearfix">
                  <img src="assets/img/products/products-02.jpg" alt="products-img">
                  <div class="productMasking">
                    <ul class="list-inline btn-group" role="group">
                      <li><a data-bs-toggle="modal" href=".html" class="btn btn-default"><i class="far fa-heart"></i></a></li>
                      <li><a href="cart-page.html" class="btn btn-default"><i class="fa fa-shopping-basket"></i></a></li>
                      <li><a class="btn btn-default" data-bs-toggle="modal" href="-2.html" ><i class="fa fa-eye"></i></a></li>
                    </ul>
                  </div>
                </div>
                <div class="productCaption clearfix">
                 <h5>Dip Dyed Sweater</h5>
                 <h3>$249</h3>
                </div>
              </div>
            </div>
            <div class="col-md-3 col-12 ">
              <div class="productBox">
                <div class="productImage clearfix">
                  <img src="assets/img/products/products-03.jpg" alt="products-img">
                  <div class="productMasking">
                    <ul class="list-inline btn-group" role="group">
                      <li><a data-bs-toggle="modal" href=".html" class="btn btn-default"><i class="far fa-heart"></i></a></li>
                      <li><a href="cart-page.html" class="btn btn-default"><i class="fa fa-shopping-basket"></i></a></li>
                      <li><a class="btn btn-default" data-bs-toggle="modal" href="-2.html" ><i class="fa fa-eye"></i></a></li>
                    </ul>
                  </div>
                </div>
                <div class="productCaption clearfix">
                 <h5>Scarf Ring Corner</h5>
                 <h3>$179</h3>
                </div>
              </div>
            </div>
            <div class="col-md-3 col-12 ">
              <div class="productBox">
                <div class="productImage clearfix">
                  <img src="assets/img/products/products-04.jpg" alt="products-img">
                  <div class="productMasking">
                    <ul class="list-inline btn-group" role="group">
                      <li><a data-bs-toggle="modal" href=".html" class="btn btn-default"><i class="far fa-heart"></i></a></li>
                      <li><a href="cart-page.html" class="btn btn-default"><i class="fa fa-shopping-basket"></i></a></li>
                      <li><a class="btn btn-default" data-bs-toggle="modal" href="-2.html" ><i class="fa fa-eye"></i></a></li>
                    </ul>
                  </div>
                </div>
                <div class="productCaption clearfix">
                 <h5>Sun Buddies</h5>
                 <h3>$149</h3>
                </div>
              </div>
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
	var myDate = new Date(new Date().getTime()+(5*24*60*60*1000));
	let calendar = $(".rangePicker").flatpickr({
    mode: "range",
    minDate: new Date().fp_incr(5),
    dateFormat: "Y-m-d",
	inline: true,
	onChange: function(selectedDates, dateStr, instance) {
	var l = selectedDates.length;
	if (selectedDates.length >= 1) {
			
		let f = selectedDates[0];
		days1 = new Date(selectedDates[0]);
		days2 = new Date(selectedDates[0]).fp_incr(2);

		nd1 = moment(days1).format('YYYY-MM-DD');
		nd2 = moment(days2).format('YYYY-MM-DD');
		$("input[name=start]").val(nd1);	
		$("input[name=end]").val(nd2);	
		var array = [];
		array.push(days1);
		array.push(days2);
		calendar.selectedDates = array;
		calendar.redraw();
	}

    },
});
	</script>
</body>
</html>


     