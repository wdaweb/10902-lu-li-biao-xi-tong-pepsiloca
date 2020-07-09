<?php include_once "base.php";?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Loca Huang</title>
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="img/logo_1.png" type="image/x-icon">
    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">


    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome/css/font-awesome.css">

    <!-- Stylesheet
    ================================================== -->
    <link rel="stylesheet" type="text/css" href="css/stylefront.css">
    <link rel="stylesheet" type="text/css" href="css/prettyPhoto.css">
    <script src="https://kit.fontawesome.com/d788500399.js" crossorigin="anonymous"></script>

    <style>
    .intro {
        background: url(img/intro-bg.jpg) no-repeat center top;
    }
    </style>
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

    <?php
      //取得標題文字的資料並顯示在相應的位置
      $title=new DB('title') ;
      $ti=$title->find(['sh'=>1]);
    ?>
    <!-- Header -->
    <header id="header">
        <div class="intro" style="background:url(&#39;img/<?=$ti['img'];?>&#39;)">
            <div class="container">
                <div class="row">
                    <div class="intro-text">
                        <h1><span class="name">Loca Huang</span></h1>
                        <p>Graphic Designer & Illustrator</p>
                    </div>
                </div>
            </div>
    </header>
    <!-- Navigation -->
    <div id="nav">
        <nav class="navbar navbar-custom">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse"
                        data-target=".navbar-main-collapse"> <i class="fa fa-bars"></i> </button>
                    <a class="navbar-brand page-scroll" href="#page-top">Loca Huang</a> </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                    <ul class="nav navbar-nav">
                        <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                        <li class="hidden"> <a href="#page-top"></a> </li>
                        <li> <a class="page-scroll" href="#about">About</a> </li>
                        <li> <a class="page-scroll" href="#skills">Skills</a> </li>
                        <li> <a class="page-scroll" href="#resume">Resume</a> </li>
                        <li> <a class="page-scroll" href="#portfolio">Portfolio</a> </li>
                        <li> <a class="page-scroll" href="login.php">login</a> </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <!-- About Section -->
    <div id="about">
        <div class="container">
            <div class="section-title text-center center">
                <h2>About Me</h2>
                <hr>
            </div>
    <?php
    
    $photo=new DB('photo') ;
    $phto=$photo->find(['sh'=>1]);
    
    ?>



            <div class="row">
                <div class="col-md-12 text-center"><img src="./img/<?=$phto['img'];?>" class="img-responsive"></div>
                <div class="col-md-8 col-md-offset-2">
                    <div class="F text-center">

                    <?php
                    $about=new DB("about");
                    $bios=$about->all(['sh'=>1]);
                    foreach($bios as $bio){
                    ?>

                        <p><?=$bio['intro'];?> </p>

                        <p class="subheading">雲林科技大學 - 工業設計系</p>
                    </div>

                    <p><?=$bio['bio'];?>
                    </p>
                        <?php
                    }
                        ?>

                    <!-- 聯絡資料 -->
                    <div class="contact card mb-4 text-center">
                        <div class="card-body">
                            <table class="table-contact table table-sm">
                                <tbody>
                                    <h5>黃順琳</h5>
                                    <tr>
                                        <td><i class="far fa-envelope fa-lg"></i>
                                            <a href="mailto:locasketch@gmail.com">locasketch@gmail.com</a></td>
                                    </tr>

                                    <tr>
                                        <td><i class="fab fa-github fa-lg"></i>
                                            <a href="http://github.com/pepsiloca"
                                                target="_blank">http://github.com/pepsiloca</a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!-- Skills Section -->
    <div id="skills">
        <div class="container">
            <div class="section-title text-center center">
                <h2>Skills</h2>
                <hr>
            </div>
            <div class="row">
                <div class="col-md-12 text-center"></div>
                <div class="col-md-8 col-md-offset-2">

                    <div class="block">
                        <ul class="listSkill">
                            <li>
                                <div class="circle">
                                    <div class="p90"></div>
                                    <div class="p180"></div>
                                </div>
                                <h5>HTML</h5>
                            </li>
                            <li>
                                <div class="circle">
                                    <div class="p90"></div>
                                    <div class="p180"></div>
                                </div>
                                <h5>CSS</h5>
                            </li>
                            <li>
                                <div class="circle">
                                    <div class="p90"></div>
                                </div>
                                <h5>PHP</h5>
                            </li>
                            <li>
                                <div class="circle">
                                    <div class="p90"></div>
                                    <div class="p180"></div>
                                    <div class="p270"></div>
                                </div>
                                <h5>Illustration</h5>
                            </li>
                            <li>
                                <div class="circle">
                                    <div class="p90"></div>
                                    <div class="p180"></div>
                                    <div class="p270"></div>
                                </div>
                                <h5>Photoshop</h5>
                            </li>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Resume Section -->
    <div id="resume" class="text-center">
        <div class="container">
            <div class="section-title center">
                <h2>Experience</h2>
                <hr>
            </div>
            <div class="row">
                <div class="col-md-12 text-center"></div>
                <?php
                  $exp=new DB("exp");
                  $exps=$exp->all(['sh'=>1]);
                  foreach($exps as $ex){
                ?>
                <div class="col-md-8 col-md-offset-2">
                    <div class="aboutMe about-text">
                     <h4><?=$ex['title'];?></h4>
                     <p><strong><?=$ex['year'];?></strong></p>
                     <p><?=$ex['content'];?></p>
                    </div>
                </div>
                <br>
                <?php
                  }
                ?>
            </div>
        </div>
    </div>
