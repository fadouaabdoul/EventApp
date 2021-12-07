<?php
include_once("connectM.php");
?>
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
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="../assets/a/css/reset.css"> <!-- CSS reset -->
	<link rel="stylesheet" href="../assets/a/css/style.css"> <!-- Resource style -->
  <script src="../assets/a/js/modernizr.js"></script> <!-- Modernizr -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <link rel="stylesheet" href="../assets/a/css/reset.css"> <!-- CSS reset -->
  <link rel="stylesheet" href="../assets/a/css/style.css"> <!-- Resource style -->
  <script src="../assets/a/js/modernizr.js"></script> <!-- Modernizr -->
  <title>EVENTS</title>
<style>
 <?php include 'main.css';?>
#featured-content {
    overflow: hidden;
    width: 1000px;
    margin: 0px auto;
    padding: 0px 0px 30px 0px;
}

</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myList li").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
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
		  <li><a href="../chatU/index.php" accesskey="2" title="">Chat</a></li>
      <li><a href="index.php" accesskey="3" title="">Event</a></li>
     
		  
		  <li><a href="../logout.php"><span class="glyphicon glyphicon-log-out" ></span> SIGN OUT</a></li>
		        </ul>
      </div> 
    </div>
    </div>
<br/>
<br/>
<br/>
<header>
<h1 align="center">EVENTS</h1>

</header>

    
    <br/>
    <br/>
    <div class = "container" id = "featured-content"> 
    <ul class="cd-faq-group" id="myList">
        <?php
$sql="SELECT * FROM event ";
$res=mysqli_query($db_connection,$sql) or die(mysqli_error($db_connection));
if (mysqli_num_rows($res) > 0){
  while($row=mysqli_fetch_assoc($res)){
      $name= $row['name'];
      echo'<li class="accordion" >'.$name.'</li>';
      echo' <div class="panel">';

      $sql2=" SELECT * from event where event_id = '".$row['event_id']."'";
      $res2=mysqli_query($db_connection,$sql2) or die(mysqli_error($db_connection));
      while($row2=mysqli_fetch_assoc($res2)){
              $description= $row2['description'];
              $id=$row2['event_id'];
            	echo'<p>'.$description.'<p></a>';}
              echo'</div>';
              echo'<br/>';
} 
}


else{
  echo "No events at this time";
}
      ?>
    </ul>
    </div>
</body>
</html>