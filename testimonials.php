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


    <!-- Testimonial carocel -->
    <link rel="stylesheet" type="text/css" href="css/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="css/owl.theme.css">

    <!-- Custom CSS -->
    <link href="css/scrolling-nav.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/hover_effects.css">
    <link rel="stylesheet" type="text/css" href="css/footer_all.css">
    <link rel="stylesheet" type="text/css" href="css/testimonials.css">
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

<!-- Testimonial Cover On top -->
<!-- 
<section class="testimonial_cover_image">
</section> -->




<!-- Testimonial Text on the second section -->

<section class="testimonil_text_section">
    <div class="container">
        <div class="row">
            <div class="col-md-4 wow zoomIn" data-wow-duration="1s" data-wow-delay=".3s">
                <img src="img/testimonial_img1-01.png">
            </div>
            <div class="col-md-8 text-testimonials">
                <h4 class=" wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">Architect Awards 2016</h4>
                <h5 class=" wow fadeInUp" data-wow-duration="1s" data-wow-delay=".4s">Hardco Group</h5>
                <p class=" wow fadeInUp" data-wow-duration="1s" data-wow-delay=".4s">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                <p class=" wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p><!-- 
                <a href="client-paper.pdf" style=" text-decoration: none"><button class=" wow fadeInUp" data-wow-duration="1s" data-wow-delay=".6s">Client letter</button></a> -->
            </div>
        </div>
    </div>
</section>


<div class="container">
    <div class="row">
        <div class="col-md-6" style="padding: 300px 0px">
            <img class=" wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s" src="img/testimonial_cover-01.png" style="width: 100%;">
        </div>
        <div class="col-md-6">
            <img class=" wow fadeInUp" data-wow-duration="1s" data-wow-delay=".8s" src="img/letter_hardco.JPG">
        </div>
    </div>
</div>

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
    <!-- Testimonial carocel -->
    <script type="text/javascript" src="js/owl.carousel.js"></script>
    <script type="text/javascript" src="js/general.js"></script>
        <!-- Animation JS -->
    <script type="text/javascript" src="js/wow.min.js"></script>
    <script type="text/javascript" src="js/preloader.js"></script>
    <script>
        new WOW().init();
    </script>
</body> 

</body>
</html>