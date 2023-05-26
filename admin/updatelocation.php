<?php include('templates/nav.php'); ?>
<section class="page-content">
<?php include('templates/header.php')?>
    <div class="col-sm-8 col-sm-offset-3 col-lg-8 col-lg-offset-3 main" method="post" style="padding-left:30%">
        <h2 class="text-center text-danger mt-3">Chỉnh sửa Địa Điểm</h2>
        <form action="" name="f1" method="POST" enctype="multipart/form-data" class="mt-2 mb-5">
            <?php 
                include('DB/connection.ini');
                $sql = "SELECT * FROM locations WHERE LocationID='".$_GET['LocationID']."'" ;
                $result = mysqli_query($conn, $sql);
                if(mysqli_num_rows($result) > 0 ) 
                {
                    while ($row = mysqli_fetch_assoc($result)) 
                    {
                        $locationid = $row['LocationID'];
                        $locaname = $row['Addres'];
                        $note = $row['Note'];
                    }
                }
            ?>
            <div>
                <div class="mt-3">
                    <label>Location ID:</label>
                    <input type="text"  class="form-control" name="locationid" readonly value="<?php echo $_GET['LocationID']?>">
                </div>
                <div class="mt-3">
                    <label>Name:</label>
                    <input type="text" class="form-control" name="locaname" value="<?php echo $locaname;?>">
                </div>
                <div class="mt-3">
                    <label>Note:</label>
                    <input type="text" class="form-control" name="note"value="<?php echo $note;?>">
                </div>	
                    <input type="submit" class="btn btn-info btn-sm mt-2"style="margin-left:45%; margin-top:20px; font-size:20px; padding:5px 15px" name="btnSua"  value="Update">
                </div>
            </div>
        </form>
    </div>
    
</section>
<?php
	include('DB/connection.ini');
    if(isset($_POST['btnSua'])){
		$locationid = $_POST['locationid'];
        $locaname = $_POST['locaname'];
        $note = $_POST['note'];
        $sql = "UPDATE locations SET LocationID='".$locationid."', Addres='".$locaname."', Note='".$note."' WHERE LocationID = '".$locationid."'";
        if (mysqli_query($conn, $sql)) {
            echo "Đã sửa thành công";
        
        ?>
        <script>
            location.href = '/Luxtravel/admin/Adlocation.php';
        </script>
    <?php

        } 
        else {
            echo "Lỗi: " . $sql . "<br>" . mysqli_error($conn);
        }
	 }//else{
    //     $sql = "UPDATE locations SET LocationID='".$locationid."', Addres='".$locaname."', Note='".$note."' WHERE LocationID = '".$locationid."'";
    //     if (mysqli_query($conn, $sql)) {
    //         echo "Đã sửa thành công";
    //     } 
    //     else {
    //         echo "Lỗi: " . $sql . "<br>" . mysqli_error($conn);
    //     }
    // }
	include('DB/close.ini');
?>
<?php include('templates/footer.php')?>