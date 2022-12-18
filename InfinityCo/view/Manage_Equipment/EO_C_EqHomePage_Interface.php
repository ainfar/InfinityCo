<?php 

include '../ManageSupplier/cheader.php';

require_once '../../controller/EquipmentController/EquipmentList_Controller.php';

$data = new EquipmentController();
$result = $data->Allequip();

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
                   
                    <th><b>Equipment Name(Quantity)</b></th>
        
                  
                    <th><b>Action</b></th>
                </tr>
            </thead>
            <tbody>
            <?php foreach ($result as $res) { ?>
                <tr>
                    <tr>
                        
                        <td><?php echo $res['Equipment_Name']; ?></td>
                       
                        <td>
                            <a class="btn btn-success" name="view" href="EO_C_EqDetail_Interface.php?Equipment_ID=<?php echo $res["Equipment_ID"];?>"style="margin-right: 5px">View Detail</a><br><br>
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
<?php include '../footer.php' ?>