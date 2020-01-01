<?php
  include("classes.php");
  $session = new Session();
  $session->signinSessionStart(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Trophien Contact - Sign in</title>
  <meta name="description" content="We produce android applications and games. Welcome to the official Trophien website and discover our world.">
  <meta name="keywords" content="trophien, trophienapps, applications, application, app, mobile, mobile app, mobile games, games">
  <link href="style.css" type="text/css" rel="stylesheet">
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

<body id="signin">
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



<section class="container-fluid pt-5">
  <div class="container pt-5">
    <div class="row px-3">
      <div id="signin_box" class="col-lg-7 mx-auto p-5">
        <div class="pb-3">
          <h1 class="fade heading d-inline">SIGN </h1><h1 class="fade heading d-inline muted">IN</h1>
        </div>
        <form method="POST">
        <div class="form-group">
          <input type="text" name="input_username_email" placeholder="Username or e-mail" class="form-control">
        </div>
        <div class="form-group">
          <input type="password" name="input_password" placeholder="Password" class="form-control">
        </div>
          <input type="hidden" name="action" value="cmd_signin">
          <input type="submit" class="btn btn-success float-right" value="Sign in">
        </form>
        <a href="registration.php" class="float-left contact_link pt-2">I haven't profile yet</a><br><br>
        <a href="forgot.php" class="float-left contact_link">I've forgot my password</a> <?php
        if(isset($_POST["action"]) && $_POST["action"] == "cmd_signin")
        {
          if(empty($_POST["input_username_email"]) || empty($_POST["input_password"]))
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
            $data->signin($_POST["input_username_email"], $_POST["input_password"]);
            $data->disconnect();
          }
        }?>
      </div>
    </div>
  </div>
</section>
</body>