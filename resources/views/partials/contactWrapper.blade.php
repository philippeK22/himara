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
        <h1>CONTACT</h1>
        <ol class="breadcrumb">
          <li>
            <a href="index.html">Home</a>
          </li>
          <li>Contact</li>
        </ol>
      </div>
    </div>
  </div>
  <!-- ========== MAIN ========== -->
  <main class="contact-page">
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <div class="section-title">
            <h4>CONTACT US</h4>
            <p class="section-subtitle">Let’s Talk</p>
          </div>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus sit, fugiat at in assumenda corrupti autem iste eveniet eaque vitae beatae tenetur, voluptatem eius. Numquam.</p>
          <!-- CONTACT FORM -->
          <form id="contact-form" class="contact-form">
            <div class="form-group">
              <input class="form-control" name="name" placeholder="Name" type="text">
            </div>
            <div class="form-group">
              <input class="form-control" name="email" placeholder="Email" type="email">
            </div>
            <div class="form-group">
              <input class="form-control" name="phone" placeholder="Phone" type="text">
            </div>
            <div class="form-group">
              <input class="form-control" name="subject" placeholder="Subject" type="text">
            </div>
            <div class="form-group">
              <textarea class="form-control" name="message" placeholder="Message"></textarea>
            </div>
            <div class="form-group">
              <button class="btn mt30">SEND YOUR MESSAGE</button>
            </div>
          </form>
        </div>
        <div class="col-md-4">
          <div class="sidebar">
            <div class="google-map">
              <div class="toggle-streetview" id="openStreetView">
                <i class="fa fa-street-view" aria-hidden="true"></i>
              </div>
              <div id="map-canvas"></div>
            </div>
            <div class="contact-details mt75">
              <div class="contact-info">
                <ul>
                  <li>
                    <a href="#">
                      <i class="fa fa-map-marker"></i>Lorem ipsum dolor, 25, Himara</a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-envelope"></i>contact@hotelhimara.com</a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-phone"></i>+1 888 123 4567</a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-fax"></i>+1 888 123 4567</a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-globe"></i>www.hotelhimara.com</a>
                  </li>
                </ul>
              </div>
              <div class="social-media mt50">
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
                <a class="tripadvisor" data-original-title="Tripadvisor" data-toggle="tooltip" href="#">
                  <i class="fa fa-tripadvisor"></i>
                </a>
              </div>
            </div>
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
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim, velit placeat assumenda incidunt dolorem aliquam!</p>
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
                    Lorem ipsum dolor, 25, Himara</li>
                  <li>
                    <i class="fa fa-phone" aria-hidden="true"></i>
                    Phone: +1 888 123 4567
                  </li>
                  <li>
                    <i class="fa fa-fax"></i>
                    Fax: +1 888 123 4567</li>
                  <li>
                    <i class="fa fa-globe"></i>
                    Web: www.hotelhimara.com</li>
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
              <a href="https://eagle-themes.com/" target="_blank">Eagle-Themes</a>.</div>
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
<!-- ========== CONTACT NOTIFICATION ========== -->
<div id="contact-notification" class="notification fixed"></div>
<!-- ========== BACK TO TOP ========== -->
<div class="back-to-top">
  <i class="fa fa-angle-up" aria-hidden="true"></i>
</div>
