<?php
$username=$_POST['username'];
$email=$_POST['email'];
$password=$_POST['password'];
$birth=$_POST['birth'];
$phone=$_POST['phone'];
$country=$_POST['country'];
 $conn = mysqli_connect("localhost:3308", "root", "", "chata"); 
	if (mysqli_connect_errno())
		{
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }try{
        $db = new PDO('mysql:host=localhost:3308;dbname=chata', 'root', '');
    }
    catch (PDOException $e) {
        die('connection failed, Error= '. $e->getMessage());
    }

    try {
            $requete = $db->prepare(
                                    "INSERT INTO login (username, email, password, birth, phone, country)
                                    VALUES ('$username', '$email', '$password', '$birth', '$phone', '$country')"
                                   );
            $requete->execute();
        }
        catch(PDOException $e) {
            die('<p> Error['.$e->getCode().'] : '.$e->getMessage().'</p>');
        }
        echo " registration completed ";
        var_dump($requete);

?>