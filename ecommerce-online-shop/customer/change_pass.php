<h2 style="text-align: center;">Change Your Password</h2>
<form action="" method="post">
<table align="center">
<tr>
	<td align="right"><b>Enter current Password:</b></td>
	<td><input type="password" name="current_pass" required></td><br>
</tr>
<tr>
	<td align="right"><b>Enter new Password:</b></td>
	<td><input type="password" name="new_pass" required></td><br>
</tr>
<tr>
	<td align="right"><b>Enter new password again:</b></td>
	<td><input type="password" name="new_pass_again" required></td><br>
</tr>
<tr align="center">
	<td colspan="8" align="center"><input type="submit" name="change_pass" value="change Password"></td>
</tr>
</table>	
</form>
<?php
if(isset($_POST['change_pass']))
{
	$user = $_SESSION['customer_email'];
	$current_pass = $_POST['current_pass'];
	$new_pass = $_POST['new_pass'];
	$new_pass_again = $_POST['new_pass_again'];

	$sel_pass = "select * from customers where customer_pass='$current_pass' AND customer_email='$user'";
		
		$run_pass = mysqli_query($con, $sel_pass); 
		
		$check_pass = mysqli_num_rows($run_pass); 
		
		if($check_pass==0){
		
		echo "<script>alert('Your Current Password is wrong!')</script>";
		exit();
		}
		
		if($new_pass!=$new_pass_again){
		
		echo "<script>alert('New password do not match!')</script>";
		exit();
		}
		else {
		
		$update_pass = "update customers set customer_pass='$new_pass' where customer_email='$user'";
		
		$run_update = mysqli_query($con, $update_pass); 
		
		echo "<script>alert('Your password was updated succesfully!')</script>";
		echo "<script>window.open('my_account.php','_self')</script>";
		}
}

?>
