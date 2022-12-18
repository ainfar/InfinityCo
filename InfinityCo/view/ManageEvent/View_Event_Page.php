<?php
include '../ManageSupplier/cheader.php';
require_once '../../controller/EventController/Event_Controller.php';

$data = new EventController();
$result = $data->View_Event();

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
                        <a href="View_Package_Page.php?Event_ID=<?php echo $res['Event_ID']; ?>" class="btn btn-primary pull-left" style="margin-right: 5px">View</a><br><br>
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

