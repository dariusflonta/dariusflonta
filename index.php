<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="title" content="darius's portofolio">
    <meta name="description" content="Looking for a landing page? Click here and maybe I could help you.">
    <meta name="keywords" content="darius portofolio, darius portofoliu, darius flonta portofoliu,  darius flonta portofolio, flonta, flonta site, flonta website, darius site, darius website, web design oradea, web oradea, siteuri web oradea,">
    <meta name="robots" content="noindex, nofollow">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="language" content="English">
    <title>Darius's Portofolio</title>
    <link rel="apple-touch-icon" sizes="180x180" href="img/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicon-16x16.png">
    <link rel="manifest" href="img/site.webmanifest">
    <link rel="stylesheet" href="styles/styles.css">
    <link rel="stylesheet" href="styles/styles-1000.css">
    <link rel="stylesheet" href="styles/styles-810.css">
    <link rel="stylesheet" href="styles/styles-600.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>

    <div id="loader">
        <img src="img/loader.gif">
    </div>

    <header id="header">
        <nav id="nav">
            <ul id="navbar">
                <li class="navlink"><a href="index.html#hero">Home</a></li>
                <li class="navlink"><a href="index.html#about">About</a></li>
                <li class="navlink"><a href="index.html#projects">Work</a></li>
                <li class="navlink"><a href="index.html#contact">Contact</a></li>
            </ul>
        </nav>
        <div id="menu">
            <i class="fa fa-bars" aria-hidden="true"></i>
        </div>
    </header>
    <section id="hero">
        <div class="intro-box">
            <h1 class="intro-title">Hello, I am Darius.</h1>
            <h5 class="intro-text">Here to spread my passion about UI/UX Design and Web Development.</h5>
        </div>
    </section>

    <section id="about">
        <div class="row">
            <div class="scroll-reveal-left col-about">
                <h2 class="about-title">About me</h2>
                <p class="about-text">As it is written in the intro, my name is Darius and I am here for sharing my ideas and my passion about Web Designing and Development. Offering you charming and modern static landing pages with responsive layout and animated elements on page is my will, and sooner I am going to create also online shops, form-submit websites and SEO for whoever is going to seek for my services.</p>
            </div>
            <div class="scroll-reveal-right col-about">
                <img src="img/profil4.jpg" loading="lazy" alt="">
            </div>
        </div>
    </section>

    <section id="projects">
        <div class="scroll-reveal-bottom">
            <h2 class="projects-title ">My Work</h2>
            <p class="projects-text">My work is written completely in code, mainly using HTML, CSS, Bootstrap, JavaScript, Adobe Ps and Adobe Ai. My learning process will continue with: jQuery, React, PHP and mySQL.</p>
        </div>
        <div class="row row-projects">
            <div class="col-projects scroll-reveal-left">
                <a href="https://dariusflonta.github.io/restaurant-pietricica/"><img src="img/csm-pc.jpg" loading="lazy"></a>
            </div>
            <div class="col-projects scroll-reveal-right">
                <a href="https://dariusflonta.github.io/csm-international/" target="_blank"><img src="img/pietricica-pc.png" loading="lazy"></a>
            </div>
        </div>
        <div class="row row-projects">
            <div class="col-projects scroll-reveal-left">
                <a href="https://dariusflonta.github.io/wolfs-lair/"><img src="img/wolfs.png" loading="lazy"></a>
            </div>
            <div class="col-projects scroll-reveal-right">
                <a href="https://dariusflonta.github.io/" target="_blank"><img src="img/fictive.png" loading="lazy"></a>
            </div>
        </div>
    </section>

    <?php
        if(!empty($_POST["send"])){
            $userName = $_POST["userName"];
            $userEmail = $_POST["userEmail"];
            $userTitle = $_POST["userTitle"];
            $userMessage = $_POST["userMessage"];
            $toEmail = $_POST["darius.flonta97@yahoo.com"];
            $mailHeader = "Name: " . $userName .
            "\r\n Email: " . $userEmail .
            "\r\n Subject: " . $userTitle . 
            "\r\n Message: " . $userMessage . "\r\n";

            if(mail($toEmail, $userName, $mailHeader)){
                $sentMessage = "Your message has been send succesfully!";
            }
        }
    ?>
    <section id="contact">
        <div class="contact-form scroll-reveal-bottom">
            <h2 class="contact-title">Don't hesitate to contact me</h2>
            <form action="index.php" method="POST" id="contactForm" >
                <label for="name">
                    <input type="text" id="name" name="userName" placeholder="Your Name Here" required>
                </label>
                <label for="email">
                    <input type="email" id="email" name="userEmail" placeholder="Your Email Here" required>
                </label>
                <label for="title">
                    <input type="text" id="title" name="userTitle" placeholder="Cc/Subject" required>
                </label>
                <textarea name="" id="message" cols="10" rows="10"  name="userMessage"  placeholder="Your message here"></textarea>
                <input type="submit" name="send" value="Send" required>
                <?php 
                    if(!empty($sentMessage)){ ?>
                        <div class="successful">
                            <p><strong> <?php echo $sentMessage ?> </strong></p>
                        </div>
                    <?php } ?>
            </form>
        </div>
    </section>

    <footer>
        <div class="footer-intro">
            <h5>Also, we can talk here</h5>
            <a href="https://www.linkedin.com/in/darius-flonta-35797213b/" target="_blank"><i class="fa fa-linkedin"></i></a>
            <a href="https://github.com/dariusflonta" target="_blank"><i class="fa fa-github"></i></a>
        </div>
        <div class="footer-links">
            <li><a href="#">Privacy Policy</a></li>
            <li><a href="#">Terms and Conditions</a></li>
            <li><a href="#">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Projects</a></li>
            <li><a href="#">Contact</a></li>
        </div>
        <div class="footer-details">
            <p aria-disabled="true" >Darius, 2022 &copy;</p>
        </div>
    </footer>

    <script src="app/app.js"></script>
</body>
</html>