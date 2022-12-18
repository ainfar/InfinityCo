<?php
include 'eoheader.php';
include ($_SERVER["DOCUMENT_ROOT"]."../InfinityCo/controller/SupplierController/eoprogressController.php");

if (isset($_POST['submit'])) {
    // create controller
    $testing = new eoprogressController();
    // call method dd
        $testing->testing();
}

?>
<br>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Title -->
    <title>Event Organizer Attend Form</title>

    <!-- Stylesheet -->
    <link rel="stylesheet" href="../../libs/css/style0.css">
    <link href="bootstrap.css" rel="stylesheet" type="text/css">

</head>

<body>
    <!-- form Area Start -->
    <section>
    <!-- Single Welcome Slide -->
    <div class="single-welcome-slide bg-img" style="background-image: url(../../assets/home.png);">
    <!-- Welcome Content -->
    <div class="welcome-content h-200">
    <div class="container h-200">
	<center><b><h1 style="color:black; font-size:45px;">Event Organizer Post Attend</h1></b></center>

    <div class="card-body">
        <form action="" method="post" role="form">

            <!-- text input -->
            <div class="form-group">
                <b><label>Type of Testing</label></b><br>
                <input type="radio" name="testing" value="PA SYSTEM (SOUND CHECKING)" >PA SYSTEM (SOUND CHECKING)<br> 
                <input type="radio" name="testing" value="PA SYSTEM (LIGHTENING CHECKING)" >PA SYSTEM (LIGHTENING CHECKING)<br>
                <input type="radio" name="testing" value="FOOF TESTING" >FOOD TESTING<br>
            </div>

            <div class="form-group">
                <b><label>Date</label></b><br> 
                <input type='date' name='datetesting' class='form-control'>
            </div>

            <div class="form-group">
                <b><label>Time</label></b><br>
                <input type="radio" name="timetesting" value="10:00 AM - 12:00PM"> 10:00 AM - 12:00<br>
                <input type="radio" name="timetesting" value="14:00PM - 16:00PM"> 14:00PM - 16:00PM<br>
            </div>

	        <div class="form-group">
                <b><label>Venue</label></b><br>
                <input type="radio" name="venue" value="Astaka Ump">Astaka Ump<br>
                <input type="radio" name="venue" value="KSU Ump">KSU Ump<br>
            </div>

            <div>
                <input class="btn btn-success" type="submit" name="submit" value="OK" onclick="return  confirm('Are you sure to attend?')">
                <input class="btn btn-danger" type="reset" value="Cancel" onclick="return  confirm('Are you sure to cancel attend?')"
            </div>                               
            
        </form>
        </div>       
    </div>
    </div>
    </div>
    </div>
	</div>
    </section>
</body>
</html>

<?php include '../footer.php' ?>