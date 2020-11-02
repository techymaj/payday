<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="assets/payday_green.jpeg">
    <title>About - Payday</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/faq.css">
    <script defer src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script defer src="js/form.js"></script>
    <script defer src="js/faq.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        $(function() {
            $('a[href*=#]').on('click', function(e) {
                e.preventDefault();
                $('html, body').animate({ scrollTop: $($(this).attr('href')).offset().top}, 500, 'linear');
            });
        });
    </script>
    <script src="js/main.js" defer></script>
</head>
<body class="about">

    <header>
        <nav class="menu-primary">
            <input type="checkbox" id="menuToggle">
            <label for="menuToggle"><span>&times;</span><span>&#9776;</span></label>
            <span class="logo-payday">
                <div data-aos="zoom-in">
                    <a href="/"><img src="assets/payday_tp_full.png" loading="lazy" alt="payday logo"></a>
                </div>
            </span>
            <ul class="menu-items">
                <li class="li-primary active"><a href="/">Home</a></li>
                <li class="li-primary"><a href="/about.php">About</a></li>
                <li class="li-primary"><a href="#features">Features</a></li>
                <li class="li-primary"><a href="/faq.php">FAQ</a></li>
                <li class="li-primary"><a href="#contact">Contact</a></li>
                <li class="li-primary"><a class="get-app" href="https://play.google.com/store/apps/details?id=com.kwikash.app">Get <span class="bold">payday</span> app</a></li>
                <li class="li-primary"><a href="#"><i class="fa fa-user" aria-hidden="true"></i></a></li>
            </ul>
            <div class="clear"></div>
        </nav>
    </header>

    <main>
        <section class="about">
            <div class="wave-container">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                    <path fill="rgb(0, 149, 81)" fill-opacity="1" d="M0,288L60,261.3C120,235,240,181,360,165.3C480,149,600,171,720,192C840,213,960,235,1080,234.7C1200,235,1320,213,1380,202.7L1440,192L1440,0L1380,0C1320,0,1200,0,1080,0C960,0,840,0,720,0C600,0,480,0,360,0C240,0,120,0,60,0L0,0Z"></path>
                </svg>
            </div>
            <h2 class="about-header">
                This is our story
            </h2>
            <div class="about-content">
                <p>
                    Payday is your new mobile loan service accessible on Android, web and iOS
                    platforms. PayDay makes it easy for you to access loans for the way you live.
                    Sign up in seconds, apply for a loan and receive your money straight to your
                    mobile money account. 
                </p>

                <p>
                    It's a fast, convenient and reliable way to access loans.
                    With a mobile loan, the entire process from start to finish is handled digitally.
                    You apply for the loan, we review your application and, if your application is
                    approved, the loan funds are disbursed to you via mobile money. 
                </p>

                <p>PayDay allows you to apply for the money you need quickly on the go — as long as 
                    you have your smartphone handy and reliable internet service.

                    It is designed with your convenience in mind- to help you access the
                    much-needed cash when faced with a financial challenge. It really

                    complements and enhances your financial options in an increasingly volatile

                    environment.
                </p>
            </div>
        </section>
    </main>

<?php include( 'footer.php' ) ?>