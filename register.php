<?php

?>

<!doctype html>
<html>
<head>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head

<body>

<style>

body{
    background-color: #ffffff;
}
.centered-form{
	margin-top: 60px;
	align: center:
}

.centered-form .panel{
	background: rgba(0, 0, 0, 0.3) 20px 20px 20px;
	box-shadow: rgba(0, 0, 0, 0.3) 20px 20px 20px;
}

</style>


<div class="container">
        <div class="row centered-form">
        <div class="col-xs-1 col-sm-8 col-md-12 col-sm-offset-2 col-md-offset-4">
        	<div class="panel panel-default">
        		<div class="panel-heading">
				<br>
			    		<h3 class="panel-title" align="center">Dashboard<br><a href="http://Synister.wtf/frontend/index.php"><font color="orange"><small>Synister.WTF</small></font></a></h3>
			 			</div>
			 			<div class="panel-body">
						
						
			    		<form method = "post" action="registerScript.php">
			    			<div class="row">
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			                <input type="text" name="username" id="username" class="form-control input-sm" placeholder="Username">
			    					</div>
			    				</div>
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			    						<input type="text" name="password" id="password" class="form-control input-sm" placeholder="Password">
			    					</div>
			    				</div>
			    			</div>

			    			<div class="form-group">
			    				<input type="text" name="email" id="email" class="form-control input-sm" placeholder="Email Address">
			    			</div>

			    			<!--<div class="row">
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			    						<input type="password" name="password" id="password" class="form-control input-sm" placeholder="Password">
			    					</div>
			    				</div>
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			    						<input type="password" name="password_confirmation" id="password_confirmation" class="form-control input-sm" placeholder="Confirm Password">
			    					</div>
			    				</div>
			    			</div>-->
			    			<a href="login.php"><b><font color="orange" align="center">Already have an account?</font></b></a>
			    			<input type="submit" name="but_submit" value="Register Now"class="btn btn-warning btn-block">
			    		
			    		</form>
						<br>
						
			    	</div>
	    		</div>
    		</div>
    	</div>
    </div>

</body>

`
</html>

