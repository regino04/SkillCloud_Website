<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Skill Cloud</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <!-- <link href="Kelly/assets/img/favicon.png" rel="icon">
    -->

  <link rel="icon" href="/logo/logo.jpg" type="image/jpeg">

  <link href="Kelly/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="Kelly/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="Kelly/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="Kelly/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="Kelly/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="Kelly/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="Kelly/assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Kelly
  * Template URL: https://bootstrapmade.com/kelly-free-bootstrap-cv-resume-html-template/
  * Updated: Aug 07 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->

  <style>
    .footer-container {
      display: flex;
      justify-content: space-between;
      flex-wrap: wrap;
      gap: 20px;
      max-width: 1280px;
      margin: 0 auto;
      /* Centers it horizontally */
    }

    .footer-col {
      flex: 1;
      min-width: 200px;
    }

    .footer-col h4 {
      margin-bottom: 10px;
    }

    .footer-col ul {
      list-style: none;
      padding: 0;
      margin: 0;
    }

    .footer-col ul li {
      margin-bottom: 5px;
    }


  </style>


</head>

<body class="index-page">

  <header id="header" class="header d-flex align-items-center light-background sticky-top">
    <div class="container-fluid position-relative d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center me-auto me-xl-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="Kelly/assets/img/logo.png" alt=""> -->
        <h1 class="sitename">Kelly</h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="/" class="active">Home</a></li>
          <li><a href="about.html">About</a></li>
          <li><a href="resume.html">Resume</a></li>
          <li><a href="services.html">Services</a></li>
          <li><a href="portfolio.html">Portfolio</a></li>
          <li class="dropdown"><a href="#"><span>Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              <li><a href="#">Dropdown 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                <ul>
                  <li><a href="#">Deep Dropdown 1</a></li>
                  <li><a href="#">Deep Dropdown 2</a></li>
                  <li><a href="#">Deep Dropdown 3</a></li>
                  <li><a href="#">Deep Dropdown 4</a></li>
                  <li><a href="#">Deep Dropdown 5</a></li>
                </ul>
              </li>
              <li><a href="#">Dropdown 2</a></li>
              <li><a href="#">Dropdown 3</a></li>
              <li><a href="#">Dropdown 4</a></li>
            </ul>
          </li>
          <li><a href="contact.html">Contact</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      <div class="header-social-links">
        <a href="#" class="twitter"><i class="bi bi-twitter-x"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
      </div>

    </div>
  </header>

  <main class="main">

    {{-- main --}}
    @yield('content')

  </main>

  <footer id="footer" class="footer light-background">

    <div class="footer-container">
      <section class="footer-col" aria-labelledby="nav-title">
        <h4 id="nav-title">Navigate</h4>
        <ul>
          <li>Home</li>
          <li>About us</li>
          <li>Our team</li>
          <li>Services</li>
          <li>Pricing</li>
          <li>Testimonials</li>
        </ul>
      </section>

      <section class="footer-col" aria-labelledby="follow-title">
        <h4 id="follow-title">Follow</h4>
        <ul>
          <li><a href="#">Instagram</a></li>
          <li><a href="#">Facebook</a></li>
          <li><a href="#">Linkedin</a></li>
          <li><a href="#" style="color:#6eaecf;">YouTube</a></li>
          <li>X</li>
        </ul>
      </section>

      <section class="footer-col" aria-labelledby="contact-title">
        <h4 id="contact-title">Contact</h4>
        <ul>
          <li>Call Us: +(+61) 7 2146 9086</li>
          <li>Email Us: hi@skillcloud.au</li>
          <li>Customer Support</li>
        </ul>
      </section>

      <section class="footer-col" aria-labelledby="visit-title">
        <h4 id="visit-title">Visit</h4>
        <ul>
          <li><strong>Philippines:</strong><br />
            Suite 4022, 168 Golden Rock Bldg. Salcedo St Makati City PH
          </li>
          <li><strong>Australia:</strong><br />
            2/290 Boundary Street<br />
            Spring Hill, Brisbane<br />
            4000 Queensland, Australia
          </li>
        </ul>
      </section>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="Kelly/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="Kelly/assets/vendor/php-email-form/validate.js"></script>
  <script src="Kelly/assets/vendor/aos/aos.js"></script>
  <script src="Kelly/assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="Kelly/assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="Kelly/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="Kelly/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="Kelly/assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="Kelly/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>

  <!-- Main JS File -->
  <script src="Kelly/assets/js/main.js"></script>

</body>

</html>