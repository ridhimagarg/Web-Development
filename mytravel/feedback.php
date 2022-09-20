<?php include 'includes/layout.inc.php';
include 'includes/connection.inc.php';
?>
<html>
<head>
	<title>
		feedback
	</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/newstyle.css">
	<!-- Latest compiled and minified CSS -->


<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
</head>
<br>
<br>
<div style="font-size:30px; color:Blue"><b>Feedback:<b>
</div>
<form action="feedback.php" method="post">
	<textarea col=300 rows=10 style="margin-left:40px;" name="feedback">

	</textarea>
	<br>
	<br>
	 <input type="email" class="form-control" name="email" placeholder="enter the email" style="margin-left:40px;"><br>
	<br>
	<br>
	<input type="submit" class="btn btn-default" name="submit" value="submit" style="margin-left:40px;">

</form>
<?php
if(isset($_POST['submit'])){
	if(isset($_POST['feedback']))
	{
		$text = $_POST['feedback'];
		$email= $_POST['email'];
		
$query = "INSERT INTO feedback VALUES('$text','$email')";
  if($query_run=mysqli_query($con,$query))
  {
    echo 'yeah';
  }
	}
}
?>
</html>
<?php include 'includes/footer.php';?> 
