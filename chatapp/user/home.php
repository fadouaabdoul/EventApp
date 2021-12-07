  <!doctype html>
<html>
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

<title>WELCOME TO HOME PAGE</title>
<style>
 <?php include 'main.css'; ?>
 /*
  *banner css 
  */
  #banner
	{
		overflow: hidden;
		padding: 7em 0em 5em 0em;
		background: #af1641;
		background-size: cover;
		text-align: center;
		color: rgba(255,255,255,.8);
	}

	#banner .title
	{
		margin-bottom: 1em;
		text-transform: uppercase !important;
	}

	#banner .title h2
	{
		color: #FFF;
	}

	#banner .title .byline
	{
		color: rgba(255,255,255,.6);
	}
	
	#banner .button
	{
		margin-top: 3em;
		background: #dc572e !important;
	}
  p, ol, ul
	{
		margin-top: 0;
	}
	
	ol, ul
	{
		padding: 0;
		list-style: none;
	}
	
	ul.actions
	{
		text-align: center;
	}
		
	
	p
	{
		line-height: 180%;
	}
	
	a
	{
		color: #0000FF;
	}
	
	a:hover
	{
		text-decoration: none;
	}
	
	.container
	{
		overflow: hidden;
		margin: 0em auto;
		width: 1000px;
	}
	/*
	*page  
	*/
	#page
	{
		padding: 5em 0em;
		text-align: center;
	}
	
	#page .button
	{
		margin-top: 2em;
		display: inline-block;
		text-align: center;
	}
	/*
	*container
	*/
	.container
	{
		overflow: hidden;
		margin: 0em auto;
		width: 1000px;
	}
	/*
	*featured
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
	#featured
	{
		overflow: hidden;
		padding: 5em 0em;
		background: #af1641;
		color: rgba(255,255,255,.8);
		text-align: center;
	}

	#featured a
	{
		color: rgba(255,255,255,1);
	}
	
	#featured .button
	{
		background: #FFF;
		margin-top: 3em;
		font-size: 1em;
		color: #af1641;
	}

	#featured img
	{
		margin-bottom: 3em;
		border-radius: 7px;
	}

	#featured .title h2
	{
		color: #FFF;
	}

	#featured .title .byline
	{
		color: rgba(255,255,255,.6);
	}
</style>
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
		  <li><a href="../chat/index.php" accesskey="2" title="">Chat</a></li>
      <li><a href="index.php" accesskey="2" title="">Event</a></li>
    
		  <li><a href="../logout.php"><span class="glyphicon glyphicon-log-out" ></span> SIGN OUT</a></li>
		        </ul>
      </div> 
	</div>
</div>
  
    <div id="banner">
      <div class="container">
        <div class="title">
          <h2> THE SDGschat for your events and sharing knowledge.</h2>
			  <span class="byline"><p>what make your events so special is the human. put relationships and interactions with people all arround the world. take the first step by join the chat room.</p></span>
      
        <ul class="actions">
          <li><a href="../chatU/index.php" class="button">Chat</a></li>
        </ul>
      </div>
  </div>
</div>
  <div id="page" class="container">
    
		<div class="title">
		<h2> THE SDGschat for your events and sharing knowledge.</h2>
			  
			  <span class="byline"></span> </div>
			  <p>Check the latest events</p>
				<ul class="actions">
					<li><a href="index.php" class="button">Events</a></li>
</ul>
      </div>
      <div id="featured">
			<div class="container">
			
				<div class="title">
				<h2>If you are an admin you, please cchange your log in type.</h2>


			</div>
			<ul class="actions">
				<li><a href="../index.php" class="button">Log in </a></li>
			</ul>
		</div>



</body>
</html>
