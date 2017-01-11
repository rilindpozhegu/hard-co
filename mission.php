<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Hard Co</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
    
    <!-- Animations.css -->
    <link rel="stylesheet" type="text/css" href="css/animate.css">


    <!-- Custom CSS -->
    <link href="css/scrolling-nav.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/hover_effects.css">
    <link rel="stylesheet" type="text/css" href="css/last_section_footer.css">
    <link rel="stylesheet" type="text/css" href="css/footer_all.css">
    <link rel="stylesheet" type="text/css" href="css/mission.css">
    <link rel="stylesheet" type="text/css" href="css/preloader.css">
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">


    <!-- Preloader Objects -->

    <div id="overlay">
        <div class="center-preloader">
            <div class="object" id="object_one"></div>
            <div class="object" id="object_two"></div>
            <div class="object" id="object_three"></div>
            <div class="object" id="object_four"></div>
        </div>
    </div>



    <!-- Navigation -->
<?php
    include('navigation_bar.php');
?>


<!-- Mission Page First Section -->
<section class="first_section_mission">
    <div class="container">
        <div class="row">
            <div class="col-md-7 col-xs-12">
                <h3 class=" wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">HARDCO GROUP</h3>
                <hr class="line_mission wow fadeInUp" data-wow-duration="1s" data-wow-delay=".4s" align="left">
                <p class=" wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">Established in 1976, HARDCO has gained over 35 years of experience contributing to our potential growth
                and the success which we continue to harvest with our satisfied clientele. We have continued to evolve with 
                changes and have amassed a wealth of knowledge and technology in steel fabrication and construction,extensive
                experience and expertise in Building & Development...</p>
            </div>
        </div>
    </div>
</section>



<!-- Our Mission Second Section on Page -->
<section class="our_mission_text">
    <div class="container">
        <div class="row">
            <h4 class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">OUR MISSION</h4>
            <hr class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".4s">
            <p class=" wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">HARDCO's philosophy has remained unchanged for over three decades: Quality services Delivered On-time and On-budget. To that end, our mission is:</p>
            <ul class=" wow fadeInUp" data-wow-duration="1s" data-wow-delay=".6s">
                <li><p>To add value to our customers and business partners through the unequivocal quality of our services and products.</p></li>
                <li><p>To ensure the longevity of our company through maintaining our commitment to introduce innovative and effective solutions for our clients</p></li>
                <li><p>To work with integrity, honesty and reliability and never go off at a tangent from our corporate social responsibilities.</p></li>
            </ul>
        </div>
    </div>
</section>


<!-- Beutiful Cover On Mission Page -->
<section class="big_cover_mission2 container-fluid no_padding wow fadeIn" data-wow-duration="1s" data-wow-delay=".3s">
    
</section>




<!-- Mission Testimonial Section -->
<section class="testimonial_seciton_mission">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <img src="img/mission_testimonial-01.png"  class=" wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">
            </div>
            <div class="col-md-7">
                <h3 class=" wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".3s">Aref Derbas</h3>
                <h4 class=" wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">CEO,HARDCO</h4>
                <p  class=" wow fadeInUp" data-wow-duration="1s" data-wow-delay=".4s">The HARDCO group has been built by a combination of effective conversion of opportunities, organic growth of our diverse businesses and by successfully providing quality services on turnkey projects. <br>
                name has been synonymous with quality, ever since we started operations in 1976, Thanks to our judicious investment in the latest engineering and technological tools we have always been prepared to meet the dynamic requirements of our valued customers.</p>
                <p  class=" wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">We are proud of our workforce which has continued to offer their uncompromising services and informed expertise in structural and specialized steel works, on-shore and offshore building, finishing works, tensile architectural solutions and a gamut of industrial constructions and operations. <br>
                Every phase of our process undergoes intense scrutiny and testing to ensure lasting structures that adhere to the highest international safety and quality standards.</p>
                <p  class=" wow fadeInUp" data-wow-duration="1s" data-wow-delay=".6s">At HARDCO, quality is always a prerequisite and client satisfaction is expected.
                We continue to evolve as a company and a close relationship with our business partners and customers gives us the opportunity to seek innovative ways to improve our operations, our services and our products whilst continuing with the guiding principles upon which this company was founded. Honesty, reliability and quality are the key features at the core of HARDCO's success and reputation. <br>
                With HARDCO, the trust you place in us will only translate into benefits for you and your organization.</p>
                <p  class=" wow fadeInUp" data-wow-duration="1s" data-wow-delay=".7s">Sincerely, <br>
                Aref Derbas<br>
                CEO,HARDCO</p>
            </div>
        </div>
    </div>
</section>


<!-- Last Section On Homepage Same with Other Pages -->

<?php
    include('last_section_contact.php');
?>



<!-- Footer  -->

<?php
    include('footer.php');
?>

<!-- End Of footer  -->


    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Scrolling Nav JavaScript -->
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/scrolling-nav.js"></script>
        <!-- Animation JS -->
    <script type="text/javascript" src="js/wow.min.js"></script>
    <script type="text/javascript" src=js/preloader.js></script>
    <script>
        new WOW().init();
    </script>
</body>
</html>