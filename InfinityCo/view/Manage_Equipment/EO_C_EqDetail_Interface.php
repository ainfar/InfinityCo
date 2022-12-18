<?php
include '../ManageSupplier/cheader.php';
require_once '../../controller/EquipmentController/EquipmentList_Controller.php';

$data = new EquipmentController();
$result = $data->Allequip();


if (isset($_GET['Equipment_ID'])) {
  $result = $data->get($_GET['Equipment_ID']);
}


?>
<!DOCTYPE HTML>
<html>
<title>Equipment Management System</title>
<head>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.4.1.min.js"integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="crossorigin="anonymous"></script>
<style>

html, body {
  height: 100%;
  font-size:20px;
  font-family: times, Helvetica, sans-serif;

}

h1 {
  padding-top: 20px;
  padding-bottom: 20px;
  font-size: 40px;
}

h2 {
    width:500px;
    margin:  auto;
    text-align: center;
  font-size : 25px;
}

input[type=text] {
  width: 30%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
  font-size: 15px;
}

/*new*/
.content {
  flex: 1 0 auto;
}

footer {
  flex-shrink: 0;
  margin-top: 25px;
  left: 0;
  bottom: 0;
  width: 100%;
  background-color: #000000;
  text-align: center;
  color: white;
}

</style>
</head>





<!-- Package List Area Start -->
    <section>
    <!-- Single Welcome Slide -->
    <div class="single-welcome-slide bg-img" style="background-image: url(../../libs/img/bg-img/event.jpg);">
    <!-- Welcome Content -->
    <div class="welcome-content h-100">
    <div class="container h-100">
    <center><b><h1 style="color:black; font-size:45px;">Equipment Detail</h1></b></center>

    <!-- Welcome Text -->
    <div class="col-20 col-md-20 col-lg-20">
        
        <form action="" method="post">
        <div class="card-body table-responsive p-0">
            <table class="table table-hover">
            <tr>
              <td><label>Equipment Name (Quantity):</label></td>
              <td><input type="text" name="Equipment_Name" class="form-control" value ="<?php echo $result['Equipment_Name'];?>"></td>
            </tr>

            <tr>
              <td><label>Equipment Description:</label></td>
              <td><input type="text" name="Equipment_Description" class="form-control" value ="<?php echo $result['Equipment_Description'];?>"></td>
            </tr>

            <tr>
              <td><label>Equipment Picture:</label></td>
              <td><input type="text" name="Equipment_Picture" class="form-control" value ="<?php echo $result['Equipment_Picture'];?>"></td>
            </tr>

            <tr>
              <td><label>Equipment Price (RM):</label></td>
              <td><input type="text" name="Equipment_Price" class="form-control" value ="<?php echo $result['Equipment_Price'];?>"></td>
            </tr>

            <tr>
              <td><label>Equipment Stock:</label></td>
              <td><input type="text" name="Equipment_Stock" class="form-control" value ="<?php echo $result['Equipment_Stock'];?>"></td>
            </tr>
          </table>
          <div><center>
            <form method="POST" action="">
              <a class="btn btn-success" name="Book" href="EO_C_EqBooking_Interface.php?Equipment_ID=<?php echo $result["Equipment_ID"];?>">Book</a></center>
              <a href="EO_C_EqHomepage_Interface.php" class="btn btn-primary pull-left" style="margin-right: 5px">Back</a>   
            </div>
          </form>

        </div>
    </div>
    </div>
    </div>
  </div>
    </section>
    <!-- Package List Area End -->
  

  </body>

</html>
<?php include '../footer.php' ?>

