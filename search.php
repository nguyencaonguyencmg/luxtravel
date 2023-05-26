<?php include('templates/header.php'); ?>
<div id="main">
    <?php include('templates/suggest.php'); ?>
    <div id="content" class="container">
        <div className="hotel-section">
            <div class="hotel-list">
            <?php
            include('admin/DB/connection.ini');
            $search=isset($_POST ['Search'])?$_POST ['Search']: "";
            if ($search){
                $sql="SELECT * FROM room WHERE locations LIKE '%".$search."%'";
                $result=mysqli_query($conn,$sql);
                $soluong=mysqli_num_rows($result);
                
            if($soluong>0){
                echo"<h2>Chỗ ở tại " .$search."</h2>";
                while($row = mysqli_fetch_array($result)){
                    ?>
                    <div class="hotel-list">
                        <?php 
                            include('admin/DB/connection.ini');
                            $sql="SELECT * FROM room";
                            $result=mysqli_query($conn,$sql);
                            while($row = mysqli_fetch_array($result)){
                                $roomid = $row['roomid'];
                                if($row['locations'] == $search) {
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
            <?php }
                }
                else{
                    echo"<h4>Không có món ăn nào phù hợp với từ khoá:" .$search."</h4>";
                }
            }
        ?>
            </div>
        </div>
    </div> 
    
</div>
<?php include('templates/footer.php'); ?>
