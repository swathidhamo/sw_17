<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body> 
   <nav class="navbar navbar-inverse">
   <div class="container-fluid">
     <div class="navbar-header">
       <a class="navbar-brand" href="#">Tech Helpline</a>
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
 
<div class="container">
<div class="col-sm-12 col-md-12 col-lg-12" style="padding-left:0 !important; padding-right:0 !important;">
	<div class="row"><br/></div>
	<div class="row"><br/></div>
    <div class="row">
		<div class="col-sm-6 col-md-6 col-lg-4">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h3 class="panel-title"><i class="glyphicon glyphicon-user"></i> Swathi </h3>
					<span class="pull-right clickable"><i class="glyphicon glyphicon-chevron-up"></i></span>
				</div>
				<div class="panel-body font-bold">
			   		<p>Name: Swathi</p>
					<p>Email: swathi@sw2017.com</p>
					<p>GitHub:https://github.com/swathidhamo</p>
					<p>Specialization: Developer</p>
					<p>Rating: 4.92 <span style="color:green"><i class="glyphicon glyphicon-star"></i><i class="glyphicon glyphicon-star"></i><i class="glyphicon glyphicon-star"></i><i class="glyphicon glyphicon-star"></i><i class="glyphicon glyphicon-star"></i></span></p>
				</div>
			</div>
		</div>
		<div class="col-sm-6 col-md-6 col-lg-4">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h3 class="panel-title"><i class="glyphicon glyphicon-user"></i> Deepanshu</h3>
					<span class="pull-right clickable"><i class="glyphicon glyphicon-chevron-up"></i></span>
				</div>
				<div class="panel-body font-bold">
			   		<p>Name: Deepanshu</p>
					<p>Email: deepanshu@sw2017.com</p>
					<p>GitHub:https://github.com/deepanshu</p>
					<p>Specialization: Developer</p>
					<p>Rating: 4.87 <span style="color:green"><i class="glyphicon glyphicon-star"></i><i class="glyphicon glyphicon-star"></i><i class="glyphicon glyphicon-star"></i><i class="glyphicon glyphicon-star"></i><i class="glyphicon glyphicon-star"></i></span></p>
				</div>
		</div>
	</div>
		<div class="col-sm-6 col-md-6 col-lg-4">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h3 class="panel-title"><i class="glyphicon glyphicon-user"></i> Eswar</h3>
					<span class="pull-right clickable"><i class="glyphicon glyphicon-chevron-up"></i></span>
				</div>
				<div class="panel-body font-bold">
			   		<p>Name: Eswar</p>
					<p>Email: eswar@sw2017.com</p>
					<p>GitHub:https://github.com/eswar</p>
					<p>Specialization: Developer</p>
					<p>Rating: 4.79 <span style="color:green"><i class="glyphicon glyphicon-star"></i><i class="glyphicon glyphicon-star"></i><i class="glyphicon glyphicon-star"></i><i class="glyphicon glyphicon-star"></i><i class="glyphicon glyphicon-star"></i></span></p>
				</div>
		</div>
	</div>
</div>
<div class="row"><br/></div>
    <div class="row">
		<div class="col-sm-6 col-md-6 col-lg-4">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h3 class="panel-title"><i class="glyphicon glyphicon-user"></i> Mohit </h3>
					<span class="pull-right clickable"><i class="glyphicon glyphicon-chevron-up"></i></span>
				</div>
				<div class="panel-body font-bold">
			   		<p>Name: Mohit</p>
					<p>Email: mohit@sw2017.com</p>
					<p>GitHub:https://github.com/mohit</p>
					<p>Specialization: Developer</p>
					<p>Rating: 4.65 <span style="color:green"><i class="glyphicon glyphicon-star"></i><i class="glyphicon glyphicon-star"></i><i class="glyphicon glyphicon-star"></i><i class="glyphicon glyphicon-star"></i><i class="glyphicon glyphicon-star"></i></span></p>
				</div>

			</div>
		</div>
		<div class="col-sm-6 col-md-6 col-lg-4">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h3 class="panel-title"><i class="glyphicon glyphicon-user"></i> Logesh</h3>
					<span class="pull-right clickable"><i class="glyphicon glyphicon-chevron-up"></i></span>
				</div>
				<div class="panel-body font-bold">
			   		<p>Name: Logesh</p>
					<p>Email: logesh@sw2017.com</p>
					<p>GitHub:https://github.com/logesh</p>
					<p>Specialization: Developer</p>
					<p>Rating: 4.47 <span style="color:green"><i class="glyphicon glyphicon-star"></i><i class="glyphicon glyphicon-star"></i><i class="glyphicon glyphicon-star"></i><i class="glyphicon glyphicon-star"></i></span></p>
				</div>
		</div>
	</div>
		<div class="col-sm-6 col-md-6 col-lg-4">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h3 class="panel-title"><i class="glyphicon glyphicon-user"></i> Fasith</h3>
					<span class="pull-right clickable"><i class="glyphicon glyphicon-chevron-up"></i></span>
				</div>
				<div class="panel-body font-bold">
			   		<p>Name: Fasith</p>
					<p>Email: fasith@sw2017.com</p>
					<p>GitHub:https://github.com/fasith</p>
					<p>Specialization: Developer</p>
					<p>Rating: 4.42 <span style="color:green"><i class="glyphicon glyphicon-star"></i><i class="glyphicon glyphicon-star"></i><i class="glyphicon glyphicon-star"></i><i class="glyphicon glyphicon-star"></i></span></p>
				</div>
		</div>
	</div>
</div>
</div>
</div>

<style>
	.clickable{
	    cursor: pointer;   
	}

	.panel-heading span {
		margin-top: -20px;
		font-size: 15px;
	}
	
	.font-bold {
		font-weight: bold;
	}
</style>

<script>
	$(document).on('click', '.panel-heading span.clickable', function(e){
	    var $this = $(this);
		if(!$this.hasClass('panel-collapsed')) {
			$this.parents('.panel').find('.panel-body').slideUp();
			$this.addClass('panel-collapsed');
			$this.find('i').removeClass('glyphicon-chevron-up').addClass('glyphicon-chevron-down');
		} else {
			$this.parents('.panel').find('.panel-body').slideDown();
			$this.removeClass('panel-collapsed');
			$this.find('i').removeClass('glyphicon-chevron-down').addClass('glyphicon-chevron-up');
		}
	});
</script>
</div>

</body>
</html>