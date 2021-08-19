<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Blossom Gardeners</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">


    <link href="css/blossom.css" rel="stylesheet">
  </head>

  <body>

    <nav class="navbar navbar-fixed-top navbar-inverse" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php"> Blossom Gardeners </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
          <ul class="nav navbar-nav">
            <li><a href="#home">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#services">Services</a></li>
            <li><a href="#news">News</a></li>
            <li><a href="#contact">Contact</a></li>
            <li><a href="form1.php">User</a></li>
            <li><a href="login.php" class="btn btn-primary">Login</a></li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container -->
    </nav>

    <div class="header-image">
      <img src="images/flowers.jpg" alt="Snow" style="width:100%;">
      <div class="top-left">
          <h1> Blossom Garderning </h1>
          <h3> Designing the landscape </h3>
        </div>
      </div>

    </div><!-- /header-image -->

    <div class="container">

      <!-- START THE FEATURETTES -->

      <hr class="featurette-divider">

      <div class="featurette" id="about">
        <img class="featurette-image img-responsive pull-right" src="images/garden_5.jpg">
        <h2 class="featurette-heading"> About <span class="text-muted"></span></h2>
        <p class="lead"> Blossom Gardening is the natural partner of all plant loving people. With the mission to bring beauty back in the cities, we provide proffesional gardening services to change your home and office space. We excel in finding innovative solutions to your space constraints and bring nature closer to you. </p>
      </div>

      <hr class="featurette-divider">

      <div class="featurette" id="services">
        <img class="featurette-image img-responsive pull-left" src="images/garden_3.jpg">
        <h2 class="featurette-heading">Services <span class="text-muted">and beyound.</span></h2>
        <p class="lead">We provide a range of services to cater to all your gardening need.</p>
        <li> <a span class="text-muted" href="landscaping.php"  >Landscaping</span> </li>
        <li><a span class="text-muted" href="terrace_gardening.php" >Terrace Gardening</span></li>
        <li><a span class="text-muted" href="indoor.php" >Indoor Gardening</span></li>
        <li><a span class="text-muted" href="lawn.php" >Lawn Mowing Services</span></li>
        <li><a span class="text-muted" href="plant.php"  >Plant Sapling</span></li>
        <li><a span class="text-muted" href="equipment.php" >Gardening Equipment</span></li>
        <li><a span class="text-muted" href="fertilizer.php" >Fertilzer</span></li>
        <li><a span class="text-muted" href="farming.php" >Farming</span></li>
        <li><a span class="text-muted" href="consulting.php"  >Consulting</span></li>
        <li><a span class="text-muted" href="decoration.php" >Decorations</span></li>
      </div>

      <hr class="featurette-divider">
      <body style="background-color:powderblue;">
       <div class="featurette" id="News">
         <h2 class="featurette-heading"> News <span class="text-muted"></span></h2>
         <p class="lead"><em>Blossom Gardening begins changing the landscape of metropolitan cities with its innovative planning.</em>   <sub><em> The New York Times</em> </sub> </p>
         <p> </p>
         <p class="lead"><em>Landscaping startup Blossom Gradening raises undisclosed amount in series A round.                  </em>   <sub><em> Washington Post</em> </sub> </p>
         <p> </p>
         <p class="lead"><em>Founders of Blossom Gardening make to 30 under 30 list of 2021.                  </em>   <sub><em> Forbes</em> </sub> </p>
       </div>
      </body>

      <hr class="featurette-divider">

      <div class="featurette" id="contact">
        <img class="featurette-image img-circle img-responsive pull-right" src="images/garden_6.jpg">
        <h2 class="featurette-heading">Contact <span class="text-muted"></span></h2>
        <?php
          $myfile = fopen("contact.txt", "r") or die("Unable to open file!");
          while(!feof($myfile)) {
            echo fgets($myfile) . "<br>";
          }
          fclose($myfile);
          ?>
      </div>

      <!-- /END THE FEATURETTES -->

      <hr>

      <!-- FOOTER -->
      <footer>
        <p>Copyright &copy; Shivendra Kumar </p>
      </footer>
      <!-- /END OF FOOTER -->

    </div><!-- /container -->

    <!-- JavaScript -->
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.js"></script>

  </body>

</html>
