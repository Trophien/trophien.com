<?php
include("classes.php");
$session = new Session(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
<head>
  <title>Trophien - Privacy policy</title>
  <meta name="description" content="This Privacy Policy applies to Trophien's games, websites and related services, which we here collectively call the Service.">
  <meta name="keywords" content="trophien, trophienapps, applications, application, app, mobile, mobile app, mobile games, games, privacy, privacy policy">
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

<body id="privacy" onload="dateYear()">
  <header class="container-fluid">
    <nav class="px-5 row navbar navbar-expand-md navbar-light fixed-top" id="navbar_privacy">
      <div class="container pl-1 mw-1200">
        <a class="navbar-brand" href="index.php">
          <img src="img/global/brand_black.png" id="brand">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample03" aria-controls="navbarsExample03" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExample03">
          <ul class="nav navbar-nav mr-auto pt-1">
            <li class="nav-item"><a class="nav-link" href="index.php">HOME</a></li>
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



  <div id="privacy_home"></div>



  <div class="container-fluid py-5">
    <div class="container">
      <div class="row px-3 py-5">
        <div class="col-sm-1 side">
        </div>
        <div class="col-sm-11 pt-2">
          <h3>Thanks for playing our games! This Privacy Policy describes:</h3>
          <ul>
            <li><b>The ways we collect personal data</b></li>
            <li><b>How we use your personal data</b></li>
          </ul>
          <p>This Privacy Policy applies to Trophien's games, websites and related services, which we here collectively call the Service. We may periodically update this Privacy Policy.</p><br>
          <h4>The Data we collect:</h4>
          <ul>
            <li>Data you provide us</li>
            <li>Contact information (such as name and email address)</li>
            <li>Player name and password</li>
            <li>Profile information (such as profile photo)</li>
            <li>Your messages to the Service (such as chat logs and player support tickets)</li>
            <li>Other data you choose to give us (such as data to identify a lost account)</li>
          </ul><br>
          <h4>The Data we collect automatically:</h4>
          <ul>
            <li>Data about your account and game progress</li>
            <li>Your IP address and mobile device identifiers (such as your device ID, advertising ID, MAC address, IMEI)</li>
            <li>Data about your device, such as device name and operating system, browser type and language</li>
            <li>Data we collect with cookies and similar technologies (see more below)</li>
            <li>General location data</li>
            <li>Precise geo-location data (GPS, with your consent)</li>
            <li>Data about your use of the Service, such as gameplay data and your interactions with other players inside the Service</li>
          </ul><br>
          <h4>Why is your Data important for us?</h4>
          <h5>Because we want...</h5>
          <ul>
            <li>To make the Service work</li>
            <li>To perform the contract, we process data necessary to</li>
            <li>To create accounts and allow you to play our games and use our Service</li>
            <li>To operate the Service</li>
            <li>To verify and confirm payments</li>
            <li>To provide and deliver products and services you request</li>
          </ul>
        </div>
      </div>
    </div>
  </div>



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
                </a>
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
                <a href="index.php" class="footer_link">Home</a>
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