 <!-- ========== MOBILE MENU ========== -->
 <nav id="mobile-menu"></nav>

  <!-- ========== WRAPPER ========== -->
  <div class="wrapper">
    <!-- ========== TOP MENU ========== -->
    <div class="topbar">
      <div class="container">
        <div class="welcome-mssg">
          Welcome to Hotel Himara.
        </div>
        <div class="top-right-menu">
          <ul class="top-menu">
            <li class="d-none d-md-inline">
              <a href="tel:+18881234567">
                <i class="fa fa-phone"></i>+1 888 123 4567
              </a>
            </li>
            <li class="d-none d-md-inline">
              <a href="mailto:contact@hotelhimara.com">
                <i class="fa fa-envelope-o "></i>contact@hotelhimara.com</a>
            </li>
            <li class="language-menu">
              <a href="#" class="active-language"><img src="images/icons/flags/gb.png" alt="Image">English</a>
              <ul class="languages">
                <li class="language">
                  <a href="#"><img src="images/icons/flags/it.png" alt="Image">Italiano</a>
                </li>
                <li class="language">
                  <a href="#"><img src="images/icons/flags/gr.png" alt="Image">Ελληνικα</a>
                </li>
                <li class="language">
                  <a href="#"><img src="images/icons/flags/al.png" alt="Image">Shqip</a>
                </li>
                <li class="language">
                  <a href="#"><img src="images/icons/flags/fr.png" alt="Image">Français</a>
                </li>
                <li class="language">
                  <a href="#"><img src="images/icons/flags/es.png" alt="Image">Español</a>
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <!-- ========== HEADER ========== -->
    <header class="horizontal-header sticky-header" data-menutoggle="991">
      <div class="container">
        <!-- BRAND -->
        <div class="brand">
          <div class="logo">
            <a href="index.html">
              <img src="images/logo.svg" alt="Hotel Himara">
            </a>
          </div>
        </div>
        <!-- MOBILE MENU BUTTON -->
        <div id="toggle-menu-button" class="toggle-menu-button">
          <span class="line"></span>
          <span class="line"></span>
          <span class="line"></span>
        </div>
        <!-- MAIN MENU -->
        <nav id="main-menu" class="main-menu">
            <ul class="menu">
              <li class="menu-item dropdown active">
                <a href="{{ route("home") }}">HOME</a>
              </li>
              <li class="menu-item dropdown">
                <a href="{{ route("roomList") }}">ROOMS</a>
              </li>
              <li class="menu-item dropdown">
                <a href="{{ route("staff") }}">TEAM</a>
              </li>
              <li class="menu-item dropdown">
                <a href="{{ route("gallery") }}">GALLERY</a>
              </li>
              <li class="menu-item">
                <a href="{{ route("contact") }}">CONTACT US</a>
              </li>
              <li class="menu-item">
                <a href="{{ route("blog") }}">BLOG</a>
              </li>
              <li class="menu-item menu-btn">
                @if (Route::has('login'))
                    @auth
                        <a href="{{ url('/admin/dashboard') }}" class="btn">
                            <i class="fa fa-user"></i>
                            DASHBOARD</a>
                    @else
                        <a href="{{ route('login') }}" class="btn">
                            <i class="fa fa-user"></i>
                            LOG IN</a>
                    @endauth
                @endif
              </li>
            </ul>
          </nav>
      </div>
    </header>
    <!-- ========== PAGE TITLE ========== -->
    <div class="page-title gradient-overlay op6" style="background: url(images/breadcrumb.jpg); background-repeat: no-repeat;
    background-size: cover;">
      <div class="container">
        <div class="inner">
          <h1>ROOMS</h1>
          <ol class="breadcrumb">
            <li>
              <a href="index.html">Home</a>
            </li>
            <li>Rooms</li>
          </ol>
        </div>
      </div>
    </div>
    <!-- ========== MAIN ========== -->
    <main class="rooms-list-view">
      <div class="container">
        <div class="row">
          <div class="col-lg-9 col-12">
            <!-- ITEM -->
            <div class="room-list-item">
              <div class="row">
                <div class="col-lg-5">
                  <figure class="gradient-overlay-hover link-icon">
                    <a href="room.html"><img src="images/rooms/single/single1.jpg" class="img-fluid" alt="Image"></a>
                  </figure>
                </div>
                <div class="col-lg-5">
                  <div class="room-info">
                    <h3 class="room-title">
                      <a href="room.html">ISTANBUL</a>
                    </h3>
                    <span class="room-rates">
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <a href="room.html#room-reviews">5.00 Based on 3 Ratings</a>
                    </span>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing ..</p>
                    <div class="room-services">
                      <i class="fa fa-coffee" data-toggle="popover" data-placement="top" data-trigger="hover"
                        data-content="Breakfast Included" data-original-title="Breakfast"></i>
                      <i class="fa fa-wifi" data-toggle="popover" data-placement="top" data-trigger="hover"
                        data-content="Free WiFi" data-original-title="WiFi"></i>
                      <i class="fa fa-television" data-toggle="popover" data-placement="top" data-trigger="hover"
                        data-content="Plasma TV with cable channels" data-original-title="TV"></i>
                      <span>Beds: 1 King</span>
                      <span>Max Guests: 2</span>
                    </div>
                  </div>
                </div>
                <div class="col-lg-2">
                  <div class="room-price">
                    <span class="price">€89 / night</span>
                    <a href="room.html" class="btn btn-sm">view <br> details</a>
                  </div>
                </div>
              </div>
            </div>
            <!-- ITEM -->
            <div class="room-list-item">
              <div class="favorite-item">
                <i class="fa fa-star-o"></i>
              </div>
              <div class="row">
                <div class="col-lg-5">
                  <figure class="gradient-overlay-hover link-icon">
                    <a href="room.html"><img src="images/rooms/double/double.jpg" class="img-fluid" alt="Image"></a>
                  </figure>
                </div>
                <div class="col-lg-5">
                  <div class="room-info">
                    <h3 class="room-title">
                      <a href="room.html">TANGER</a>
                    </h3>
                    <span class="room-rates">
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <a href="room.html#room-reviews">5.00 Based on 3 Ratings</a>
                    </span>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing ..</p>
                    <div class="room-services">
                      <i class="fa fa-coffee" data-toggle="popover" data-placement="top" data-trigger="hover"
                        data-content="Breakfast Included" data-original-title="Breakfast"></i>
                      <i class="fa fa-wifi" data-toggle="popover" data-placement="top" data-trigger="hover"
                        data-content="Free WiFi" data-original-title="WiFi"></i>
                      <i class="fa fa-television" data-toggle="popover" data-placement="top" data-trigger="hover"
                        data-content="Plasma TV with cable channels" data-original-title="TV"></i>
                      <span>Beds: 2 King</span>
                      <span>Max Guests: 4</span>
                    </div>
                  </div>
                </div>
                <div class="col-lg-2">
                  <div class="room-price">
                    <span class="price">€129 / night</span>
                    <a href="room.html" class="btn btn-sm">view <br> details</a>
                  </div>
                </div>
              </div>
            </div>
            <!-- ITEM -->
            <div class="room-list-item">
              <div class="row">
                <div class="col-lg-5">
                  <figure class="gradient-overlay-hover link-icon">
                    <a href="room.html"><img src="images/rooms/deluxe/deluxe.jpg" class="img-fluid" alt="Image"></a>
                  </figure>
                </div>
                <div class="col-lg-5">
                  <div class="room-info">
                    <h3 class="room-title">
                      <a href="room.html">TOKYO</a>
                    </h3>
                    <span class="room-rates">
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <a href="room.html#room-reviews">5.00 Based on 3 Ratings</a>
                    </span>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing ..</p>
                    <div class="room-services">
                      <i class="fa fa-coffee" data-toggle="popover" data-placement="top" data-trigger="hover"
                        data-content="Breakfast Included" data-original-title="Breakfast"></i>
                      <i class="fa fa-wifi" data-toggle="popover" data-placement="top" data-trigger="hover"
                        data-content="Free WiFi" data-original-title="WiFi"></i>
                      <i class="fa fa-television" data-toggle="popover" data-placement="top" data-trigger="hover"
                        data-content="Plasma TV with cable channels" data-original-title="TV"></i>
                      <span>Beds: 1 King</span>
                      <span>Max Guests: 2</span>
                    </div>
                  </div>
                </div>
                <div class="col-lg-2">
                  <div class="room-price">
                    <span class="price">€189 / night</span>
                    <a href="room.html" class="btn btn-sm">view <br> details</a>
                  </div>
                </div>
              </div>
            </div>
            <!-- ITEM -->
            <div class="room-list-item">
              <div class="row">
                <div class="col-lg-5">
                  <figure class="gradient-overlay-hover link-icon">
                    <a href="room.html"><img src="images/rooms/family/family.jpg" class="img-fluid" alt="Image"></a>
                  </figure>
                </div>
                <div class="col-lg-5">
                  <div class="room-info">
                    <h3 class="room-title">
                      <a href="room.html">PARIS</a>
                    </h3>
                    <span class="room-rates">
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <a href="room.html#room-reviews">5.00 Based on 3 Ratings</a>
                    </span>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing ..</p>
                    <div class="room-services">
                      <i class="fa fa-coffee" data-toggle="popover" data-placement="top" data-trigger="hover"
                        data-content="Breakfast Included" data-original-title="Breakfast"></i>
                      <i class="fa fa-wifi" data-toggle="popover" data-placement="top" data-trigger="hover"
                        data-content="Free WiFi" data-original-title="WiFi"></i>
                      <i class="fa fa-television" data-toggle="popover" data-placement="top" data-trigger="hover"
                        data-content="Plasma TV with cable channels" data-original-title="TV"></i>
                      <span>Beds: 2 King and 1 Sofabed</span>
                      <span>Max Guests: 4</span>
                    </div>
                  </div>
                </div>
                <div class="col-lg-2">
                  <div class="room-price">
                    <span class="price">€149 / night</span>
                    <a href="room.html" class="btn btn-sm">view <br> details</a>
                  </div>
                </div>
              </div>
            </div>
            <!-- ITEM -->
            <div class="room-list-item">
              <div class="row">
                <div class="col-lg-5">
                  <figure class="gradient-overlay-hover link-icon">
                    <a href="room.html"><img src="images/rooms/king/king.jpg" class="img-fluid" alt="Image"></a>
                  </figure>
                </div>
                <div class="col-lg-5">
                  <div class="room-info">
                    <h3 class="room-title">
                      <a href="room.html">RIO DE JANEIRO</a>
                    </h3>
                    <span class="room-rates">
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <a href="room.html#room-reviews">5.00 Based on 3 Ratings</a>
                    </span>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing ..</p>
                    <div class="room-services">
                      <i class="fa fa-coffee" data-toggle="popover" data-placement="top" data-trigger="hover"
                        data-content="Breakfast Included" data-original-title="Breakfast"></i>
                      <i class="fa fa-bath" data-toggle="popover" data-placement="top" data-trigger="hover"
                        data-content="2 Bathrooms" data-original-title="Bathroom"></i>
                      <i class="fa fa-wifi" data-toggle="popover" data-placement="top" data-trigger="hover"
                        data-content="Free WiFi" data-original-title="WiFi"></i>
                      <i class="fa fa-television" data-toggle="popover" data-placement="top" data-trigger="hover"
                        data-content="Plasma TV with cable channels" data-original-title="TV"></i>
                      <span>Beds: 1 King</span>
                      <span>Max Guests: 2</span>
                    </div>
                  </div>
                </div>
                <div class="col-lg-2">
                  <div class="room-price">
                    <span class="price">€289 / night</span>
                    <a href="room.html" class="btn btn-sm">view <br> details</a>
                  </div>
                </div>
              </div>
            </div>
            <!-- ITEM -->
            <div class="room-list-item">
              <div class="favorite-item">
                <i class="fa fa-star-o"></i>
              </div>
              <div class="row">
                <div class="col-lg-5">
                  <figure class="gradient-overlay-hover link-icon">
                    <a href="room.html"><img src="images/rooms/honeymoon/honeymoon.jpg" class="img-fluid"
                        alt="Image"></a>
                  </figure>
                </div>
                <div class="col-lg-5">
                  <div class="room-info">
                    <h3 class="room-title">
                      <a href="room.html">SICILIA</a>
                    </h3>
                    <span class="room-rates">
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <a href="room.html#room-reviews">5.00 Based on 3 Ratings</a>
                    </span>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing ..</p>
                    <div class="room-services">
                      <i class="fa fa-coffee" data-toggle="popover" data-placement="top" data-trigger="hover"
                        data-content="Breakfast Included" data-original-title="Breakfast"></i>
                      <i class="fa fa-wifi" data-toggle="popover" data-placement="top" data-trigger="hover"
                        data-content="Free WiFi" data-original-title="WiFi"></i>
                      <i class="fa fa-television" data-toggle="popover" data-placement="top" data-trigger="hover"
                        data-content="Plasma TV with cable channels" data-original-title="TV"></i>
                      <span>Beds: 1 King</span>
                      <span>Max Guests: 2</span>
                    </div>
                  </div>
                </div>
                <div class="col-lg-2">
                  <div class="room-price">
                    <span class="price">€169 / night</span>
                    <a href="room.html" class="btn btn-sm">view <br> details</a>
                  </div>
                </div>
              </div>
            </div>
            <!-- ITEM -->
            <div class="room-list-item">
              <div class="row">
                <div class="col-lg-5">
                  <figure class="gradient-overlay-hover link-icon">
                    <a href="room.html"><img src="images/rooms/view/view.jpg" class="img-fluid" alt="Image"></a>
                  </figure>
                </div>
                <div class="col-lg-5">
                  <div class="room-info">
                    <h3 class="room-title">
                      <a href="room.html">MOSCOU</a>
                    </h3>
                    <span class="room-rates">
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <a href="room.html#room-reviews">5.00 Based on 3 Ratings</a>
                    </span>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing ..</p>
                    <div class="room-services">
                      <i class="fa fa-coffee" data-toggle="popover" data-placement="top" data-trigger="hover"
                        data-content="Breakfast Included" data-original-title="Breakfast"></i>
                      <i class="fa fa-wifi" data-toggle="popover" data-placement="top" data-trigger="hover"
                        data-content="Free WiFi" data-original-title="WiFi"></i>
                      <i class="fa fa-television" data-toggle="popover" data-placement="top" data-trigger="hover"
                        data-content="Plasma TV with cable channels" data-original-title="TV"></i>
                      <span>Beds: 1 King and 1 Sofabed</span>
                      <span>Max Guests: 4</span>
                    </div>
                  </div>
                </div>
                <div class="col-lg-2">
                  <div class="room-price">
                    <span class="price">€119 / night</span>
                    <a href="room.html" class="btn btn-sm">view <br> details</a>
                  </div>
                </div>
              </div>
            </div>
            <!-- ITEM -->
            <div class="room-list-item">
              <div class="row">
                <div class="col-lg-5">
                  <figure class="gradient-overlay-hover link-icon">
                    <a href="room.html"><img src="images/rooms/luxury/luxury.jpg" class="img-fluid" alt="Image"></a>
                  </figure>
                </div>
                <div class="col-lg-5">
                  <div class="room-info">
                    <h3 class="room-title">
                      <a href="room.html">LONDON</a>
                    </h3>
                    <span class="room-rates">
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <a href="room.html#room-reviews">5.00 Based on 3 Ratings</a>
                    </span>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing ..</p>
                    <div class="room-services">
                      <i class="fa fa-coffee" data-toggle="popover" data-placement="top" data-trigger="hover"
                        data-content="Breakfast Included" data-original-title="Breakfast"></i>
                      <i class="fa fa-wifi" data-toggle="popover" data-placement="top" data-trigger="hover"
                        data-content="Free WiFi" data-original-title="WiFi"></i>
                      <i class="fa fa-television" data-toggle="popover" data-placement="top" data-trigger="hover"
                        data-content="Plasma TV with cable channels" data-original-title="TV"></i>
                      <span>Beds: 2 King</span>
                      <span>Max Guests: 4</span>
                    </div>
                  </div>
                </div>
                <div class="col-lg-2">
                  <div class="room-price">
                    <span class="price">€349 / night</span>
                    <a href="room.html" class="btn btn-sm">view <br> details</a>
                  </div>
                </div>
              </div>
            </div>
            <!-- ITEM -->
            <div class="room-list-item">
              <div class="row">
                <div class="col-lg-5">
                  <figure class="gradient-overlay-hover link-icon">
                    <a href="room.html"><img src="images/rooms/small/small.jpg" class="img-fluid" alt="Image"></a>
                  </figure>
                </div>
                <div class="col-lg-5">
                  <div class="room-info">
                    <h3 class="room-title">
                      <a href="room.html">DUBAÎ</a>
                    </h3>
                    <span class="room-rates">
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <a href="room.html#room-reviews">5.00 Based on 3 Ratings</a>
                    </span>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing ..</p>
                    <div class="room-services">
                      <i class="fa fa-coffee" data-toggle="popover" data-placement="top" data-trigger="hover"
                        data-content="Breakfast Included" data-original-title="Breakfast"></i>
                      <i class="fa fa-television" data-toggle="popover" data-placement="top" data-trigger="hover"
                        data-content="Plasma TV with cable channels" data-original-title="TV"></i>
                      <span>Beds: 1 King</span>
                      <span>Max Guests: 2</span>
                    </div>
                  </div>
                </div>
                <div class="col-lg-2">
                  <div class="room-price">
                    <span class="price">€39 / night</span>
                    <a href="room.html" class="btn btn-sm">view <br> details</a>
                  </div>
                </div>
              </div>
            </div>
            <!-- PAGINATION -->
            <nav class="pagination">
              <ul>
                <li class="prev-pagination">
                  <a href="#">
                    &nbsp;<i class="fa fa-angle-left"></i>
                    Previous &nbsp;</a>
                </li>
                <li class="active">
                  <a href="#">1</a>
                </li>
                <li>
                  <a href="#">2</a>
                </li>
                <li>
                  <a href="#">3</a>
                </li>
                <li>...</li>
                <li>
                  <a href="#">7</a>
                </li>
                <li>
                  <a href="#">8</a>
                </li>
                <li>
                  <a href="#">9</a>
                </li>
                <li class="next_pagination">
                  <a href="#">
                    &nbsp; Next
                    <i class="fa fa-angle-right"></i>
                    &nbsp;
                  </a>
                </li>
              </ul>
            </nav>
          </div>
          <div class="col-lg-3 col-12">
            <div class="sidebar">
              <aside class="widget noborder">
                <div class="search">
                  <form class="widget-search">
                    <input type="search" placeholder="Search">
                    <button class="btn-search" id="searchsubmit" type="submit">
                      <i class="fa fa-search"></i>
                    </button>
                  </form>
                </div>
              </aside>
              <!-- WIDGET -->
              <aside class="widget">
                <h4 class="widget-title">CATEGORIES</h4>
                <ul class="categories">
                  <li>
                    <a href="#">Single Room<span class="posts-num">51</span></a>
                  </li>
                  <li>
                    <a href="#">Double Room<span class="posts-num">24</span></a>
                  </li>
                  <li>
                    <a href="#">Family Room
                      <span class="posts-num">9</span></a>
                  </li>
                  <li>
                    <a href="#">Deluxe Room<span class="posts-num">12</span></a>
                  </li>
                </ul>
              </aside>
              <!-- WIDGET -->
              <aside class="widget">
                <h4 class="widget-title">Tags</h4>
                <div class="tagcloud">
                  <a href="#">
                    <span class="tag">Red</span></a>
                  <a href="#">
                    <span class="tag">Dark</span></a>
                  <a href="#">
                    <span class="tag">Yellow</span></a>
                  <a href="#">
                    <span class="tag">Blue</span></a>
                  <a href="#">
                    <span class="tag">Pink</span></a>
                  <a href="#">
                    <span class="tag">Green</span></a>
                  <a href="#">
                    <span class="tag">Gray</span></a>
                  <a href="#">
                    <span class="tag">Brown</span></a>
                </div>
              </aside>
            </div>
          </div>
        </div>
      </div>
    </main>
    <!-- ========== FOOTER ========== -->
    <footer>
      <div class="footer-widgets">
        <div class="container">
          <div class="row">
            <!-- WIDGET -->
            <div class="col-md-3">
              <div class="footer-widget">
                <img src="images/logo.svg" class="footer-logo" alt="Hotel Himara">
                <div class="inner">
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim, velit placeat assumenda incidunt
                    dolorem aliquam!</p>
                  <a href="https://www.tripadvisor.com/" target="_blank">
                    <div class="tripadvisor-banner">
                      <span class="review">Recommended</span>
                      <img src="images/icons/tripadvisor.png" alt="Image">
                    </div>
                  </a>
                </div>
              </div>
            </div>
            <!-- WIDGET -->
            <div class="col-md-3">
              <div class="footer-widget">
                <h3>LATEST NEWS</h3>
                <div class="inner">
                  <ul class="latest-posts">
                    <li>
                      <a href="blog-post.html">10 Tips for holiday travel</a>
                    </li>
                    <li>
                      <a href="blog-post.html">Are you ready to enjoy your holidays</a>
                    </li>
                    <li>
                      <a href="blog-post.html">Honeymoon at Hotel Himara</a>
                    </li>
                    <li>
                      <a href="blog-post.html">Travel gift ideas for every type of traveler</a>
                    </li>
                    <li>
                      <a href="blog-post.html">Breakfast with coffee and orange juice</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <!-- WIDGET -->
            <div class="col-md-3">
              <div class="footer-widget">
                <h3>USEFUL LINKS</h3>
                <div class="inner">
                  <ul class="useful-links">
                    <li>
                      <a href="about-us.html">About Us</a>
                    </li>
                    <li>
                      <a href="contact.html">Contact Us</a>
                    </li>
                    <li>
                      <a href="shop.html">Shop</a>
                    </li>
                    <li>
                      <a href="gallery.html">Himara Gallery</a>
                    </li>
                    <li>
                      <a href="location.html">Our Location</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <!-- WIDGET -->
            <div class="col-md-3">
              <div class="footer-widget">
                <h3>Contact Info</h3>
                <div class="inner">
                  <ul class="contact-details">
                    <li>
                      <i class="fa fa-map-marker" aria-hidden="true"></i>
                      Lorem ipsum dolor, 25, Himara
                    </li>
                    <li>
                      <i class="fa fa-phone" aria-hidden="true"></i>
                      Phone: +1 888 123 4567
                    </li>
                    <li>
                      <i class="fa fa-fax"></i>
                      Fax: +1 888 123 4567
                    </li>
                    <li>
                      <i class="fa fa-globe"></i>
                      Web: www.hotelhimara.com
                    </li>
                    <li>
                      <i class="fa fa-envelope"></i>
                      Email:
                      <a href="mailto:info@site.com">contact@hotelhimara.com</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- SUBFOOTER -->
      <div class="subfooter">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <div class="copyrights">&copy; 2018 Hotel Himara. Designed by
                <a href="https://eagle-themes.com/" target="_blank">Eagle-Themes</a>.
              </div>
            </div>
            <div class="col-md-6">
              <div class="social-media">
                <a class="facebook" data-original-title="Facebook" data-toggle="tooltip" href="#">
                  <i class="fa fa-facebook"></i>
                </a>
                <a class="twitter" data-original-title="Twitter" data-toggle="tooltip" href="#">
                  <i class="fa fa-twitter"></i>
                </a>
                <a class="googleplus" data-original-title="Google Plus" data-toggle="tooltip" href="#">
                  <i class="fa fa-google-plus"></i>
                </a>
                <a class="pinterest" data-original-title="Pinterest" data-toggle="tooltip" href="#">
                  <i class="fa fa-pinterest"></i>
                </a>
                <a class="linkedin" data-original-title="Linkedin" data-toggle="tooltip" href="#">
                  <i class="fa fa-linkedin"></i>
                </a>
                <a class="youtube" data-original-title="Youtube" data-toggle="tooltip" href="#">
                  <i class="fa fa-youtube"></i>
                </a>
                <a class="instagram" data-original-title="Instagram" data-toggle="tooltip" href="#">
                  <i class="fa fa-instagram"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
  </div>

  <div class="notification"></div>
  <!-- ========== BACK TO TOP ========== -->
  <div class="back-to-top">
    <i class="fa fa-angle-up" aria-hidden="true"></i>
  </div>
