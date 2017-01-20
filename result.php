<?php include_once "function.php" ?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Clean Blog - Contact</title>

  <!-- Bootstrap Core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Theme CSS -->
  <link href="css/clean-blog.css" rel="stylesheet">
  <link href="node_modules/bootstrap-slider/dist/css/bootstrap-slider.css" rel="stylesheet">


  <!-- Custom Fonts -->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-default navbar-custom navbar-fixed-top">
    <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header page-scroll">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
          <span class="sr-only">Toggle navigation</span>
          Menu <i class="fa fa-bars"></i>
        </button>
        <a class="navbar-brand" href="index.html">Start Bootstrap</a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav navbar-right">
          <li>
            <a href="index.html">Home</a>
          </li>
          <li>
            <a href="about.html">About</a>
          </li>
          <li>
            <a href="post.html">Sample Post</a>
          </li>
          <li>
            <a href="contact.html">Contact</a>
          </li>
        </ul>
      </div>
      <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
  </nav>

  <!-- Page Header -->
  <!-- Set your background image for this header on the line below. -->
  <header class="intro-header" style="background-image: url('img/contact-bg.jpg')">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
          <div class="page-heading">
            <h1>Contact Me</h1>
            <hr class="small">
            <span class="subheading">Have questions? I have answers (maybe).</span>
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- Main Content -->
  <div class="container">
    <div class="row">
      <div>
        <h2 class="post-subtitle">
          Big Five Personality Test Result
        </h2>
        <hr>
        <div class="row">
          <label class="control-label col-sm-2" for="email">Name</label>
          <div class="col-sm-10">
            : <?php echo $_POST["name"]; ?>
          </div>
        </div>
        <div class="row">
          <label class="control-label col-sm-2" for="email">Age</label>
          <div class="col-sm-10">
            : <?php echo $_POST["age"]; ?>
          </div>
        </div>
        <br>
        <strong><u>Big Five Personality</u></strong>
        <br><br>
        <div class="row">
          <div class="col-sm-3 text-right">Extraversion</div>
          <div class="col-sm-6">
            <input id="ex8" data-provide="slider" data-slider-id='ex1Slider' type="text" data-slider-min="0" data-slider-max="100" data-slider-step="1" data-slider-value=<?php echo extraversion() * 100/5; ?> data-slider-tooltip="always"/>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-1"></div>
          <div class="col-sm-5"><hr></div>
        </div>
        <div class="row">
          <div class="col-sm-3 text-right">Agreeableness</div>
          <div class="col-sm-6">
            <input id="ex8" data-provide="slider" data-slider-id='ex1Slider' type="text" data-slider-min="0" data-slider-max="100" data-slider-step="1" data-slider-value=<?php echo agreeableness() * 100/5; ?> data-slider-tooltip="always"/>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-1"></div>
          <div class="col-sm-5"><hr></div>
        </div>
        <div class="row">
          <div class="col-sm-3 text-right">Conscientiousness</div>
          <div class="col-sm-6">
            <input id="ex8" data-provide="slider" data-slider-id='ex1Slider' type="text" data-slider-min="0" data-slider-max="100" data-slider-step="1" data-slider-value=<?php echo conscientiousness() * 100/5; ?> data-slider-tooltip="always"/>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-1"></div>
          <div class="col-sm-5"><hr></div>
        </div>
        <div class="row">
          <div class="col-sm-3 text-right">Neuroticism</div>
          <div class="col-sm-6">
            <input id="ex8" data-provide="slider" data-slider-id='ex1Slider' type="text" data-slider-min="0" data-slider-max="100" data-slider-step="1" data-slider-value=<?php echo neuroticism() * 100/5; ?> data-slider-tooltip="always"/>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-1"></div>
          <div class="col-sm-5"><hr></div>
        </div>
        <div class="row">
          <div class="col-sm-3 text-right">Openness</div>
          <div class="col-sm-6">
            <input id="ex8" data-provide="slider" data-slider-id='ex1Slider' type="text" data-slider-min="0" data-slider-max="100" data-slider-step="1" data-slider-value=<?php echo openness() * 100/5; ?> data-slider-tooltip="always"/>
          </div>
        </div>
      </div>
    </div>
  </div>

  <hr>

  <!-- Footer -->
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
          <ul class="list-inline text-center">
            <li>
              <a href="#">
                <span class="fa-stack fa-lg">
                  <i class="fa fa-circle fa-stack-2x"></i>
                  <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
                </span>
              </a>
            </li>
            <li>
              <a href="#">
                <span class="fa-stack fa-lg">
                  <i class="fa fa-circle fa-stack-2x"></i>
                  <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
                </span>
              </a>
            </li>
            <li>
              <a href="#">
                <span class="fa-stack fa-lg">
                  <i class="fa fa-circle fa-stack-2x"></i>
                  <i class="fa fa-github fa-stack-1x fa-inverse"></i>
                </span>
              </a>
            </li>
          </ul>
          <p class="copyright text-muted">Copyright &copy; Your Website 2016</p>
        </div>
      </div>
    </div>
  </footer>

  <!-- jQuery -->
  <script src="vendor/jquery/jquery.min.js"></script>

  <!-- Bootstrap Core JavaScript -->
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

  <!-- Contact Form JavaScript -->
  <script src="js/jqBootstrapValidation.js"></script>
  <script src="js/contact_me.js"></script>

  <!-- Theme JavaScript -->
  <script src="js/clean-blog.min.js"></script>
  <script src="node_modules/bootstrap-slider/dist/bootstrap-slider.js"></script>

  <?php
    saveInformation();
    addToCSV();
  ?>
</body>

</html>
