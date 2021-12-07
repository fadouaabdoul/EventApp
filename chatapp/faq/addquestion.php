<style>
<?php include 'main.css' ?>
</style>
<?php
include_once("connectM.php");
if(isset($_POST['create_faq'])){
	$name=strip_tags(mysqli_real_escape_string($db_connection,$_POST['name']));
	$questions=strip_tags(mysqli_real_escape_string($db_connection,$_POST['questions']));
	$answers=strip_tags(mysqli_real_escape_string($db_connection,$_POST['answers']));
	$res= mysqli_query($db_connection,"INSERT INTO faq(faq_id,event_id,questions,answers) VALUE('".$name."','".$questions."', '".$answers."')")  or die(mysqli_error($db_connection));
	header("Location: faq.php");
	exit();

}
$link=mysqli_connect("localhost:3308","root","","event" ) or die(mysqli_error());

?>
<html lang="en" class="no-js">
<head>
<meta charset="UTF-8">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>


	<link rel="stylesheet" href="../assets/a/css/reset.css"> <!-- CSS reset -->
	<link rel="stylesheet" href="../assets/a/css/style.css"> <!-- Resource style -->
	<script src="../assets/a/js/modernizr.js"></script> <!-- Modernizr -->
	<title>QUESTIONS </title>

	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

	
</head>
<body>
<div id="wrapper">
    <div id="header-wrapper">
    <div id="header" >
      <div id="logo">
        <h2><a href="home.php">SDGsCHAT</a></h2>
      </div>
<div id="menu">
        <ul>
          <li class="active"><a href="home.php" accesskey="1" title="">Home</a></li>
          <li><a href="../chatU/index.php" accesskey="2" title="">Chat</a></li>
		  <li><a href="index.php" accesskey="3" title="">Event</a></li>
          <li class="nav-item dropdown">
		  <a class="nav-link dropdown-toggle" data-toggle="dropdown" >Questions</a>
		          <div class="dropdown-menu">
                         <a class="dropdown-item" href="faq.php">Questions</a>
                         <a class="dropdown-item" href="addanswer.php">Add Answer</a>
                  </div>
		  </li>  
             <li><a href="../logout.php"><span class="glyphicon glyphicon-log-out" ></span> SIGN OUT</a></li>
        </ul>
      </div> 
    </div>
    </div>
    </div>
    <br> 
    <br> 
<header>
	<h1 align="center">ADD QUESTION</h1>

</header>

<br/>
<br/>

	
	
	<br/>
	<br/>
    <div align="center" class="cd-faq-group" id="myList">

      <form action="dataq.php" method="post" >
	Question: <input type="text" name="answers" size="65" /> <br/><br/>
	<input type="submit" name="addquestion" value="Add New Question" />
    </form>
    <script type="text/javascript">
	function updateFaq(){

		var xmlhttp= new XMLHttpRequest();
		xmlhttp.open("GET","ajax.php?faq="+document.getElementById("faqdd").value,false);
		xmlhttp.send(null);
		document.getElementById("name").innerHTML=xmlhttp.responseText;

	}
	</div>	
	 

</script>

</body>
</body>
</html>