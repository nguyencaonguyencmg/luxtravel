<div id="content" class="container">
    <div class="hotel-section">
        <div class="hotel">
            <h3 class="hotel-header">Khách sạn hàng đầu</h3>
            <p class="hotel-sub-heading">Tận hưởng không gian đầy trang trọng và thoải mái</p>
        </div>
        <div class="hotel-list">
            <?php 
                include('admin/DB/connection.ini');
                $sql="SELECT * FROM room";
                $result=mysqli_query($conn,$sql);
                while($row = mysqli_fetch_array($result)){
                    $roomid = $row['roomid'];
                    if($row['no1'] == '1') {
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
                include('admin/DB/close.ini');

            ?>
            
        </div>
    </div>
    <div class="homestay-section">
        <div class="homestay">
            <h3 class="homestay-header">Homestay cao cấp</h3>
            <p class="homestay-sub-heading">Không gian riêng tư dành cho gia đình hoặc cặp đôi</p>
        </div>
        <div class="homestay-list">
            <?php 
                include('admin/DB/connection.ini');
                $sql="SELECT * FROM room";
                $result=mysqli_query($conn,$sql);
                while($row = mysqli_fetch_array($result)){
                    $roomid = $row['roomid'];
                    if($row['vip'] == '1') {
                    echo '<div class="homestay-item">
                        <a href="chitiet.php?id='.$roomid.'">
                        <img class="homestay-img "  src="uploads/'.$row["img"].'" alt="">
                        <div class="homestay-body">
                            <h5 class="homestay-heading">'.$row["roomname"].'</h5>
                            <p class="homestay-number">'.number_format($row["price"]). 'VND/Đêm'.'</p>
                            <button class="datphong-btn btn btn-outline-primary" type="submit" >Đặt phòng</button>
                        </div>
                    </div>';
                    }
                }
            ?>
            
            
        </div>
    </div>
    <div class="diemhot">
        <div class="diemhot-header text-dark" >
            <h3 class="diemhot-heading" style="text-decoration :none">Điểm đến yêu thích</h3>
            <p class="diemhot-sub-heading" style="text-decoration :none">Những địa điểm được gợi ý bởi Luxtravel</p>
        </div>
        <div class="goiy" >
            <div class="hot-item hot-item-1">
                <a href="hanoicontent.php">
                    <img class="hot-img-1" src="assets/img/diadiem/hanoi.jpg" alt="Hà Nội"/>
                    <p class="hot-name">Hà Nội</p>
                </a>
            </div>
            <div class="hot-item hot-item-2">
                <a href="dalatcontent.php">
                    <img class="hot-img-2" src="assets/img/diadiem/caobang.jpg" alt="Cao Bằng"/>
                    <p class="hot-name">Cao Bằng</p>
                </a>
            </div>
            <div class="hot-item hot-item-3">
                <a href="danangcontent.php">
                    <img class="hot-img-3" src="assets/img/diadiem/danang.jfif" alt="Đà Nẵng"/>
                    <p class="hot-name">Đà Nẵng</p>
                </a>
            </div>
            <div class="hot-item hot-item-4">
                <a href="halongcontent.php" >
                    <img class="hot-img-4" src="assets/img/diadiem/halong.jfif" alt="Hạ Long"/>
                    <p class="hot-name">Hạ Long</p>
                </a>
            </div>
            <div class="hot-item hot-item-5">
                <a href="saigoncontent.php">
                    <img class="hot-img-5" src="assets/img/diadiem/HCM.jfif" alt="Sài Gòn"/>
                    <p class="hot-name">Hồ Chí Minh</p>
                </a>
            </div>
            <div class="hot-item hot-item-6">
                <a href="danangcontent.php">
                    <img class="hot-img-6" src="assets/img/diadiem/hoian.jfif" alt="Hội An"/>
                    <p class="hot-name">Hội An</p>
                </a>
            </div>
            <div class="hot-item hot-item-7">
                <a href="hannoicontent.php">
                    <img class="hot-img-7" src="assets/img/diadiem/hue.jpg" alt="Huế"/>
                    <p class="hot-name">Huế</p>
                </a>
            </div>
            <div class="hot-item hot-item-8">
                <a href="sapacontent.php">
                    <img class="hot-img-8" src="assets/img/diadiem/sapa1.jpg" alt="SaPa"/>
                    <p class="hot-name">SaPa</p>
                </a>
            </div>
        </div>
    </div>
</div>  