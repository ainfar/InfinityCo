<?php
include '../ManageSupplier/cheader.php';
require_once '../../controller/EventController/Booking_Controller.php';
require_once '../../controller/EventController/Package_Controller.php';
require_once '../../controller/EventController/Event_Controller.php';
if(isset($_POST['submit'])){
 $data = new BookingController();
 //create object 
 $data->Add_Booking();
}

if (isset($_GET['Package_ID'])) {
  $data = new PackageController();
  $result = $data->Get_By_Id_Package($_GET['Package_ID']);
}

if (isset($_GET['Event_ID'])) {
  $data = new EventController();
  $info = $data->Get_By_Id_Event($_GET['Event_ID']);
}

?>

<!DOCTYPE HTML>
<html>

    <!-- Add Booking Start Start -->
    <section>
    <div class="single-welcome-slide bg-img" style="background-image: url(../../libs/img/bg-img/1.jpg);">
    <div class="welcome-content h-100">
    <div class="container h-100">

    <!-- Welcome Text -->
        <h1>Event Booking Details</h1>

        <div >
            <form action="" method="post" role="form">

              <!-- text input -->
              <div >
                <label>Event Name</label>
                <input class="form-control" name="Book_Event_Name" type="text" value="<?php echo $info['Event_Name']; ?>" required>
              </div><br>

              <div >
                <label>Package Name</label> 
                <input class="form-control" name="Book_Package_Name" type="text" value="<?php echo $result['Package_Name']; ?>" required>
              </div><br>

              <div>
                <label>Date</label> 
                <input  name="Book_Date" type="Date" required>
              </div><br>

              <div>
                <label>Venue</label>
                <select id="Book_Venue" name="Book_Venue">
                <option value="barn">barn</option>
                <option value="beach">beach</option>
                <option value="garden">garden</option>
                <option value="hall">hall</option>
                </select>
              </div><br>

              <div>
                <label>Start Time</label>
                <input  name="Start_Time"  type="Time" required> 
              </div><br>

              <div >
                <label>End Time</label> 
                <input  name="End_Time" type="Time" required>
              </div><br>

              <div>
                <label>Comment</label> 
                <input class="form-control" name="Comment" type="text" >
              </div><br>

              <div>
                <input class="btn btn-primary" name="submit" type="submit" value="Submit">
                &nbsp;&nbsp;
                <a href='View_Event_Page.php' class='btn btn-primary m-b-1em'>Back</a>
              </div>
                
            </form>

          </div>

        </div>

      </div>

    </section>

