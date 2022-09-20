
<?php include'includes/connection.inc.php';?>
<?php include'includes/layout.inc.php';?>
<?php
if(isset($_POST['do'])) {
  if(!empty($_POST['name']) && !empty($_POST['mobile']) && !empty($_POST['email'])){
    $flight=$_POST['flights'];
      $name=$_POST['name'];
     $email=$_POST['email'];
     $mobile=$_POST['mobile'];
     $no =$_POST['passengers'];
$query = "INSERT INTO enquiryflight (flightid, name, mobileno , email , passenger)
VALUES ('$flight', '$name', '$mobile','$email','$no')";
  if($query_run=mysqli_query($con,$query))
  {
    ?>
  <script>alert("successfully booked");</script>
  <?php
  }

  
  }  
}
?>
<?php
if(isset($_POST['train'])) {
  if(!empty($_POST['name']) && !empty($_POST['mobile']) && !empty($_POST['email'])){
     $train=$_POST['trainsleeper'];
      $name=$_POST['name'];
     $email=$_POST['email'];
     $mobile=$_POST['mobile'];
     $no =$_POST['passengers'];
$query = "INSERT INTO enquirytrain (trainid, name, mobileno , email , passenger)
VALUES ('$train', '$name', '$mobile','$email','$no')";
  if($query_run=mysqli_query($con,$query))
  {
    ?>
  <script>alert("successfully booked");</script>
  <?php
  }

  
  }  
}
?>
<?php
if(isset($_POST['bus'])) {
  if(!empty($_POST['name']) && !empty($_POST['mobile']) && !empty($_POST['email'])){
     $bus=$_POST['buses'];
      $name=$_POST['name'];
     $email=$_POST['email'];
     $mobile=$_POST['mobile'];
     $no =$_POST['passengers'];
$query = "INSERT INTO enquirybus (busid, name, mobileno , email , passenger)
VALUES ('$bus', '$name', '$mobile','$email','$no')";
  if($query_run=mysqli_query($con,$query))
  {
   ?>
  <script>alert("successfully booked");</script>
  <?php
  }

  
  }  
}
?>
<?php
if(isset($_POST['trainfirst'])) {
  if(!empty($_POST['name']) && !empty($_POST['mobile']) && !empty($_POST['email'])){
     $bus=$_POST['trainfirst'];
      $name=$_POST['name'];
     $email=$_POST['email'];
     $mobile=$_POST['mobile'];
     $no =$_POST['passengers'];
$query = "INSERT INTO enquirytrainfirst (trainid, name, mobileno , email , passenger)
VALUES ('$bus', '$name', '$mobile','$email','$no')";
  if($query_run=mysqli_query($con,$query))
  {
  ?>
  <script>alert("successfully booked");</script>
  <?php
  }

  
  }  
}
?>

<html>
<head>
	<title>
		Booking details Form
	</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/newstyle.css">
	<!-- Latest compiled and minified CSS -->


<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
	<center><b style="color:Blue; font-size:30px;">Book tickets</b></center>
	<form method="post" action="enquiry.php">
		  	<select name="transport">
<option name="flights">Flights</option>
<option name="train">Train</option>
<option name="buses">Buses</option>
<option name="hotels">Hotels</option>
<option name="train first ac">Train first</option>
  	</select>
  	<br>
  	<br>
	<br>
	<input type="submit" name="trans">
