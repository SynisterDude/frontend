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

<nav class="navbar navbar-icon-top navbar-expand-lg navbar-dark bg-dark">
  <h3><a href="/frontend/index.php" ></b><font color="orange">Synister.wtf</font></b></a></h3>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
	
      <li class="nav-item">
        <a class="nav-link" href="/frontend/dashboard/index.php">
          <i class="fa fa-home"></i>
          Control Panel
          </a>
      </li>
	  
      <li class="nav-item">
        <a class="nav-link" href="/frontend/dashboard/tickets/index.php">
          Ticket System
        </a>
      </li>

    </ul>
	
    <ul class="navbar-nav ">

      <li class="nav-item">
        <a class="nav-link" href="#">
          <i class="fa fa-globe">
            <span class="badge badge-danger">0</span>
          </i>
          Notifications
        </a>
      </li>
    </ul>
	
    <div class="form-inline my-2 my-lg-0">
      Dude
    </div>
	
  </div>
  
</nav>


<style>

.centered-form{
	margin-top: 60px;
	align: center:
	position:absolute;
	left:670;
	top:140;
}

.centered-form .panel{
	background: rgba(0, 0, 0, 0.3) 20px 20px 20px;
	box-shadow: rgba(0, 0, 0, 0.3) 20px 20px 20px;
}



</style>

<div class="row centered-form" align="center">
<div class="col-xs-1 col-sm-8 col-md-13 col-sm-offset-2 col-md-offset-4">
<div class="panel panel-default">
<div class="panel-heading">
<form method="post" action="createTicketScript.php">
  <div class="form-group">
    <label>Email address</label>
    <input type="text" class="form-control" name="email" placeholder="name@example.com">
  </div>
  <div class="form-group">
    <label>Reason</label>
    <select class="form-control" name="reason">
      <option>Domain not working</option>
    </select>
  </div>
  <div class="form-group">
    <label>Information</label>
    <textarea class="form-control" rows="4" name="texMessage"></textarea>
  </div>
  <button type="submit" class="btn btn-primary mb-2">Submit Ticket</button>
</form>
</div>
</div>
</div>
</div>


</body>

`
</html>

