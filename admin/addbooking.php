<?php include('templates/nav.php'); ?>
<section class="page-content">
<?php include('templates/header.php')?>
    <div class="col-sm-8 col-sm-offset-3 col-lg-8 col-lg-offset-3 main" method="post" style="padding-left:30%">
        <h2 class="text-center text-danger mt-3">Thêm Đơn Đặt Phòng</h2>
        <form action="" name="f1" method="POST" enctype="multipart/form-data" class="mt-2 mb-5">
            <div>
                <div class="mt-3">
                    <label>Booking ID:</label>
                    <input type="text" readonly class="form-control" name="bookid">
                </div>
                <div class="mt-3">
                    <label>Room Name:</label>
                    <input type="text" class="form-control" name="roomname">
                </div>
                <div class="mt-3">
                    <label>Price:</label>
                    <input type="number" class="form-control" name="price">
                </div>		   
                <div class="mt-3">
                    <label>Date-in:</label>
                    <input type="date" class="form-control" name="datein">
                </div>
                <div class="mt-3">
                    <label>Date-out:</label>
                    <input type="date" class="form-control" name="dateout">
                </div>
                <div class="mt-3">
                    <label>Số lượng khách:</label>
                    <input type="number" class="form-control" name="soluong">
                </div>
                <div class="mt-3">
                    <label>Số lượng phòng:</label>
                    <input type="number" class="form-control" name="sophong">
                </div>
                <div class="mt-3">
                    <label>Total:</label>
                    <input type="number" class="form-control" name="total">
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
            $bookid = $_POST['bookid'];
            $roomname = $_POST['roomname'];
            $price = $_POST['price'];
            $datein = $_POST['datein'];
            $dateout= $_POST['dateout'];
            $soluong= $_POST['soluong'];
            $sophong= $_POST['sophong'];
            $total= $_POST['total'];
            $sql = "INSERT INTO booking (BookingID, RoomName, Price, Datein, Dateout, People, Nrooms, Total)
            VALUES ('".$bookid."', '".$roomname."', '".$price."', '".$datein."', '".$dateout."', '".$soluong."', '".$sophong."', '".$total."')";
            mysqli_query($conn, $sql);
            ?>
            <script>
                location.href = '/Luxtravel/admin/Adbooking.php';
            </script>
        <?php
        }
        include('DB/close.ini');
    ?>
    
</section>
<?php include('templates/footer.php')?>