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
    .category-card {
      border: 2px solid transparent;
      border-radius: 10px;
      padding: 20px;
      transition: all 0.3s ease;
      background-color: #fff;
      display: flex;
      align-items: center;
      gap: 15px;

    }

    .category-icon {
      width: 50px;
      height: 50px;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      color: #fff;
      font-size: 1.5rem;
    }


    /* Category colors */
    .button1 {
      border-color: #00a28b;
    }

    .button1:hover {
      background-color: #00a28b;
      /* kapareho ng category-icon */
      transform: translateY(-3px);
      transition: all 0.3s ease;
      color: #fff;
      /* para readable ang text */
    }

    .button1 .category-icon {
      background-color: #00a28b;
    }

    .button2 {
      border-color: #0071ce;
    }

    .button2:hover {
      background-color: #0071ce;
      /* kapareho ng category-icon */
      transform: translateY(-3px);
      transition: all 0.3s ease;
      color: #fff;
      /* para readable ang text */
    }

    .button2 .category-icon {
      background-color: #0071ce;
    }

    .button3 {
      border-color: #00b2b2;
    }

    .button3:hover {
      background-color: #00b2b2;
      /* kapareho ng category-icon */
      transform: translateY(-3px);
      transition: all 0.3s ease;
      color: #fff;
      /* para readable ang text */
    }

    .button3 .category-icon {
      background-color: #00b2b2;
    }

    .button4 {
      border-color: #d1422f;
    }

    .button4:hover {
      background-color: #d1422f;
      /* kapareho ng category-icon */
      transform: translateY(-3px);
      transition: all 0.3s ease;
      color: #fff;
      /* para readable ang text */
    }

    .button4 .category-icon {
      background-color: #d1422f;
    }

    .button5 {
      border-color: #7a2c87;
    }

    .button5:hover {
      background-color: #7a2c87;
      /* kapareho ng category-icon */
      transform: translateY(-3px);
      transition: all 0.3s ease;
      color: #fff;
      /* para readable ang text */
    }

    .button5 .category-icon {
      background-color: #7a2c87;
    }

    .button6 {
      border-color: #b33a9b;
    }

    .button6:hover {
      background-color: #b33a9b;
      /* kapareho ng category-icon */
      transform: translateY(-3px);
      transition: all 0.3s ease;
      color: #fff;
      /* para readable ang text */
    }

    .button6 .category-icon {
      background-color: #b33a9b;
    }

    details {

      margin-bottom: 20px;
      padding: 20px;
      border: 1px solid #ccc;
      border-radius: 5px;
      font-family: 'Poppins', sans-serif;
      /* New font */
      overflow: hidden;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.10);


    }

    details[open] summary~* {
      animation: detailsOpen 2s ease-in-out;
    }



    @keyframes detailsOpen {
      from {
        opacity: 0;
        transform: translateY(-5px);
      }

      to {
        opacity: 1;
        transform: translateY(0);
      }
    }


    summary {
      cursor: pointer;
      font-weight: bold;
      display: flex;
      justify-content: space-between;
      align-items: center;
      font-size: 20px;
      margin-bottom: 20px;
    }



    /* Remove default arrow */
    summary::-webkit-details-marker {
      display: none;
    }

    summary::marker {
      display: none;
    }

    /* Custom arrow pointing down */
    summary::after {
      content: "▼";
      /* down arrow */
      transition: transform 0.3s ease;
    }

    /* Rotate arrow up when open */
    details[open] summary::after {
      transform: rotate(180deg);
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
  </style>
</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top shadow-sm">

    <div class="container" style="min-width: 1280px;">


      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav w-100 d-flex align-items-center justify-content-between">

          <li style="margin-right: 20px;margin-left: -20px;">
            <img src="logo/skill-cloud-logo.png" style="height: 40px;" alt="">
          </li>
          <!-- <img src="/logo/skill-cloud-logo.png" style="height: 50px;" alt=""> -->
          <!-- <img style="height: 50px;" src="https://cdn.prod.website-files.com/67ba900d714c1b6114110de9/68343bcacbe2a49dc010957e_cce434c5ffc3be4fa8cd0852bc1f3cb1_logo.svg" loading="lazy" alt="Skill Cloud" height="Auto" class="image-navbar-logo"> -->
          <li class="nav-item">
            <a class="nav-link active" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Our Story</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">What We Do</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">industries</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Success Stories</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Pricing Plan</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Join our Team</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Blog</a>
          </li>
          <li style="margin-left: 20px;margin-right: -20px;">
            <label class="talk-btn" style="font-weight:600; font-family:'Parkin Sans', sans-serif; cursor:pointer;">
              <!-- Let's Talk <img style="width: 30px; foreground-color: white;" src="https://cdn.prod.website-files.com/67ba900d714c1b6114110de9/6835614e4c0ba387ea02a92a_0f06c1fe3c73f85430f7f71c416e7b17_click-tap.svg" alt=""> -->
              Let's Talk &ensp; <i class="bi bi-hand-index-thumb-fill"></i>
            </label>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Hero Section -->
  <!-- <section class="py-5" style="background: linear-gradient(135deg, #00a28b, #0071ce); color: #fff; height:300px"> -->
  <section " class=" py-5" style="background-image: url('banner/banner.png');background-size: cover; 
 color: #fff; height:300px">

    <div class="container text-center">
      <br><br><br><br><br><br>
      <h1 style="background-color: rgba(255, 255, 255, 0.8); 
             color: #222; 
             font-weight: bold; 
             font-size: 28px; 
             width: 450px; 
             height: 80px;  
             display: flex; 
             justify-content: center; 
             align-items: center; 
             text-align: center; 
             margin: auto;
             border-radius: 8px;">
        How can we help you?
      </h1> <br>

      <div hidden class="input-group w-20 mx-auto shadow rounded-pill overflow-hidden"
        style="max-width: 550px; height: 40px;">
        <input type="text" class="form-control border-0 py-1 px-3" placeholder="Search articles" style="height: 100%;">
        <button class="btn btn-dark d-flex align-items-center justify-content-center px-3" style="height: 100%;">
          <i class="bi bi-search fs-6"></i>
        </button>
      </div>

    </div>
  </section>

  <!-- Categories -->
  <section class="py-5" style="max-width: 1000px;margin:auto">
    <div class="container">
      <div class="row g-4">
        <div class="col-md-6" data-aos="fade-left">
          <div class="category-card button1" style="cursor: pointer;">
            <div class="category-icon"><i class="bi bi-headset"></i></div>
            <div>
              <h5 class="mb-1">Customer Service</h5>
              <p class="mb-0">Exceptional customer support.</p>
            </div>
          </div>
        </div>

        <div class="col-md-6" data-aos="fade-left">
          <div class="category-card button2" style="cursor: pointer;">
            <div class="category-icon"><i class="bi bi-lightbulb"></i></div>
            <div>
              <h5 class="mb-1">Entrepreneurship</h5>
              <p class="mb-0">Creating and managing a business for profit.</p>
            </div>
          </div>
        </div>

        <div class="col-md-6" data-aos="fade-left">
          <div class="category-card button3" style="cursor: pointer;">
            <div class="category-icon"><i class="bi bi-people"></i></div>
            <div>
              <h5 class="mb-1">Business Management</h5>
              <p class="mb-0">Overseeing resources and personnel efficiently.</p>
            </div>
          </div>
        </div>

        <div class="col-md-6" data-aos="fade-left">
          <div class="category-card button4" style="cursor: pointer;">
            <div class="category-icon"><i class="bi bi-megaphone"></i></div>
            <div>
              <h5 class="mb-1">Marketing Strategies</h5>
              <p class="mb-0">Promoting products to target audiences.</p>
            </div>
          </div>
        </div>

        <div class="col-md-6" data-aos="fade-left">
          <div class="category-card button5" style="cursor: pointer;">
            <div class="category-icon"><i class="bi bi-cash-stack"></i></div>
            <div>
              <h5 class="mb-1">Financial Planning</h5>
              <p class="mb-0">Managing finances for future growth.</p>
            </div>
          </div>
        </div>

        <div class="col-md-6" data-aos="fade-left">
          <div class="category-card button6" style="cursor: pointer;">
            <div class="category-icon"><i class="bi bi-cart-check"></i></div>
            <div>
              <h5 class="mb-1">Sales Techniques</h5>
              <p class="mb-0">Persuadin g customers to buy products.</p>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section>
  <br><br>
  <div style="text-align: center;">
    <label data-aos="fade-up" for=""
      style="background-color: #ccc;color:#0071ce;  border-radius:16px;width: 100px;text-align:center">Benefits</label>
    <br><br>
    <h2 data-aos="fade-up">Frequently Asked Questions</h2>
    <label data-aos="fade-up">Your outsourcing questions, answered.</label>
    <br><br>
  </div>
  <div data-aos="fade-up" style="max-width: 1250px;margin:auto;margin-bottom:100px">

    <details data-aos="fade-up" class="floating-btn">
      <summary>How soon can I get started?</summary>
      <p class="paragraph-details">Within a week. That's the average time it takes to get you up and running outsourcing
        to the Philippines... most clients are rolling within the first few days.</p>
    </details>

    <details data-aos="fade-up">
      <summary>What happens if my Filipino hire suddenly stops showing up or quits unexpectedly?</summary>
      <p class="paragraph-details">Our 6 month replacement guarantee has you covered in case this happens (which is
        rare).</p>
      <p class="paragraph-details">If your hire ghosts you or leaves suddenly, we'll replace them immediately at no
        extra cost.</p>
    </details>

    <details data-aos="fade-up">
      <summary>What's the real cost difference compared to hiring locally, and are there any hidden fees?</summary>
      <p class="paragraph-details">You'll save 60–75% compared to equivalent Australian talent – a typical $90K
        Australian role costs about $25–35K through us.</p>
    </details>

    <details data-aos="fade-up">
      <summary>How do I communicate with my team?</summary>
      <p class="paragraph-details">Communication is dead simple. Your team connects through your existing platforms:
        Slack, Zoom, Microsoft, Google, or any tool in your stack.</p>
    </details>
    <details data-aos="fade-up">
      <summary>How fast can I really get matched with Filipino talent... what happens if your "48-hour" promise doesn’t
        work out?</summary>
      <p class="paragraph-details">Most matches happen within 48 hours, but complex roles might take up to a week. In
        any case, we only present pre-vetted candidates.</p>
    </details>

    <details data-aos="fade-up">
      <summary>Do I need to handle Filipino tax laws, payroll, or employment regulations myself?</summary>
      <p class="paragraph-details">Absolutely not. Your Filipino team member is technically employed by us in the
        Philippines, so you have ZERO administrative or legal headaches. You just pay one simple invoice.</p>
    </details>

    <details data-aos="fade-up">
      <summary>What industries do you serve?</summary>
      <p class="paragraph-details">Our outsourcing providers in Philippines have worked across industries like
        construction, accounting, education, SaaS, and eCommerce. Chances are, we can support you too!</p>
    </details>

    <details data-aos="fade-up">
      <summary>What about security & compliance?</summary>
      <p class="paragraph-details">Our outsourcing company maintains ironclad privacy (fully compliant) across all
        operations. Nothing stored onsite — we use Microsoft’s servers and services... same as you!</p>
    </details>

  </div>
  <div style="background-color: #24bdf0;height: 895px;width:100%">
    <br>
    <br>
    <br>
    <div class="container" style="display:flex; flex-direction: column;align-items:center;justify-content:center;gap: 40px;">

      <style>
        .custom-h2 {
          color: #fff;
          font-size: px;
          line-height: 1.2;
          font-family: 'Poppins', sans-serif;

        }
      </style>

      <h2 class="custom-h2" style="font-weight:400;">Get started with Skill Cloud…</h2>
      <h2 class="custom-h2" style="font-weight:800;">Your workforce multiplier™!</h2>
      <h2 class="custom-h2" style="font-weight:600;">Discover a smarter</h2>
      <h2 class="custom-h2" style="margin:-50px;font-weight:600;color:#001f3f;">faster way to hire.</h2><br>
      <label class="talent-btn" style="font-weight:600; font-family:'Parkin Sans', sans-serif; cursor:pointer;">
        <!-- Let's Talk <img style="width: 30px; foreground-color: white;" src="https://cdn.prod.website-files.com/67ba900d714c1b6114110de9/6835614e4c0ba387ea02a92a_0f06c1fe3c73f85430f7f71c416e7b17_click-tap.svg" alt=""> -->
        Find your talent &ensp; <i class="bi bi-emoji-smile"></i></i>
      </label>
      <style>
        .image-card {
          display: flex;
          justify-content: center;
          align-items: center;
       
        }

        .cards {
          display: flex;
          align-items: center;
          gap: 20px;
          position: relative;
        }

        .card {
          position: relative;
          border-radius: 14px;
          overflow: hidden;
          width: 230px;
          height: 310px;
          box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15);
          transition: transform 0.3s ease, z-index 0.3s ease;
        }

        .card img {
          width: 100%;
          height: 100%;
          object-fit: cover;
        }

        /* Info text inside card */
        .info {
          position: absolute;
          bottom: 15px;
          left: 15px;
          color: #fff;
          font-family: sans-serif;
        }

        .info h4 {
          margin: 0;
          font-size: 16px;
          font-weight: bold;
        }

        .info p {
          margin: 2px 0 0;
          font-size: 12px;
        }

        /* Badge */
        .badge {
          position: absolute;
          top: 12px;
          left: 12px;
          background: white;
          color: #333;
          font-size: 12px;
          padding: 4px 8px;
          border-radius: 12px;
          font-weight: 500;
        }

        /* Left tilt */
        .card.left {
          transform: rotate(-5deg) translateY(20px);
          z-index: 1;
        }

        /* Center card bigger & front */
        .card.center {
          width: 285px;
          height: 380px;
          z-index: 2;
        }

        /* Right tilt */
        .card.right {
          transform: rotate(5deg) translateY(20px);
          z-index: 1;
        }
      </style>
      <div class="image-card">
        <div class="cards">
          <!-- Left Card -->
          <div class="card left">
            <img src="https://cdn.prod.website-files.com/67ba900d714c1b6114110de9/67d092d443c5252a04041cab_Men%202.avif" alt="">
            <div class="info">
              <h4>Jacob Galang</h4>
              <p>Social Media Manager</p>
            </div>
          </div>

          <!-- Center Card -->
          <div class="card center">
            <img src="https://cdn.prod.website-files.com/67ba900d714c1b6114110de9/67d0960a606a8f3b733306af_3.avif" alt="">
            <div class="info">
              <h4>Hailey Nicolas</h4>
              <p>Marketing Operations Manager</p>
            </div>
          </div>

          <!-- Right Card -->
          <div class="card right">
            <img src="https://cdn.prod.website-files.com/67ba900d714c1b6114110de9/67d0ad27333d243098a7359a_4.avif" alt="">
            <div class="info">
              <h4>Sanine Villarin</h4>
              <p>Marketing Specialist</p>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
  <footer style="max-width: 1241px;margin:auto;margin-bottom:50px;margin-top:50px;" id="footer" class="footer light-background">

    <div class="footer-container">
      <section data-aos="fade-up" data-aos-delay="0" class="footer-col" style="max-width: 99px;" aria-labelledby="nav-title">
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

      <section data-aos="fade-up" data-aos-delay="200" class="footer-col" style="max-width: 92px;" aria-labelledby="follow-title">
        <h4 id="follow-title">Follow</h4>
        <ul>
          <li>Instagram</li>
          <li>Facebook</li>
          <li>Linkedin</li>
          <li>YouTube</li>
          <li>X</li>
        </ul>
      </section>

      <section data-aos="fade-up" data-aos-delay="400" class="footer-col" style="max-width: 181px;" aria-labelledby="contact-title">
        <h4 id="contact-title">Contact</h4>
        <ul>
          <li>Call Us: +(+61) 7 2146 9086</li>
          <li>Email Us: hi@skillcloud.au</li>
          <li>Customer Support</li>
        </ul>
      </section>

      <section data-aos="fade-up" data-aos-delay="600" class="footer-col" style="max-width: 181px;" aria-labelledby="visit-title">
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

  <script>
    document.querySelectorAll("details").forEach((targetDetail) => {
      targetDetail.addEventListener("toggle", () => {
        if (targetDetail.open) {
          document.querySelectorAll("details").forEach((detail) => {
            if (detail !== targetDetail) {
              detail.open = false; // close other details
            }
          });
        }
      });
    });
    document.querySelectorAll("details").forEach((el) => {
      el.addEventListener("toggle", function() {
        if (this.open) {
          let content = this.querySelectorAll(".paragraph-details");
          this.style.overflow = "hidden";
          this.animate(
            [{
                height: "0px",
                opacity: 0
              },
              {
                height: this.scrollHeight + "px",
                opacity: 1
              }
            ], {
              duration: 300,
              easing: "ease"
            }
          );
        }
      });
    });
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

  <!-- AOS JS -->
  <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
  <script>
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
</body>

</html>