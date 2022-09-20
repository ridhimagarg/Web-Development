<?php 
include 'includes/connection.inc.php';
include 'includes/layout.inc.php';
?>
<br>
<br>
<br>
<html >
<head>
	<title>
		buses
	</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/newstyle.css">
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
</head>
<body>

	<center>
	<div class="back1">
	<div class="container">
  <form class="form-inline" method="post" action="buses.php" style="margin-top:50px;">
    <div class="form-group" >
       <script type="text/javascript">
$(function() {
    var availableTags = <?php 
$sql = "select source from buses";
    $result = mysqli_query($con, $sql);

    $dname_list = array();
    while($row = mysqli_fetch_array($result))
    {
        $dname_list[] = $row['source'];
    }
    echo json_encode($dname_list);
    ?>;
    $("#tags").autocomplete({
        source: availableTags,
        autoFocus:true
    });
});
</script>
      <label for="source" style="color:White;">Source:</label>&nbsp;
      <input type="text" class="form-control" name="source" placeholder="Enter where to go">&nbsp;
    </div>
    <div class="form-group">
       <script type="text/javascript">
$(function() {
    var availableTags = <?php 
$sql = "select destination from flights";
    $result = mysqli_query($con, $sql);

    $dname_list = array();
    while($row = mysqli_fetch_array($result))
    {
        $dname_list[] = $row['source'];
    }
    echo json_encode($dname_list);
    ?>;
    $("#tags").autocomplete({
        source: availableTags,
        autoFocus:true
    });
});
</script>
      <label for="destination" style="color:White;">Destination:</label>&nbsp;
      <input type="text" class="form-control" name="destination" placeholder="Enter where to reach">&nbsp;
    </div>
     <div class="form-group">
      <label for="date" style="color:White;">Date:</label>&nbsp;
      <input type="date" class="form-control" name="date" placeholder="date">&nbsp;
          </div>

    <input type="submit" class="btn btn-default" name="submit" value="search" style="background-color:Red;">

   
  </form>
   <br>
  <a href="enquiry.php" style="color:White;"> Book Tickets </a>
</div>
</div>
</center>

	<!--div class="back1">
<form method="POST" action="first.php">
<div style="color:White;"><b>Source:<input type="text" name="source">
Destination:<input type="text" name="destination">
Date:<input type="date" name="date"></b>
</form>
<div>
</div-->
<div class="container">          
  <table class="table table-hover">
    <thead style="color:#B71C1C; font-weight:bolder; font-size:30px;">
      <tr>
        <th>Bus Name</th>
        <th>Bus Id</th>
        <th>Departure</th>
        <th>Arrival</th>
        <th>Price</th>
        <th>Seats</th>
      </tr>
    </thead>
    <tbody >
    </tbody>
<?php
if(isset($_POST['submit'])){
	if(!empty($_POST['source'])&&!empty($_POST['destination'])&&!empty($_POST['date'])){
		$source = $_POST['source'];
		$destination =$_POST['destination'];
		$date=$_POST['date'];
		$query="select * from buses where source='$source' and destination='$destination' and date='$date' ";
		if($query_run=mysqli_query($con,$query)){
		while ($row = mysqli_fetch_assoc($query_run))
{

?>
			<tr>

 <td style="font-weight:bold;"><?php echo $row['bus_name']; ?></td>
  <td style="font-weight:bold;"><?php echo $row['bus_id'];  ?></td>  
                  <td style="font-weight:bold;"><?php echo $row['departure'];  ?></td> 
                 
                  

               <td style="font-weight:bold;"><?php echo $row['arrival']; ?></td>
                <td style="font-weight:bold;"><?php echo $row['price']; ?></td>  
                  <td style="font-weight:bold;"><?php echo $row['seats']; ?></td>  
              </tr>
<?php
              		}
              	}
		else{
			echo 'not found';
		}
	
}
}
?>
</body>
</table>
</div>
<?php include 'includes/footer.php';?>
