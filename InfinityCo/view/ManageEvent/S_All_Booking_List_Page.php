<?php
include '../ManageSupplier/sheader.php';
require_once '../../controller/EventController/Booking_Controller.php';

$data = new BookingController();
$result = $data->View_Booking();


?>
<!DOCTYPE HTML>
<html>
<title>Event Management System</title>


<!-- All Booking List Area Start -->
    <section>
    <div class="single-welcome-slide bg-img" style="background-image: url(../../libs/img/bg-img/1.jpg);">
    <div class="welcome-content h-100">
    <div class="container h-100">

    <!-- Welcome Text -->
        <h1>All Booking Lists</h1>

        <br>

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
                    </tr>
                </tr>
               
        <?php } ?>
            </tbody>
            </table>             
        </div>
         <a href="S_View_Package_Page.php" class="btn btn-primary pull-left" style="margin-right: 5px">Back</a>
    </div>
    </div>
    </div>
  </div>
    </section>

  </body>

</html>

