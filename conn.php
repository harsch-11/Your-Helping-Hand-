<?php
$dbhost='localhost';
$dbuser='root';
$dbpass='';
$dbname='your_helping_hand';

$conn = new mysqli($dbhost,$dbuser,$dbpass,$dbname);

//check Connection

if ($conn->connect_error)
{
	die("Connection failed :" . $conn->connect_error);
}
else 
{
	echo "Connction Established...!";
}

?>