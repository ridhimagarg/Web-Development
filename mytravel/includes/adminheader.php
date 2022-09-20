<html>
<head>
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
<script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
</head>
<body>
<!-- Uses a header that contracts as the page scrolls down. -->
<style>
.demo-layout-waterfall .mdl-layout__header-row .mdl-navigation__link:last-of-type  {
  padding-right: 0;
}
</style>

<div class="demo-layout-waterfall mdl-layout mdl-js-layout">
  <header class="mdl-layout__header mdl-layout__header--waterfall">
    <!-- Top row, always visible -->
    <div class="mdl-layout__header-row">
      <!-- Title -->
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
    <!-- Bottom row, not visible on scroll -->
    <div class="mdl-layout__header-row">
      <div class="mdl-layout-spacer"></div>
      <!-- Navigation -->
      <nav class="mdl-navigation">
        <a class="mdl-navigation__link" href="booking.php">Flight Booking</a>
        <a class="mdl-navigation__link" href="trainsleeperbooking.php">Train Booking</a>
        <a class="mdl-navigation__link" href="trainfirstbooking.php">Train first Booking</a>
        <a class="mdl-navigation__link" href="busesbooking.php">Buses Booking</a>
          <a class="mdl-navigation__link" href="feedbackdmin.php">Feedbacks</a>
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
    <div class="page-content"><img src="images/ert.jpg" style="margin-left:200px; height:500px; margin-top:50px;"/></div>
  </main>
</div>
</body>
</html>