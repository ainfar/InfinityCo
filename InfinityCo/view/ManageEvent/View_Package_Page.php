<?php
include '../ManageSupplier/cheader.php';
require_once '../../controller/EventController/Package_Controller.php';
require_once '../../controller/EventController/Event_Controller.php';
$data = new PackageController();
$result = $data->View_Package();

if (isset($_GET['Event_ID'])) {
  $data = new EventController();
  $info = $data->Get_By_Id_Event($_GET['Event_ID']);
}


?>
<!DOCTYPE HTML>
<html>
<title>Event Management System</title>


<!-- Package List Area Start -->
    <section>
    <div class="single-welcome-slide bg-img" style="background-image: url(../../libs/img/bg-img/1.jpg);">
    <div class="welcome-content h-100">
    <div class="container h-100">

    <!-- Welcome Text -->
        <h1>List of Package</h1>
        <h3><?php echo $info['Event_Name']; ?></h3>

        <br>

        <div class="card-body table-responsive p-0">
            <table class="table table-hover">
            <thead>
                <tr>
                    <th><b>Package ID</b></th>
                    <th><b>Package Name</b></th>
                    <th><b>Package Type</b></th>
                    <th><b>Package Description</b></th>
                    <th><b>Package Price</b></th>
                    <th><b>Action</b></th>

                </tr>
            </thead>
            <tbody>
            <?php foreach ($result as $res) { ?>
                <tr>
                    <tr>
                        <td><?php echo $res['Package_ID']; ?></td>
                        <td><?php echo $res['Package_Name']; ?></td>
                        <td><?php echo $res['Package_Type']; ?></td>
                        <td><?php echo $res['Package_Description']; ?></td>
                        <td><?php echo $res['Package_Price']; ?></td>
                    

                        <td>
                        <form method="POST" action="">
                        <a href="Booking_Page.php?Event_ID=<?php echo $info['Event_ID']; ?>&Package_ID=<?php echo $res['Package_ID']; ?>" class="btn btn-primary pull-left" style="margin-right: 5px">Book</a><br><br>
                        </form>
                        </td>        
                    </tr>
            </tr>


        <?php } ?>
            </tbody>
            </table>             
        </div>
                <div>
                    <a href='Question_Page.php' class='btn btn-primary m-b-1em'>Have a Question? Contact Us</a>
                    &nbsp;&nbsp;
                    <a href='Booking_List_Page.php' class='btn btn-primary m-b-1em'>View My Booking</a>
                    &nbsp;&nbsp;
                    <a href='View_Event_Page.php' class='btn btn-primary m-b-1em'>Back</a>
                    
                </div>
    </div>
    </div>
    </div>
  </div>
    </section>
  
  </body>

</html>

