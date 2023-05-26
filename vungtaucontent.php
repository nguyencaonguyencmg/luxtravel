
<?php include('templates/header.php'); ?>
<div id="main">
    <?php include('templates/suggest.php'); ?>
    <div id="content" class="container">
        <div className="hotel-section">
            <div className="hotel">
                <h1 className="hotel-header">Điểm dừng chân tại Vũng Tàu</h1>
            </div>
            <div class="hotel-list">
                <?php 
                    include('admin/DB/connection.ini');
                    $sql="SELECT * FROM room";
                    $result=mysqli_query($conn,$sql);
                    while($row = mysqli_fetch_array($result)){
                        $roomid = $row['roomid'];
                        if($row['locations'] == 'Vũng Tàu') {
                        echo '<div class="hotel-item">
                            <a href="chitiet.php?id='.$roomid.'">
                            <img class="hotel-img"  src="uploads/'.$row["img"].'" alt="">
                            <div class="hotel-body">
                                <h5 class="hotel-heading">'.$row["roomname"].'</h5>
                                <p class="hotel-number">'.number_format($row["price"], 0, '.', '.'). 'VND/Đêm'.'</p>
                                <button class="datphong-btn btn btn-outline-primary" type="submit" >Đặt phòng</button>
                            </div>
                        </div>';
                        }
                    }
				?>
            </div>
        </div>
    </div> 
    
</div>
<?php include('templates/footer.php'); ?>