<?php include('templates/nav.php'); ?>
<section class="page-content">
<?php include('templates/header.php')?>

    <?php
    include('DB/connection.ini');
    if($_SERVER['REQUEST_METHOD']  == 'POST') {
        $roomid = $_POST['roomid'];
        $roomname = $_POST['roomname'];
        $title = $_POST['title'];
        $price = $_POST['price'];
        $location = $_POST['location'];
        $no1 = $_POST['no1'];
        $vip = $_POST['vip'];

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
        $sql = "INSERT INTO room (roomid, roomname, img, images, title, price, locations, no1, vip)
                        VALUES ('".$roomid."', '".$roomname."', '".$fileImgeDon."', '".$fileEndUpdate."', '".$title."', '".$price."', '".$location."', '".$no1."', '".$vip."')";
                    mysqli_query($conn, $sql);

                    ?>
                        <script>
                            location.href = '/Luxtravel/admin/Adindex.php';
                        </script>
                        
                    <?php
    }

    ?>
    <div class="col-sm-8 col-sm-offset-3 col-lg-8 col-lg-offset-3 main" method="post" style="padding-left:30%">
        <h2 class="text-center text-danger mt-3">Thêm Phòng</h2>
        <form action="" name="f1" method="post" enctype="multipart/form-data" class="mt-2 mb-5">
            <?php 
                include('DB/connection.ini');
                $sql = "SELECT Addres FROM locations";
                $result = mysqli_query($conn, $sql);
                if(mysqli_num_rows($result) > 0 ) 
                {
                    while ($row = mysqli_fetch_assoc($result)) 
                    {
                        $Addess = $row['Addres'];
                    }
                }
            ?>
            <div>
                <div class="mt-3">
                    <label>Room ID:</label>
                    <input type="text"  class="form-control" name="roomid">
                </div>
                <div class="mt-3">
                    <label>Name:</label>
                    <input type="text" class="form-control" name="roomname">
                </div>
                <div class="form-group">
                    <label>Cập nhật ảnh phòng chính</label>
                    <input type="file" name="imgroom"   class="file-upload-default">
                    <div class="input-group col-xs-12">
                        <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                        
                    </div>
                </div>
                <div class="form-group">
                    <label>Cập nhật ảnh mô tả phòng( Tối đa 4 ảnh )</label>
                    <input type="file" name="imgmota[]"   class="file-upload-default"  multiple= "multiple">
                    <div class="input-group col-xs-12">
                        <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                        
                    </div>
                </div>
                <div class="mt-3">
                    <label>Title:</label>
                    <textarea type="text" class="form-control" rows="4" name="title"></textarea>
                </div>		   
                <div class="mt-3">
                    <label>Price:</label>
                    <input type="number" class="form-control" name="price">
                </div>
                <div class="mt-3">
                    <label>Location:</label>
                    <select class="form-control" name="location">
                    <?php 
                    include('admin/DB/connection.ini');
                    $sql="SELECT Addres FROM locations";
                    $result=mysqli_query($conn,$sql);
                    while($row = mysqli_fetch_array($result)){
                        $address = $row['Addres'];
                            echo '
                                    <option action>'.$address.'</option>'
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
                    <select class="form-control" name="no1">
                        <option action>0</option>
                        <option>1</option>
                    </select>
                </div>
                <div class="mt-3">
                    <label>VIP:</label>
                    <select class="form-control" name="vip">
                        <option action>0</option>
                        <option>1</option>
                    </select>
                </div>
                    <input type="submit" class="btn btn-info btn-sm mt-2"style="margin-left:45%; margin-top:20px; font-size:20px; padding:5px 15px" name="btnThem"  value="Thêm">
                </div>
                
            </div>
        </form>
    </div>
    <?php
       
        echo '<link rel="stylesheet" href="css/libs/bootstrap.min.css">'; ?>

                <script>
                    // location.href = '/Luxtravel/admin/Adindex.php';
                </script>
            <?php
        // }
        include('DB/close.ini');
    ?>
</section>
<?php include('templates/footer.php')?>