@extends("layout.MainLayout")

@section('content')


<link rel="stylesheet" href="{{ asset('css/customersupport.css') }}">

<section style="background-image: url('banner/banner.png'); 
           
                 background-repeat: no-repeat; 
                 background-position: center; 
                 color: #fff; 
                 height: 300px; overflow-x: hidden;">
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
<div class="container my-5">
  <div class="other-questions p-5 rounded shadow-lg bg-white">
    <h3 class="form-title">Any Other Questions?</h3>

    <form>
      <div class="row g-3">
        <div class="col-md-6">
          <label for="name" class="form-label">Your Name</label>
          <input type="text" id="name" class="form-control">
        </div>
        <div class="col-md-6">
          <label for="email" class="form-label">Your Email</label>
          <input type="email" id="email" class="form-control">
        </div>
        <div class="col-md-6">
          <label for="phone" class="form-label">Phone</label>
          <input type="text" id="phone" class="form-control">
        </div>
        <div class="col-md-6">
          <label for="company" class="form-label">Company</label>
          <input type="text" id="company" class="form-control">
        </div>
        <div class="col-md-12">
          <label for="department" class="form-label">Choose Department</label>
             <select id="department" class="form-select">
          <option value="">Select Department</option>
          <option value="it">I.T.</option>
          <option value="hr">H.R.</option>
          <option value="design">Design</option>
          <option value="marketing">Marketing</option>
          <option value="finance">Finance</option>
        </select>
        </div>
        <div class="col-12">
          <label for="message" class="form-label">How can we help you?</label>
          <textarea id="message" class="form-control"></textarea>
        </div>
        <div class="col-12 text-end">
          <button type="submit" class="btn btn-primary px-4">Send Message</button>
        </div>
      </div>
    </form>
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