<?php
include '../ManageSupplier/sheader.php';
require_once '../../controller/EventController/Event_Controller.php';

$data = new EventController();

if (isset($_POST['update'])) {
    $result = $data->Update_Event($_POST['Event_ID']);
}

if (isset($_GET['Event_ID'])) {
  $result = $data->Get_By_Id_Event($_GET['Event_ID']);
}

?>
<!DOCTYPE html>
<html lang="en">
<body>

    <!-- Update Event Area Start -->
    <section>
    <div class="single-welcome-slide bg-img" style="background-image: url(../../libs/img/bg-img/1.jpg);">
    <div class="welcome-content h-100">
    <div class="container h-100">

    <!-- Welcome Text -->
        <h1>Update Event</h1>

        <div class="card-body">
            <form action="" method="post" role="form">
            <!-- text input -->
            <div class="form-group">
                <label>Event Name</label> <input class="form-control" name="Event_Name"  type="text" value="<?php echo $result['Event_Name']; ?>" required>
            </div>
            <div class="form-group">
                <label>Event Description</label> <input class="form-control" name="Event_Description"  type="text" value="<?php echo $result['Event_Description']; ?>" required> 
            </div>
            <div class="form-group">
                <label>Event Picture</label> <input name="Event_Picture" type="file" value="<?php echo $result['Event_Picture']; ?>">
            </div>
            <div class="form-group">
                <input type="hidden" name="Event_ID" value="<?php echo $result['Event_ID']; ?>">
                <input class="btn btn-primary" name="update" type="submit" value="Update">
                &nbsp;&nbsp;
                <a href="S_View_Event_Page.php" class="btn btn-primary pull-left" style="margin-right: 5px">Back</a>
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