</form>
<?php
$id='';
if(isset($_POST['trans'])){
	$trans =$_POST['transport'];
//echo $trans;
	$query= "select trans_id from function where transport='$trans' ";
	if($query_run=mysqli_query($con,$query))
	{
		$row =mysqli_fetch_assoc($query_run);
		 $id= $row['trans_id'];
	}
}
if($id==1){
	?>
<div class="container">
  <form action="enquiry.php" method="post" style="margin-top:50px;">
   <label for="id">Flight id:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <?php
    	$query= "select flight_id from flights";
    	$query_run=mysqli_query($con,$query);
    	if(mysqli_num_rows($query_run)){
    		$select = '<select name="flights">';
    		while($rs=mysqli_fetch_array($query_run)){
    			$select .='<option name="'.$rs['flight_id'].'">'.$rs['flight_id'].'</option>';
    		}
    	}
    	$select .='</select>';
    	echo $select;
    ?>
    <br>
    
     
      <label for="id">Name:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input type="text" class="form-control" name="name" placeholder="enter the name"><br>
    
    <br>
    
    
      <label for="id">Mobile no:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input type="text" class="form-control" name="mobile" placeholder="enter the contact no." min='0000000000' max='9999999999'><br>
    
    <br>
    
    
      <label for="id">Email:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input type="email" class="form-control" name="email" placeholder="enter the email"><br>
  
    <br>
    
    
      <label for="id">No. of passangers:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input type="number" class="form-control" name="passengers" placeholder="enter the no." min='1' max='10'><br>
    </div>
    <br>
    
    <input type="submit" value="Submit" name="do">
</form>

</div>
<?php

}
if($id==2){
	?>
  <div class="container">
  <form action="enquiry.php" method="post" style="margin-top:50px;">
   <label for="id">Train id:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <?php
      $query= "select train_id from train";
      $query_run=mysqli_query($con,$query);
      if(mysqli_num_rows($query_run)){
        $select = '<select name="trainsleeper">';
        while($rs=mysqli_fetch_array($query_run)){
          $select .='<option name="'.$rs['train_id'].'">'.$rs['train_id'].'</option>';
        }
      }
      $select .='</select>';
      echo $select;
    ?>
    <br>
    
     
      <label for="id">Name:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input type="text" class="form-control" name="name" placeholder="enter the name"><br>
    
    <br>
    
    
      <label for="id">Mobile no:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input type="text" class="form-control" name="mobile" placeholder="enter the contact no." min='0000000000' max='9999999999'><br>
    
    <br>
    
    
      <label for="id">Email:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input type="email" class="form-control" name="email" placeholder="enter the email"><br>
    </div>
    <br>
    
    
      <label for="id">No. of passangers:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input type="number" class="form-control" name="passengers" placeholder="enter the no." min='1' max='10'><br>
    
    <br>
    
    <input type="submit" value="Submit" name="train">
</form>

</div>

<?php
}
 if($id==3){
		?>
 <div class="container">
  <form action="enquiry.php" method="post" style="margin-top:50px;">
   <label for="id">Bus id:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <?php
      $query= "select bus_id from buses";
      $query_run=mysqli_query($con,$query);
      if(mysqli_num_rows($query_run)){
        $select = '<select name="buses">';
        while($rs=mysqli_fetch_array($query_run)){
          $select .='<option name="'.$rs['bus_id'].'">'.$rs['bus_id'].'</option>';
        }
      }
      $select .='</select>';
      echo $select;
    ?>
    <br>
    
     
      <label for="id">Name:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input type="text" class="form-control" name="name" placeholder="enter the name"><br>
    
    <br>
    
    
      <label for="id">Mobile no:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input type="text" class="form-control" name="mobile" placeholder="enter the contact no." min='0000000000' max='9999999999'><br>
    
    <br>
    
    
      <label for="id">Email:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input type="email" class="form-control" name="email" placeholder="enter the email"><br>
    </div>
    <br>
    
    
      <label for="id">No. of passangers:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input type="number" class="form-control" name="passengers" placeholder="enter the no." min='1' max='10'><br>
    
    <br>
    
    <input type="submit" value="Submit" name="bus">
</form>

</div>
<?php
}
if($id==4){
		?>
<div class="container">
  <form class="form-inline" method="post" action="enquiry.php" style="margin-top:50px;">
    <div class="form-group" >
      <label for="id">Hotel Id:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input type="text" class="form-control" name="flightid" placeholder="enter the id"><br>
    </div>
    <br>
    <br>
     <div class="form-group" >
      <label for="id">Name:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input type="text" class="form-control" name="name" placeholder="enter the name"><br>
    </div>
    <br>
    <br>
    <div class="form-group" >
      <label for="id">Mobile no:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input type="tel" class="form-control" name="mobile" placeholder="enter the contact no." min='0000000000' max='9999999999'><br>
    </div>
    <br>
    <br>
    <div class="form-group" >
      <label for="id">Email:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input type="email" class="form-control" name="email" placeholder="enter the email"><br>
    </div>
    <br>
    <br>
    <div class="form-group" >
      <label for="id">No. of passangers:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input type="number" class="form-control" name="flightid" placeholder="enter the id" min='1' max='10'><br>
    </div>
    <br>
    <br>
    <input type="submit" value="submit" name="submit">
</form>
</div>
<?php
}
if($id==5)
{
  ?>
  <div class="container">
  <form action="enquiry.php" method="post" style="margin-top:50px;">
   <label for="id">Train id:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <?php
      $query= "select train_id from train_first";
      $query_run=mysqli_query($con,$query);
      if(mysqli_num_rows($query_run)){
        $select = '<select name="trainfirst">';
        while($rs=mysqli_fetch_array($query_run)){
          $select .='<option name="'.$rs['train_id'].'">'.$rs['train_id'].'</option>';
        }
      }
      $select .='</select>';
      echo $select;
    ?>
    <br>
    
     
      <label for="id">Name:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input type="text" class="form-control" name="name" placeholder="enter the name"><br>
    
    <br>
    
    
      <label for="id">Mobile no:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input type="text" class="form-control" name="mobile" placeholder="enter the contact no." min='0000000000' max='9999999999'><br>
    
    <br>
    
    
      <label for="id">Email:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input type="email" class="form-control" name="email" placeholder="enter the email"><br>
    </div>
    <br>
    
    
      <label for="id">No. of passangers:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input type="number" class="form-control" name="passengers" placeholder="enter the no." min='1' max='10'><br>
    
    <br>
    
    <input type="submit" value="Submit" name="trainfirst">
</form>

</div>

<?php
}
?>
<?php include'includes/footer.php'; ?>
</html>