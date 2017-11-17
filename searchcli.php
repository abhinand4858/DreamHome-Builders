<?php

  session_start(); 
  $out = "";

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
            <input type="text" required autocomplete="off" name="cli-name"/>
          </div>
      
          
          <button type="submit" name="using-name" class="button button-block"/>Search</button>
          
          <table style="width:100%">
             <tr>
              <th>Name</th>
              <th>Email</th>
              <th>Phone</th>
              <th>No of houses</th>
            </tr>
            <?php
                  if (isset($_POST['using-name'])) {
          
                    $client_name = $_POST['cli-name'];

                    $res = mysqli_query($conn, "SELECT * FROM client_info where client_name like '%$client_name%'");
                    $row_num = mysqli_num_rows($res);

                    if($row_num > 0) {

                      while($row = mysqli_fetch_array($res)) {

                        echo "<tr><td>".$row['client_name']."</td>"."<td>".$row['client_email']."</td>"."<td>".$row['client_phone']."</td>"."<td>".$row['noof_houses']."</td></tr>";
                      }
                    } else {
                      echo "<br>Not found";
                    }
                  }

                  ?>
            <tr>  
        </tr>
          </table>

          </form>
          

        </div>
        
        <div id="login">   
          <h1>Search client details</h1>
          
           <form method="post">

          <div class="field-wrap">
            <label>
              Identification Number - ID<span class="req">*</span>
            </label>
            <input type="text" required autocomplete="off" name="cli-id" />
          </div>
      
          <button type="submit" name="using-id" class="button button-block"/>Search DB</button>

          <table style="width:100%">
             <tr>
              <th>Name</th>
              <th>Email</th>
              <th>Phone</th>
              <th>No of houses</th>
            </tr>
            <?php
                  if (isset($_POST['using-id'])) {
                    
          
                    $client_id = $_POST['cli-id'];

                    $res = mysqli_query($conn, "SELECT * FROM client_info where client_id = '$client_id'");
                    $row_num = mysqli_num_rows($res);

                    if($row_num > 0) {

                      while($row = mysqli_fetch_array($res)) {

                        echo "<tr><td>".$row['client_name']."</td>"."<td>".$row['client_email']."</td>"."<td>".$row['client_phone']."</td>"."<td>".$row['noof_houses']."</td></tr>";
                      }
                    } else {
                      echo "<br>Not found";
                    }

                  }

                  ?>
            <tr>  
        </tr>
          </table>
          
          </form>

        </div>
        
      </div><!-- tab-content -->
      
</div> <!-- /form -->
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script  src="js/login.js"></script>

</body>
</html>
