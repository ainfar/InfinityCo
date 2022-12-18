<?php
include '../ManageSupplier/sheader.php';
require_once '../../controller/EventController/Package_Controller.php';

$data = new PackageController();
$result = $data->View_Package();

if(isset($_POST['delete'])) {
    $data->Delete_Package($_POST['delete']);
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

        <div class='right-button-margin'>
            <a href='S_Add_Package_Page.php' class='btn btn-primary m-b-1em'>Add New Package</a>
        </div><br>

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
                        <a href="S_Update_Package_Page.php?Package_ID=<?php echo $res['Package_ID']; ?>" class="btn btn-primary pull-left" style="margin-right: 5px">Update</a><br>
                        <input type="hidden" name="delete" value="<?php echo $res['Package_ID'] ?>">
                        <input type="submit" name="btnDelete" class="btn btn-danger" value="Delete" onclick="return confirm('Are you sure you want to delete?')">
                        </form>
                        </td>        
                    </tr>
            </tr><?php } ?>
            </tbody>
            </table>             
        </div>

        <div>
                    <a href='S_View_Question_Page.php' class='btn btn-primary m-b-1em'>View All Question</a>
                    &nbsp;&nbsp;
                    <a href='S_All_Booking_List_Page.php' class='btn btn-primary m-b-1em'>View All Booking</a>
                    &nbsp;&nbsp;
                    <a href="S_View_Event_Page.php" class="btn btn-primary pull-left" style="margin-right: 5px">Back</a>
                </div>
    </div>
    </div>
    </div>
  </div>
    </section>

  </body>

</html>

