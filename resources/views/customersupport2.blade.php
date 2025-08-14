<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Customer Support</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
  <style>
    .container-link {
      cursor: pointer;
    }

    .container-link>div {
      padding: 12px;
      border-radius: 6px;
      transition: all 0.2s ease;
    }

    .container-link:hover>div {
      background-color: #e6ebf0ff;
    }

    .article-category {
      font-size: 0.85rem;
      color: #6c757d;
      margin-bottom: 0.25rem;
    }

    .article-title {
      font-weight: 600;
      font-size: 1rem;
      text-decoration: none;
      color: #000;
    }
  </style>
</head>

<body>
  <section class="py-5" style="background: linear-gradient(135deg, #00a28b, #0071ce); color: #fff; height:270px">
    <div class="container text-center">
      <br><br>
      <h1 class="mb-3">How can we help you?</h1>
      <br>
      <div class="input-group w-20 mx-auto shadow rounded-pill overflow-hidden" style="max-width: 550px; height: 40px;">
        <input type="text" class="form-control border-0 py-1 px-3" placeholder="Search articles" style="height: 100%;">
        <button class="btn btn-dark d-flex align-items-center justify-content-center px-3" style="height: 100%;">
          <i class="bi bi-search fs-6"></i>
        </button>
      </div>

    </div>
  </section>
  <div class="container py-5">
    <div class="row row-cols-1 row-cols-md-3 g-4">

      <div class="col container-link">
        <div>
          <div class="article-category">Order Issues &amp; Returns</div>
          <a href="#" class="article-title">How to Get Help with An Order</a>
        </div>
      </div>

      <div class="col container-link">
        <div>
          <div class="article-category">Shopping &amp; Gifting</div>
          <a href="#" class="article-title">How to Purchase an Item On Etsy</a>
        </div>
      </div>

      <div class="col container-link">
        <div>
          <div class="article-category">Shopping &amp; Gifting</div>
          <a href="#" class="article-title">How to Contact a Shop</a>
        </div>
      </div>

      <div class="col container-link">
        <div>
          <div class="article-category">After You Purchase</div>
          <a href="#" class="article-title">What’s the Status of My Order?</a>
        </div>
      </div>

      <div class="col container-link">
        <div>
          <div class="article-category">Searching for Items</div>
          <a href="#" class="article-title">How to Search for Items and Shops on Etsy</a>
        </div>
      </div>

      <div class="col container-link">
        <div>
          <div class="article-category">After You Purchase</div>
          <a href="#" class="article-title">How Do I Change My Shipping Address?</a>
        </div>
      </div>

      <div class="col container-link">
        <div>
          <div class="article-category">Buying Safely</div>
          <a href="#" class="article-title">Tips for Buying Safely on Etsy</a>
        </div>
      </div>

      <div class="col container-link">
        <div>
          <div class="article-category">Shopping &amp; Gifting</div>
          <a href="#" class="article-title">How to Buy an Etsy Gift Card</a>
        </div>
      </div>

      <div class="col container-link">
        <div>
          <div class="article-category">Shopping &amp; Gifting</div>
          <a href="#" class="article-title">What is Etsy Insider?</a>
        </div>
      </div>

    </div>
  </div>

</body>

</html>