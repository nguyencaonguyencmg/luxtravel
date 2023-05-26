<?php include('templates/nav.php'); ?>
<section class="page-content">
<?php include('templates/header.php')?>
    <div class="col-sm-8 col-sm-offset-3 col-lg-8 col-lg-offset-3 main" method="post" style="padding-left:30%">
        <h2 class="text-center text-danger mt-3">Chỉnh Sửa Đơn Đặt Phòng</h2>
        <form action="" name="f1" method="POST" enctype="multipart/form-data" class="mt-2 mb-5">
            <?php 
                include('DB/connection.ini');
                $sql = "SELECT * FROM booking WHERE BookingID='".$_GET['BookingID']."'" ;
                $result = mysqli_query($conn, $sql);
                if(mysqli_num_rows($result) > 0 ) 
                {
                    while ($row = mysqli_fetch_assoc($result)) 
                    {
                        $bookid = $row['BookingID'];
                        $roomname = $row['RoomName'];
                        $hoten = $row['Hoten'];
                        $code = $row['Code'];
                        $price = $row['Price'];
                        $datein = $row['Datein'];
                        $dateout= $row['Dateout'];
                        $soluong = $row['People'];
                        $sophong = $row['Nrooms'];
                        $total= $row['Total'];
                    }
                }
            ?>
            <div>
                <div class="mt-3">
                    <label>Booking ID:</label>
                    <input type="text" readonly class="form-control" name="bookid" readonly value="<?php echo $_GET['BookingID']?>">
                </div>
                <div class="mt-3">
                    <label>Room Name:</label>
                    <input type="text" class="form-control" readonly name="roomname" value="<?php echo $roomname;?>">
                </div>
                <div class="mt-3">
                    <label>Guest name:</label>
                    <input type="text" class="form-control" name="hoten" value="<?php echo $hoten;?>">
                </div>
                <div class="mt-3">
                    <label>Code:</label>
                    <input type="text" class="form-control" readonly name="code" value="<?php echo $code;?>">
                </div>
                <div class="mt-3">
                    <label>Price:</label>
                    <input type="number" class="form-control" readonly name="price" value="<?php echo $price;?>">
                </div>		   
                <div class="mt-3">
                    <label>Date-in:</label>
                    <input type="date" class="form-control" name="datein" value="<?php echo $datein;?>">
                </div>
                <div class="mt-3">
                    <label>Date-out:</label>
                    <input type="date" class="form-control" name="dateout" value="<?php echo $dateout;?>">
                </div>
                <div class="mt-3">
                    <label>Số lượng khách:</label>
                    <input type="number" class="form-control" readonly name="soluong" value="<?php echo $soluong;?>">
                </div>
                <div class="mt-3">
                    <label>Số lượng phòng:</label>
                    <input type="number" class="form-control" readonly name="sophong" value="<?php echo $sophong;?>">
                </div>
                <div class="mt-3">
                    <label>Total:</label>
                    <input type="number" class="form-control" name="total" value="<?php echo $total;?>">
                </div>
                    <input type="submit" class="btn btn-info btn-sm mt-2"style="margin-left:45%; margin-top:20px; font-size:20px; padding:5px 15px" name="btSua"  value="Update">
                </div>
            </div>
        </form>
    </div>
<?php
	include('DB/connection.ini');
    if(isset($_POST['btSua'])){
		$bookid = $_POST['bookid'];
        $roomname = $_POST['roomname'];
        $hoten = $_POST['hoten'];
        $code = $_POST['code'];
        $price = $_POST['price'];
        $datein = $_POST['datein'];
        $dateout= $_POST['dateout'];
        $soluong = $_POST['soluong'];
        $sophong = $_POST['sophong'];
        $total= $_POST['total'];
        $sql = "UPDATE booking SET BookingID='".$bookid."', RoomName='".$roomname."', Hoten='".$hoten."', Code='".$code."', Price='".$price."', Datein='".$datein."', Dateout='".$dateout."', People='".$soluong."', Nrooms='".$sophong."', Total='".$total."' WHERE BookingID = '".$bookid."'";
        if (mysqli_query($conn, $sql)) {
            echo "Đã sửa thành công";
            ?>
            <script>
                location.href = '/Luxtravel/admin/Adbooking.php';
            </script>
        <?php
        } 
        else {
            echo "Lỗi: " . $sql . "<br>" . mysqli_error($conn);
        }
	}
	include('DB/close.ini');
?>
</section>
<?php include('templates/footer.php')?>