<?php 
// error_reporting(0);
if(session_status() == PHP_SESSION_NONE){
  session_start();
}

?>
<!DOCTYPE HTML>
<html>
<title>Event Management System</title>
<head>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.4.1.min.js"integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="crossorigin="anonymous"></script>
<style>

html, body {
  height: 100%;
  font-size:20px;
  font-family: times, Helvetica, sans-serif;

}

h1 {
  padding-top: 20px;
  padding-bottom: 20px;
  font-size: 40px;
}

h2 {
    width:500px;
    margin:  auto;
    text-align: center;
  font-size : 25px;
}

input[type=text] {
  width: 30%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
  font-size: 15px;
}

/*new*/
.content {
  flex: 1 0 auto;
}

footer {
  flex-shrink: 0;
  margin-top: 25px;
  left: 0;
  bottom: 0;
  width: 100%;
  background-color: #000000;
  text-align: center;
  color: white;
}

</style>
</head>

<body>
<h1><center><img src="../../assets/infinity.jpg" style="width:100px;height:100px;"">Infinity Event Management System</center></h1>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="justify-content: center; padding: 0px; background-color: #808080; color:white;">
  <ul class="navbar-nav">
    <li class="nav-item active ">
      <a class="nav-link" href="../ManageSupplier/chome_interface.php" style="color:white">Home</a>
    </li>

    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="payment" role="button" data-toggle="dropdown" style="color:white">
        Services
      </a>
      <div class="dropdown-menu" aria-labelledby="payment">
        <a class="dropdown-item" href="../ManageEvent/View_Event_Page.php">View Event Package</a>
        <a class="dropdown-item" href="../Manage_Equipment/EO_C_EqHomepage_Interface.php">View Equipment Package</a>
      </div>
    </li>

    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="payment" role="button" data-toggle="dropdown" style="color:white">
        Booking
      </a>
      <div class="dropdown-menu" aria-labelledby="payment">
        <a class="dropdown-item" href="../ManageEvent/Booking_List_Page.php">Event Booking List</a>
        <a class="dropdown-item" href="../Manage_Equipment/EO_C_EqBookingList_Interface.php">Equipment Booking List</a>
      </div>
    </li>

    <li class="nav-item active ">
      <a class="nav-link" href="../ManageSupplier/cfeedback_interface.php" style="color:white">Feedback</a>
    </li>

    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="payment" role="button" data-toggle="dropdown" style="color:white">
        Post Question
      </a>
      <div class="dropdown-menu" aria-labelledby="payment">
      <a class="dropdown-item" href="../ManageEvent/Question_Page.php">Post Event Question</a>
      <a class="dropdown-item" href="../Manage_Equipment/EO_C_EqAskQuestion_Interface.php">Post Equipment Question</a>
    </div>
    </li>

	 <li class="nav-item active ">
      <a class="nav-link" href="../ManagePayment/ccart.php" style="color:white">Manage Payment</a>
    </li>
	
    <li class="nav-item dropdown">
      <a class="nav-link" href="../home.html" id="track" role="button" style="color:white">
        Log Out
      </a>
    </li>

  </ul>

</nav>

 

<div class="content">

