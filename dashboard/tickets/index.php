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
  <h3><a href="#" ></b><font color="orange">Synister.wtf</font></b></a></h3>
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
	  
      <li class="nav-item active">
        <a class="nav-link" href="/frontend/dashboard/tickets/index.php">
          Ticket System
		  <span class="sr-only">(current)</span>
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
#customers {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: orange;
  color: white;
}
</style>
<br>
<a href="createTicket.php"><button class="btn btn-info">Start a support ticket</button></a><br>

<table id="customers">
<br>
  <tr>
    <th>Tickets:</th>
    <th>Status</th>
    <th>Started</th>
  </tr>
  <tr>
    <td>Mate my domains not working</td>
    <td>Ongoing</td>
    <td>08/03/2020</td>
  </tr>
  <tr>
    <td>where is cpanel?!!</td>
    <td>Closed</td>
    <td>08/03/2020</td>
  </tr>
  
  
  <!-- Populate table like this: -dude
	
	<tr>
	<td><?php echo $ticketsmysqlrow;?></td
	<td><?php echo $statusmysqlrow;?></td
	<td><?php echo $startedmysqlrow;?></td
	</tr>
	
	</tr>

  -->
</table>



</body>

`
</html>

