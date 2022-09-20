<?php include 'includes/connection.inc.php';?>
<head>
<link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/newstyle.css">
	<!-- Latest compiled and minified CSS -->


<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>

<div class="container">          
  <table class="table table-hover">
    <thead style="color:#B71C1C; font-weight:bolder; font-size:20px;">
      <tr>
        <th>Train id</th>
        <th>Name</th>
        <th>Mobile no</th>
        <th>Email</th>
        <th>Passengers</th>
        <th>Mail</th>
      </tr>
    </thead>
    <tbody >
    </tbody>

<?php
$query ="select * from enquirytrainfirst ";
$query_run =mysqli_query($con,$query);
if($query_run)
{


while($row=mysqli_fetch_assoc($query_run)){
	//echo $row['flightid'];
	?>
	<tr>

 <td ><?php echo $row['trainid']; ?></td>
  <td ><?php echo $row['name'];  ?></td>  
                  <td ><?php echo $row['mobileno'];  ?></td> 
                 
                  

               <td ><?php echo $row['email']; ?></td>
                <td><?php echo $row['passenger']; ?></td>  
                <td><a href="#"><img src="images/mail.png"></a></td>
              </tr>
       
              <?php  
}

}
?>
   </table>
      </div>