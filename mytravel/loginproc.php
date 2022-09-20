<?php
session_start();
include 'includes/connection.inc.php';
$user = $_POST['username'];
$pass =$_POST['pass'];
$query ="select * from admin where username='$user' and password='$pass' ";
$query_run =mysqli_query($con,$query);
if($query_run)
{
	if(mysqli_num_rows($query_run)==1)
	{
		$_SESSION['username'] =$user;
		header('Location:securedpage.php');
	}
	else
	{
		header('Location:index.php');
	}
}
?>
