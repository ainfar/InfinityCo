<?php
include '../ManageSupplier/sheader.php';
require_once '../../controller/EventController/Event_Controller.php';

$data = new EventController();
$result = $data->View_Event();

if(isset($_POST['delete'])) {
    $data->Delete_Event($_POST['delete']);
}


?>
<!DOCTYPE HTML>
<html>
<title>Event Management System</title>


<!-- Event List Area Start -->
    <section>
    <div class="single-welcome-slide bg-img" style="background-image: url(../../libs/img/bg-img/1.jpg);">
    <div class="welcome-content h-100">
    <div class="container h-100">

    <!-- Welcome Text -->
        <h1>List of Event</h1>

        <div class='right-button-margin'>
            <a href='S_Add_Event_Page.php' class='btn btn-primary m-b-1em'>Add New Event</a>
        </div><br>

        <div class="card-body table-responsive p-0">
            <table class="table table-hover">
            <thead>
                <tr>
                    <th><b>Event ID</b></th>
                    <th><b>Event Name</b></th>
                    <th><b>Event Description</b></th>
                    <th><b>Action</b></th>

                </tr>
            </thead>
            <tbody>
            <?php foreach ($result as $res) { ?>
                <tr>
                    <tr>
                        <td><?php echo $res['Event_ID']; ?></td>
                        <td><?php echo $res['Event_Name']; ?></td>
                        <td><?php echo $res['Event_Description']; ?></td>
                        <td>
                        <form method="POST" action="">
                        <a href="S_View_Package_Page.php?Event_ID=<?php echo $res['Event_ID']; ?>" class="btn btn-primary pull-left" style="margin-right: 5px">View Package</a>
                      
                        <a href="S_Update_Event_Page.php?Event_ID=<?php echo $res['Event_ID']; ?>" class="btn btn-primary pull-left" style="margin-right: 5px">Update</a><br>
                        <input type="hidden" name="delete" value="<?php echo $res['Event_ID'] ?>">
                        <input type="submit" name="btnDelete" class="btn btn-danger" value="Delete" onclick="return confirm('Are you sure you want to delete?')">
                        </form>
                        </td>        
                    </tr>
            </tr><?php } ?>
            </tbody>
            </table>             
        </div>
    </div>
    </div>
    </div>
  </div>
    </section>
  
  </body>

</html>

