<?php include('templates/nav.php'); ?>
<section class="page-content">
<?php include('templates/header.php')?>
    <div class="col-sm-8 col-sm-offset-3 col-lg-8 col-lg-offset-3 main" method="post" style="padding-left:30%">
        <h2 class="text-center text-danger mt-3">Thêm Địa Điểm</h2>
        <form action="" name="f1" method="POST" enctype="multipart/form-data" class="mt-2 mb-5">
            <div>
                <div class="mt-3">
                    <label>Location ID:</label>
                    <input type="text"  class="form-control" name="locationid">
                </div>
                <div class="mt-3">
                    <label>Name:</label>
                    <input type="text" class="form-control" name="locaname">
                </div>
                <div class="mt-3">
                    <label>Note:</label>
                    <input type="text" class="form-control" name="note">
                </div>	
                    <input type="submit" class="btn btn-info btn-sm mt-2"style="margin-left:45%; margin-top:20px; font-size:20px; padding:5px 15px" name="btnThem"  value="Thêm">
                </div>
            </div>
        </form>
    </div>
        <?php
        include('DB/connection.ini');
        echo '<link rel="stylesheet" href="css/libs/bootstrap.min.css">';
        if(isset($_POST['btnThem']))
        {
            $locationid = $_POST['locationid'];
            $locaname = $_POST['locaname'];
            $note = $_POST['note'];
            
            $sql = "INSERT INTO locations (Locationid, Addres, Note)
            VALUES ('".$locationid."', '".$locaname."', '".$note."')";
            mysqli_query($conn, $sql);
            // header('location: Adlocation.php');
            ?>
                <script>
                    location.href = '/Luxtravel/admin/Adlocation.php';
                </script>
            <?php
        }
        include('DB/close.ini');
    ?>
    
</section>
<?php include('templates/footer.php')?>