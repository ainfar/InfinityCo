<?php
include 'cheader.php';

include ($_SERVER["DOCUMENT_ROOT"]."../InfinityCo/controller/SupplierController/cfeedbackController.php");

if (isset($_POST['submit'])) {
    // create controller
    $feedback = new cfeedbackController();
    // call method dd
        $feedback->feedback();
}
?>
<br>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Title -->
    <title>Customer Feedback Form</title>

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
    <div class="welcome-content h-300">
    <div class="container h-300">
    <center><b><h1 style="color:black; font-size:45px;">Customer Feedback</h1></b></center>

    <div class="card-body">
        <form action="" method="post" role="form">

            <!-- text input -->
            <div class="form-group">
                <b><label>Type of Account</label></b><br>
                <input type="radio" name="feedback" value="Event Organizer" >Event Organizer<br> 
                <input type="radio" name="feedback" value="Customer" checked="">Customer
            </div>

            <div class="form-group">
                <b><label>Date</label></b> 
                <input type='date' name='datefeedback' class='form-control'>
            </div>

            <div class="form-group">
                <b>Comments</b>
                <textarea name = "Comments" rows = "5" cols = "5" class="form-control"></textarea>
            </div>

            <div class="form-group">
                <b><label>Rating</label></b><br>
                <input type="radio" name="Rate" value="Very Satisfied">Very Satisfied<br> 
                <input type="radio" name="Rate" value="Satisfied">Satisfied<br>
                <input type="radio" name="Rate" value="Natural">Natural<br>
                <input type="radio" name="Rate" value="Dissatisfied">Dissatisfied<br>
                <input type="radio" name="Rate" value="Very Dissatisfied">Very Dissatisfied
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input class="btn btn-success" type="submit" name="submit" value="OK" onclick="return  confirm('Are you sure to give feedback?')">
                <input class="btn btn-danger" type="reset" value="Cancel" onclick="return  confirm('Are you sure to cancel to give feedback?')"
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