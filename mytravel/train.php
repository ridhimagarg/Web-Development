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
		train
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
  <form class="form-inline" method="post" action="train.php" style="margin-top:50px;">
    <div class="form-group" >
       <script type="text/javascript">
$(function() {
    var availableTags = <?php 
$sql = "select source from trains";
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
      <input id="tags" type="text" class="form-control" name="source" placeholder="Enter where to go">&nbsp;
    </div>
    <div class="form-group">
       <script type="text/javascript">
$(function() {
    var availableTags = <?php 
$sql = "select destination from trains";
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
      <input id="tags" type="text" class="form-control" name="destination" placeholder="Enter where to reach">&nbsp;
    </div>
     <div class="form-group">
      <label for="date" style="color:White;">Date:</label>&nbsp;
      <input type="date" class="form-control" name="date" placeholder="date">&nbsp;
          </div>
          <select name="type">
          	<option name="sleeper">Sleeper</option>
          	<option name="first">first</option>
          </select>
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
        <th>Train Name</th>
        <th>Train Id</th>
        <th>Departure</th>
        <th>Arrival</th>
        <th>Price</th>
        <th>Duration</th>
      </tr>
    </thead>
    <tbody >
    </tbody>
<?php
if(isset($_POST['submit'])){
$type= $_POST['type'];
$source =$_POST['source'];
$destination=$_POST['destination'];
$date =$_POST['date'];
echo $type;



$query ="select id from traincategory where category='$type' ";
if($query_run=mysqli_query($con,$query))
{
  $train_cat='';
  $row =mysqli_fetch_array($query_run);
  $train_cat= $row['id'];
}
if($train_cat==1)
{
$query1= "select * from train where source='$source' and destination='$destination' and date='$date' ";
if($query_run1 =mysqli_query($con,$query1))
{
  while($row1=mysqli_fetch_array($query_run1))
  {
    ?>
    <tr>

 <td style="font-weight:bold;"><?php echo $row1['train_name'];  ?></td>
  <td style="font-weight:bold;"><?php echo $row1['train_id'];  ?></td>  
                  <td style="font-weight:bold;"><?php echo $row1['departure'];  ?></td> 
                 
                  

               <td style="font-weight:bold;"><?php echo $row1['arrival']; ?></td>
                <td style="font-weight:bold;"><?php echo $row1['price']; ?></td>  
                <td style="font-weight:bold;"><?php echo $row1['day']; ?></td>  
              </tr>
              <?php     
  }
} 
}
if($train_cat==2)
{
  echo 'hello';
  $query2= "select * from train_first where source='$source' and destination='$destination' and date='$date' ";
if($query_run2 =mysqli_query($con,$query2))
{
  while($row2=mysqli_fetch_array($query_run2))
  {
    ?>
    <tr>

 <td style="font-weight:bold;"><?php echo $row2['train_name'];  ?></td>
  <td style="font-weight:bold;"><?php echo $row2['train_id'];  ?></td>  
                  <td style="font-weight:bold;"><?php echo $row2['departure'];  ?></td> 
                 
                  

               <td style="font-weight:bold;"><?php echo $row2['arrival']; ?></td>
                <td style="font-weight:bold;"><?php echo $row2['price']; ?></td>  
                <td style="font-weight:bold;"><?php echo $row2['day']; ?></td>  
              </tr>
              <?php     
  }
} 
}
}


?>
</table>
</div>

</body>
<?php include 'includes/footer.php';?>