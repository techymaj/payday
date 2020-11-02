<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="assets/payday_green.jpeg">
    <title>Frequently Asked Questions - Payday</title>
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
<body class="faq">

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
  <h1 class="faq-header">Frequently asked questions</h1>
    <section class="cd-faq">
      <ul class="cd-faq-categories">
        <li><a class="selected" href="#basics">Basics</a></li>
        <li><a href="#setup">Setup</a></li>
        <li><a href="#account">Account</a></li>
        <li><a href="#payments">Payments</a></li>
        <li><a href="#shoutout">Shoutout</a></li>
      </ul>
      <!-- cd-faq-categories-->
      <div class="cd-faq-items">
        <ul class="cd-faq-group" id="basics">
          <li class="cd-faq-title">
            <h2>Basics</h2>
          </li>
          <li><a class="cd-faq-trigger" href="#0">What is a mobile loan?</a>
            <div class="cd-faq-content">
              <p>The term "mobile loan" can refer to any loan someone applies for with a mobile device. For
                instance, if you use your smartphone to borrow UGX 20,000 so you can pay a utility bill, you
                have just gotten a mobile loan. We make it easy for borrowers to get the money they need.
              </P>
            </div>
            <!-- cd-faq-content-->
          </li>
          <li><a class="cd-faq-trigger" href="#0">Application process / How do I apply for a PayDay Loan?</a>
            <div class="cd-faq-content">
              <p>Apply from our website, or download our mobile app on your Android or iOS smartphone,
                and follow the loan application process to get the money you desire.
              </p>
            </div>
            <!-- cd-faq-content-->
          </li>
          <li><a class="cd-faq-trigger" href="#0">Why choose PayDay instead of any other loan?</a>
            <div class="cd-faq-content">
              <p>While other loans work well for some people who need access to cash, PayDay offers a few
                advantages that most consumers will appreciate. For instance, PayDay is transparent
                about its fees and interest rates. Knowing exactly how much you have to repay will help you
                feel more comfortable about getting a short-term loan. There aren't any hidden fees, so
                you know exactly what to expect from the minute you start looking at the loan.
              </p>
            </div>
            <!-- cd-faq-content-->
          </li>
        </ul>
        <!-- cd-faq-group-->
        <ul class="cd-faq-group" id="setup">
          <li class="cd-faq-title">
            <h2>Setting up</h2>
          </li>
          <li><a class="cd-faq-trigger" href="#0">What do I need to apply for these mobile loans?</a>
            <div class="cd-faq-content">
              <p>PayDay doesn't use a traditional credit check to decide who is approved. We do have some
                qualifications, though. You could qualify for loans as long as you are:
              </p>
              <ul class="bullets">
                <li>Over 18 years old</li>
                <li>Have proof of a recurring source of income, such as through your job</li>
                <li>Have an active mobile money account</li>
                <li>Have a National ID</li>
              </ul>
              <p>These are easy qualifications for many people to meet, and the application process only
                takes about five minutes.
              </p>
            </div>
            <!-- cd-faq-content-->
          </li>
          <li><a class="cd-faq-trigger" href="#0">Is it safe to apply for mobile loans by phone?</a>
            <div class="cd-faq-content">
              <p>Many people are concerned that internet security can't keep their private information safe.
                However, PayDay has the right technology to protect your privacy.
              </p>
            </div>
            <!-- cd-faq-content-->
          </li>
        </ul>
        <!-- cd-faq-group-->
        <ul class="cd-faq-group" id="account">
          <li class="cd-faq-title">
            <h2>Account</h2>
          </li>
          <li><a class="cd-faq-trigger" href="#0">Can I borrow money immediately?</a>
            <div class="cd-faq-content">
              <p>The PayDay loan application is available 24/7 and it only takes a few minutes to apply. If
                approved, you’ll get an instant loan decision and the money will be deposited to your
                mobile money account.
                What documents are required to apply for a loan with PayDay?
                The documents required to apply are the following:
              </p>
              <ul class="bullets">
                <li>Identity Proof – National ID card</li>
                <li>Employment Proof – Appointment/Confirmation letter</li>
                <li>Salary slips/payment receipts</li>
              </ul>
            </div>
            <!-- cd-faq-content-->
          </li>
          <li><a class="cd-faq-trigger" href="#0">How much time does it take to provide a decision on my loan application? Application status?</a>
            <div class="cd-faq-content">
              <p>Once you submit your loan application with all the required documents, the process takes a
                  maximum of 1 business day. During this time, we might come back to you if we have
                  questions about the documents you have submitted. Please check/download our mobile
                  app to get your loan application status on the go.
              </p>
            </div>
            <!-- cd-faq-content-->
          </li>
        </ul>
        <!-- cd-faq-group-->
        <ul class="cd-faq-group" id="payments">
          <li class="cd-faq-title">
            <h2>Payments</h2>
          </li>
          <li><a class="cd-faq-trigger" href="#0">What is the minimum and maximum that can be borrowed?</a>
            <div class="cd-faq-content">
              <p>Eligible customers can borrow up to a maximum of 30% of their net income. We will review
                your loan application and will provide a loan offer based on our affordability assessment.
              </p>
            </div>
            <!-- cd-faq-content-->
          </li>
          <li><a class="cd-faq-trigger" href="#0">Can I repay my loan before the due date?</a>
            <div class="cd-faq-content">
              <p>Yes, you can pre-pay the loan amount at any time in full or part without any additional
                charges.
              </p>
            </div>
            <!-- cd-faq-content-->
          </li>
        </ul>
        <!-- cd-faq-group-->
        <ul class="cd-faq-group" id="shoutout">
          <li class="cd-faq-title">
            <h2>Sharing the app</h2>
          </li>
          <li><a class="cd-faq-trigger" href="#0">How can I share my personal experience with PayDay? How can I inspire the rest of Uganda?</a>
            <div class="cd-faq-content">
              <p>Do share your PayDay loan story of empowerment, how it helped you reach your particular
                cash crunch need/goal and get a chance to be featured on our website.
              </p>
            </div>
            <!-- cd-faq-content-->
          </li>
        </ul>
        <!-- cd-faq-group-->
      </div>
      <!-- cd-faq-items--><a class="cd-close-panel" href="#0">Close</a>
    </section>
    <!-- cd-faq-->
  </main>
<?php include( 'footer.php' ); ?>
</html>