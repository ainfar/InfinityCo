<?php
include '../ManageSupplier/cheader.php';

require_once '../../controller/EquipmentController/EqQuestion_Controller.php';



if(isset($_POST['submit'])){
 $data = new EqQuestionController();
 //create object 
 $data->addques();
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Title -->
    <title>Ask Question Page</title>

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
    <center><b><h1 style="color:black; font-size:45px;">Contact Us</h1></b></center>
        <div class="card-body">
            <form action="" method="post" role="form">

              <!-- text input -->          
              <div class="form-group">
                <label>Email</label>
                <input class="form-control" name="Email"  type="text"> 
              </div><br>

              <div class="form-group">
                <label>Subject</label> 
                <input class="form-control" name="Subject" type="text">
              </div><br>

              <div class="form-group">
                <label>Message</label> 
                <input class="form-control" name="Message" type="text">
              </div><br>

              <div class="form-group">
                <input class="btn btn-success" name="submit" type="submit" value="Submit">
              </div>
              <a href="EO_C_EqHomepage_Interface.php" class="btn btn-primary pull-left" style="margin-right: 5px">Back</a> 

            </form>
            

          </div><!-- /.card-body -->

        </div><!-- /.card -->

      </div>

    </section>

    <?php include '../footer.php' ?>