<br>
<br>
    <!-- Portfolio Section -->
    <div id="portfolio">
        <div class="container">
            <div class="section-title text-center center">
                <h2>Portfolio</h2>
                <hr>
            </div>
            <div class="categories">
                <div class="clearfix"></div>
            </div>
            <div class="row">
                <div class="portfolio-items">
                <!-- 開始 -->
                    <div class="col-sm-6 col-md-3 col-lg-3">
                        <div class="portfolio-item">
                            <div class="hover-bg"> <a href="http://220.128.133.15/s1090206/invoice-pepsiloca/">
                                    <div class="hover-text">
                                        <h4>Invoice</h4>
                                        <small>Web Design</small>
                                    </div>
                                    <img src="img/portfolio/invoice_S.jpg" class="img-responsive">
                            </div>
                        </div>
                    </div>
                    <!-- 結束 -->
                    <div class="col-sm-6 col-md-3 col-lg-3">
                        <div class="portfolio-item">
                            <div class="hover-bg"> <a href="http://220.128.133.15/s1090206/AnalogClock/">
                                    <div class="hover-text">
                                        <h4>DigiClock</h4>
                                        <small>Web Design</small>
                                    </div>
                                    <img src="img/portfolio/clock_S.jpg" class="img-responsive">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3 col-lg-3">
                        <div class="portfolio-item">
                            <div class="hover-bg"> <a href="http://220.128.133.15/s1090206/clickGame/">
                                    <div class="hover-text">
                                        <h4>ClickGame</h4>
                                        <small>Web Design</small>
                                    </div>
                                    <img src="img/portfolio/click_S.jpg" class="img-responsive">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3 col-lg-3">
                        <div class="portfolio-item">
                            <div class="hover-bg"> <a href="img/portfolio/boy_L.jpg">
                                    <div class="hover-text">
                                        <h4>小牧童</h4>
                                        <small>Illustration</small>
                                    </div>
                                    <img src="img/portfolio/boy_S.jpg" class="img-responsive">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3 col-lg-3">
                        <div class="portfolio-item">
                            <div class="hover-bg"> <a href="img/portfolio/shark_L.jpg">
                                    <div class="hover-text">
                                        <h4>小鯊魚繪本插圖</h4>
                                        <small>Illustration</small>
                                    </div>
                                    <img src="img/portfolio/shark_S.jpg" class="img-responsive">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3 col-lg-3">
                        <div class="portfolio-item">
                            <div class="hover-bg"> <a href="img/portfolio/book_L.jpg">
                                    <div class="hover-text">
                                        <h4>我的好朋友被我惹哭了</h4>
                                        <small>Illustration</small>
                                    </div>
                                    <img src="img/portfolio/book_S.jpg" class="img-responsive">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3 col-lg-3">
                        <div class="portfolio-item">
                            <div class="hover-bg"> <a href="img/portfolio/bird_L.jpg">
                                    <div class="hover-text">
                                        <h4>大嘴鳥筆記本</h4>
                                        <small>Graphic Design</small>
                                    </div>
                                    <img src="img/portfolio/bird_S.jpg" class="img-responsive">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3 col-lg-3">
                        <div class="portfolio-item">
                            <div class="hover-bg"> <a href="img/portfolio/dog_L.jpg">
                                    <div class="hover-text">
                                        <h4>聖派翠克小貼紙</h4>
                                        <small>Graphic Design</small>
                                    </div>
                                    <img src="img/portfolio/dog_S.jpg" class="img-responsive">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- 固定右下 -->
    <!-- <a href="#page-top" class="btn btn-info position-fixed"><i class="fas fa-angle-double-up"></i></a> -->

    <script type="text/javascript" src="js/jquery.1.11.1.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script type="text/javascript" src="js/SmoothScroll.js"></script>
    <script type="text/javascript" src="js/jquery.prettyPhoto.js"></script>
</body>

</html>