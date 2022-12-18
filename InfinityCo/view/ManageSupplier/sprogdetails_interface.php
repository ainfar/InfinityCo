<?php
include 'sheader.php';
include ($_SERVER["DOCUMENT_ROOT"]."../InfinityCo/controller/SupplierController/progressController.php");

$data = new progressController();
$result = $data->index();

?>
<br>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Title -->
    <title>Supplier Progress Details List</title>
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
        <h2>Testing List</h2><br>

    <center><div class="card-body table-responsive p-0">
        <table class="table table-hover">
            <thead>
            <tr>
                <th><b>No</b></th>
                <th><b>Activity</b></th>
				<th><b>Date</b></th>
				<th><b>Time</b></th>
				<th><b>Venue</b></th>
				<th><b>Status</b></th>
            </tr>
            </thead>
            <tbody>
             <?php foreach ($result as $res) { ?>
            <tr>
                <tr>
                    <td><?php echo $res['id']; ?></td>
                    <td><?php echo $res['testing']; ?></td>
				    <td><?php echo $res['datetesting']; ?></td>
				    <td><?php echo $res['timetesting']; ?></td>
				    <td><?php echo $res['venue']; ?></td>
				    <td><b>ATTEND</b></td>
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
    <!-- Empty Area End -->

<?php include '../footer.php' ?>