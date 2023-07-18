<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PrimeBase / Microfinance Loan Lending Company</title>
        <link rel="icon" href="images/primeb-logo--preview.png" type="image/x-icon">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&display=swap">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200;1,200;1,400;1,900&family=Pacifico&family=Schibsted+Grotesk:wght@600&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="css/style.css">
    </head>

    <body>
        <header>
            <div class="logo">
                <a onclick="navigateTo('index.php')" style="cursor: pointer;"><img src="images/primeb-logo002--preview.png" alt="PrimeBase Logo"></a>
            </div>
            <nav>
                <div class="menu-icon" id="menu-icon">
                    <span class="menu-icon-bar"></span>
                    <span class="menu-icon-bar"></span>
                    <span class="menu-icon-bar"></span>
                </div>
                <div class="menu-icon-close" id="menu-icon-close">
                    &#10006;
                </div>
                <ul class="menu" id="menu">
                    <li class="current-page home-page"><a onclick="navigateTo('index.php')" style="cursor: pointer;">Home</a></li>
                    <li class="services-page"><a onclick="navigateTo('services.php')" style="cursor: pointer;">Services</a></li>
                    <li class="about-page"><a onclick="navigateTo('about.php')" style="cursor: pointer;">About</a></li>
                    <li class="contact-page"><a onclick="navigateTo('#contact')" style="cursor: pointer;">Contact</a></li>
                </ul>
            </nav>
        </header>

        <section class="hero">
            <div class="hero-image">
                <img src="images/primeb-logo--preview.png" alt="Hero Image">
            </div>
            <div class="hero-content">
                <h1>Microfinance Loan Lending</h1>
                <p>At PrimeBase, we offer quick and hassle-free loans tailored to your needs, empowering your Financial Dreams. </p>
                <a onclick="navigateTo('#contact')" style="cursor: pointer;" class="cta-button">Apply Now</a>
            </div>
        </section>

        <section class="testimonials">
            <div class="container">
                <h2>Testimonials</h2>
                <div class="testimonial">
                    <img src="https://images.pexels.com/photos/14040685/pexels-photo-14040685.jpeg?auto=compress&cs=tinysrgb&w=600&lazy=load" alt="Testimonial 1">
                    <p>I received a microfinance loan from PrimeBase and it helped me start my own business. The process was quick and hassle-free. Highly recommended!</p>
                    <p class="client-name">Victor Oluwa</p>
                </div>
                <div class="testimonial">
                    <img src="https://images.pexels.com/photos/16575643/pexels-photo-16575643/free-photo-of-girl-in-vintage-leather-jacket-sitting-on-bench.jpeg?auto=compress&cs=tinysrgb&w=600&lazy=load" alt="Testimonial 2">
                    <p>The microfinance loan I obtained from PrimeBase enabled me to expand my existing business. Their team provided excellent support throughout the entire process.</p>
                    <p class="client-name">Ozan Çulha</p>
                </div>
            </div>
        </section>

        <section class="loan-process">
            <div class="container">
                <h2>Loan Process</h2>
                <div class="step">
                    <img src="https://images.pexels.com/photos/955389/pexels-photo-955389.jpeg?auto=compress&cs=tinysrgb&w=600" alt="Step 1">
                    <h3>Step 1: Application</h3>
                    <p>Fill out the online loan application form with your personal and business details.</p>
                </div>
                <div class="step">
                    <img src="https://media.istockphoto.com/id/886031704/photo/two-business-men-shaking-hands-during-a-meeting-to-sign-agreement-and-become-a-business.jpg?b=1&s=612x612&w=0&k=20&c=vY3cEUY7H8N5X1_WEwYa1oqGZ8xsux6m2udR9ODKiQ0=" alt="Step 2">
                    <h3>Step 2: Approval</h3>
                    <p>Our team reviews your application and assesses your eligibility for the loan.</p>
                </div>
                <div class="step">
                    <img src="https://media.istockphoto.com/id/1215750558/photo/an-overturned-piggy-bank-with-drawn-money.jpg?b=1&s=612x612&w=0&k=20&c=EhL2uIcu67Ny0XwHO4CWpLi3pnbnkq_lZE8W9jFwov8=" alt="Step 3">
                    <h3>Step 3: Disbursement</h3>
                    <p>Once approved, the loan amount is disbursed to your bank account within 24 hours.</p>
                </div>
            </div>
        </section>

        <section class="contact" id="contact">
            <div class="container">
                <h2>Get in Touch, Let's Talk..!</h2>
                <h3>We would love to hear from you. If you have any questions, inquiries, or feedback, connect with us!</h3>
                <form>
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" id="name" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea id="message" name="message" required></textarea>
                    </div>
                    <button type="submit">
                    <i class="fas fa-paper-plane"></i>
                        Submit
                    </button>
                </form>
                <div class="contact-info">
                    <p>1432 Biashara Street, Nairobi City</p>
                    <p>Email: info@primebase.com</p>
                    <p>Phone: +254 704 540 254</p>
                </div>
            </div>
        </section>

        <footer>
            <p>&copy; <span id="current-year"></span> PrimeBase Co. All rights reserved.</p>
        </footer>

        <script src="js/main.js"></script>
        <script>
            const currentYear = new Date().getFullYear();
            document.getElementById('current-year').textContent = currentYear;
        </script>
    </body>
</html>