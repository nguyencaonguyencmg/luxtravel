<?php include('templates/nav.php'); ?>
<section class="page-content">
<?php include('templates/header.php')?>
    <div class="col-sm-8 col-sm-offset-3 col-lg-8 col-lg-offset-3 main" style="padding-left:30%">
        <h2 class="text-center text-danger mt-3">Thêm người dùng</h2>
        <form action="" name="f1" method="POST" enctype="multipart/form-data" class="mt-2 mb-5">
            <div>
                <div class="mt-3">
                    <label>User ID:</label>
                    <input type="text" class="form-control" name="userid">
                </div>
                <div class="mt-3">
                    <label>Name:</label>
                    <input type="text" class="form-control" name="tenuser">
                </div>
                <div class="form-group pt-4" style="clear:both;">
                    <label>Img user:</label>
                    <input type="file" name="imguser" class="file-upload-default">
                    <div class="input-group col-xs-12">
                        <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                        <span class="input-group-append">
                            <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                        </span>
                    </div>
                </div>	
                <div class="mt-3">
                    <label>Username:</label>
                    <input type="text" class="form-control" name="username">
                </div>		   
                <div class="mt-3">
                    <label>Password:</label>
                    <input type="text" class="form-control" name="pass">
                </div>
                <div class="mt-3">
                    <label>Phone:</label>
                    <input type="number" class="form-control" name="phone">
                </div>
                <div class="mt-3">
                    <label>Role:</label>
                    <select class="form-control" name="role">
                        <option>Nam</option>
                        <option>Nữ</option>
                        <option>Khác</option>
                    </select>
                </div>
                <div class="mt-3">
                    <label>Admin:</label>
                    <select class="form-control" name="admin">
                        <option action>Admin</option>
                        <option>User</option>
                    </select>
                </div>
                    <input type="submit" class="btn btn-info btn-sm mt-2"style="margin-left:45%; margin-top:20px; font-size:20px; padding:5px 15px" name="btnThem"  value="Thêm">
                </div>
            </div>
        </form>
    </div>
        <?php
        include('DB/connection.ini');
        echo '<link rel="stylesheet" href="css/libs/bootstrap.min.css">';
        if(isset($_POST['btnThem']))
        {
            $userid = $_POST['userid'];
            $tenuser = $_POST['tenuser'];
            $username = $_POST['username'];
            $pass = $_POST['pass'];
            $phone = $_POST['phone'];
            $role = $_POST['role'];
            $admin = $_POST['admin'];
            if(isset($_FILES['imguser'])){
                $errors= array();
                $file_name = $_FILES['imguser']['name'];
                $file_size = $_FILES['imguser']['size'];
                $file_tmp = $_FILES['imguser']['tmp_name'];
                $file_type = $_FILES['imguser']['type'];
                $arr = explode('.',$file_name);
                $file_ext = strtolower(end($arr));
                $expensions = array("jpeg","jpg","png");
    
                if(in_array($file_ext,$expensions) === false){
                    $errors[]="Chỉ cho phép định dạng JPG, JPEG hoặc PNG.";
                    echo "<div class='text-center mt-3'>";
                    echo "<h5  class='text-danger'>Chỉ cho phép định dạng JPG, JPEG hoặc PNG!</h5><br>";
                    echo "<a  href=../adduser.php>Quay lại trang người dùng</a>";
                    echo "</div";
                }
                else if($file_size > 4194304){
                    $errors[] = 'Chỉ cho phép upload file có kích thước < 4 MB';
                }
                if(empty($errors)===true){
                    move_uploaded_file($file_tmp,'../uploads/'.$file_name);
                    $sql = "INSERT INTO user (ID, FullName, Img, Username, Pass, Phone, Gioitinh, AD)
                        VALUES ('".$userid."', '".$tenuser."', '".$file_name."', '".$username."', '".$pass."', '".$phone."', '".$role."', '".$admin."')";
                    mysqli_query($conn, $sql);
                    
                    ?>
                        <script>
                            location.href = '/Luxtravel/admin/Aduser.php';
                        </script>
                    <?php
                
                }
            }
        }
        include('DB/close.ini');
    ?>
    
</section>
<?php include('templates/footer.php')?>