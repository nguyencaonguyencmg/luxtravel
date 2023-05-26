<?php include('templates/nav.php'); ?>
<section class="page-content">
<?php include('templates/header.php')?>
    <div class="col-sm-8 col-sm-offset-3 col-lg-8 col-lg-offset-3 main" style="padding-left:30%">
        <h2 class="text-center text-danger mt-3">Chỉnh sửa thông tin phòng</h2>
        <form action="" name="f1" method="POST" enctype="multipart/form-data" class="mt-2 mb-5">
            <?php 
                include('DB/connection.ini');
                $sql = "SELECT * FROM room WHERE roomid='".$_GET['roomid']."'" ;
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
                        
                    }
                }
            ?>
            <div>
                <div class="mt-3">
                    <label>Room ID:</label>
                    <input type="text"  class="form-control" name="roomid" readonly value="<?php echo $_GET['roomid']?>">
                </div>
                <div class="mt-3">
                    <label>Name:</label>
                    <input type="text" class="form-control" name="roomname" value="<?php echo $roomname;?>">
                </div>
                <div class="form-group pt-4" style="clear:both;">
                    <label>Cập nhật ảnh phòng chính</label>
                    <input type="file" name="imgroom" class="file-upload-default">
                    <div class="input-group col-xs-12">
                        <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image" value="<?php echo $img;?>">
                        <span class="input-group-append">
                            <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                        </span>
                    </div>
                </div>
                <!-- Ảnh phụ -->
                <div class="form-group">
                    <label>Cập nhật ảnh phòng phụ( Tối đa 4 ảnh )</label>
                    
                    <input type="file" name="imgmota[]"  class="file-upload-default" max='4' multiple > 
                    <div class="input-group col-xs-12">
                        <input type="text" class="form-control file-upload-info" value="<?php echo $imgmt;?>" disabled placeholder="Upload Image">
                        <span class="input-group-append">
                            <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                        </span>
                    </div>
                </div>
                <div class="mt-3">
                    <label>title:</label>
                    <textarea type="text" class="form-control" rows="4" name="title" ><?php echo $title;?></textarea>
                </div>		   
                <div class="mt-3">
                    <label>price:</label>
                    <input type="number" class="form-control" name="price" value="<?php echo $price;?>">
                </div>
                <div class="mt-3">
                    <label>location:</label>
                    <select class="form-control" name="location" >
                    <?php 
                    include('admin/DB/connection.ini');
                    $sql="SELECT Addres FROM locations";
                    $result=mysqli_query($conn,$sql);
                    while($row = mysqli_fetch_array($result)){
                        $address = $row['Addres'];
                            echo '
                                    <option>'.$location.'</option>
                                    <option>'.$address.'</option>'
                                ;
                        }
				    ?>
                    </select>
                    
                    <!-- <select class="form-control" name="role">
                        <option></option>
                    </select> -->
                </div>
                <div class="mt-3">
                    <label>No 1:</label>
                    <select class="form-control" name="no1" value="<?php echo $no1;?>">
                        <option action>0</option>
                        <option>1</option>
                    </select>
                </div>
                <div class="mt-3">
                    <label>vip:</label>
                    <select class="form-control" name="vip" value="<?php echo $vip;?>">
                        <option action>0</option>
                        <option>1</option>
                    </select>
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
        $roomid = $_POST['roomid'];
        $roomname = $_POST['roomname'];
        $title = $_POST['title'];
        $price = $_POST['price'];
        $location = $_POST['location'];
        $no1 = $_POST['no1'];
        $vip = $_POST['vip'];
        $images= $_POST['images'];
        
        
        $fileImgeDon = '';
        if(isset($_FILES['imgroom'])) 
        {
            $errors = array();
            $file_name = $_FILES['imgroom'] ['name'];
            $file_size = $_FILES['imgroom'] ['size'];
            $file_tmp = $_FILES['imgroom'] ['tmp_name'];
            $file_type = $_FILES['imgroom'] ['type'];
            $arr = explode('.', $file_name);
            $file_ext = strtolower(end($arr));
            $expensions = array("jpeg", "jpg", "png","mp4","webp","");

            if(in_array($file_ext, $expensions) === false)
            {

                $errors[]= "Chỉ cho upload file ở dạng JPG, PNG và JPEG";
            }
            if($file_size > 372244480) 
            {
                $errors[] = "Chỉ cho phép upload file dưới 2MB";
            }
            if(empty($errors)===true){
                $fileImgeDon = $file_name;
                move_uploaded_file($file_tmp,"../uploads/".$file_name);
                    
            }
        }
        $fileEndUpdate = '';
        if(!empty($_FILES['imgmota'])){
            $filenameUpload = $_FILES['imgmota']['name'];
            foreach ($filenameUpload as $key => $item) {
                $fileNameArr = explode('.', $item);
                $fileTxt = end($fileNameArr);
                $filenew = uniqid().strtolower(reset($fileNameArr)).'.'.$fileTxt;
                
                $allowType = array('jpg', 'png');
                if(in_array($fileTxt, $allowType)){
                    $pathFile = $_FILES['imgmota']['tmp_name'][$key];

                    $folder = '../uploads';
                    
                    $upload = move_uploaded_file($pathFile, $folder.'/'.$filenew);
                    if($upload){
                        $fileEndUpdate .= $filenew.',';
                    }else {
                        echo 'upload file thất bại';
                    }
                }else{
                    echo 'định dạng file phải là jpg, png';
                }
                # code...
            }
        }
        
        $fileEndUpdate =  trim($fileEndUpdate, ',');
            $sql = "UPDATE room SET roomid='".$roomid."', roomname='".$roomname."', title='".$title."', price='".$price."', locations='".$location."', img='".$fileImgeDon."', images='".$fileEndUpdate."', no1='".$no1."', vip='".$vip."' WHERE roomid = '".$roomid."'";
            mysqli_query($conn, $sql);
    
            ?>
                <script>
                    location.href = '/Luxtravel/admin/Adindex.php';
                </script>
            <?php
    }
	include('DB/close.ini');
?>
<?php include('templates/footer.php')?>