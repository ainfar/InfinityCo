<?php
include '../ManageSupplier/sheader.php';
require_once '../../controller/EventController/Question_Controller.php';

$data = new QuestionController();
$result = $data->View_Question();


?>
<!DOCTYPE HTML>
<html>
<title>Event Management System</title>

<!-- Question List Area Start -->
    <section>
    <div class="single-welcome-slide bg-img" style="background-image: url(../../libs/img/bg-img/1.jpg);">
    <div class="welcome-content h-100">
    <div class="container h-100">

    <!-- Welcome Text -->
        <h1>All Question</h1>

        <br>

        <div class="card-body table-responsive p-0">
            <table class="table table-hover">
            <thead>
                <tr>
                    <th><b>Customer ID</b></th>
                    <th><b>Customer Email</b></th>
                    <th><b>Subject</b></th>
                    <th><b>Message</b></th>

                </tr>
            </thead>
            <tbody>
            <?php foreach ($result as $res) { ?>
                <tr>
                    <tr>
                        <td><?php echo $res['Customer_Name']; ?></td>
                        <td><?php echo $res['Customer_Email']; ?></td>
                        <td><?php echo $res['Question_Subject']; ?></td>
                        <td><?php echo $res['Question_Message']; ?></td>
                          
                    </tr>
                </tr>


        <?php } ?>
            </tbody>
            </table>             
        </div>
        <a href="S_View_Package_Page.php" class="btn btn-primary pull-left" style="margin-right: 5px">Back</a>
    </div>
    </div>
    </div>
  </div>
    </section>

  </body>

</html>

