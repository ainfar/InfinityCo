<?php
include '../ManageSupplier/cheader.php';
require_once '../../controller/EventController/Booking_Controller.php';

$data = new BookingController();

if (isset($_POST['update'])) {
    $result = $data->Update_Booking($_POST['Booking_ID']);
}

if (isset($_GET['Booking_ID'])) {
  $result = $data->Get_By_Id_Booking($_GET['Booking_ID']);
}

?>
<!DOCTYPE html>
<html lang="en">
<body>

    <!-- Update Booking Area Start -->
    <section>
    <div class="single-welcome-slide bg-img" style="background-image: url(../../libs/img/bg-img/1.jpg);">
    <div class="welcome-content h-100">
    <div class="container h-100">

    <!-- Welcome Text -->
        <h1>Update Booking Details</h1>

        <div class="card-body">
            <form action="" method="post" role="form">
            <!-- text input -->
            <div class="form-group">
                <label>Event Name</label> <input class="form-control" name="Book_Event_Name"  type="text" value="<?php echo $result['Book_Event_Name']; ?>" required>
            </div>
            <div class="form-group">
                <label>Package Name</label> <input class="form-control" name="Book_Package_Name"  type="text" value="<?php echo $result['Book_Package_Name']; ?>" required 
            </div>
            <div class="form-group">
                <label>Date</label> <input name="Book_Date" type="Date" value="<?php echo $result['Book_Date']; ?>" required>
            </div>
            <div class="form-group">
                <label>Venue</label>
                <select id="Book_Venue" name="Book_Venue">
                <option value="barn">barn</option>
                <option value="beach">beach</option>
                <option value="garden">garden</option>
                <option value="hall">hall</option>
                </select>
            </div>
            <div class="form-group">
                <label>Start Time</label> <input  name="Start_Time" type="Time" value="<?php echo $result['Start_Time']; ?>" required>
            </div>
            <div class="form-group">
                <label>End Time</label> <input name="End_Time" type="Time" value="<?php echo $result['End_Time']; ?>" required>
            </div>
            <div class="form-group">
                <label>Comment</label> <input class="form-control" name="Comment" type="text" value="<?php echo $result['Comment']; ?>">
            </div>
        
            <div class="form-group">
                <input type="hidden" name="Booking_ID" value="<?php echo $result['Booking_ID']; ?>">
                <input class="btn btn-primary" name="update" type="submit" value="Update">
                &nbsp;&nbsp;
                <a href='Booking_List_Page.php' class='btn btn-primary m-b-1em'>Back</a>
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