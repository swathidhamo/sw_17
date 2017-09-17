<html>
<head>
	<title>Techie Helpline</title>
  	<script src='https://www.google.com/recaptcha/api.js'></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<style type="text/css">

   
	body {
	    background-color: white;
	}

	#loginbox {
	    margin-top: 30px;
	}

	#loginbox > div:first-child {        
	    padding-bottom: 10px;    
	}

	.iconmelon {
	    display: block;
	    margin: auto;
	}

	#form > div {
	    margin-bottom: 25px;
	}

	#form > div:last-child {
	    margin-top: 10px;
	    margin-bottom: 10px;
	}

	.panel {    
	    background-color: transparent;
	}

	.panel-body {
	    padding-top: 30px;
	    background-color: rgba(2555,255,255,.3);
	}
	
	.panel-default {
		border-color: #FFF;
	}

	#particles {
	    width: 100%;
	    height: 100%;
	    overflow: hidden;
	    top: 0;                        
	    bottom: 0;
	    left: 0;
	    right: 0;
	    position: absolute;
	    z-index: -2;
	}

	.iconmelon,
	.im {
	  position: relative;
	  width: 150px;
	  height: 150px;
	  display: block;
	  fill: #525151;
	}

	.iconmelon:after,
	.im:after {
	  content: '';
	  position: absolute;
	  top: 0;
	  left: 0;
	  width: 100%;
	  height: 100%;
	}
   
  </style>
<body>

<div class="container">    
    <div class=""row><br/></div> 
	<div class=""row><br/></div>    
    <div id="loginbox" class="mainbox col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3"> 
        
        <div class="row" style="text-align:center;">                
               <img src="images/th.png" alt="Smiley face" height="100" width="360"> 
        </div>
        <div class=""row><br/></div> 
        <div class="panel panel-default" >
            <div class="panel-body" >

                <form name="form" id="form" class="form-horizontal" enctype="multipart/form-data" method="POST">
                   
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input id="user" type="text" class="form-control input-lg" name="user" value="" placeholder="User">                                        
                    </div>

                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                        <input id="password" type="password" class="form-control input-lg" name="password" placeholder="Password">
                    </div>                                                                  

                    <div class="form-group">
                        <!-- Button -->
                        <div class="col-sm-12 controls">
                            <a href="find.php" class="btn btn-primary pull-right">Log in</a>                          
                        </div>
                    </div>

                </form>     

            </div>                     
        </div>  
    </div>
</div>

</body>
</html>