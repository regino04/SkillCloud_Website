@extends("layout.MainLayout")

@section('content')

<style>
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
      font-size: 18px;
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


  .category-card {
    border: 2px solid transparent;
    border-radius: 10px;
    padding: 20px;
    transition: all 0.3s ease;
    background-color: #fff;
    display: flex;
    align-items: center;
    gap: 15px;
    /* height: 450px; */
    /* width: 400px; */

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

  .frequenlty-asked-questions {
    background-image: url('background/background-text.png');
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;

  }

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
</style>
<section style="background-image: url('banner/banner.png');background-size: cover; color: #fff; height:300px">

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

<div class="frequenlty-asked-questions">
  <section class="py-5" style="max-width: 940px;margin:auto;">
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
  <div data-aos="fade-up" style="max-width: 1300px;margin:auto;margin-bottom:100px">

    <details data-aos="fade-up" class="floating-btn">
      <summary>How soon can I get started?</summary>
      <p class="paragraph-details">Within a week. That's the average time it takes to get you up and running
        outsourcing
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
      <summary>How fast can I really get matched with Filipino talent... what happens if your "48-hour" promise
        doesn’t
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
@endsection