<?php
include '../ManageSupplier/cheader.php';
require_once '../../controller/EventController/Booking_Controller.php';

$data = new BookingController();
$result = $data->View_Booking();

if(isset($_POST['delete'])) {
    $data->Delete_Booking($_POST['delete']);
}


?>
<!DOCTYPE HTML>
<html>
<title>Event Management System</title>

<!-- Booking List Area Start -->
    <section>
    <div class="single-welcome-slide bg-img" style="background-image: url(../../libs/img/bg-img/1.jpg);">
    <div class="container h-100">

    <!-- Welcome Text -->
        <h1>My Booking List</h1>

        <div class="card-body table-responsive p-0">
            <table class="table table-hover">
            <thead>
                <tr>
                    <th><b>Booking ID</b></th>
                    <th><b>Event</b></th>
                    <th><b>Package</b></th>
                    <th><b>Date</b></th>
                    <th><b>Venue</b></th>
                    <th><b>Start Time</b></th>
                    <th><b>End Time</b></th>
                    <th><b>Action</b></th>

                </tr>
            </thead>
            <tbody>
            <?php foreach ($result as $res) { ?>
                <tr>
                    <tr>
                        <td><?php echo $res['Booking_ID']; ?></td>
                        <td><?php echo $res['Book_Event_Name']; ?></td>
                        <td><?php echo $res['Book_Package_Name']; ?></td>
                        <td><?php echo $res['Book_Date']; ?></td>
                        <td><?php echo $res['Book_Venue']; ?></td>
                        <td><?php echo $res['Start_Time']; ?></td>
                        <td><?php echo $res['End_Time']; ?></td>
                        
                    

                        <td>
                        <form method="POST" action="">
                        <a href="Update_Booking_Page.php?Booking_ID=<?php echo $res['Booking_ID']; ?>" class="btn btn-primary pull-left" style="margin-right: 5px" >Update</a><br>

                
                        <input type="hidden" name="delete" value="<?php echo $res['Booking_ID'] ?>">
                        <input type="submit" name="btnDelete" value="Delete" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete?')"><br>

                        <a href="Equipment_Page.php?Booking_ID=<?php echo $res['Booking_ID']; ?>" class="btn btn-primary pull-left" style="margin-right: 5px">Book Equipment</a><br>

                        <a href="Payment.php?Booking_ID=<?php echo $res['Booking_ID']; ?>" class="btn btn-primary pull-left" style="margin-right: 5px">Add to Cart</a><br>
                        </form>
                        </td>        
                    </tr>
            </tr>


        <?php } ?>
            </tbody>
            </table><a href='View_Event_Page.php' class="btn btn-primary">Back</a>             
        </div>
            
    </div>
    </div>
    </div>
    </div>
    </section>
    <!-- Booking List Area End -->
  

  </body>

</html>

