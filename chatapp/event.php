<style>
  <?php include 'main.css'; ?>
 
#featured-content {
    overflow: hidden;
    width: 1000px;
    margin: 0px auto;
    padding: 0px 0px 30px 0px;
}

</style>
<?php
include_once("connectM.php");
?>
<html lang="en" class="no-js">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>

  <link rel="stylesheet" href="../assets/a/css/reset.css"> 
  <link rel="stylesheet" href="../assets/a/css/style.css"> 
  <script src="../assets/a/js/modernizr.js"></script> 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <title>EVENTS</title>
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
    <div id="header" >
      <div id="logo">
        <h2><a href="index.html">SDGsCHAT</a></h2>
      </div>
      <div id="menu">
        <ul>
          <li class="active"><a href="index.html" accesskey="1" title="">Home</a></li>
          <li><a href="event.php" accesskey="2" title="">Event</a></li>
          <li><a href="index.php"><span class="glyphicon glyphicon-user"></span>Sign Up</a></li>
          <li><a href="index.php"><span class="glyphicon glyphicon-log-in"></span>Log In</a></li> 
        </ul>
      </div> 
    </div>
    </div>
    </div>
    <br> 
    <br> 
    
<header> 
    <div align="center"><h1>EVENTS</h1></div>
</header>
<br/>
<br/>
<br/>    
    <br/>
    <br/>
</div>
<br>
<div class = "container" id = "featured-content"> 
    <ul class="cd-faq-group" id="myList">
        <?php
$sql="SELECT * FROM event ";
$res=mysqli_query($db_connection,$sql) or die(mysqli_error($db_connection));
if (mysqli_num_rows($res) > 0){
  while($row=mysqli_fetch_assoc($res)){
      $name= $row['name'];
      echo'<li class="accordion" ><h3>'.$name.'</h3></li>';
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
      ?></ul>
    </ul>
</div> 
  </div> 
</section> 
<script src="js/jquery-2.1.1.js"></script>
<script src="js/jquery.mobile.custom.min.js"></script>
<script src="js/main.js"></script> <!-- Resource de jQuery -->

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