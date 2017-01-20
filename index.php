<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Big Five Inventory</title>

  <!-- Bootstrap Core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Theme CSS -->
  <link href="css/clean-blog.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">

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
  <header class="intro-header" style="background-image: url('img/home-bg.jpg')">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
          <div class="site-heading">
            <div class="header-site">
            <h1>Big Five Inventory</h1>
            <hr class="small">
            <span class="subheading">A self-report inventory designed to measure the Big Five dimensions</span>
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- Main Content -->
  <div class="container">
    <div class="row">
      <div>
        <div class="post-preview">
          <form class="form-horizontal" action="result.php" method="post">
            <p><strong>Directions:</strong> The following statements concern your perception about yourself in a variety of situations. Your task is to indicate the strength of your agreement with each statement, utilizing a scale in which 1 denotes strong disagreement, 5 denotes strong agreement, and 2, 3, and 4 represent intermediate judgments. In the boxes after each statem</p>

            <ol>
              <li>Strongly disagree</li>
              <li>Disagree</li>
              <li>Neither disagree nor agree</li>
              <li>Agree</li>
              <li>Strongly agree</li>
            </ol>

            <p>There are no "right" or "wrong" answers, so select the number that most closely reflects you on each statement. Take your time and consider each statement carefully. Once you have completed all questions click "Submit" at the bottom.</p>
            <h2 class="post-subtitle">
              I see myself as someone who...
            </h2>
            <p class="post-meta"></p>
            <table class="table form-style">
              <tbody>
                  <?php
                    $handle = fopen("data/question.txt", "r");
                    if ($handle) {
                      $i = 1;
                      while (($line = fgets($handle)) !== false) {
                  ?>
                        <tr>
                          <td>...<?php echo $line; ?></td>
                          <td>
                            <span class="disagree">Strongly Disagree</span>
                            <input type="radio" name=<?php echo "bfi" . $i; ?> value="1" required> 1
                            <input type="radio" name=<?php echo "bfi" . $i; ?> value="2" required> 2
                            <input type="radio" name=<?php echo "bfi" . $i; ?> value="3" required> 3
                            <input type="radio" name=<?php echo "bfi" . $i; ?> value="4" required> 4
                            <input type="radio" name=<?php echo "bfi" . $i; ?> value="5" required> 5
                            <span class="agree">Strongly Agree</span>
                          </td>
                        </tr>
                  <?php
                        $i++;
                      }
                      fclose($handle);
                    } else {
                      echo "Error opening file";
                    } 
                  ?>
              </tbody>
            </table>

            <hr>

            <h2 class="post-title">
              Personal Information
            </h2>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label class="control-label col-sm-2" for="name">Name:</label>
                  <div class="col-sm-10">
                    <input type="name" class="form-control" id="name" name="name" required>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-sm-2" for="age">Age:</label>
                    <div class="col-sm-3">
                      <input type="number" class="form-control" id="age" name="age" required>
                    </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-sm-2" for="email">Email:</label>
                  <div class="col-sm-10">
                    <input type="email" class="form-control" id="email" name="email" required>
                  </div>
                </div>
              </div>
            </div>
            <button type="submit" class="btn btn-default button-submit">Submit</button>
          </form>
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
          <p class="copyright text-muted">Copyright &copy; Tifani Warnita 2017</p>
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

</body>

</html>
