<?php

// Inialize session
session_start();

// Check, if username session is NOT set then this page will jump to login page
if (!isset($_SESSION['username'])) {
header('Location: index.php');
}

?>
<html>

<head>
<title>Secured Page</title>
  
</head>

<body>
<!-- Uses a header that contracts as the page scrolls down. -->
<!--style>
.demo-layout-waterfall .mdl-layout__header-row .mdl-navigation__link:last-of-type  {
  padding-right: 0;
}
</style>

<div class="demo-layout-waterfall mdl-layout mdl-js-layout">
  <header class="mdl-layout__header mdl-layout__header--waterfall">
   
    <div class="mdl-layout__header-row">
     
      <span class="mdl-layout-title">Admin login</span>
      <div class="mdl-layout-spacer"></div>
      <div class="mdl-textfield mdl-js-textfield mdl-textfield--expandable
                  mdl-textfield--floating-label mdl-textfield--align-right">
        <label class="mdl-button mdl-js-button mdl-button--icon"
               for="waterfall-exp">
          <i class="material-icons">search</i>
        </label>
        <div class="mdl-textfield__expandable-holder">
          <input class="mdl-textfield__input" type="text" name="sample"
                 id="waterfall-exp">
        </div>
      </div>
    </div>
   
    <div class="mdl-layout__header-row">
      <div class="mdl-layout-spacer"></div>
   
      <nav class="mdl-navigation">
        <a class="mdl-navigation__link" href="booking.php">Flight Booking</a>
        <a class="mdl-navigation__link" href="">Train Booking</a>
        <a class="mdl-navigation__link" href="">Buses Booking</a>
        <a class="mdl-navigation__link" href="">Hotel Booking</a>
          <a class="mdl-navigation__link" href="logout.php">logout</a>
      </nav>
    </div>
  </header>
  <div class="mdl-layout__drawer">
    <span class="mdl-layout-title">Admin Panel</span>
    <nav class="mdl-navigation">
      <a class="mdl-navigation__link" href="booking.php">Flight booking</a>
      <a class="mdl-navigation__link" href="">Train Booking</a>
      <a class="mdl-navigation__link" href="">Buses Booking</a>
      <a class="mdl-navigation__link" href="">Hotel Booking</a>
      <a class="mdl-navigation__link" href="logout.php">Logout</a>
    </nav>
  </div>
  <main class="mdl-layout__content">
    <div class="page-content"></div>
  </main>
</div-->
<?php include 'includes/adminheader.php';
?>

</body>

</html>