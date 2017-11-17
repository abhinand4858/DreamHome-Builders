<?php

  session_start(); 

  if(!isset($_SESSION['user']) ) {
      header("Location: index.php");
  }

  ini_set('display_errors', 1);
  ini_set('display_startup_errors', 1);
   error_reporting(E_ALL);

  include('connect.php');
  $dbcon = mysqli_select_db($conn,'Host Builders');

  if ( !$dbcon ) {
      die("Database Connection failed : " . mysql_error());
  } 

  if (isset($_POST['using-name'])) {
    
    $email = $_POST['cli-name'];
    $pass = $_POST['cli-id']; 

    $res = mysqli_query($conn, "SELECT * FROM Admin where email_id = '$email' AND pass ='$pass'");
    $row = mysqli_fetch_array($res);

    } else  if (isset($_POST['using-id'])) {
    
    $email = $_POST['cli-name'];
    $pass = $_POST['cli-id']; 

    $res = mysqli_query($conn, "SELECT * FROM Admin where email_id = '$email' AND pass ='$pass'");
    $row = mysqli_fetch_array($res);

    if ($row) {
      session_start(); 
      $_SESSION['user'] = $row['email_id'];
      header("Location: index.php");
      //die("Fail ".$row);
    }
    else {
      die("Login Failed! Please enter correct username and password.");
    }
  } 
  


?>

<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Search clients</title>
  <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

      <link rel="stylesheet" href="css/forms.css">  
</head>

<body>
<div class="form">
      
      <ul class="tab-group">
        <li class="tab active"><a href="#signup">Using name</a></li>
        <li class="tab"><a href="#login">Using ID</a></li>
      </ul>
      
      <div class="tab-content">
        <div id="signup">   
          <h1>Search client details</h1>
          
          <form method="post">

          <div class="field-wrap">
            <label>
              Name<span class="req">*</span>
            </label>
            <input type="text" required autocomplete="off" name="cli-name" />
          </div>
      
          
          <button type="submit" name="using-name" class="button button-block"/>Search</button>
          
          </form>

        </div>
        
        <div id="login">   
          <h1>Search client details</h1>
          
           <form method="post">

          <div class="field-wrap">
            <label>
              Identification Number - ID<span class="req">*</span>
            </label>
            <input type="numeric" required autocomplete="off" name="cli-id" />
          </div>
      
          
          <button type="submit" name="using-id" class="button button-block"/>Search DB</button>
          
          </form>

        </div>
        
      </div><!-- tab-content -->
      
</div> <!-- /form -->
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script  src="js/login.js"></script>

</body>
</html>
