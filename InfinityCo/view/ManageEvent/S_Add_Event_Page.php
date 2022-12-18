<?php
include '../ManageSupplier/sheader.php';
require_once '../../controller/EventController/Event_Controller.php';

if(isset($_POST['submit'])){
 
 $data = new EventController();
 //create object 
 $data->Add_Event();
}


?>
<!DOCTYPE HTML>
<html>
<title>Event Management System</title>

    <!-- Add Event Start Start -->
    <section>
    <div class="single-welcome-slide bg-img" style="background-image: url(../../libs/img/bg-img/1.jpg);">
    <div class="welcome-content h-100">
    <div class="container h-100">

    <!-- Welcome Text -->
    <div class="col-12 col-md-9 col-lg-6">
        <h1>Add Event</h1>

        <div class="card-body">
            <form action="" method="post" role="form">

              <!-- text input -->          
              <div class="form-group">
                <label>Event Name</label> 
                <input class="form-control" name="Event_Name" type="text" required>
              </div><br>

              <div class="form-group">
                <label>Event Description</label>
                <input class="form-control" name="Event_Description"  type="text" required> 
              </div><br>

              <div class="form-group">
                <label>Event Picture</label> 
                <input  name="Event_Picture" type="file">
              </div><br>

              <div class="form-group">
                <input class="btn btn-primary" name="submit" type="submit" value="Submit">&nbsp;&nbsp;
                <a href="S_View_Event_Page.php" class="btn btn-primary pull-left" style="margin-right: 5px">Back</a>
              </div>


            </form>

          </div>

        </div>

      </div>

    </section>



