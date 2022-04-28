        <aside class="left-sidebar sidebar-dark" id="left-sidebar">
          <div id="sidebar" class="sidebar sidebar-with-footer">
          <?php if ($user->logged_in) { ?>
            <div class="app-brand">
              <a href="profile.php">
                <?php echo $user->name;?>
              </a>
            </div>
            <?php } ?>
            <div class="sidebar-scrollbar" data-simplebar style="height: 100%;">
              <ul class="nav sidebar-inner" id="sidebar-menu">
                <li class="has-sub active expand">
                  <a class="sidenav-item-link" href="javascript:void(0)" data-bs-toggle="collapse" data-bs-target="#home"
                    aria-expanded="true" aria-controls="home">
                    <i class="mdi mdi-home-outline"></i>
                    <span class="nav-text">Pealeht</span>
                  </a>
                </li>

                <li class="has-sub ">
                  <a class="sidenav-item-link" href="javascript:void(0)" data-bs-toggle="collapse" data-bs-target="#shop"
                    aria-expanded="false" aria-controls="shop">
                    <i class="mdi mdi-shopping"></i>
                    <span class="nav-text">Minu rentimised</span>
                  </a>
                </li>

                <li class="has-sub ">
                  <a class="sidenav-item-link" href="javascript:void(0)" data-bs-toggle="collapse" data-bs-target="#pages"
                    aria-expanded="false" aria-controls="pages">
                    <i class="mdi mdi-account-card-details"></i>
                    <span class="nav-text">Minu konto
                  </a>
                </li>

                <li class="has-sub ">
                  <a class="sidenav-item-link" href="javascript:void(0)" data-bs-toggle="collapse" data-bs-target="#blog"
                    aria-expanded="false" aria-controls="blog">
                    <i class="mdi mdi-chat-processing"></i>
                    <span class="nav-text">Sõnumid
                  </a>
                </li>

                <li class="has-sub ">
                  <a class="sidenav-item-link" href="javascript:void(0)" data-bs-toggle="collapse" data-bs-target="#my-account"
                    aria-expanded="false" aria-controls="my-account">
                    <i class="mdi mdi-account-card-details"></i>
                    <span class="nav-text">Seaded</span>
                  </a>
                </li>
                <li class="has-sub ">
                  <a class="sidenav-item-link" href="javascript:void(0)" data-bs-toggle="collapse" data-bs-target="#shop"
                    aria-expanded="false" aria-controls="shop">
                    <i class="fa fa-info"></i>
                    <span class="nav-text">Abikeskus</span> <b class="caret"></b>
                  </a>

                  <ul class="collapse " id="shop" data-bs-parent="#sidebar-menu">
                    <div class="sub-menu">
                      <li class="section-title">
                        Rentimine
                      </li>

                      <li class="">
                        <a class="sidenav-item-link" href="product-grid-left-sidebar.html">
                          <span class="nav-text">Kuidas rentimine toimib?</span>
                        </a>
                      </li>

                      <li class="">
                        <a class="sidenav-item-link" href="product-grid-right-sidebar.html">
                          <span class="nav-text">Kuidas toimub transport?</span>
                        </a>
                      </li>

                      <li class="">
                        <a class="sidenav-item-link" href="product-grid-3-col-filter.html">
                          <span class="nav-text">Millal pean tagastama?</span>
                        </a>
                      </li>

                      <li class="section-title">
                        Kasutaja tingimused ja leping
                      </li>

                      <li class="">
                        <a class="sidenav-item-link" href="product-list-left-sidebar.html">
                          <span class="nav-text">Kasutajalepingu tingimused</span>
                        </a>
                      </li>

                      <li class="">
                        <a class="sidenav-item-link" href="product-list-right-sidebar.html">
                          <span class="nav-text">Privaatsuspoliitika</span>
                        </a>
                      </li>

                      <li class="section-title">
                        Minu kasutajakonto
                      </li>

                      <li class="">
                        <a class="sidenav-item-link" href="single-product.html">
                          <span class="nav-text">Kuidas kustutada kasutajat?</span>
                        </a>
                      </li>

                      <li class="">
                        <a class="sidenav-item-link" href="product-comparison.html">
                          <span class="nav-text">Mida teha, kui ma ei saa oma kontole sisse?</span>
                        </a>
                      </li>

                      <li class="section-title">
                        Checkout
                      </li>

                      <li class="">
                        <a class="sidenav-item-link" href="checkout-step-1.html">
                          <span class="nav-text">Step 1 - Shipping</span>
                        </a>
                      </li>

                      <li class="">
                        <a class="sidenav-item-link" href="checkout-step-2.html">
                          <span class="nav-text">Step 2 - Payment</span>
                        </a>
                      </li>

                      <li class="">
                        <a class="sidenav-item-link" href="checkout-step-3.html">
                          <span class="nav-text">Step 3 - Review</span>
                        </a>
                      </li>

                      <li class="">
                        <a class="sidenav-item-link" href="checkout-step-4.html">
                          <span class="nav-text">Step 4 - Complete</span>
                        </a>
                      </li>

                      <li class="section-title">
                        Others
                      </li>

                      <li class="">
                        <a class="sidenav-item-link" href="product-categories.html">
                          <span class="nav-text">Product Categories</span>
                        </a>
                      </li>

                      <li class="">
                        <a class="sidenav-item-link" href="cart-page.html">
                          <span class="nav-text">Cart Page</span>
                        </a>
                      </li>
                    </div>
                  </ul>
                </li>

                </li>
              </ul>
            </div>

            <div class="sidebar-footer">
              <div class="sidebar-footer-content bg-primary">
                <ul class="d-flex">
                  <li>
                    <a href="javascript:void(0)"><i class="fas fa-sign-in-alt"></i> Logi sisse</a>
                  </li>

                  <li>
                    <a href="javascript:void(0)"><i class="fas fa-user-plus"></i> Loo konto</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </aside>