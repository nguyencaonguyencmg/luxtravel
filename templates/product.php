<div class="hotel-list">
    <?php 
        include('admin/DB/connection.ini');
        $sql="SELECT * FROM room";
        $result=mysqli_query($conn,$sql);
        while($row = mysqli_fetch_array($result)){
            $roomid = $row['roomid'];
            if($row['locations'] == 'Hà Nội') {
            echo '<div class="hotel-item">
                <a href="chitiet.php?id='.$roomid.'">
                <img class="hotel-img"  src="uploads/'.$row["img"].'" alt="">
                <div class="hotel-body">
                    <h5 class="hotel-heading">'.$row["roomname"].'</h5>
                    <p class="hotel-number">'.number_format($row["price"]). 'VND/Đêm'.'</p>
                    <button class="datphong-btn btn btn-outline-primary" type="submit" >Đặt phòng</button>
                </div>
            </div>';
            }
        }
    ?>
    
        
</div>