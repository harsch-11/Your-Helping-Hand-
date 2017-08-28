<?php
/*
$dbhost='localhost';
$dbuser='root';
$dbpass='';
$dbname='your_helping_hand';


//connection to db
/*$conn = mysql_connect($dbhost,$dbuser,$dbpass) or die("Connection failed...!!!");

mysql_select_db($dbname);


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


include 'conn.php';
if (@$_POST["submit"] == "signup") 
{*/

  include 'conn.php';
	 $Username = @$_POST["name"];
     $Password = @$_POST["passwd"];
     $address = @$_POST["addr"];
     $phone = @$_POST["phno"];
     $email = @$_POST["e_mail"];
     



$ststr="insert into user_info (uname,uaddr,uphno,uemail,upasswd) values('$Username','$address',$phone,'$email','$Password')";
//$ststr="insert into user_info (uname,uaddr,uphno,uemail,upasswd) values('gitesh','hfgb',12354,'fhfh','123')";
if ($conn->query($ststr)==TRUE)
{
		header('Location: http://localhost:8080/esdl/login/userhtml.html');	
} 
else
{
	echo "Error while sign up";
}



?>