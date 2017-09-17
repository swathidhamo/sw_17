<html>
<head>
	<link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
	<title>Health forum</title>
	  <script src='https://www.google.com/recaptcha/api.js'></script>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <?php

      // require("connect.php");
      date_default_timezone_set("Asia/Kolkata");
      $createdate= date('Y-m-d H:i:s');
      // echo mysqli_error($link);

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
 <div class="row">
 	<div class="form-group">
		<div class="col-sm-12 col-md-12 col-lg-2"></div>
 		<div class="col-sm-12 col-md-12 col-lg-2">
		</div>
		<div class="col-sm-12 col-md-12 col-lg-4 text-center">
    		<span style="font-size:36px; font-weight:bold;">Questionaire</span><br>
		</div>
	</div>
</div>
<div class="row"><br/></div>
 <div class="row">
 	<div class="form-group">
		<div class="col-sm-12 col-md-12 col-lg-2"></div>
 		<div class="col-sm-12 col-md-12 col-lg-2">
			<label for="company">Name of your Startup</label>
		</div>
		<div class="col-sm-12 col-md-12 col-lg-4">
    		<input type="text" name="company_name", class="form-control", required="true"><br>
		</div>
	</div>
</div>
 <div class="row">
 	<div class="form-group">
		<div class="col-sm-12 col-md-12 col-lg-2"></div>
 		<div class="col-sm-12 col-md-12 col-lg-2">
			<label for="company">Developer's looking for</label>
		</div>
		<div class="col-sm-12 col-md-12 col-lg-4">
			 <select name="area_of_development" class="form-control">
			  <option value="web">Web Development</option>
			  <option value="app">App Development</option>
			</select>
		</div>
	</div>
</div>
<div class="row"><br/></div>
 <div class="row">
 	<div class="form-group">
		<div class="col-sm-12 col-md-12 col-lg-2"></div>
 		<div class="col-sm-12 col-md-12 col-lg-2">
			<label for="company">Specialisation</label>
		</div>
		<div class="col-sm-12 col-md-12 col-lg-4">
			 <select name="specialisation" class="form-control">
			  <option value="ui">UI/UX</option>
			  <option value="mock">Mockup/Wireframe</option>
			  <option value="test">Testing</option>
			  <option value="devops">Devops</option>
			  <option value="full">Full stack</option>
			  <option value="others">Others</option>
			</select>
		</div>
	</div>
</div>
<div class="row"><br/></div>
 <div class="row">
 	<div class="form-group">
		<div class="col-sm-12 col-md-12 col-lg-2"></div>
 		<div class="col-sm-12 col-md-12 col-lg-2">
			<label for="company">Duration<br/>(in Days)</label>
		</div>
		<div class="col-sm-12 col-md-12 col-lg-4">
    		<input type="text" name="duration", class="form-control", required="true">
		</div>
	</div>
</div>
<div class="row"><br/></div>
 <div class="row">
 	<div class="form-group">
		<div class="col-sm-12 col-md-12 col-lg-2"></div>
 		<div class="col-sm-12 col-md-12 col-lg-2">
			<label for="concept_desc">What's your Idea?<br/>(within 500 words)</label>
		</div>
		<div class="col-sm-12 col-md-12 col-lg-4">
    		<textarea class="form-control" id="concept_textarea" rows="5"></textarea>
		</div>
	</div>
</div>
<div class="row"><br/></div>
 <div class="row">
 	<div class="form-group">
		<div class="col-sm-12 col-md-12 col-lg-2"></div>
 		<div class="col-sm-12 col-md-12 col-lg-2">
			<label for="concept_desc">Additional Requirement<br/></label>
		</div>
		<div class="col-sm-12 col-md-12 col-lg-4">
    		<textarea class="form-control" id="concept_textarea" rows="4"></textarea>
		</div>
	</div>
</div>
<div class="row"><br/></div>
 <div class="row">
 	<div class="form-group">
		<div class="col-sm-12 col-md-12 col-lg-2"></div>
 		<div class="col-sm-12 col-md-12 col-lg-2">
			<label for="concept_desc">Upload Documents(if any)</label>
		</div>
		<div class="col-sm-12 col-md-12 col-lg-4">
		    <span class="btn btn-default btn-file">
		        Browse <input type="file">
		    </span>
		</div>
	</div>
</div>
<div class="row"><br/></div>
 <div class="row">
 	<div class="form-group">
		<div class="col-sm-12 col-md-12 col-lg-2"></div>
 		<div class="col-sm-12 col-md-12 col-lg-2"></div>
		<div class="col-sm-12 col-md-12 col-lg-4">
		    <a href="results.php" class="btn btn-primary" style="text-decoration: none;">Submit</a>
		</div>
	</div>
</div>
    

  </div>
</form>
<?php
  if(isset($_POST["find"])){
     header("Location: result.php");
  }




?>

</body>
</html>

<style>
    .btn-file {
        position: relative;
        overflow: hidden;
    }
    .btn-file input[type=file] {
        position: absolute;
        top: 0;
        right: 0;
        min-width: 100%;
        min-height: 100%;
        font-size: 100px;
        text-align: right;
        filter: alpha(opacity=0);
        opacity: 0;
        outline: none;
        background: white;
        cursor: inherit;
        display: block;
    }
	</style>