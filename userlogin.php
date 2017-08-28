<?php
session_start();
include 'conn.php';

$userid =@$_POST["uid"];
$Password = @$_POST["passwd"];

$result= $conn->query("SELECT upasswd from user_info WHERE uid = '$userid'");

if ($result->num_rows > 0)
{
  
    while($row = $result->fetch_assoc())
    {
    	$customuserpass = $row["upasswd"];
    }

    if($Password==$customuserpass)
    {

    	
    	$_SESSION['userid']=$userid;
    	if(isset($_SESSION['userid']) && !empty($_SESSION['userid']))
    	{
    		
    		
    		header('Location: http://localhost:8080/esdl/event/event.html');
    	}
    	else
    	{
		echo "Error to establish session";
    	}
    }
	else
	{
	echo "Invalid  password...!";
	}
}
else
{
	echo "Invalid username or password...!";
}

?>  