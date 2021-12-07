<?php
	$link=mysqli_connect("localhost:3308","root","","event" ) or die(mysqli_error($link));

$name=$_GET['name'];
if($name!="")
{	
	$res=mysqli_query($link,"SELECT * from event where event_id= $name");

	echo "<br/>name: <select name='name'>";
	while($row=mysqli_fetch_array($res))
	{
		echo"<option value=".$row['event_id'].">";
		echo $row['name'];
		echo "</option>";
	}
	echo "</select>";
}

  ?>