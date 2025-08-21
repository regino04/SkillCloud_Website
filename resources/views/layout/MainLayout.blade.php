<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Customer Support</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">

  <style>
    /* Category colors */


    .container-card-footer {
      background-color: #24bdf0;
      height: 895px;
      margin: auto;

      background-image: url('background/background-footer.png');
      background-size: cover;
      background-position: center;

    }


    .footer-container {
      display: flex;
      justify-content: space-between;
      flex-wrap: wrap;
      gap: 45px;

      width: 80%;
      margin: auto;

      /* Centers it horizontally */
    }



    .footer-col h4 {
      margin-bottom: 10px;
      color: #000080;
      font-size: 16px;
      font-weight: 500;
      font-family: 'Parkin Sans', sans-serif;

    }

    .footer-col label {
      margin-bottom: 10px;
      color: #000080;
      font-size: 16px;
      font-weight: 500;
      font-family: 'Parkin Sans', sans-serif;

    }

    .footer-col ul {
      list-style: none;
      padding: 0;
      margin: 0;
    }

    .footer-col ul li {
      margin-bottom: 5px;
      color: #000000;
      font-size: 16px;
      font-family: 'Parkin Sans', sans-serif;
      line-height: 1.5;
    }


    .talk-btn {
      background-color: #0d2432;
      /* Navy blue */
      color: white;
      border-radius: 30px;
      /* Mas pill-shaped */
      padding: 8px 16px;
      width: 150px;
      height: 50px;
      text-align: center;
      transition: all 0.2s ease-in-out;
      display: flex;
      justify-content: center;
      align-items: center;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.15);
    }

    .talk-btn:hover {
      background-color: #003366;
      /* Mas bright na navy */
      transform: translateY(-2px);
      box-shadow: 0 6px 10px rgba(0, 0, 0, 0.25);
      text-decoration: none;
      color: #fff;
    }

    .talent-btn {
      background-color: #0d2432;
      /* Navy blue */
      color: white;
      border-radius: 30px;
      /* Mas pill-shaped */
      padding: 8px 16px;
      width: 211px;
      height: 50px;
      text-align: center;
      transition: all 0.2s ease-in-out;
      display: flex;
      justify-content: center;
      align-items: center;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.15);
    }

    .talent-btn:hover {
      background-color: #003366;
      /* Mas bright na navy */
      transform: translateY(-2px);
      box-shadow: 0 6px 10px rgba(0, 0, 0, 0.25);
      text-decoration: none;
      color: #fff;
    }

    .nav-link {
      position: relative;
      color: #000000;
      transition: color 0.3s ease;
      font-weight: 600;
    }

    .nav-link::after {
      content: "";
      position: absolute;
      left: 0;
      bottom: 0;
      height: 3px;
      width: 0;
      background-color: #007bff;
      transition: width 0.3s ease;
    }

    /* Dating active animation — ngayon nasa not active hover */
    .nav-link:not(.active):hover::after {
      width: 100%;
    }

    /* Dating hover animation — ngayon nasa active */
    .nav-link.active::after {
      width: 100%;
      background-color: #ff6600;
      /* pwede mong palitan */
    }

    /* Kapag active pero hindi naka-hover, bawasan mo yung effect para kabaligtaran */
    .nav-link.active:hover::after {
      width: 0;
    }

    .info h4 {

      font-family: 'Poppins', sans-serif;
      font-weight: 700;
      font-size: 16px;
      color: white;

    }

    .info p {

      font-family: 'Poppins', sans-serif;
      font-weight: 600;
      font-size: 16px;
      color: white;

    }

    .card .info {
      position: absolute;
      bottom: 10px;
      left: 10px;
      color: #fff;
      padding: 8px;

    }

    .container.card-image {

      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      gap: 40px;
    }

    .cards {
      display: flex;

      align-items: flex-end;
      position: relative;
    }

    .card {
      position: relative;
      border-radius: 14px;
      overflow: hidden;
      width: 230px;
      height: 310px;
      box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15);
      transition: transform 0.6s ease;
    }



    /* Initial state: closed */
    .card.left {

      z-index: 1;
      margin-right: -150px;
      height: 270px;
      width: 270px;

    }

    .card.center {

      height: 320px;
      width: 320px;
      z-index: 2;
    }

    .card.right {
      transform: translateX(0px) rotate(8deg);
      z-index: 1;
      height: 350px;
      width: 300px;
      margin-left: -150px;
    }


    .top-rated-specialist {
      font-weight: 500;
      font-family: 'Parkin Sans', sans-serif;
      font-size: 12px;
      color: #000080;
      background-color: white;
      width: 120px;
      text-align: center;
      border-radius: 16px;
      position: relative;
      top: 30px;
      left: 30px;
    }
  </style>
  <style>
    html,
    body {
      margin: 0;
      padding: 0;
      width: 100%;
      max-width: 100%;
      
      /* alisin horizontal scroll */
    }

    @media (max-width: 768px) {

      
      .container-card-footer {
        height: 750px;



      }



      /* Navbar items stack vertically */
      .navbar-nav {
        flex-direction: column !important;
        gap: 10px;
        align-items: flex-start !important;
        justify-content: flex-start !important;
        height: 100vh;
        margin-top: 20px;
        margin-left: 10px;
      }

      /* Buttons full-width */
      .talk-btn,
      .talent-btn {
        width: 100% !important;
        max-width: 320px;
        margin: auto;
      }

      /* Footer stacks instead of row */
      .footer-container {
        flex-direction: column;
        align-items: center;
        text-align: center;
        gap: 25px;
        width: 100% !important;
      }

      .footer-col {
        max-width: 100% !important;
      }

      /* Card section stack */


      .container.card-image {

        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        gap: 2px;
      }



      .card {


        margin-top: 50px;
      }

      .card.center {
        max-width: 180px;
        max-height: 270px;

      }

      .card.left {

        z-index: 1;
        margin-right: -150px;
        max-width: 120px;
        max-height: 180px;


      }

      .card.right {
        transform: translateX(0px) rotate(8deg);
        z-index: 1;
        max-width: 120px;
        max-height: 180px;

        margin-left: -150px;
      }

      .top-rated-specialist {
        font-weight: 500;
        font-family: 'Parkin Sans', sans-serif;
        font-size: 12px;
        color: #000080;
        background-color: white;
        width: 120px;
        text-align: center;
        border-radius: 16px;
        position: relative;
        top: 10px;
        left: 10px;
      }

      .info h4 {

        font-family: 'Poppins', sans-serif;
        font-weight: 500;
        font-size: 8px;
        color: white;
        width: auto;
        margin-left: -15px;
        margin-bottom: -1px;
      }

      .info p {

        font-family: 'Poppins', sans-serif;
        font-weight: 500;
        font-size: 8px;
        width: 200px;
        color: white;
        margin-left: -15px;
        margin-bottom: -10px;

      }

      /* Text adjustments */
      .custom-h2 {
        font-size: 20px !important;
        margin: 10px 0 !important;
        text-align: center;
      }
    }

    body {
      margin: auto;
      align-items: center;
      display: block;

    }
  </style>
