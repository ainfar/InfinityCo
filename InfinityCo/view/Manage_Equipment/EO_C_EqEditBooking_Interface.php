<?php 
include '../ManageSupplier/cheader.php';

require_once '../../controller/EquipmentController/EqBooking_Controller.php';

$data = new EqBookingController();

if (isset($_POST['update'])) {
    $result = $data->C_update($_POST['Booking_ID']);
}

if (isset($_GET['Booking_ID'])) {
  $result = $data->getByIdBooking($_GET['Booking_ID']);
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Title -->
    <title>Update Equipment Booking</title>

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
    <center><b><h1 style="color:black; font-size:45px;">Update Equipment Booking </h1></b></center>
    <!-- Welcome Text -->
    <div class="col-20 col-md-20 col-lg-20">
        


       <div class="card-body">
            <form action="" method="post" role="form">
            <!-- text input -->
            <div class="form-group">
                <label>Equipment Name</label> <input class="form-control" name="Book_Equipment_Name"  type="text" value="<?php echo $result['Book_Equipment_Name']; ?>" required>
            </div>
            <div class="form-group">
                <label>Equipment Price</label> <input class="form-control" name="Book_Equipment_Price"  type="text" value="<?php echo $result['Book_Equipment_Price']; ?>" required>
            </div>
            <div class="form-group">
                <label>Comment</label> <input class="form-control" name="Comment" type="text" value="<?php echo $result['Comment']; ?>"required>
            </div>
        
            <div class="form-group">
                <input type="hidden" name="Booking_ID" value="<?php echo $result['Booking_ID']; ?>">
                <input class="btn btn-success" name="update" type="submit" value="Update">
                &nbsp;&nbsp;
                <a href='EO_C_EqBookingList_Interface.php' class='btn btn-primary m-b-1em'>Back</a>
            </div>
            </form>
          </div>
    </div>
    </div>
    </div>
  </div>
    </section>
</body>
</html>
<?php include '../footer.php' ?>