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
    <link rel="stylesheet" type="text/css" href="css/contact.css">
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



<!-- Map Section Here -->
<div class="map_section maps">
   <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6066.005798337151!2d55.63699515348308!3d25.308617532513814!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ef5f2c41965a091%3A0xa7e182d6852f17f5!2sHardco+Group!5e0!3m2!1sen!2s!4v1484835117739" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>



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

    <script type="text/javascript">
        $('.maps').click(function () {
            $('.maps iframe').css("pointer-events", "auto");
        });

        $( ".maps" ).mouseleave(function() {
          $('.maps iframe').css("pointer-events", "none"); 
        });

    </script>
    
        <!-- Animation JS -->
    <script type="text/javascript" src="js/wow.min.js"></script>
    <script type="text/javascript" src="js/preloader.js"></script>
    <script>
        new WOW().init();
    </script>
</body> 

</html>
