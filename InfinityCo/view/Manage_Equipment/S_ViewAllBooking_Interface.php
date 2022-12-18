<?php 
include '../ManageSupplier/sheader.php';
require_once '../../controller/EquipmentController/EqBooking_Controller.php';

$data = new EqBookingController();
$result = $data->AllBook();


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Title -->
    <title>View All Booking List</title>

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
    <center><b><h1 style="color:black; font-size:45px;">Booking List</h1></b></center>

    <div class="card-body table-responsive p-0">
            <table class="table table-hover">
            <thead>
                <tr>
                    <th><b>Equipment Name (Quantity)</b></th>
                    <th><b>Equipment Price</b></th>
                    <th><b>Comment</b></th>    

                </tr>
            </thead>
            <tbody>
            <?php foreach ($result as $res) { ?>
                <tr>
                    <tr>
                        <td><?php echo $res['Book_Equipment_Name']; ?></td>
                        <td><?php echo $res['Book_Equipment_Price']; ?></td>
                        <td><?php echo $res['Comment']; ?></td>     
                    </tr>
                </tr>
            
        <?php } ?>
            </tbody>
            </table> 
            <a href="S_EqHomepage_Interface.php" class="btn btn-primary pull-left" style="margin-right: 5px">Back</a>            
        </div>
             
    </div>
    </div>
    </div>
    </section>
</body>
</html>
<?php include '../footer.php' ?>