<html>
<head>
	<title>Health forum</title>
	  <script src='https://www.google.com/recaptcha/api.js'></script>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <?php
      session_start();
      ?>
      <style type="text/css">
  
  






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
<div id = "about">
  <div class = 'page_header'><div class = 'jumbotron' ><h1>About us</h1></div></div>



</div>

</body>
</html>