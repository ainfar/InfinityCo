<?php
include 'sheader.php';
?>
<br>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Title -->
    <title>Supplier Update Progress Event</title>

    <!-- Stylesheet -->
    <link rel="stylesheet" href="../../libs/css/style0.css">
</head>

<body>
    <!-- Empty Area Start -->
    <section>
    <!-- Single Welcome Slide -->
    <div class="single-welcome-slide bg-img" style="background-image: url(../../assets/home.jpg);">
    <!-- Welcome Content -->
    <div class="welcome-content h-200">
    <div class="container h-200">

    <!-- Welcome Text -->
    <div class="col-20 col-md-20 col-lg-20">
            <h2>Progress List</h2><br>
		<a href='sprogdetails_interface.php' class='btn btn-primary m-b-1em'>List Testing Attendance</a><br><br>
		
    <div class="card-body table-responsive p-0">
        <table class="table table-hover">
        <thead>
            <tr>
                <th><b>No</b></th>
                <th><b>Activity</b></th>
				<th><b>Details</b></th>
            </tr>
        </thead>
        <tbody>
            <tr>

            <tr>
                <td>1</td>
                <td>PA SYSTEM (SOUND CHECKING)</td>
				<td>
                    <form method="POST" action="">
                        <input type="hidden" name="detail" value="<?php echo $res['id'] ?>">
                        <input type="submit" name="btnDetail" class="btn btn-danger" formaction="./sattendform_interface.php" value="DETAIL">
                    </form>  
                </td>
            </tr>

            <tr>
                <td>2</td>
                <td>PA SYSTEM (LIGHTENING CHECKING)</td>
                <td>
                    <form method="POST" action="">
                        <input type="hidden" name="detail" value="<?php echo $res['id'] ?>">
                        <input type="submit" name="btnDetail" class="btn btn-danger" formaction="./sattendform_interface.php" value="DETAIL">
                    </form>  
                </td>
            </tr>

            <tr>
                <td>3</td>
                <td>FOOD TESTING</td>
                <td>
                    <form method="POST" action="">
                        <input type="hidden" name="detail" value="<?php echo $res['id'] ?>">
                        <input type="submit" name="btnDetail" class="btn btn-danger" formaction="./sattendform_interface.php" value="DETAIL">
                    </form>  
                </td>
            </tr>
            </tr>
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