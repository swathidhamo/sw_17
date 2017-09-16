<html>
<head>
	<title>Health forum</title>
	  <script src='https://www.google.com/recaptcha/api.js'></script>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <?php
      require("connect.php");
      
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
        margin-right: 900px;
      }
      .result{
        border: 2px solid black;
        padding: 10px 10px 10px 10px;
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

 
</body>
</html>