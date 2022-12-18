<?php
include '../ManageSupplier/sheader.php';
require_once '../../controller/EventController/Package_Controller.php';


if(isset($_POST['submit'])){
 $data = new PackageController();
 //create object 
 $data->Add_Package();
}

?>
<!DOCTYPE HTML>
<html>
<title>Event Management System</title>

    <!-- Add Package Start -->
    <section>
    <div class="single-welcome-slide bg-img" style="background-image: url(../../libs/img/bg-img/1.jpg);">
    <div class="welcome-content h-100">
    <div class="container h-100">

    <!-- Welcome Text -->
        <h1>Add Package</h1>

        <div class="card-body">
            <form action="" method="post" role="form">

              <!-- text input -->          
              <div class="form-group">
                <label>Package Name</label> 
                <input class="form-control" name="Package_Name" type="text" required>
              </div><br>

              <div class="form-group">
                <label>Package Type</label> 
                <input class="form-control" name="Package_Type" type="text" required>
              </div><br>

              <div class="form-group">
                <label>Package Description</label>
                <input class="form-control" name="Package_Description"  type="text" required> 
              </div><br>

              <div class="form-group">
                <label>Package Price</label> 
                <input  name="Package_Price" type="number" required>
              </div><br>

              <div class="form-group">
                <input class="btn btn-primary" name="submit" type="submit" value="Submit">
                &nbsp;&nbsp;
                <a href="S_View_Package_Page.php" class="btn btn-primary pull-left" style="margin-right: 5px">Back</a>
              </div>

            </form>

          </div>

        </div>

      </div>

    </section>

