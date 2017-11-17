<?php

  session_start(); 
  $out = "";

   ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
   error_reporting(E_ALL);

  if(!isset($_SESSION['user']) ) {
      header("Location: index.php");
  }

 

  include('connect.php');
  $dbcon = mysqli_select_db($conn,'Host Builders');

  if ( !$dbcon ) {
      die("Database Connection failed : " . mysql_error());
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
      
      
        <div id="signup">   
          <h1>Add new site</h1>
          
          <form method="post">


          <div class="field-wrap">
            <label>
              Client ID<span class="req">*</span>
            </label>
            <input type="text" name="cid" required autocomplete="off"/>
          </div>


          <div class="field-wrap">
            <label>
              Site City<span class="req">*</span>
            </label>
            <input type="text" name="city" required autocomplete="off"/>
          </div>


          <div class="field-wrap">
            <label>
              Country<span class="req">*</span>
            </label>
            <input type="text" name="country" required autocomplete="off"/>
          </div>


          
          <button type="submit" name="submit" class="button button-block"/>Update</button>
          
          <?php
                if (isset($_POST['submit'])) {
                  $cl_id = $_POST['cid'];
                  $s_city = $_POST['city'];
                  $s_cou = $_POST['country'];
                

                  $res = mysqli_query($conn, "INSERT INTO site_info (client_id, site_city, site_country) VALUES ('$cl_id','$s_city', '$s_cou') ");
                  //echo $retid." ".$retname." ".$retph." ".$retst." ".$retcou;

                  if($res) {
                    echo "<br><h2>Inserted!</h2>";
                  }
                    else {
                      echo "<br>Error!";
                    }
                  
                }

                ?>
           
          </form>
          

        </div>
        
</div> <!-- /form -->
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script  src="js/login.js"></script>

</body>
</html>
