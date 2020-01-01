<?php
include("classes.php");
$session = new Session(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Trophien</title>
    <meta name="description" content="We produce android applications and games. Welcome to the official Trophien website and discover our world.">
    <meta name="keywords" content="trophien, trophienapps, applications, application, app, mobile, mobile app, mobile games, games">
    <!--<meta http-equiv="refresh" content="5000">-->
    <meta charset = "utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0, shrink-to-fit=no">
    <meta name="theme-color" content="#434343">
    <link rel="icon" href="img/global/icon.png">
    <link href="style.css" type="text/css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Sarala" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script type="text/javascript" src="effect.js"></script>
</head>

<body data-spy="scroll" onscroll="checkScroll()" onload="dateYear()" data-target=".navbar" data-offset="50" class="text-dark">

<header class="container-fluid">
    <nav class="row navbar navbar-expand-md navbar-light fixed-top px-5">
	    <div class="container pl-1 mw-1200">
            <a class="navbar-brand" href="#home"><img src="img/global/brand_black.png" id="brand" alt="logo" title="home" ondragstart="return false;"></a>
	    	    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample03" aria-controls="navbarsExample03" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
	    	    <div class="collapse navbar-collapse" id="navbarsExample03">
	    		<ul class="nav navbar-nav mr-auto pt-1">
	    	        <li class="nav-item"><a id="nav" class="nav-link" href="#home">HOME</a></li>
	    	        <li class="nav-item"><a class="nav-link" href="#about_nav">ABOUT</a></li>
	    	        <li class="nav-item"><a class="nav-link" href="#games_nav">GAMES</a></li>
	    	        <li class="nav-item"><a class="nav-link" href="#project_nav">PROJECT</a></li>
	    		</ul> <?php
                if ($session->indexSessionStart() != "")
                { ?>
                    <table class="float-right">
                        <tr>
                            <td class="pr-3 pt-3">
                                <p><?php $data = new Session(); $data->connect(); $data->profileUsername(); ?></p>
                            </td>
                            <td>
                                <img src="img/contact/profile/<?php $data->profileImage(); ?>" class="img-fluid dropdown-toggle" id="dropdownMenuButton" ondragstart="return false;" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="max-height: 50px; cursor: pointer;">
                                <div id="dropdown-margin" style="margin-right: 20%;" class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="your.php">Your Trophien</a>
                                <a class="dropdown-item" href="profile.php">Profile settings</a>
                                <a class="dropdown-item" href="your.php?action=cmdLogout">Logout</a></div>
                            </td>
                        </tr>
                    </table> <?php
                }
                else
                { ?>
                    <form class="form-inline my-2 my-md-0">
                        <a href="signin.php" class="btn float-right btn-outline-trophien-navbar">Sign in</a>
                    </form> <?php
                } ?>
	    	</div>
	    </div>
    </nav>
</header>


<section id="home" class="container-fluid pt-5 text-center">
    <div class="container pt-5">
        <div id="home_box" class="col-xl-9 mx-auto row fade py-4 box">
            <div id="home_box_left" class="col-sm-7 pl-4">
                <h1>Start your discover now!</h1>
                <a href='https://play.google.com/store/apps/dev?id=7792340222053176057&pcampaignid=MKT-Other-global-all-co-prtnr-py-PartBadge-Mar2515-1' target="_blank">
                    <img id="home_google_play" alt='Get it on Google Play' src='https://play.google.com/intl/en_us/badges/images/generic/en_badge_web_generic.png' class="img-fluid mx-auto pt-4" ondragstart="return false;">
                </a>
            </div>
            <div class="col-sm-5">
                <img src="img/home/mobile.png" alt="Hexagon on mobile" class="img-fluid" style="max-height: 500px;" ondragstart="return false;">
            </div>
        </div>
    </div>
</section>



<div id="about_nav"></div>



<section id="about" class="container-fluid pt-5">
    <div class="container pt-5">
        <div class="row px-3">
            <div class="col-lg-7 mx-auto">
         	    <h1 class="fade display-4 heading d-inline">ABOUT </h1><h1 class="fade display-4 heading d-inline muted">US</h1>
                <h5 class="fade">Welcome to the Official Trophien website!</h5>
                <p class="text-justify fade pt-3">You ask, why exactly our name is Trophien? Trophy is a really popular object, which you can collect in games, that's why we have chose it as our logo. Althrough to this logo, we had to guess a good, but short name, which consists of one word. Trophy was too common, But the name Trophien is perfect. We are a Start up company at this moment, and our Headquarters is located in Hungary. Our workers are motivated to do their best, to make fun games, and to make Trophien one of the biggest names in Mobile Application Development, and in Game Development too.</p>
            </div>
            <div class="col-lg-5 fade">
                <img src="img/about/mobile.png" alt="Mobile" class="img-fluid" ondragstart="return false;">
            </div>
        </div>
    </div>
</section>



<div id="games_nav"></div>



<section id="games" class="py-5 pt-5 text-light text-center">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 pt-5">
                <h1 class="text-left fade display-4 heading">APPS & GAMES</h1>
                <h5 class="text-left fade">Check it out</h5>
            </div>
        </div>
    </div>
    <div id="demo" class="carousel slide" data-ride="carousel" data-interval="false">
        <ul class="carousel-indicators">
            <li data-target="#demo" data-slide-to="0" class="active"></li>
            <li data-target="#demo" data-slide-to="1"></li>
            <li data-target="#demo" data-slide-to="2"></li>
            <!--<li data-target="#demo" data-slide-to="2"></li>-->
        </ul>
        <div class="carousel-inner">
            <!-- OTS
            <div class="carousel-item active">
              <div id="ots" class="col-md-5 mx-auto my-5 games_box fade box" onclick="window.open('https://play.google.com/store/apps/details?id=com.companyname.OverTheSky');">
                <img src="img/games/ots.png" alt="Over The Sky" class="img-fluid pt-5 games_icon" ondragstart="return false;">
                <h3 class="pb-3 pt-4">Over The Sky</h3>
                <ul class="text-left">
                  <li>Don't collide with rockets</li>
                  <li>Arcade game</li>
                  <li>For all age group</li>
                </ul>
              </div>
            </div>-->

            <!-- CCH -->
            <div class="carousel-item active">
              <div id="cch" class="col-md-5 mx-auto my-5 games_box fade box" onclick="window.open('https://play.google.com/store/apps/details?id=app.trophien.colorchoose');">
                <img src="img/games/cch.png" alt="ColorChoose" class="img-fluid pt-5 games_icon" ondragstart="return false;">
                <h3 class="pb-3 pt-4">ColorChoose</h3>
                <ul class="text-left">
                  <li>Choose your color with RGB and HEX code</li>
                  <li>Application</li>
                  <li>For all age group</li>
                </ul>
              </div>
            </div>

            <!-- HEX -->
            <div class="carousel-item">
              <div id="hex" class="mx-auto my-5 games_box fade box" onclick="comingSoonAlert()">
                <img src="img/games/hex.png" alt="Hexagon" class="img-fluid pt-5 games_icon" ondragstart="return false;">
                <h3 class="pb-3 pt-4">Hexagon</h3>
                <ul class="text-left">
                  <li>Tap, when ball collides with wall</li>
                  <li>Arcade game</li>
                  <li>For all age group</li>
                  <li class="text-warning">COMING SOON!</li>
                </ul>
              </div>
            </div>

            <!-- BRQ -->
            <div class="carousel-item">
              <div id="brq" class="mx-auto my-5 games_box fade box" onclick="comingSoonAlert()">
                <img src="img/games/brq.png" alt="Hexagon" class="img-fluid pt-5 games_icon" ondragstart="return false;">
                <h3 class="pb-3 pt-4">BrizQ</h3>
                <ul class="text-left">
                  <li>Match with your friend in questions</li>
                  <li>Quiz game</li>
                  <li>For all age group</li>
                  <li class="text-warning">COMING SOON!</li>
                </ul>
              </div>
            </div>

        </div>
        <a class="carousel-control-prev" href="#demo" data-slide="prev"><span class="carousel-control-prev-icon"></span></a>
        <a class="carousel-control-next" href="#demo" data-slide="next"><span class="carousel-control-next-icon"></span></a>
    </div>
</section>



<section id="quote" class="text-center text-light">
    <h1 id="quote_text" class="fade display-4">&bdquo;Our engine is <i>creativity</i> &rdquo;</h1>
</section>



<div id="project_nav"></div>



<section id="project" class="container-fluid py-5">
    <div class="container py-5">
        <div class="row px-3">
      	    <div class="col-lg-7">
       	        <h1 class="fade display-4 heading muted d-inline">OUR </h1><h1 class="fade display-4 heading d-inline">PROJECTS</h1>
                <p class="text-justify pt-3">The next goal of Trophien, is to make a Quiz, which is connected to a Server. Brizq will be a really simple Quiz game. Two people will play against each other, and the winner will be that player, who can answer correctly on more questions in the shortest period of time.</p>
                <h5 class="pt-3">What programs do we use?</h5>
                <p class="text-justify">We use a really simple softwares, called Unity for games and Android Studio for applications, with a built-in programing language, called GMS. To make designs for our games, we use Adobe softwares, called Illustrator, and Photoshop.</p>
                <div id="counter" class="Count d-inline">2</div><h2 class="d-inline pl-2">years</h2><br>
                <div id="counter" class="d-inline">1</div><h3 class="d-inline pl-2">app</h2><br>
      	    </div>
        </div>
    </div>
</section>



<footer id="footer" class="text-light">
    <div class="container-fluid pt-5 pb-3">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 pt-1 pl-4">
                    <!-- social icons -->
                    <h6>Social</h6>
                    <ul class="list-unstyled">
                        <li class="d-inline">
                            <a href="https://www.facebook.com/trophienapps/" target="_blank">
                                <img src="img/social/facebook.svg" id="facebook_icon_back" class="img-fluid py-2 social_icon" ondragstart="return false;">
                                <img src="img/social/facebook_white.svg" id="facebook_icon_front" class="img-fluid py-2 social_icon" ondragstart="return false;">
                            </a>
                        </li>
                        <li class="d-inline">
                            <a href="https://twitter.com/trophien" target="_blank">
                                <img src="img/social/twitter.svg" id="twitter_icon_back" class="img-fluid py-2 social_icon" ondragstart="return false;">
                                <img src="img/social/twitter_white.svg" id="twitter_icon_front" class="img-fluid py-2 social_icon" ondragstart="return false;">
                            </a>
                        </li>
                        <li class="d-inline">
                            <a href="https://www.instagram.com/trophienapps/" target="_blank">
                                <img src="img/social/instagram.svg" id="instagram_icon_back" class="img-fluid py-2 social_icon" ondragstart="return false;">
                                <img src="img/social/instagram_white.svg" id="instagram_icon_front" class="img-fluid py-2 social_icon" ondragstart="return false;">
                            </a>
                        </li>
                        <li class="d-inline">
                            <a href="https://www.youtube.com/channel/UCwMCarQ1UZ6T3j8x0l569-A?view_as=subscriber" target="_blank">
                                <img src="img/social/youtube.svg" id="youtube_icon_back" class="img-fluid py-2 social_icon" ondragstart="return false;">
                                <img src="img/social/youtube_white.svg" id="youtube_icon_front" class="youtube-fluid py-2 social_icon" ondragstart="return false;">
                            </a>
                        </li>
                        <li class="d-inline">
                            <a href="mailto:contact@trophien.com">
                                <img src="img/social/email.svg" id="email_icon_back" class="img-fluid py-2 social_icon" ondragstart="return false;">
                                <img src="img/social/email_white.svg" id="email_icon_front" class="youtube-fluid py-2 social_icon" ondragstart="return false;">
                            </a></li>
                            <!--https://stackoverflow.com/questions/22941457/open-email-client-through-javascript-->
                    </ul>
                </div>
                <div class="col-sm-6 pt-sm-4">
                    <!-- google icon -->
                    <a href='https://play.google.com/store/apps/dev?id=7792340222053176057&hl=hu&pcampaignid=MKT-Other-global-all-co-prtnr-py-PartBadge-Mar2515-1' target="_blank">
                        <img id="google_play" alt='Get it on Google Play' src='https://play.google.com/intl/en_us/badges/images/generic/en_badge_web_generic.png' class="img-fluid" ondragstart="return false;">
                    </a>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-7 pl-4">
                    <h6>Links</h6>
                    <ul class="list-unstyled">
                        <li class="pt-2">
                            <a href="privacy.php" class="footer_link">Privacy policy</a>
                        </li>
                        <li class="pt-2">
                            <a onclick="comingSoonAlert()" class="footer_link">Terms of service</a>
                        </li>
                        <li class="pt-2">
                            <a onclick="comingSoonAlert()" class="footer_link">Media & Press</a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-5 pr-md-4">
                    <img src="img/global/brand_footer.svg" id="footer_logo" class="img-fluid float-right pt-5" ondragstart="return false;">
                </div>
            </div>
      </div>
    </div>
    <div id="footer_bottom" class="container-fluid py-4 text-center">
        <h6 class="text-secondary d-inline">2017 -</h6>
        <h6 id="dateYear" class="d-inline text-secondary"></h6>
        <h6 class="d-inline text-secondary">:</h6>
        <h6 class="d-inline">&nbspTrophien Applications</h6>
    </div>
</footer>

</body>
</html>