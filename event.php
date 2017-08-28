<?php
session_start();

include 'conn.php';
$evntname = @$_POST["ename"];
$qty = @$_POST["noplates"];
$ftype = @$_POST["food"];
$ephono = @$_POST["contact"];
$eaddr = @$_POST["addr"];
$epin = @$_POST["pincode"];

$str ="insert into event_info (ename,noplates,food,contact,addr,pincode) values ('$evntname',$qty,'$ftype',$ephono,'$eaddr',$epin)";
//$str ="insert into event_info(ename,noplates,food,contact,addr,pincode) values ('shadi',5,'veg',13456,'xyz',404202)";
if($conn->query($str)==TRUE)
{
	echo "Event recorded inserted sucessfully";
	//$ststr = "select MAX(eid) as ppfrom event_info ";
	$result=$conn->query("select MAX(eid) from event_info");
	if(!$result)
	{
		die("");
	}
	else
	{
		$row = $result->fetch_assoc();
 		$_SEESION['eventid'] = $row["MAX(eid)"];
 		if(isset($_SEESION['eventid']) && !empty($_SEESION['eventid']))
 		{
 				echo "<br>event id added to session redirect to same page";
 		}
 		else
 		{
 			echo "ERROR TO CREATE EVENT ID ";
 		}
 	}
	
}
else
{
	echo "error while event record";
}

?>