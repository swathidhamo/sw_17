<html>
<head>
	<link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
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
      <a class="navbar-brand" href="#">Tech Helpline</a>
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
	Have a startup idea ? Get in touch with the best of developers to make it happen.
	</h1>
	<p style="font-size:16px;">Tech Helpline is a one stop portal for you to find the best of developer's and programmers that your idea needs with a range of customization that is unique to your startup</p>
</div>

  <div class = 'page_header' style="padding: 30px 0 0 30px;"><h1>
	How it Works ?
	</h1>
	<br/>
	<ul style="font-size: 20px;">
		<li>To hire the developer for your application, fill in the questionnaire to answer just 6 simple questions</li>
		<br/>
		<li>We will then suggest the best developer for this idea</li>
		<br/>
		<li>Get in touch with the developer to build your minimilastic prototype and request for another developer within 3 days if you want another persons</li>
	</ul>
</div>

</div>

</body>
</html>