<?php
include 'sheader.php';
include ($_SERVER["DOCUMENT_ROOT"]."../InfinityCo/controller/SupplierController/feedbackController.php");

$data = new feedbackController();
$result = $data->index();

if(isset($_POST['delete'])) {
    $data->destroy($_POST['delete']);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Title -->
    <title>Supplier Feedback List</title>
    <!-- Stylesheet -->
    <link rel="stylesheet" href="../../libs/css/style0.css">
    <link href="bootstrap.css" rel="stylesheet" type="text/css">

</head>

<body>
    <!-- Empty Area Start -->
    <section>
    <!-- Single Welcome Slide -->
    <div class="single-welcome-slide bg-img" style="background-image: url(../../assets/home.jpg);">
    <!-- Welcome Content -->
    <div class="welcome-content h-100">
    <div class="container h-100">

    <!-- Welcome Text -->
    <div class="col-20 col-md-20 col-lg-20">
        <h2>Feedbacks List</h2><br>

    <center><div class="card-body table-responsive p-0">
        <table class="table table-hover">
            <thead>
            <tr>
                <th><b>No</b></th>
                <th><b>Account Type</b></th>
                <th><b>Date</b></th>
                <th><b>Comments</b></th>
                <th><b>Rate</b></th>
                <th><b>Action</b></th>
            </tr>
            </thead>
            <tbody>
             <?php foreach ($result as $res) { ?>
            <tr>
                <tr>
                    <td><?php echo $res['feedbackid']; ?></td>
                    <td><?php echo $res['feedback']; ?></td>
                    <td><?php echo $res['datefeedback']; ?></td>
                    <td><?php echo $res['Comments']; ?></td>
                    <td><?php echo $res['Rate']; ?></td>
                    <td>               
                    <form method="POST" action="">
                    <input type="hidden" name="delete" value="<?php echo $res['feedbackid'] ?>">
                    <input type="submit" name="btnDelete" class="btn btn-danger" value="Delete" onclick="return confirm('Are you sure you want to delete?')">
                    </form>
                    </td>
                </tr>
            </tr><?php } ?>
            </tbody>
        </table>
    </div></center>
    </div>
    </div>
    </div>
    </div>
    </section>
</body>
</html>

<?php include '../footer.php' ?>