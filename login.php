<?php

  include('connect.php');
  $dbcon = mysqli_select_db($conn,'Host Builders');

  if ( !$dbcon ) {
      die("Database Connection failed : " . mysql_error());
  } 

  if (isset($_POST['btn-login'])) {
    
    $email = $_POST['email'];
    $pass = $_POST['password']; 

    
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    $res = mysqli_query($conn, "SELECT * FROM Admin where email_id = '$email' AND pass ='$pass'");
    $row = mysqli_fetch_array($res);

    if ($row) {
      session_start(); 
      $_SESSION['user'] = $row['email_id'];
      header("Location: index.php");
      //die("Fail ".$row);
    } else {
      die("Login Failed! Please enter correct username and password.");
    }
  } 
  

  ?>

<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Sign-Up/Login Form</title>
  <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  
      <link rel="stylesheet" href="css/login.css">

  
</head>

<body>
  <div class="form" method="post">    
        
        <div id="login">   
          <h1>Welcome Back!</h1>
          
          <form method="post">
          
            <div class="field-wrap">
              <label>
                Email Address<span class="req">*</span>
              </label>
              <input type="email"required autocomplete="off" name="email"/>
            </div>
          
            <div class="field-wrap">
              <label>
                Password<span class="req">*</span>
              </label>
              <input type="password"required autocomplete="off" name="password"/>
            </div>
          
            <button class="button button-block" name="btn-login"/>Log In</button>
          </form>

        </div>
        
      </div><!-- tab-content -->
      
</div> <!-- /form -->
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script  src="js/login.js"></script>

</body>
</html>
