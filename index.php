<?php

declare(strict_types=1);
require_once 'classes/db.php';
require_once 'requirements/autoload.php';
require_once 'requirements/config.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.1/css/bootstrap.min.css" integrity="sha512-Ez0cGzNzHR1tYAv56860NLspgUGuQw16GiOOp/I2LuTmpSK9xDXlgJz3XN4cnpXWDmkNBKXR/VDMTCnAaEooxA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css" href="plugins/slick-master/slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="plugins/slick-master/slick/slick-theme.css" />
    <link rel="stylesheet" href="css/style.css?v=<?php echo time(); ?>">
    <title>IPR Homepage</title>

</head>
    <!-- Nav bar -->
    <?php
        include 'components/navbar.php';
    ?>

    <!-- banner -->
    <div class="header">
        <div class="content">
            <div class="main-text">
                <h1>𝕊𝔸𝕂𝔼ℂ 𝕀ℙℝ</h1>
                <p class="mt-4">
                    To create awareness about the rules and regulations of the IPR policy amongst the
                    students and faculty </p>
                <a type="button" class="button btn-home">Upcoming Events <i class="fas fa-chevron-right"></i></a>
            </div>
        </div>
        <a class="btn youtube-btn" href=""><i class="far fa-play-circle" style="font-size: 60px; color: rgb(12, 174, 196);"></i></a>
        <a class="btn down-arrow" href="#rolls-responsibilities"> <i class="fas fa-angle-double-down"></i></a>
    </div>
    <!-- banner ends -->

    <!-- Rolls and Respnsibilities  -->
    <section id="rolls-responsibilities" class="new-section">
        <div class="container">
            <div class="col-sm-12 text-center heading">
                <h1>Roles and responsibilities of IPR</h1>
            </div>
            <div class="row rolls-content my-4">
                <div class="col-sm-1 text-center rolls-icon"><i class="far fa-lightbulb fa-3x"></i></div>
                <div class="col-sm-3">
                    <p>To create awareness about the rules and regulations of the IPR policy amongst the students and
                        faculty.</p>
                </div>
                <div class="col-sm-1 text-center rolls-icon"><i class="fas fa-microphone-alt fa-3x"></i></div>
                <div class="col-sm-3">
                    <p>To encourage and provide direction to students and faculty on filing IPR applications..</p>
                </div>
                <div class="col-sm-1 text-center rolls-icon"><i class="fas fa-search fa-3x"></i></div>
                <div class="col-sm-3">
                    <p>To build a research environment through continued thirst for acquiring new knowledge through
                        innovation.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Rolls and responsibilities ends -->
    <!-- about us section -->
    <section id="about" class="row new-section align-items-center">
        <div class="about-content text-center">
            <a href=""> <img class="about-icon" src="images/play (1).png" alt="" height="80px" width="80px"></a>
            <h4 class="my-4">About Us</h4>
            <p class="my-4">Shah & Anchor Kutchhi Engineering College established Intellectual Property Rights Cell
                (IPRC) in 2019. <br> SAKEC-IPRC aims to protect the Intellectual Property of the entities of SAKEC to
                enrich
                professional standard. <br>
                Intellectual property (IP) is a category of property that includes intangible creations of the human
                intellect; <br> such as design, music, art, technological invention and writing. <br> IPR is the legal
                rights
                for
                intellectual activity undergone in the industrial, scientific, literary and artistic field.
            </p>
        </div>
    </section>
    <!-- about us ends -->
    
    <!-- Scroll Top Button -->
    <button id="scroll-top"><i class="fas fa-arrow-up"></i></button>
    <!-- Scroll Top Button Ends -->

    <?php
        //events section
        include 'components/events.php';
        include 'components/testimonials.php';
        include 'components/teams.php';
        include 'components/news.php'; 
        include 'components/footer.php'; 
    ?>
    
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.1/js/bootstrap.min.js" integrity="sha512-EKWWs1ZcA2ZY9lbLISPz8aGR2+L7JVYqBAYTq5AXgBkSjRSuQEGqWx8R1zAX16KdXPaCjOCaKE8MCpU0wcHlHA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://smtpjs.com/v3/smtp.js"></script>
    <script type="text/javascript" src="plugins/slick.min.js"></script>
    <script src="javascript/testimonial.js"></script>
    <script src="javascript/navbar.js"></script>
    <script src="javascript/topscroll.js"></script>

<body>