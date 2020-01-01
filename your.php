<?php
include("classes.php");
$session = new Session();
$session->sessionStart();

if (isset($_GET["action"]) && $_GET["action"] == "cmdLogout")
{
	$logout = new Session();
	$logout->logout();
} ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Your Trophien</title>
  <meta name="description" content="We produce android applications and games. Welcome to the official Trophien website and discover our world.">
  <meta name="keywords" content="trophien, trophienapps, applications, application, app, mobile, mobile app, mobile games, games">
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

<body onload="dateYear()">
<div class="container-fluid py-2" id="placeholder"></div>
<div class="container-fluid py-2 fixed-top" style="background-color: #ECE9E6">
	<div class="row">
		<div class="col-6">
			<a href="index.php"><img src="img/global/brand_black.png" id="brand" class="img-fluid pt-3" ondragstart="return false;"></a>
		</div>
		<div class="col-6">
			<table class="float-right">
				<tr>
					<td class="pr-3 pt-3">
						<p><?php $data = new Session(); $data->connect(); $data->profileUsername(); ?></p>
					</td>
					<td>
						<img src="img/contact/profile/<?php $data->profileImage(); ?>" class="img-fluid dropdown-toggle" id="dropdownMenuButton" ondragstart="return false;" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="max-height: 50px; cursor: pointer;">
						<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item" href="index.php">Main page</a>
						<a class="dropdown-item" href="profile.php">Profile settings</a>
						<a class="dropdown-item" href="your.php?action=cmdLogout">Logout</a></div>
					</td>
				</tr>
			</table>
		</div>
	</div>
</div>

<section id="games">
  <div class="container-fluid py-3 pt-5">
	  <div class="row">
		  <div class="col-12">
		    <h1 class="text-light" style="font-size: 5vw;">Welcome <?php $data->profileFirstname(); $data->disconnect(); ?>!</h1>
		  </div>
	  </div>
  </div>
  <div class="container text-center pt-5">
	  <div class="row">
		  <div class="col-12">
			  <h1 class="text-light">Your games</h1>
			  <div id="brq" class="mx-auto my-5 games_box box" onclick="comingSoonAlert()">
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
              </a>
          </ul>
        </div>
        <div class="col-sm-6 pt-sm-4">
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