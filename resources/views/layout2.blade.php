<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap Header</title>
    <link rel="icon" href="/logo/skill-cloud-logo.png" type="image/png">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

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

<body>

    <!-- Header -->
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



    <!-- Content -->
    <div class="container mt-5" style="height: 1000px;">
        <h1>Welcome to My Website</h1>
        <p>This is a simple page with a Bootstrap header.</p>
    </div>
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
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>