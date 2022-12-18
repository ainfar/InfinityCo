<?php
include '../ManageSupplier/sheader.php';

require_once '../../controller/EquipmentController/EqQuestion_Controller.php';


$data = new EqQuestionController();
$result = $data->AllQues();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Title -->
    <title>Question List</title>

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
    <center><b><h1 style="color:black; font-size:45px;">All Question</h1></b></center>
        

        <br>

        <div class="card-body table-responsive p-0">
            <table class="table table-hover">
            <thead>
                <tr>
                    <th><b>Email</b></th>
                    <th><b>Subject</b></th>
                    <th><b>Message</b></th>

                </tr>
            </thead>
            <tbody>
            <?php foreach ($result as $res) { ?>
                <tr>
                    <tr>
                        <td><?php echo $res['Email']; ?></td>
                        <td><?php echo $res['Subject']; ?></td>
                        <td><?php echo $res['Message']; ?></td>        
                    </tr>
            </tr>


        <?php } ?>
            </tbody>
            </table>  
            <a href="S_EqHomepage_Interface.php" class="btn btn-primary pull-left" style="margin-right: 5px">Back</a>           
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

