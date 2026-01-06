<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link
      href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap"
      rel="stylesheet"
    />

    <title>@yield('title', 'LUXEFITS')</title>

    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/font-awesome.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/templatemo-hexashop.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl-carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/lightbox.css') }}">
  </head>

  <body>
    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
      <div class="jumper">
        <div></div>
        <div></div>
        <div></div>
      </div>
    </div>
    <!-- ***** Preloader End ***** -->

    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <nav class="main-nav">
              <!-- ***** Logo Start ***** -->
              <a href="{{ url('/') }}" class="logo">
                <img src="{{ asset('assets/images/image_2025-06-29_114859871 (1).png') }}" />
              </a>
              <!-- ***** Logo End ***** -->
              <!-- ***** Menu Start ***** -->
              <ul class="nav">
                <li class="scroll-to-section">
                  <a href="{{ url('/') }}" class="active">Home</a>
                </li>
                <li class="scroll-to-section"><a href="{{ url('/') }}#men">Men's</a></li>
                <li class="scroll-to-section"><a href="{{ url('/') }}#women">Women's</a></li>
                <li class="scroll-to-section"><a href="{{ url('/') }}#kids">Kid's</a></li>
                <li class="submenu">
                  <a href="javascript:;">Pages</a>
                  <ul>
                    <li><a href="{{ url('/about') }}">About Us</a></li>
                    <li><a href="{{ url('/products') }}">Products</a></li>
                    <li><a href="{{ url('/single-product') }}">Single Product</a></li>
                    <li><a href="{{ url('/contact') }}">Contact Us</a></li>
                  </ul>
                </li>

                <li class="scroll-to-section">
                  <a href="{{ url('/') }}#explore">Explore</a>
                </li>
              </ul>
              <a class="menu-trigger">
                <span>Menu</span>
              </a>
              <!-- ***** Menu End ***** -->
            </nav>
          </div>
        </div>
      </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <!-- This is where the unique content of each page will be loaded -->
    <main>
        @yield('content')
    </main>

    <!-- ***** Subscribe Area Starts ***** -->
    <div class="subscribe">
        <!-- ... The subscribe section is common and can stay in the layout ... -->
        <div class="subscribe">
      <div class="container">
        <div class="row">
          <div class="col-lg-8">
            <div class="section-heading">
              <h2>By Subscribing To Our Newsletter You Can Get 30% Off</h2>
              <span
                >Details to details is what makes LUXE FITS different from the
                other themes.</span
              >
            </div>
            <form id="subscribe" action="" method="get">
              <div class="row">
                <div class="col-lg-5">
                  <fieldset>
                    <input
                      name="name"
                      type="text"
                      id="name"
                      placeholder="Your Name"
                      required=""
                    />
                  </fieldset>
                </div>
                <div class="col-lg-5">
                  <fieldset>
                    <input
                      name="email"
                      type="text"
                      id="email"
                      pattern="[^ @]*@[^ @]*"
                      placeholder="Your Email Address"
                      required=""
                    />
                  </fieldset>
                </div>
                <div class="col-lg-2">
                  <fieldset>
                    <button
                      type="submit"
                      id="form-submit"
                      class="main-dark-button"
                    >
                      <i class="fa fa-paper-plane"></i>
                    </button>
                  </fieldset>
                </div>
              </div>
            </form>
          </div>
          <div class="col-lg-4">
            <div class="row">
              <div class="col-6">
                <ul>
                  <li>
                    Store Location:<br /><span
                      >144/2 Kaduwela Road, Malabe.</span
                    >
                  </li>
                  <li>Phone:<br /><span> 0114512256</span></li>
                  <li>
                    Office Location:<br /><span
                      >144/2 Kaduwela Road, Malabe.</span
                    >
                  </li>
                </ul>
              </div>
              <div class="col-6">
                <ul>
                  <li>
                    Work Hours:<br /><span>07:30 AM - 9:30 PM Daily</span>
                  </li>
                  <li>Email:<br /><span>LUXEFITS@gmail.com</span></li>
                  <li>
                    Social Media:<br /><span
                      ><a href="#">Facebook</a><br />
                      <a href="#">Instagram</a><br />
                      <a href="#">Linkedin</a></span
                    >
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
    <!-- ***** Subscribe Area Ends ***** -->

    <!-- ***** Footer Start ***** -->
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-lg-3">
            <div class="first-item">
              <div class="logo">
                <img src="{{ asset('assets/images/image_2025-06-29_114859871 (1).png') }}" />
              </div>
              <ul>
                <li><a href="#">144/2 Kaduwela Road, Malabe. </a></li>
                <li><a href="#">LUXEFITS@gmail.com</a></li>
                <li><a href="#"> 0114512256</a></li>
              </ul>
            </div>
          </div>
          <div class="col-lg-3">
            <h4>Shopping &amp; Categories</h4>
            <ul>
              <li><a href="#">Men’s Shopping</a></li>
              <li><a href="#">Women’s Shopping</a></li>
              <li><a href="#">Kid's Shopping</a></li>
            </ul>
          </div>
          <div class="col-lg-3">
            <h4>Useful Links</h4>
            <ul>
              <li><a href="{{ url('/') }}">Homepage</a></li>
              <li><a href="{{ url('/about') }}">About Us</a></li>
              <li><a href="#">Help</a></li>
              <li><a href="{{ url('/contact') }}">Contact Us</a></li>
            </ul>
          </div>
          <div class="col-lg-3">
            <h4>Help &amp; Information</h4>
            <ul>
              <li><a href="#">Help</a></li>
              <li><a href="#">FAQ's</a></li>
              <li><a href="#">Shipping</a></li>
              <li><a href="#">Tracking ID</a></li>
            </ul>
          </div>
          <div class="col-lg-12">
            <div class="under-footer">
              <p>
                Copyright © 2025 LUXE FITS Co., Ltd. All Rights Reserved.
              </p>
              <ul>
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </footer>

    <!-- jQuery -->
    <script src="{{ asset('assets/js/jquery-2.1.0.min.js') }}"></script>
    <!-- Bootstrap -->
    <script src="{{ asset('assets/js/popper.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <!-- Plugins -->
    <script src="{{ asset('assets/js/owl-carousel.js') }}"></script>
    <script src="{{ asset('assets/js/accordions.js') }}"></script>
    <script src="{{ asset('assets/js/datepicker.js') }}"></script>
    <script src="{{ asset('assets/js/scrollreveal.min.js') }}"></script>
    <script src="{{ asset('assets/js/waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('assets/js/imgfix.min.js') }}"></script>
    <script src="{{ asset('assets/js/slick.js') }}"></script>
    <script src="{{ asset('assets/js/lightbox.js') }}"></script>
    <script src="{{ asset('assets/js/isotope.js') }}"></script>
    <!-- Global Init -->
    <script src="{{ asset('assets/js/custom.js') }}"></script>
  </body>
</html>
