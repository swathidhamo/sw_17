<html>
<head>
	<title>Health forum</title>
	  <script src='https://www.google.com/recaptcha/api.js'></script>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
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
      <li><a href = "#">Profiles</a></li>
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
  <div class = 'page_header' style="padding: 10px 0 0 30px;"><h1>
	Easily find quality Developers
	</h1>
	<p style="font-size:16px;">On Tech-Helpline you'll find a range of top talent, from programmers to designers, writers, customer support reps, and more.</p>
</div>

  <div class = 'page_header' style="padding: 30px 0 0 30px;"><h1>
	How it Works?
	</h1>
	<br/>
	<ul style="font-size: 20px;">
		<li>Understand the customer's need using a simple questionnaire</li>
		<br/>
		<li>Suggest the most suitable developer for the project</li>
		<br/>
		<li>Following that the start-up founder has a 3 day window where we can facilitate
and organise live chats, video calls between the customer and developer</li>
	</ul>
</div>

</div>

</body>
</html>