<style>
	<?php include 'main.css'; ?>
/*
list style 
*/
ul.staff
	{
		margin-bottom: 3em;
	}

	ul.staff li
	{
		display: inline-block;
	}
	
	ul.staff li img
	{
		width: 80%;
		border-radius: 50%;
	}
 
  /*
  *extra 
  */
  .box
{
	padding: 3em 2em 2em 2em;
	border: 1px solid rgba(0,0,0,0.1);
	border-radius: 8px;
		text-align: center;
}


	#extra
	{
		overflow: hidden;
		padding: 5em 0em;
	}
	
	#extra .title
	{
		text-align: center;
	}
	
	#extra .button
	{
		margin-top: 5em;
	}
	
	#extra .fa
	{
		display: block;
		margin-bottom: 0.5em;
		text-align: center;
		font-size: 3em;
	}
  
</style>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Chat Application</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body> 
<div id="wrapper">
    <div id="header-wrapper">
    <div id="header" class="container">
      <div id="logo">
        <h2><a href="index.html">SDGsCHAT</a></h2>
      </div>
      <div id="menu">
        <ul>
          <li class="active"><a href="home.php" accesskey="1" title="">Home</a></li>
          <li><a href="event.php" accesskey="2" title="">Event</a></li>
  
        </ul>
      </div> 
    </div>
    </div>
    </div>

    <div id="extra" class="container">
		<div class="title">
		<table align="center">
    <tr>
    <div class="container" align ="center">
     
			<h2><b>SELECT A LOGIN TYPE</b> </h2>
      <span class="byline">Admins have the ability to create events, while users can chat and interact with others.</span> </div>
      <br>
			<td>
        
	  <div class="card" style="width:400px" align="center" >
	  <div align="center">
        <img  class="card-img-top" src="admin.png" alt="Card image" style="width:50%">
        <div class="card-body">
          <h4 class="card-title">ADMIN</h4>
          <p class="card-text">Choose This If You Are An Admin</p>
          <ul class="actions">
			<li><a href="login.php" class="button">Login as an admin</a></li>
		</ul>
</div>
	</div>
        </div>
      </div>
      </td>
      <td>  
    </td>

    <td>
	  <div class="card" style="width:400px" align="center">
	  <div align="center">
        <img class="card-img-top" src="user.png" alt="Card image" style="width:50%">
        <div class="card-body">
          <h4 class="card-title">USER</h4>
          <p class="card-text">Choose This If You Are A User </p>
          <ul class="actions">
			<li><a href="loginUSER.php" class="button">Login as a user </a></li>
		</ul>
</div>
	</div>
        </div>
      </div>
    </td></tr>
    </table>
  </div> 
		
    
</div>
 
      
     

</body>
</html>
