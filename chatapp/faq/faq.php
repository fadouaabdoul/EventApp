<?php
include_once("connectM.php");
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

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>	<title>QUESTIONS</title>
<style>
<?php include 'main.css' ?>
</style>
</script>
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
                         <a class="dropdown-item" href="addquestion.php">Add Question</a>
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
	<h1 align="center">QUESTION</h1>
</header>
<br/>
		<ul align="center" >
   
    <?php



echo'<br/><br/>';
$sql="SELECT question.question, answer.answer from question, answer
where question_id = answer_id";
$res=mysqli_query($db_connection,"SELECT * FROM event ") or die(mysqli_error());
if (mysqli_num_rows($res) > 0){
	while($row=mysqli_fetch_assoc($res)){
    
	$question=(isset($row['question']));
	$answer= (isset($row['answer']));
	echo'<button type="button" class="btn" data-toggle="collapse" >'.$question.'</button>
  <br/>
				<div class="collapse">'.$answer.'</div><br/>';
			}
		
}
else{
	echo "No questions at this time";
}
echo'</div>';
?>
		</ul> <!-- cd-faq-group -->
</section> <!-- cd-faq -->
<script src="js/jquery-2.1.1.js"></script>
<script src="js/jquery.mobile.custom.min.js"></script>
<script src="js/main.js"></script> <!-- Resource jQuery -->

<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight){
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    } 
  });
}
</script>
</body>
</html>