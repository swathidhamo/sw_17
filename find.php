<html>
<head>
	<title>Health forum</title>
	  <script src='https://www.google.com/recaptcha/api.js'></script>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <?php

      require("connect.php");
      date_default_timezone_set("Asia/Kolkata");
      $createdate= date('Y-m-d H:i:s');
      echo mysqli_error($link);

      ?>
      <style type="text/css">

      .forum_link{
        border: 2px solid black;
        padding-left: 30px;
        padding-top: 30px;
        border: 3px solid black;
        padding-bottom: 30px;
        margin-left: 20px;
        margin-right: 700px;
        margin-bottom: 20px;
      }
      .page_header div{
      	border-bottom: 12px solid blue;
      }
      #new_group{
        padding-left: 30px;
        padding-top: 30px;
        border: 3px solid black;
        padding-bottom: 30px;
        margin-left: 20px;
        margin-right: 500px;
      }







      </style>
</head>
<body>
 
  <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Techie Helpline</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="landing.php">Home</a></li>
      <li><a href = "profile.php">Profiles</a></li>
      <li><a href="find.php">Find my developer</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href = "logout.php"><?php echo $_SESSION["username"]; ?></a></li>
      <li><a href="register.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </div>
</nav>
 <form method = "POST">
 <div id = "new_group">
    <p>Name of the startup: <input type = "text" name = "title"></p>
    <p>What sort of developer are you looking for :<select>
      <option value = "web">Web developer</option>
      <option value = "app">App developer</option>
    </select></p>
    <p>Description of the idea (within 50 words)</p> <p><textarea rows = "5" cols = "50"></textarea></p>
    <p>Time requirement:    <input type = "text"></p>
    <p>Services necessary:  <select name = "time">
                  <option value = "one">UI/UX</option>
                  <option value = "three">Mockup/Wireframe</option>  
                  <option value = "month">Testing</option>
                  <option value = "two">Security</option>
                  <option value = "twelve">Entire stack</option>
                  <option value = "none">Others</option>
                </select></p>
    <p> Additional Requirements(if any)</p><p><input type = "text"></p>
    

    <input type = "submit" name = "find" value = "Find developer" id = "submit">

    

  </div>
</form>
<?php
  if(isset($_POST["find"])){
     header("Location: result.php");
  }




?>

</body>
</html>