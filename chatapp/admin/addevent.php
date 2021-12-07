<html lang="en" class="no-js">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
  <!--for making a responsive page -->
  
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" type="text/css" href="main.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="../assets/a/css/reset.css"> <!-- CSS reset -->
	<link rel="stylesheet" href="../assets/a/css/style.css"> <!-- Resource style -->
	<script src="../assets/a/js/modernizr.js"></script> <!-- Modernizr -->
	<title>EVENTS</title>
</head>
<body>
<div id="wrapper">
    <div id="header-wrapper">
    <div id="header" class="container">
      <div id="logo">
        <h2><a href="../index.html">SDGsCHAT</a></h2>
      </div>
      <div id="menu">
        <ul>
		  <li class="active"><a href="home.php" accesskey="1" title="">Home</a></li>
		  <li><a href="../chatADMIN/index.php" accesskey="2" title="">Chat</a></li>
				  <li class="nav-item dropdown">
		  <a class="nav-link dropdown-toggle" data-toggle="dropdown" >Event</a>
		          <div class="dropdown-menu">
				         <a class="dropdown-item" href="index.php">Event</a>
                         <a class="dropdown-item" href="addevent.php">Add Event</a>
                         <a class="dropdown-item" href="editevent.php">Edit Event</a>
                  </div>
		  </li>

      
		  <li><a href="../logout.php"><span class="glyphicon glyphicon-log-out" ></span> SIGN OUT</a></li>
		        </ul>
      </div> 
    </div>
	</div>
<header>
	<h1 align="center">ADD EVENTS</h1>

</header>
<br/>
<br/>

	<form action="datae.php" method="post" align="center"> 		
	NAME:<input type="text" name="name" size ="40"/> <br> <br>
	DESCRIPTION:<textarea  name="description" ></textarea><br/> <br/>
	<input type="submit" name="create_event"  />
    </form>
  </div>

<script src="js/jquery-2.1.1.js"></script>
<script src="js/jquery.mobile.custom.min.js"></script>
<script src="js/main.js"></script> <!-- Resource jQuery -->
</body>
</body>
</html>