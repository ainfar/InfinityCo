<?php
include '../ManageSupplier/sheader.php';
require_once '../../controller/EquipmentController/EquipmentList_Controller.php';



if(isset($_POST['submit'])){
 $data = new EquipmentController();
 //create object 
 $data->S_add();
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Title -->
    <title>Add New Equipment</title>

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
    <!-- Welcome Text -->
    <div class="col-20 col-md-20 col-lg-20">
        <h2>Add Equipment</h2><br>

        <div class="card-body">
            <form action="" method="post" role="form">

              <!-- text input -->
              <div class="form-group">
                <label>Equipment_Name(Quanitity)</label> 
                <input class="form-control" name="Equipment_Name" type="text" required>
              </div><br>

              <div class="form-group">
                <label>Equipmentt Description</label>
                <input class="form-control" name="Equipment_Description"  type="text" required> 
              </div><br>

              <div class="form-group">
                <label>Equipment Picture</label> 
                <input name="Equipment_Picture" type="file" required>
              </div><br>

              <div class="form-group">
                <label>Equipment Price (RM)</label> 
                <input class="form-control" name="Equipment_Price" type="number" required>
              </div><br>

              <div class="form-group">
                <label>Equipment Stock</label> 
                <input class="form-control" name="Equipment_Stock" type="number" required>
              </div><br>

              <div class="form-group">
                <input class="btn btn-success" name="submit" type="submit" value="Ok">

                 <a href="S_EqHomepage_Interface.php" class="btn btn-danger" role="button">Cancel</a> 
              </div>
            </form>

          </div><!-- /.card-body -->

        </div><!-- /.card -->

      </div>

    </section>

<?php include '../footer.php' ?>

