<?php include('templates/header.php'); ?>
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
                $random = mt_rand(10000, 99999);
                $dif = abs(strtotime($_POST['datein']) - strtotime($_POST['dateout']));
                $year = floor($dif / (365*60*60*24));
                $month = floor(($dif - $year * 365*60*60*24) / (30*60*60*24));
                $day = floor(($dif - $year * 365*60*60*24 - $month*30*60*60*24)/ (60*60*24));
                $quantity2 = $_POST['quantity2'];
                $total = $price * $day * $quantity2;
                $tong = number_format($total, 0, '.', '.');
                $imgMotaArr =  explode(",",$imgmt);
                
            }
        }
        
        ?>
<div id="main">
    <div id="content" class="container">
        <div class="order-summery-shipping-info">
            <div class="container">
                <div class="row justify-content-between">

                    <div class="col-md-6 order-summery-shipping-info-left">
                        <h2><b>Thanh toán đặt phòng</b> </h2>
                        <p>Đặt phòng nhanh chóng, tiện lợi.</p>
                        <p><b>Đảm bảo hoàn tiền trong vòng 24h</b></p>

                        <div class="shipping-form">
                            <form action="" method="POST" id="register-form">
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <input type="text" class="form-control" name="guest" placeholder="Họ và Tên" required>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <p>Vui lòng huyển khoản đến:</p>
                                        <input type="name" class="form-control" id="" Value="CTTNHH LuxTravel"  readOnly/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <p>Số tài khoản:</p>
                                    <input type="text"  class="form-control" id="" Value="0538-1652-1624" readOnly/>
                                </div>
                                <div class="form-group">
                                    <p>Nội dung chuyển khoản:</p>
                                    <input type="text" class="form-control" name="code" Value="Thanh toán mã <?php echo $random?>"readOnly/>
                                </div>
                                <div class="form-group">
                                    <p>Số tiền cần thanh toán:</p>
                                    <input type="text" class="form-control" id="" Value="<?php echo $tong?> VND"readOnly/>
                                </div>
                                <div class="form-group" >
                                    <input type="text" class="form-control" name="email" placeholder="Email" required>
                                </div>
                                    <input type="hidden" name="id" value="'.$row['roomid'].'">
                                    <input type="hidden" name="soluong" value="<?php echo $_POST['quantity'] ?>">
                                    <input type="hidden" name="sophong" value="<?php echo $_POST['quantity2'] ?>">
                                    <input type="hidden" name="dayin" value="<?php echo $_POST['datein'] ?>">
                                    <input type="hidden" name="dayout" value="<?php echo $_POST['dateout'] ?>">
                                    <input type="hidden" name="gia" value="<?php echo $price ?>">
                                    <button type="submit" id="checkout" name="btncheckout" class="btn btn-outline-primary ">Tôi đã thanh toán</button>

                            </form>
                        </div>
                    </div>

                    <div class="col-md-6 order-summery-shipping-info-right-outer">

                        <div class="order-summery-shipping-info-right">
                            <div class="product-preview">

                                <div class="row">
                                    <div class="col-md-7 product-preview-left">
                                        <h3><?php echo $roomname ?></h3>
                                    </div>
                                    <div class="col-md-5 product-preview-right">
                                        <img src="uploads/<?php echo $img ?>" alt=""/>
                                    </div>
                                </div>

                            </div>
                            
                            <ul>
                                <li>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label htmlFor="size">Từ ngày</label>
                                        <div class="date-item">
                                            <i class="far fa-calendar-alt"></i>
                                            <input id="mytime" type="text" name="datein" placeholder="Ngày đến" value="<?php echo $_POST['datein'] ?>" readOnly/>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label htmlFor="color">Đến ngày</label>
                                        <div class="date-item">
                                            <i class="far fa-calendar-alt"></i>
                                            <input id="mytime" type="text" name="dateout"  placeholder="Ngày đi" value="<?php echo $_POST['dateout'] ?>"  readOnly/>
                                        </div>
                                    </div>
                                </div>
                                </li>

                                <li>
                                <div class="product-count">
                                    <label htmlFor="size">Số khách</label>
                                    <form action="#" class="display-flex">
                                        <input type="number" style="width:8
                                        50px" name="soluong" Value="<?php echo $_POST['quantity'] ?>" class="qty" readOnly/>
                                    </form>
                                </div>
                                <div class="product-count">
                                    <label htmlFor="size">Số phòng</label>
                                    <form action="#" class="display-flex">
                                        <input type="number" style="width:8
                                        50px" name="sophong" Value="<?php echo $_POST['quantity2'] ?>" class="qty2" readOnly/>
                                    </form>
                                </div>
                                </li>

                                <li >
                                    <span><b>Tổng tiền </b></span>
                                    <span><b><?php echo $tong ?>VND</b> </span>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<?php 
    if(isset($_POST['btncheckout']))
    {
            
            $hoten = $_POST['guest'];
            $email = $_POST['email'];
            $datein = $_POST['dayin'];
            $dateout = $_POST['dayout'];
            $quantity = $_POST['soluong'];
            $quantity2 = $_POST['sophong'];
            $diff = abs(strtotime($dateout) - strtotime($datein));
            $years = floor($diff / (365*60*60*24));
            $months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
            $days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));
            $totals = $price * $days * $quantity2;
            $code = substr($_POST['code'] ?? null,15, 8);
            $sql = "INSERT INTO bookroom ( roomname, hoten, email , code, price, datein, dateout, people, nrooms, total)
                VALUES ( '".$roomname."', '".$hoten."', '".$email."', '".$code."', '".$price."', '".$datein."', '".$dateout."', '".$quantity."', '".$quantity2."', '".$totals."')";
                mysqli_query($conn, $sql);
                // ?>
                //     <script>
                            location.href = '/Luxtravel/success.php';
                //     </script>
                // <?php
    }
?>

    
        
  
<?php include('templates/footer.php'); ?>