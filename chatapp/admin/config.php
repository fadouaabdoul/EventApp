<?Php
/////// Update your database user detail here /////
$dbhost_name = "localhost";  
$database = "event";       
$username = "root";          
$password = "";           
//////// End of database details of your server //////

try {
$dbo = new PDO('mysql:host='.$dbhost_name.';dbname='.$database, $username, $password);
} catch (PDOException $e) {
print "Error!: " . $e->getMessage() . "<br/>";
die();
}
?> 