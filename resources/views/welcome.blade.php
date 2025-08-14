<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kobo Help Center Clone</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
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
  </style>
</head>

<body>


  <!-- Hero Section -->
 <section class="py-5" style="background: linear-gradient(135deg, #00a28b, #0071ce); color: #fff; height:300px">
  <div class="container text-center">
    <br><br>
    <h1 class="mb-3">How can we help you?</h1>
    <br>
    <div class="input-group w-20 mx-auto shadow rounded-pill overflow-hidden" style="max-width: 550px;" >
      <input type="text" class="form-control border-0" placeholder="Search articles" style="padding: 15px 20px;">
      <button class="btn btn-dark d-flex align-items-center justify-content-center px-4">
        <i class="bi bi-search fs-5"></i>
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
              <p class="mb-0">Persuading customers to buy products.</p>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>