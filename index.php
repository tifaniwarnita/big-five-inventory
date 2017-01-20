<!DOCTYPE html>
<html>

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
          <button class="language btn btn-default" onclick="document.body.className='en'">English</button>
          <button class="language btn btn-default" onclick="document.body.className='id'">Bahasa</button>

          <form class="form-horizontal" action="result.php" method="post">
            <p lang="en"><strong>Directions:</strong> The following statements concern your perception about yourself in a variety of situations. Your task is to indicate the strength of your agreement with each statement, utilizing a scale in which 1 denotes strong disagreement, 5 denotes strong agreement, and 2, 3, and 4 represent intermediate judgments. In the boxes after each statement, click a number from 1 to 5 from the following scale:</p>
            <p lang="id"><strong>Petunjuk:</strong> Berikut adalah daftar pernyataan berdasarkan persepsi Anda terhadap beragam situasi. Tugas Anda adalah untuk menilai seberapa anda setuju dengan setiap pernyataan yang ada menggunakan skala 1 yang merepresentasikan sangat tidak setuju sampai 5 yang merepresentasikan sangat setuju atas pernyataan yang diberikan. Pada setiap pernyataan yang ada, pilih <i>box</i> yang bersesuaian dengan skala:</p>

            <ol>
              <li lang="en">Strongly disagree</li>
              <li lang="id">Sangat tidak setuju</li>
              <li lang="en">Disagree</li>
              <li lang="id">Tidak setuju</li>
              <li lang="en">Neither disagree nor agree</li>
              <li lang="id">Tidak keduanya</li>
              <li lang="en">Agree</li>
              <li lang="id">Setuju</li>
              <li lang="en">Strongly agree</li>
              <li lang="id">Sangat setuju</li>
            </ol>

            <p lang="en">There are no "right" or "wrong" answers, so select the number that most closely reflects you on each statement. Take your time and consider each statement carefully. Once you have completed all questions, fill all the personal information then click "Submit" at the bottom.</p>
            <p lang="id">Tidak ada jawaban yang "benar" maupun "salah" sehingga pilihlah angka yang paling cocok dengan persepsi Anda untuk setiap pernyataan yang diberikan. Silakan pikirkan jawaban Anda dengan baik. Setelah selesai menjawab semua pertanyaan, isi informasi data pribadi yang disediakan lalu pilih "Kirim".</p>
            <h2 class="post-subtitle" lang="en">
              I see myself as someone who...
            </h2>
            <h2 class="post-subtitle" lang="id">
              Saya melihat diri saya sebagai orang yang...
            </h2>
            <p class="post-meta"></p>
            <table class="table form-style">
              <tbody>
                  <?php
                    $question_en = array();
                    $question_id = array();
                    $handle = fopen("data/question-en.txt", "r");
                    if ($handle) {
                      while (($line = fgets($handle)) !== false) {
                        array_push($question_en, $line);
                      }
                      fclose($handle);
                    } else {
                      echo "Error opening file";
                    }
                    $handle = fopen("data/question-id.txt", "r");
                    if ($handle) {
                      $i = 1;
                      while (($line = fgets($handle)) !== false) {
                        array_push($question_id, $line);
                      }
                      fclose($handle);
                    } else {
                      echo "Error opening file";
                    }
                    for($i=0; $i<sizeof($question_en); $i++) {
                  ?>
                        <tr>
                          <td lang="en"><?php echo $i+1 . ". <u>____</u>" . $question_en[$i]; ?></td>
                          <td lang="id"><?php echo $i+1 . ". <u>____</u>" . $question_id[$i]; ?></td>
                          <td>
                            <span class="disagree" lang="en">Strongly Disagree</span>
                            <span class="disagree" lang="id">Sangat Tidak Setuju</span>
                            <input type="radio" name=<?php echo "bfi" . $i+1; ?> value="1" required> 1
                            <input type="radio" name=<?php echo "bfi" . $i+1; ?> value="2" required> 2
                            <input type="radio" name=<?php echo "bfi" . $i+1; ?> value="3" required> 3
                            <input type="radio" name=<?php echo "bfi" . $i+1; ?> value="4" required> 4
                            <input type="radio" name=<?php echo "bfi" . $i+1; ?> value="5" required> 5
                            <span class="agree" lang="en">Strongly Agree</span>
                            <span class="agree" lang="id">Sangat Setuju</span>
                          </td>
                        </tr>
                  <?php
                    } 
                  ?>
              </tbody>
            </table>

            <hr>

            <h2 class="post-title" lang="en">
              Personal Information
            </h2>
            <h2 class="post-title" lang="id">
              Data Pribadi
            </h2>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label class="control-label col-sm-2" for="name" lang="en">Name:</label>
                  <label class="control-label col-sm-2" for="name" lang="id">Nama:</label>
                  <div class="col-sm-10">
                    <input type="name" class="form-control" id="name" name="name" required>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-sm-2" for="name" lang="en">Age:</label>
                  <label class="control-label col-sm-2" for="name" lang="id">Umur:</label>
                  <div class="col-sm-3">
                    <input type="number" class="form-control" id="age" name="age" required>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-sm-2" for="name" lang="en">Gender:</label>
                  <label class="control-label col-sm-2" for="name" lang="id">Jenis Kelamin:</label>
                  <div class="col-sm-3">
                    <select class="form-control">
                      <option name="gender" value="male" lang="en" required>Male</option>
                      <option name="gender" value="male" lang="id" required>Laki-laki</option>
                      <option name="gender" value="female" lang="en" required>Female</option>
                      <option name="gender" value="female" lang="id" required>Female</option>
                    </select>
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
            <button type="submit" class="btn btn-default button-submit" lang="en">Submit</button>
            <button type="submit" class="btn btn-default button-submit" lang="id">Kirim</button>
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

  <!-- Etc -->
  <script>document.body.className='en';</script>

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
