<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services / Microfinance Loan Lending</title>
    <link rel="icon" href="images/primeb-logo--preview.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&display=swap">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200;1,200;1,400;1,900&family=Pacifico&family=Schibsted+Grotesk:wght@600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <header>
        <div class="logo">
            <a onclick="navigateTo('index.htm')" style="cursor: pointer;"><img src="images/primeb-logo002--preview.png" alt="PrimeBase Logo"></a>
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
                <li class="current-page home-page"><a onclick="navigateTo('index.htm')" style="cursor: pointer;">Home</a></li>
                <li class="services-page"><a onclick="navigateTo('services.php')" style="cursor: pointer;">Services</a></li>
                <li class="about-page"><a onclick="navigateTo('about.php')" style="cursor: pointer;">About</a></li>
                <li class="contact-page"><a onclick="navigateTo('#contact')" style="cursor: pointer;">Contact</a></li>
            </ul>
        </nav>
    </header>

    <section class="services">
        <div class="services-content">
            <h2><i class="fas fa-cogs"></i> Our Services</h2>
            <div class="service-card">
                <p>We're currently working diligently to bring you a comprehensive range of services that cater to your financial needs. Our team is dedicated to creating innovative solutions and delivering exceptional customer experiences.</p>
                <p>During this period of generation and maintenance, we appreciate your patience and understanding. We assure you that our services will be worth the wait as we strive to exceed your expectations.</p>
                <p>If you have any inquiries or would like to learn more about our upcoming services, please feel free to reach out to us. We are eager to assist you and provide the information you need.</p>
                <p>Thank you for your continued support and stay tuned for exciting updates!</p>
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
