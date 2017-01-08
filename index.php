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


    <!-- Custom CSS -->
    <link href="css/scrolling-nav.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/hover_effects.css">
    <link rel="stylesheet" type="text/css" href="css/last_section_footer.css">
    <link rel="stylesheet" type="text/css" href="css/footer_all.css">
    <link rel="stylesheet" type="text/css" href="css/home.css">
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

    <!-- Navigation -->
<?php
    include('navigation_bar.php');
?>



    <!-- Intro Section -->
    <section id="intro" class="intro-section mobile-d-n">
        <div class="container">
            <div class="row">
            <a href="www.google.com">
                <div class="col-md-3 no-padding">
                    <div class="box1">
                        <div class="cover top">
                        </div>
                    </div>
                </div>
            </a>    
            <a href="#">
                <div class="col-md-3 no-padding">
                    <div class="box2">
                        <div class="cover2 top">
                        </div>
                    </div>
                </div>
            </a>
            <a href="#">    
                <div class="col-md-3 no-padding">
                    <div class="box3">
                        <div class="cover3 top">
                        </div>
                    </div>
                </div>
            </a>
            <a href="#">    
                <div class="col-md-3 no-padding">
                    <div class="box4">
                        <div class="cover4 top">
                          <!-- <h2 class="title">Example Post Title</h2>
                          <p class="intro">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium quis enim nam dolorem recusandae ducimus laudantium iure sint similique reiciendis quaerat dolorum cum aliquid officiis repudiandae in qui itaque maiores!</p>
                          <div class="btn"><a href="#">Read more...</a></div>
                          <p class="date">10/19/2013</p> -->
                        </div>
                    </div>
                </div>
            </a>    
            </div>
        </div>
    </section>

<div id="carousel-example-generic" class="carousel slide desktop-d-n" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
    <li data-target="#carousel-example-generic" data-slide-to="3"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="img/slider1-01.png" alt="...">
      <div class="carousel-caption">
        <h1>Structural Steel </h1>
        <p>Hardco Engineering Co.</p>
      </div>
    </div>
    <div class="item">
      <img src="img/slider2-01.png" alt="...">
      <div class="carousel-caption">
        <h1>Structural Steel </h1>
        <p>Hardco Engineering Co.</p>
      </div>
    </div>
    <div class="item">
      <img src="img/slider3-01.png" alt="...">
      <div class="carousel-caption">
        <h1>Structural Steel </h1>
        <p>Hardco Engineering Co.</p>
      </div>
    </div>
    <div class="item">
      <img src="img/slider4-01.png" alt="...">
      <div class="carousel-caption">
        <h1>Structural Steel </h1>
        <p>Hardco Engineering Co.</p>
      </div>
    </div>
  </div>

  <!-- Controls -->
  <a class="left carousel-control left-carocel" href="#carousel-example-generic" role="button" data-slide="prev">
    <i class="fa fa-angle-left" aria-hidden="true"></i>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control right-carocel" href="#carousel-example-generic" role="button" data-slide="next">
    <i class="fa fa-angle-right" aria-hidden="true"></i>
    <span class="sr-only">Next</span>
  </a>
</div>

<!-- Home Text Section -->
    <section class="home_2nd_section">
        <div class="container">
            <div class="row">
                <h4>HARDCO GROUP</h4>
                <hr class="line_one">
                <p>The <span>Hardco Group</span> is a multidisciplinary company established in <span>1976</span> with a vision to contribute to the diverse engineering requirements in the GCC region.</p>
                <p>With over four decades of excellence , Hardco provides specialist solutions to our clients in the fields of <span> civil engineering, structural steel engineering, tensile membrane systems</span> and <span>wood coating</span> solutions.</p>
                <hr class= "line_two">
                <div class="col-md-12 button-row">
                    <button>More <i class="fa fa-angle-right" aria-hidden="true"></i></button>
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

    <script type="text/javascript">
        $('.carousel').carousel({
          interval: 5000
        })
    </script>
</body> 

</html>
