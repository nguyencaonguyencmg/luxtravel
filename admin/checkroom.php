<?php include('templates/nav.php'); ?>
<section class="page-content">
<?php include('templates/header.php')?>
    <div class="col-sm-8 col-sm-offset-3 col-lg-8 col-lg-offset-3 main"  style="padding-left:30%">
        <h2 class="text-center text-danger mt-3">Chỉnh Sửa Đơn Đặt Phòng</h2>
       
            <?php 
                include('DB/connection.ini');
                $sql = "SELECT * FROM bookroom WHERE idbook='".$_GET['BookID']."'" ;
                $result = mysqli_query($conn, $sql);
                if(mysqli_num_rows($result) > 0 ) 
                {
                    while ($row = mysqli_fetch_assoc($result)) 
                    {
                        $idbook = $row['idbook'];
                        $roomname = $row['roomname'];
                        $code = $row['code'];
                        $hoten = $row['hoten'];
                        $price = $row['price'];
                        $datein = $row['datein'];
                        $dateout= $row['dateout'];
                        $soluong= $row['people'];
                        $sophong= $row['nrooms'];
                        $total= $row['total'];
                    }
                }
            ?>
        <form action="" name="f1" method="POST" class="mt-2 mb-5">
            <div>
                <div class="mt-3">
                    <label>Booking ID:</label>
                    <input type="text" readonly class="form-control" name="bookid" readonly value="<?php echo $idbook ?>">
                </div>
                <div class="mt-3">
                    <label>Room Name:</label>
                    <input type="text" class="form-control" name="roomname" value="<?php echo $roomname;?>">
                </div>
                <div class="mt-3">
                    <label>Code:</label>
                    <input type="text" class="form-control" name="code" value="<?php echo $code;?>">
                </div>
                <div class="mt-3">
                    <label>hoten:</label>
                    <input type="text" class="form-control" name="hoten" value="<?php echo $hoten;?>">
                </div>
                <div class="mt-3">
                    <label>Price:</label>
                    <input type="number" class="form-control" name="price" value="<?php echo $price;?>">
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
                    <input type="number" class="form-control"  name="soluong" value="<?php echo $soluong;?>">
                </div><div class="mt-3">
                    <label>Số lượng phòng:</label>
                    <input type="number" class="form-control" name="sophong" value="<?php echo $sophong;?>">
                </div>
                <div class="mt-3">
                    <label>Total:</label>
                    <input type="number" class="form-control" name="total" value="<?php echo $total;?>">
                </div>
                    <input type="submit" class="btn btn-info btn-sm mt-2"style="margin-left:45%; margin-top:20px; font-size:20px; padding:5px 15px" name="btSua"  value="Done">
                </div>
            </div>
        </form>
    </div>
<?php
	include('DB/connection.ini');
    if(isset($_POST['btSua'])){
		$bookid = $_POST['bookid'];
        $roomname = $_POST['roomname'];
        $code = $_POST['code'];
        $hoten = $_POST['hoten'];
        $price = $_POST['price'];
        $datein = $_POST['datein'];
        $dateout= $_POST['dateout'];
        $soluong= $_POST['soluong'];
        $sophong= $_POST['sophong'];
        $total= $_POST['total'];
        $sql = "INSERT INTO booking ( RoomName, Hoten, Code, Price, Datein, Dateout, People, Nrooms, Total)
        VALUES ('".$roomname."', '".$hoten."', '".$code."', '".$price."', '".$datein."', '".$dateout."', '".$soluong."', '".$sophong."', '".$total."')";
        
        if (mysqli_query($conn, $sql)) {
            echo "Đã sửa thành công";
            $idbook = $_GET["BookID"];
                $sql = "DELETE  FROM bookroom WHERE idbook = '$idbook'";
                if (mysqli_query($conn, $sql)) {
                    echo "Xóa thành công";
                    header('location:../Adbookroom.php');
                } else {
                    echo "Xóa thất bại: " . mysqli_error($conn);
                }
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