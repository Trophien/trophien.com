<?php
class Session
{
	public $servername = "localhost";
	public $username = "root";
	public $password = "";
	public $dbname = "webpage";
	public $conn = NULL;
	public $sql = NULL;
	public $result = NULL;
	public $row = NULL;
    


  // GLOBAL
	public function sessionStart()
	{
		session_start();
		if ($_SESSION["login_state"] == "")
		{
			header("location: index.php");
			die();
		}
  }

  public function connect()
	{
		$this->conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
		if ($this->conn->connect_error)
		{
			die ("Connection failed: " . $this->conn->connect_error);
		}
		$this->conn->query("SET NAMES 'UTF8';");
  }

  public function logout()
	{
	  $_SESSION["login_state"] = "";
	  header("location: index.php");
  }
  
	public function disconnect()
	{
		$this->conn->close();
  }
  


  // INDEX
  public function indexSessionStart()
	{
    session_start();
    return $_SESSION["login_state"];
  }



  // SIGN IN
  public function signinSessionStart()
  {
    session_start();
    if(!isset($_SESSION["login_state"]))
    {
      $_SESSION["login_state"] = "";
    }
    if($_SESSION["login_state"] != "")
    {
      header("location: your.php");
      die();
    }
  }

  public function signin($usernameEmail, $password)
  {
    $this->sql = "SELECT * FROM user WHERE username = '".$usernameEmail."' OR email = '".$usernameEmail."'";
    $this->result = $this->conn->query($this->sql);
    if ($this->result->num_rows == 1)
    {
      $this->row = $this->result->fetch_assoc();
      if (password_verify($password, $this->row["password"]))
      {
        $_SESSION["login_state"] = $this->row["id"];
        header("location: your.php");
        die();
      }
      else
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
              <div class="modal-body">Password is incorrect!</div>
            </div>
          </div>
        </div> <?php
      }
    }
    else
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
            <div class="modal-body">Username or e-mail is incorrect!</div>
          </div>
        </div>
      </div> <?php
    }
  }



  // REGISTRATION
  public function registration($username, $email, $firstname, $lastname, $birthdate, $password, $passwordAgain)
  {
    $this->existUsername = "SELECT * FROM user WHERE username = '".$_POST["input_username"]."'";
    $this->existEmail = "SELECT * FROM user WHERE email = '".$_POST["input_email"]."'";
    $this->resultUsername = $this->conn->query($this->existUsername);
    $this->resultEmail = $this->conn->query($this->existEmail);
    $this->minAge = strtotime("+13 years", strtotime($birthdate));
    $this->uppercase = preg_match('@[A-Z]@', $password);
    $this->lowercase = preg_match('@[a-z]@', $password);
    $this->number = preg_match('@[0-9]@', $password);
    if ($this->resultUsername->num_rows == 0 && $this->resultEmail->num_rows == 0 && $password == $passwordAgain && $this->uppercase && $this->lowercase && $this->number && time() > $this->minAge)
    {
      $this->sql = "INSERT INTO user(username, email, password, firstname, lastname, birthdate, image) VALUES ('".$username."', '".$email."', '".password_hash($password, PASSWORD_DEFAULT)."', '".$firstname."', '".$lastname."', '".$birthdate."', 'profile.png')";
      if ($this->conn->query($this->sql))
      { ?>
        <div class="modal fade" id="successModal" tabindex="-1" role="dialog" aria-labelledby="successModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content success-modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="successModalLabel">Success</h5>
              </div>
              <div class="modal-body">Wait a few seconds...</div>
            </div>
          </div>
        </div>
        <meta http-equiv="refresh" content="1; url = signin.php"> <?php
      }
      else
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
              <div class="modal-body">Server error, try again later!</div>
            </div>
          </div>
        </div> <?php
      }
    }
    else
    { ?>
      <div class="modal fade" id="errorModal" tabindex="-1" role="dialog" aria-labelledby="errorModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content error-modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="errorModalLabel">Error</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body"> <?php
              if (time() < $this->minAge)
              {
                echo "You can't register if you are under 13 years old!<br /><br />";
              }
              if ($password != $passwordAgain)
              {
                echo "Passwords aren't pass. Try again!<br /><br />";
              }
              if (strlen($password) < 8)
              {
                echo "Password can't be less then 8 characters!<br /><br />";
              }
              if (!$this->uppercase || !$this->lowercase || !$this->number)
              {
                echo "Password must contains a lowercase, an uppercase letter and a number!<br /><br />";
              }
              if ($this->resultUsername->num_rows != 0)
              {
                echo "Someone uses this username already!<br /><br />";
              }
              if ($this->resultEmail->num_rows != 0)
              {
                echo "There is a user already with this E-mail address!<br /><br />";
              } ?>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-primary" data-dismiss="modal">OK</button>
            </div>
          </div>
        </div>
      </div> <?php
    }
  }



  // YOUR
	public function profileImage()
	{
		$this->sql = "SELECT image FROM user WHERE id = " . $_SESSION["login_state"];
		$this->result = $this->conn->query($this->sql);
		if ($this->result->num_rows == 1)
		{
			while ($this->row = $this->result->fetch_assoc())
			{
				echo $this->row["image"];
			}
		}
  }
  
	public function profileFirstname()
	{
		$this->sql = "SELECT firstname FROM user WHERE id = " . $_SESSION["login_state"];
		$this->result = $this->conn->query($this->sql);
		if ($this->result->num_rows == 1)
		{
			while ($this->row = $this->result->fetch_assoc())
			{
				echo $this->row["firstname"];
			}
		}
  }
  
	public function profileUsername()
	{
		$this->sql = "SELECT username FROM user WHERE id = " . $_SESSION["login_state"];
		$this->result = $this->conn->query($this->sql);
		if ($this->result->num_rows == 1)
		{
			while ($this->row = $this->result->fetch_assoc())
			{
				echo $this->row["username"];
			}
		}
  }



  // PROFILE
  public function profileData()
	{
    $this->sql = "SELECT * FROM user WHERE id = " . $_SESSION["login_state"];
	  $this->result = $this->conn->query($this->sql);
	  if ($this->result->num_rows == 1)
	  {
		  while ($this->row = $this->result->fetch_assoc())
		  { ?>
        <img class="img-fluid rounded mx-auto d-block" style="max-width: 15%;" src="img/contact/profile/<?php echo $this->row["image"]; ?>">
        <h1 class="pt-3"><?php echo $this->row["username"]; ?></h1>
        <div class="row pt-5">
          <div class="col-6">
            <h3 class="text-right">Name</h3>
          </div>
          <div class="col-6">
            <h3 class="text-left"><b><?php echo $this->row["firstname"]." ".$this->row["lastname"]; ?></b></h3>
          </div>
        </div>
        <div class="row pt-2">
          <div class="col-6">
            <h3 class="text-right">E-mail</h3>
          </div>
          <div class="col-6">
            <h3 class="text-left"><b><?php echo $this->row["email"]; ?></b></h3>
          </div>
        </div>
        <div class="row pt-2">
          <div class="col-6">
            <h3 class="text-right">Birthdate</h3>
          </div>
          <div class="col-6">
            <h3 class="text-left"><b><?php echo $this->row["birthdate"]; ?></b></h3>
          </div>
        </div>
        <!--<form method="POST" class="pt-5">
            <input type="hidden" name="action" value="cmdPasswordChange">
            <input class="btn btn-dark" type="submit" value="Change password">
        </form>-->
        <a href="passwordchange.php" onclick="comingSoonAlert()" class="btn btn-dark">Change password</a> <?php	
		  }
	  }
  }
} ?>