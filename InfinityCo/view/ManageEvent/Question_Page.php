<?php
include '../ManageSupplier/cheader.php';
require_once '../../controller/EventController/Question_Controller.php';

if(isset($_POST['submit'])){
 $data = new QuestionController();
 //create object 
 $data->Add_Question();
}

?>
<!DOCTYPE HTML>
<html>
<title>Event Management System</title>


    <!-- Add Question Start  -->
    <section>
    <div class="single-welcome-slide bg-img" style="background-image: url(../../libs/img/bg-img/1.jpg);">
    <div class="welcome-content h-100">
    <div class="container h-100">

    <!-- Welcome Text -->
    <div class="col-12 col-md-9 col-lg-6">
        <h1>Contact Us</h1>

        <div class="card-body">
            <form action="" method="post" role="form">

              <!-- text input -->          
              <div class="form-group">
                <label>Name</label> 
                <input class="form-control" name="Customer_ID" type="text" required>
              </div><br>

              <div class="form-group">
                <label>Email</label>
                <input class="form-control" name="Customer_Email"  type="text" required> 
              </div><br>

              <div class="form-group">
                <label>Subject</label> 
                <input class="form-control" name="Question_Subject" type="text" required>
              </div><br>

              <div class="form-group">
                <label>Message</label> 
                <input class="form-control" name="Question_Message" type="text" required>
              </div><br>

              <div class="form-group">
                <input class="btn btn-primary" name="submit" type="submit" value="Submit">&nbsp;&nbsp;
                <a href='View_Event_Page.php' class='btn btn-primary m-b-1em'>Back</a>
              </div>

            </form>

          </div>

        </div>

      </div>

    </section>

