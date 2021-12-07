<?php
session_start();
$conn = mysqli_connect("localhost:3308", "root", "", "chata"); 
$user_check = $_SESSION['login_user']; 
$query = "SELECT* from login where username = '$user_check'"; 
$resultat = $conn->query ($query)or die ('Erreur '.$requete.' '.$mysqli->error);
while ($row = $resultat->fetch_assoc()) {
$login_session = $row["username"];
$idc=$row["user_id"];}

//var_dump($_SESSION['login_user']);
if(empty($_SESSION['login_user'])){
	//header("location:index.php");
	
}
?>