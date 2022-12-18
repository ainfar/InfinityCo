<?php 

include '../ManageSupplier/sheader.php';

require_once '../../controller/EquipmentController/EquipmentList_Controller.php';


$data = new EquipmentController();
$result = $data->Allequip();


if(isset($_POST['delete'])) {
    $data->S_destroy($_POST['delete']);
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Title -->
    <title>Equipment Homepage</title>

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
    <center><b><h1 style="color:black; font-size:45px;">Equipment List</h1></b></center>
    <!-- Welcome Text -->
    <div class="col-20 col-md-20 col-lg-20">
        


        <div class="card-body table-responsive p-0">
            <table class="table table-hover">
            <thead>
                <tr>
                   
                    <th><b>Equipment Name</b></th>
                  
                    <th><b>Action</b></th>
                </tr>
            </thead>
            <tbody>
            <?php foreach ($result as $res) { ?>
                <tr>
                    <tr>
                        
                        <td><?php echo $res['Equipment_Name']; ?></td>
                       
                        <td>
                        <a href="S_EqUpdate_Interface.php?Equipment_ID=<?php echo $res['Equipment_ID']; ?>" class="btn btn-success" style="margin-right: 5px">Update</a><br><br>
                        <form method="POST" action="">
                        <input type="hidden" name="delete" value="<?php echo $res['Equipment_ID'] ?>">
                        <input type="submit" name="btnDelete" class="btn btn-danger" value="Delete" onclick="return confirm('Are you sure you want to delete?')">
                    </form>
                        </td>        
                    </tr>
            </tr><?php } ?>
            </tbody>
            </table>   
             <a href="S_EqAdd_Interface.php" class="btn btn-success" role="button">Add new equipment</a>  
            &nbsp;&nbsp;
        </div>
         <div>
                    <a href='S_ViewQuestion_Interface.php' class='btn btn-primary m-b-1em'>View All Question</a>
                    &nbsp;&nbsp;
                    <a href='S_ViewAllBooking_Interface.php' class='btn btn-primary m-b-1em'>View All Booking</a>
                    &nbsp;&nbsp;
                </div>
    </div>
    </div>
    </div>
  </div>
    </section>
</body>
</html>
<?php include '../footer.php' ?>