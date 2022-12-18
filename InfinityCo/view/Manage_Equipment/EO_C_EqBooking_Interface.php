<?php
include '../ManageSupplier/cheader.php';
require_once '../../controller/EquipmentController/EqBooking_Controller.php';
require_once '../../controller/EquipmentController/EquipmentList_Controller.php';

if(isset($_POST['submit'])){
 $data = new EqBookingController();
 //create object 
 $data->AddBooking();
}


if (isset($_GET['Equipment_ID'])) {
  $data = new EquipmentController();
  $result = $data->get($_GET['Equipment_ID']);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Title -->
    <title>Booking Equipment Page</title>

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
    <center><b><h1 style="color:black; font-size:45px;">Book Equipment</h1></b></center>

        <div >
            <form action="" method="post" role="form">

              <!-- text input -->
              <div >
                <label>Equipment Name: </label>
                <input class="form-control" name="Book_Equiment_Name" type="text" value="<?php echo $result['Equipment_Name']; ?>" required>
              </div><br>

              <div >
                <label>Equipment Price</label> 
                <input class="form-control" name="Book_Equipment_Price" type="text" value="<?php echo $result['Equipment_Price']; ?>" required>
              </div><br>

              <div>
                <label>Comment</label> 
                <input class="form-control" name="Comment" type="text">
              </div><br>

              <div>
                <input class="btn btn-success" name="submit" type="submit" value="Ok">
                &nbsp;&nbsp;
                <a href='EO_C_EqHomepage_Interface.php' class='btn btn-danger'>Cancel</a>
              </div>
                
            </form>

          </div>

        </div>

      </div>

    </section>

    <?php include '../footer.php' ?>

