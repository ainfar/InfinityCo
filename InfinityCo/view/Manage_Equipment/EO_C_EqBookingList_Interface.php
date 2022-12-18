<?php 

include '../ManageSupplier/cheader.php';

require_once '../../controller/EquipmentController/EqBooking_Controller.php';

$data = new EqBookingController();
$result = $data->AllBook();

if(isset($_POST['delete'])) {
    $data->C_destroy($_POST['delete']);
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Title -->
    <title>Equipment Booking List</title>

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
    <center><b><h1 style="color:black; font-size:45px;">Equipment Booking List</h1></b></center>
    <!-- Welcome Text -->
    <div class="col-20 col-md-20 col-lg-20">
        


        <div class="card-body table-responsive p-0">
            <table class="table table-hover">
            <thead>
                <tr>
                   
                    <th><b>Equipment Name(Quantity)</b></th>
                    <th><b>Equipment Price</b></th>
                    <th><b>Comment</b></th>
                    <th><b>Action</b></th>
                </tr>
            </thead>
            <tbody>
            <?php foreach ($result as $res) { ?>
                <tr>
                    <tr>                   
                        <td><?php echo $res['Book_Equipment_Name']; ?></td>
                        <td><?php echo $res['Book_Equipment_Price']; ?></td>
                        <td><?php echo $res['Comment']; ?></td>
                       
                        <td>
                        <form method="POST" action="">
                        <a href="EO_C_EqEditBooking_Interface.php?Booking_ID=<?php echo $res['Booking_ID']; ?>" class="btn btn-success" style="margin-right: 5px">Update</a><br><br>
                       
                        <input type="hidden" name="delete" value="<?php echo $res['Booking_ID'] ?>">
                        <input type="submit" name="btnDelete" class="btn btn-danger" value="Delete" onclick="return confirm('Are you sure you want to delete?')">

                        <a href="Payment.php?Booking_ID=<?php echo $res['Booking_ID']; ?>" class="btn btn-primary pull-left" style="margin-right: 5px">Add to Cart</a><br>
                    </form>
                        </td>        
                    </tr>
            </tr><?php } ?>
            </tbody>
            </table> 
            <a href="EO_C_EqHomepage_Interface.php" class="btn btn-primary pull-left" style="margin-right: 5px">Back</a> 
          
        </div>
    </div>
    </div>
    </div>
  </div>
    </section>
</body>
</html>
<?php include '../footer.php' ?>