<?php
$name=$_POST['name'];
$description=$_POST['description'];
 $conn = mysqli_connect("localhost:3308", "root", "", "event"); 
	if (mysqli_connect_errno())
		{
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }try{
        $db = new PDO('mysql:host=localhost:3308;dbname=event', 'root', '');
    }
    catch (PDOException $e) {
        die('connection failed, Error= '. $e->getMessage());
    }

    try {
            $requete = $db->prepare(
                                    "INSERT INTO event (name, description)
                                    VALUES ('$name', '$description')"
                                   );
            $requete->execute();
        }
        catch(PDOException $e) {
            die('<p> Error['.$e->getCode().'] : '.$e->getMessage().'</p>');
        }
        var_dump($requete);
        echo " event added successefully!! ";
?>