<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Customer Support</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">

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
      margin: 10px 0;

      padding-left: 20px;
      padding-right: 20px;
      padding-top: 20px;
      padding-bottom: 20px;
      border: 1px solid #ccc;
      border-radius: 5px;
      font-family: 'Poppins', sans-serif;
      /* New font */
  overflow: hidden;

    }
    details[open] summary ~ * {
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

    .paragraph-details {
      margin-bottom: -15px;
      margin-top: 10px
    }

    summary {
      cursor: pointer;
      font-weight: bold;
      display: flex;
      justify-content: space-between;
      align-items: center;
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
  </style>
</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top shadow-sm"
    <div class="container">


    <div class="collapse navbar-collapse" id="navbarNav" style="max-width: 1280px; margin:auto;">>
      <ul class="navbar-nav w-100 justify-content-center gap-3">
        <img src="/logo/skill-cloud-logo.png" style="height: 50px;" alt="">

        <li class="nav-item">
          <a class="nav-link active" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Services</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
        </li>
      </ul>
    </div>
    </div>
  </nav>

  <!-- Hero Section -->
  <section class="py-5" style="background: linear-gradient(135deg, #00a28b, #0071ce); color: #fff; height:300px">
    <div class="container text-center">
      <br><br><br><br><br><br>
      <h1 class="mb-3">How can we help you?</h1>
      <br>

      <div hidden class="input-group w-20 mx-auto shadow rounded-pill overflow-hidden" style="max-width: 550px; height: 40px;">
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
        <div class="col-md-6">
          <div class="category-card button1" style="cursor: pointer;">
            <div class="category-icon"><i class="bi bi-headset"></i></div>
            <div>
              <h5 class="mb-1">Customer Service</h5>
              <p class="mb-0">Exceptional customer support.</p>
            </div>
          </div>
        </div>

        <div class="col-md-6">
          <div class="category-card button2" style="cursor: pointer;">
            <div class="category-icon"><i class="bi bi-lightbulb"></i></div>
            <div>
              <h5 class="mb-1">Entrepreneurship</h5>
              <p class="mb-0">Creating and managing a business for profit.</p>
            </div>
          </div>
        </div>

        <div class="col-md-6">
          <div class="category-card button3" style="cursor: pointer;">
            <div class="category-icon"><i class="bi bi-people"></i></div>
            <div>
              <h5 class="mb-1">Business Management</h5>
              <p class="mb-0">Overseeing resources and personnel efficiently.</p>
            </div>
          </div>
        </div>

        <div class="col-md-6">
          <div class="category-card button4" style="cursor: pointer;">
            <div class="category-icon"><i class="bi bi-megaphone"></i></div>
            <div>
              <h5 class="mb-1">Marketing Strategies</h5>
              <p class="mb-0">Promoting products to target audiences.</p>
            </div>
          </div>
        </div>

        <div class="col-md-6">
          <div class="category-card button5" style="cursor: pointer;">
            <div class="category-icon"><i class="bi bi-cash-stack"></i></div>
            <div>
              <h5 class="mb-1">Financial Planning</h5>
              <p class="mb-0">Managing finances for future growth.</p>
            </div>
          </div>
        </div>

        <div class="col-md-6">
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
    <label for="" style="background-color: #ccc;color:#0071ce;  border-radius:16px;width: 100px;text-align:center">Benefits</label>
    <br><br>
    <h2>Frequently Asked Questions</h2>
    <label>Your outsourcing questions, answered.</label>
    <br><br>
  </div>
  <div style="max-width: 1250px;margin:auto;margin-bottom:200px">

    <details>
      <summary>How soon can I get started?</summary>
      <p class="paragraph-details">Within a week. That's the average time it takes to get you up and running outsourcing to the Philippines... most clients are rolling within the first few days.</p>
    </details>

    <details>
      <summary>What happens if my Filipino hire suddenly stops showing up or quits unexpectedly?</summary>
      <p class="paragraph-details">Our 6 month replacement guarantee has you covered in case this happens (which is rare).</p>
      <p class="paragraph-details">If your hire ghosts you or leaves suddenly, we'll replace them immediately at no extra cost.</p>
    </details>

    <details>
      <summary>What's the real cost difference compared to hiring locally, and are there any hidden fees?</summary>
      <p class="paragraph-details">You'll save 60–75% compared to equivalent Australian talent – a typical $90K Australian role costs about $25–35K through us.</p>
    </details>

    <details>
      <summary>How do I communicate with my team?</summary>
      <p class="paragraph-details">Communication is dead simple. Your team connects through your existing platforms: Slack, Zoom, Microsoft, Google, or any tool in your stack.</p>
    </details>
    <details>
      <summary>How fast can I really get matched with Filipino talent... what happens if your "48-hour" promise doesn’t work out?</summary>
      <p class="paragraph-details">Most matches happen within 48 hours, but complex roles might take up to a week. In any case, we only present pre-vetted candidates.</p>
    </details>

    <details>
      <summary>Do I need to handle Filipino tax laws, payroll, or employment regulations myself?</summary>
      <p class="paragraph-details">Absolutely not. Your Filipino team member is technically employed by us in the Philippines, so you have ZERO administrative or legal headaches. You just pay one simple invoice.</p>
    </details>

    <details>
      <summary>What industries do you serve?</summary>
      <p class="paragraph-details">Our outsourcing providers in Philippines have worked across industries like construction, accounting, education, SaaS, and eCommerce. Chances are, we can support you too!</p>
    </details>

    <details>
      <summary>What about security & compliance?</summary>
      <p class="paragraph-details">Our outsourcing company maintains ironclad privacy (fully compliant) across all operations. Nothing stored onsite — we use Microsoft’s servers and services... same as you!</p>
    </details>

  </div>
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
  el.addEventListener("toggle", function () {
    if (this.open) {
      let content = this.querySelectorAll(".paragraph-details");
      this.style.overflow = "hidden";
      this.animate(
        [
          { height: "0px", opacity: 0 },
          { height: this.scrollHeight + "px", opacity: 1 }
        ],
        {
          duration: 300,
          easing: "ease"
        }
      );
    }
  });
});
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>