</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top shadow-sm">
    <div class="container">

      <!-- Logo -->
      <a class="navbar-brand d-lg-none" href="#">
        <img src="logo/skill-cloud-logo.png" style="height: 40px;" alt="">
      </a>

      <!-- Toggle Button (shows on mobile) -->
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Collapsible Menu -->
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav w-100 d-flex align-items-center justify-content-between">

          <!-- Logo (for desktop view) -->
          <li class="d-none d-lg-block" style="margin-right:20px;margin-left:-20px;">
            <img src="logo/skill-cloud-logo.png" style="height: 40px;" alt="">
          </li>

          <!-- Nav Items -->
          <li class="nav-item"><a class="nav-link active" href="#">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Our Story</a></li>
          <li class="nav-item"><a class="nav-link" href="#">What We Do</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Industries</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Success Stories</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Pricing Plan</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Join our Team</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Blog</a></li>

          <!-- Let's Talk Button -->
          <li class="mt-2 mt-lg-0" style="margin-left:20px;margin-right:-20px;">
            <label class="talk-btn" style="font-weight:600; font-family:'Parkin Sans', sans-serif; cursor:pointer;">
              Let's Talk &ensp; <i class="bi bi-hand-index-thumb-fill"></i>
            </label>
          </li>
        </ul>
      </div>
    </div>
  </nav>



  {{-- main --}}
  @yield('content')


  <div class="container-card-footer">
    <br>
    <br>
    <br>
    <div class="container card-image">



      <h2 class="custom-h2" style="font-weight:400;color:white;font-family:  'Poppins', sans-serif">Get started with Skill Cloud…</h2>
      <h2 class="custom-h2" style="font-weight:800;color:white;font-family:  'Poppins', sans-serif">Your workforce multiplier™!</h2>
      <h2 class="custom-h2" style="font-weight:600;color:white;font-family:  'Poppins', sans-serif">Discover a smarter</h2>
      <h2 class="custom-h2" style="margin:-50px;font-weight:600;color:#001f3f;">faster way to hire.</h2><br>
      <label class="talent-btn" style="font-weight:600; font-family:'Parkin Sans', sans-serif; cursor:pointer;">
        <!-- Let's Talk <img style="width: 30px; foreground-color: white;" src="https://cdn.prod.website-files.com/67ba900d714c1b6114110de9/6835614e4c0ba387ea02a92a_0f06c1fe3c73f85430f7f71c416e7b17_click-tap.svg" alt=""> -->
        Find your talent &ensp; <i class="bi bi-emoji-smile"></i></i>
      </label>

      <div class="image-card">
        <div class="cards">
          <!-- Left Card -->
          <div class="card left"
            style="
            background-image: url('image/footer/left-image.png');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;">

            <div class="info">
              <h4>Jacob Galang</h4>
              <p>Social Media Manager</p>
            </div>

          </div>

          <!-- Center Card -->
          <div class="card center" style="
            background-image: url('image/footer/center-image.png');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;">
            <label class="top-rated-specialist"

              for="">Top rated specialist</label>
            <div class="info">
              <h4>Hailey Nicolas</h4>
              <p>Marketing Operations Manager</p>
            </div>
          </div>

          <!-- Right Card -->
          <div class="card right" style="
            background-image: url('image/footer/right-image.png');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;">

            <div class="info">
              <h4>Ysanne Villarin</h4>
              <p>Marketing Specialist</p>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>





  <script>
    window.addEventListener("scroll", function() {
      const cards = document.querySelector(".cards");
      const rect = cards.getBoundingClientRect();
      const windowHeight = window.innerHeight;

      // kalkulahin kung gaano kalaki ang nakikita sa screen
      let visible = 1 - Math.abs(rect.top + rect.height / 2 - windowHeight / 2) / (windowHeight / 2);
      let progress = Math.min(Math.max(visible, 0), 1);

      const left = document.querySelector(".card.left");
      const right = document.querySelector(".card.right");

      if (rect.top <= windowHeight / 2) {
        // kapag lumagpas na sa kalahati ng screen pataas → lock sa final form
        left.style.transform = `translateX(${-120}px) rotate(${-4}deg)`;
        right.style.transform = `translateX(${120}px) rotate(${4}deg)`;
      } else {
        // nasa baba pa ng kalahati → normal animation
        left.style.transform = `translateX(${-progress * 140}px) rotate(${-3 - progress}deg)`;
        right.style.transform = `translateX(${progress * 140}px) rotate(${3 + progress}deg)`;
      }
    });
  </script>

  <footer style="max-width: 1241px;margin:auto;margin-bottom:50px;margin-top:50px;" id="footer"
    class="footer light-background">

    <div class="footer-container">
      <section data-aos="fade-up" data-aos-delay="0" class="footer-col" style="max-width: 99px;"
        aria-labelledby="nav-title">
        <label id="nav-title">Navigate</label>
        <ul>
          <li>Home</li>
          <li>About us</li>
          <li>Our team</li>
          <li>Services</li>
          <li>Pricing</li>
          <li>Testimonials</li>
        </ul>
      </section>

      <section data-aos="fade-up" data-aos-delay="200" class="footer-col" style="max-width: 92px;"
        aria-labelledby="follow-title">
        <h4 id="follow-title">Follow</h4>
        <ul>
          <li>Instagram</li>
          <li>Facebook</li>
          <li>Linkedin</li>
          <li>YouTube</li>
          <li>X</li>
        </ul>
      </section>

      <section data-aos="fade-up" data-aos-delay="400" class="footer-col" style="max-width: 181px;"
        aria-labelledby="contact-title">
        <h4 id="contact-title">Contact</h4>
        <ul>
          <li>Call Us: +(+61) 7 2146 9086</li>
          <li>Email Us: hi@skillcloud.au</li>
          <li>Customer Support</li>
        </ul>
      </section>

      <section data-aos="fade-up" data-aos-delay="600" class="footer-col" style="max-width: 181px;"
        aria-labelledby="visit-title">
        <h4 id="visit-title">Visit</h4>
        <ul>
          <li>Philippines:<br />
            Suite 4022, 168 Golden Rock Bldg. Salcedo St Makati City PH
          </li>
          <li>Australia:<br />
            2/290 Boundary Street<br />
            Spring Hill, Brisbane<br />
            4000 Queensland, Australia
          </li>
        </ul>
      </section>
    </div>

  </footer>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

  <!-- AOS JS -->
  <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
  <script>
    /*fadeup - down*/
    document.addEventListener("DOMContentLoaded", function() {
      setTimeout(function() {
        AOS.init({
          duration: 1500,
          once: true,
          offset: 0
        });
      }, 300);
    });
  </script>


  <!-- widgettalkto -->
  <!--Start of Tawk.to Script-->
  <script type="text/javascript">
    var Tawk_API = Tawk_API || {},
      Tawk_LoadStart = new Date();
    (function() {
      var s1 = document.createElement("script"),
        s0 = document.getElementsByTagName("script")[0];
      s1.async = true;
      s1.src = 'https://embed.tawk.to/68a563f16bf461191e5ce29a/1j330spr8';
      s1.charset = 'UTF-8';
      s1.setAttribute('crossorigin', '*');
      s0.parentNode.insertBefore(s1, s0);
    })();
  </script>
  <!--End of Tawk.to Script-->
</body>

</html>