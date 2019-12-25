<?php
  include("classes.php");
  $session = new Session();
  $session->signinSessionStart(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Trophien Contact - Registration</title>
  <meta charset = "utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0, shrink-to-fit=no">
  <meta name="theme-color" content="#7D6FE9">
  <link rel="icon" href="img/global/icon.png">
  <meta name="description" content="We produce android applications and games. Welcome to the official Trophien website and discover our world.">
  <meta name="keywords" content="trophien, trophienapps, applications, application, app, mobile, mobile app, mobile games, games">
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

<body id="signin" onload="birthDate()">
<header class="container-fluid">
  <nav class="px-5 row navbar navbar-expand-md navbar-light fixed-top" id="navbar">
    <div class="container pl-1 mw-1200">
      <a class="navbar-brand" href="index.php">
        <img src="img/global/brand_white.png" id="brand" alt="">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample03" aria-controls="navbarsExample03" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarsExample03">
        <ul class="nav navbar-nav mr-auto pt-1">
          <li class="nav-item"><a class="nav-link text-light" href="index.php">HOME</a></li>
        </ul>
      </div>
    </div>
  </nav>
</header>

<!-- EMAIL VISSZAJELZÉS BEÁLLÍTÁSA -->

<section class="container-fluid pt-5">
  <div class="container pt-5">
    <div class="row px-3">
      <div id="registration_box" class="col-lg-7 mx-auto p-5">
        <div class="pb-3">
          <h1 class="fade heading d-inline">REGISTRATION</h1>
        </div>
        <form method="POST">
          <div class="form-group">
            <input type="text" name="input_username" placeholder="Username" class="form-control" value="<?php echo isset($_POST['input_username']) ? $_POST['input_username'] : '' ?>">
          </div>
          <div class="form-group">
            <input type="email" name="input_email" placeholder="E-mail" class="form-control" value="<?php echo isset($_POST['input_email']) ? $_POST['input_email'] : '' ?>">
          </div>
          <div class="form-group">
            <input type="text" name="input_firstname" placeholder="Firstname" class="form-control" value="<?php echo isset($_POST['input_firstname']) ? $_POST['input_firstname'] : '' ?>">
          </div>
          <div class="form-group">
            <input type="text" name="input_lastname" placeholder="Lastname" class="form-control" value="<?php echo isset($_POST['input_lastname']) ? $_POST['input_lastname'] : '' ?>">
          </div>
          <div class="form-group">
            <input id="birthDate" type="date" name="input_birthdate" placeholder="Birthdate" class="form-control" value="<?php echo isset($_POST['input_birthdate']) ? $_POST['input_birthdate'] : '' ?>">
          </div>
          <div class="form-group">
            <input type="password" name="input_password" placeholder="Password" class="form-control">
          </div>
          <div class="form-group">
            <input type="password" name="input_password_again" placeholder="Password again" class="form-control">
          </div>
          <input type="hidden" name="action" value="cmd_registration">
          <input type="submit" class="btn btn-warning float-right" value="Registration">
        </form>
        <a href="signin.php" class="float-left contact_link pt-2">I have a profile already</a> <?php
        if (isset($_POST["action"]) && $_POST["action"] == "cmd_registration")
        {
          if (empty($_POST["input_username"]) ||
              empty($_POST["input_email"]) ||
              empty($_POST["input_firstname"]) ||
              empty($_POST["input_lastname"]) ||
              empty($_POST["input_birthdate"]) ||
              empty($_POST["input_password"]) ||
              empty($_POST["input_password_again"]))
          { ?>
            <div class="modal fade" id="successModal" tabindex="-1" role="dialog" aria-labelledby="errorModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content error-modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="errorModalLabel">Error</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">You have to fill all the blank!</div>
                </div>
              </div>
            </div> <?php  
          }
          else
          {
            $data = new Session();
            $data->connect();
            $data->registration($_POST["input_username"], $_POST["input_email"], $_POST["input_firstname"], $_POST["input_lastname"], $_POST["input_birthdate"], $_POST["input_password"], $_POST["input_password_again"]);
            $data->disconnect();
          }
        } ?>
      </div>
    </div>
  </div>
</section>
</body>
</html>