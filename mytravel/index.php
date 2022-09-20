<?php
session_start();
if(isset($_SESSION['username']))
{
	header('Location:securedpage.php');
}

?>
<!--html>
<title>
	admin login
	</title>
<body>
	<form action="loginproc.php" method="post">
	username:	<input type="text" name="username">
	password:   <input type="password" name="pass">
	<input type="submit" name="submit">
</form>
	</body>
	</html-->
	<html >
<head>
  <meta charset="UTF-8">
  <title>Admin Login</title>
  
  
  
      <link rel="stylesheet" href="css/formstyle.css">

  
</head>

<body>
  <div id="wrap">
  <div id="regbar">
    <div id="navthing">
      <h2><a href="#" id="loginform">Admin Login Panel</a> </h2>
    <div class="login">
      <div class="arrow-up"></div>
      <div class="formholder">
        <div class="randompad">
        	<form action="loginproc.php" method="post">
           <fieldset>
             <label name="email">Email</label>
             <input type="email" name="username" />
             <label name="password">Password</label>
             <input type="password" name="pass" />
             <input type="submit" value="Login"  name="submit" />
         </form>
 
           </fieldset>
        </div>
      </div>
    </div>
    </div>
  </div>
</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="js/index.js"></script>

</body>
</html>