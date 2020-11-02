<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="assets/payday_green.jpeg">
    <title>Payday</title>
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
<body>

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
                <li class="li-primary"><a href="#">About</a></li>
                <li class="li-primary"><a href="#features">Features</a></li>
                <li class="li-primary"><a href="/faq.php">FAQ</a></li>
                <li class="li-primary"><a href="#contact">Contact</a></li>
                <li class="li-primary"><a class="get-app" href="https://play.google.com/store/apps/details?id=com.kwikash.app">Get <span class="bold">payday</span> app</a></li>
                <li class="li-primary"><a href="#"><i class="fa fa-user" aria-hidden="true"></i></a></li>
            </ul>
            <div class="clear"></div>
        </nav>
    </header>