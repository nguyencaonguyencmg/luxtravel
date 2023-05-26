<?php include('templates/header.php'); ?>
<div id="main">
    <div id="content" class="container">
        <div class="pd-wrap">
        <div class="container">
            
            <div class="heading-section">
            <h1>Thông tin phòng</h1>
            </div>
            
            <?php 
                include('admin/DB/connection.ini');
                $sql = "SELECT * FROM room WHERE roomid ='".$_GET['id']."'" ;
                $result = mysqli_query($conn, $sql);
                if(mysqli_num_rows($result) > 0 ) 
                {
                    while ($row = mysqli_fetch_assoc($result)) 
                    {
                        $roomid = $row['roomid'];
                        $roomname = $row['roomname'];
                        $img = $row['img'];
                        $imgmt = $row['images'];
                        $title = $row['title'];
                        $price = $row['price'];
                        $location = $row['locations'];
                        $no1 = $row['no1'];
                        $vip = $row['vip'];

                        $imgMotaArr =  explode(",",$imgmt);
                    }echo '<div class="row">
                        <div class="col-md-6">
                            <div id="thumb" class=" product-thumb">
                                <div class="rooms-slider owl-theme">
                                    <div class="item">
                                        <img class="room-img" src="uploads/'.$img.'" />
                                    </div>';?>
                                <?php
                                    foreach ($imgMotaArr as $key => $imgMota): ?>      
                                        <div class="item">
                                            <img class="room-img" src="uploads/<?= $imgMota; ?>" />
                                        </div>
                                <?php  endforeach; ?>
                        <?php
                        echo '</div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="product-dtl">
                            <div class="product-info">
                                <h2>'.$roomname.'</h2>
                                <div class="product-name">'.$location.', Vietnam</div>
                                <div class="reviews-counter">
                                <div class="rate">
                                    <input type="radio" id="star5" name="rate" Value="5" defaultChecked />
                                    <label For="star5" title="text">5 stars</label>
                                    <input type="radio" id="star4" name="rate" Value="4" defaultChecked />
                                    <label For="star4" title="text">4 stars</label>
                                    <input type="radio" id="star3" name="rate" Value="3" defaultChecked />
                                    <label For="star3" title="text">3 stars</label>
                                    <input type="radio" id="star2" name="rate" Value="2" />
                                    <label For="star2" title="text">2 stars</label>
                                    <input type="radio" id="star1" name="rate" Value="1" />
                                    <label For="star1" title="text">1 star</label>
                                </div>
                                </div>
                                <div class="product-price-discount"><span>'.number_format($price, 0, '.', '.').' VNĐ</span><!-- <span class="line-through">$29.00</span>  --></div>
                            </div>
                            <p>'.$title.' </p>

                            <form action="checkout.php?id='.$roomid.'" method="post">
                            <div class="row">
                            <div class="col-md-6">
                            <label For="size">Từ ngày</label>
                            <div class="date-item">
                                <i class="far fa-calendar-alt"></i>
                                <input id="myID" type="datetime-local" name = "datein" id="datein" placeholder="Ngày đến" required="required"/>
                            </div>
                            </div>
                            <div class="col-md-6">
                            <label For="color">Đến ngày</label>
                            <div class="date-item">
                                <i class="far fa-calendar-alt"></i>
                                <input id="myID" type="datetime-local"  name = "dateout"  placeholder="Ngày đi" required/>
                                
                            </div>
                            </div>
                        </div>
                        <div class="product-count">
                            <label For="size">Số lượng khách:</label>
                            <div class="display-flex">
                                <div class="qtyminus">-</div>
                                <input type="text" name="quantity" value = "1" class="qty"/>
                                <div class="qtyplus">+</div>
                            </div>
                            <label For="size">Số lượng phòng:</label>
                            <div class="display-flex">
                                <div class="qtyminus2">-</div>
                                <input type="text" name="quantity2" value = "1" class="qty2"/>
                                <div class="qtyplus2">+</div>
                            </div>
                            <input type="hidden" name="id" value="'.$roomid.'">
                            <input type="hidden" name="action" value="checkout">
                            <button name = "checkout"  class="round-black-btn">Đặt ngay</button >
                        </div>
                            </form>
                            </div>
                        </div>
                        </div>';
                }
            ?>
            
            
            
            <div class="product-info-tabs">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item ">
                <h2 class="nav-a text-dark  active" id="description-tab" data-toggle="tab"  role="tab" aria-controls="description" aria-selected="true">Mô tả</h2>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="description" role="tabpanel" aria-labelledby="description-tab">
                    <?php echo $title?>
                </div>
            </div>
            </div>
            <div class="product-info-tabs">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                <h2 class="nav-a text-dark active" id="review-tab" data-toggle="tab" role="tab" aria-controls="review" aria-selected="false">Reviews</h2>
                </li>
            </ul>
                    
                <form class="review-form">
                    <div class="form-group">
                    <label>Đánh giá</label>
                    <div class="reviews-counter">
                        <div class="rate">
                        <input type="radio" id="star5" name="rate" Value="5" />
                        <label For="star5" title="text">5 stars</label>
                        <input type="radio" id="star4" name="rate" Value="4" />
                        <label For="star4" title="text">4 stars</label>
                        <input type="radio" id="star3" name="rate" Value="3" />
                        <label For="star3" title="text">3 stars</label>
                        <input type="radio" id="star2" name="rate" Value="2" />
                        <label For="star2" title="text">2 stars</label>
                        <input type="radio" id="star1" name="rate" Value="1" />
                        <label For="star1" title="text">1 star</label>
                        </div>
                    </div>
                    </div>
                </form>
                <div id="fb-root"></div>
                <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v15.0" nonce="fW4SVjDQ"></script>
                <div class="fb-comments" data-href="https:CaoNguyen.tk" data-width="100%" style="font-size:20px" data-numposts="5"></div>

            
            
            </div>
            <div class="hotel-section">
            <div class="hotel">
                <h1 class="hotel-header">Khách sạn tương tự</h1>
            </div>
                <div class="hotel-list">
                    <?php 
                        include('admin/DB/connection.ini');
                        $sql="SELECT * FROM room";
                        $result=mysqli_query($conn,$sql);
                        while($row = mysqli_fetch_array($result)){
                            $roomid = $row['roomid'];
                            if($row['locations'] == $location) {
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
            </div>
        </div>
        </div>
    </div>
</div>
<?php 
	include('admin/DB/connection.ini');
	if(isset($_GET['id']))
	{
        $id = $_GET['id'];
	}
	// $sql = mysqli_query($conn, "SELECT * FROM room WHERE roomid = '".$id."'");
    if(isset($_POST['checkout'])){
        $quantity = $_POST['quantity'];
        $quantity2 = $_POST['quantity2'];
        $datein = $_POST['datein'];
        $dateout = $_POST['dateout'];
	// if(isset($_GET['action']))
	// {
	// 	switch ($_GET['action']) {
	// 		case 'checkout':
	// 			$_SESSION['checkout'][$id] = $item;
	// 			?>
    //                 <!-- <script>
    //                     location.href = '/Luxtravel/checkout.php';
    //                 </script> -->
    //             <?php
	// 			break;
    //         case "delete":
    //             unset($_SESSION['cart'][$id]);
    //             // header('location:shopcard.php');
    //             break;
	// 	}
	// }
}
?>
<?php include('templates/footer.php'); ?>
