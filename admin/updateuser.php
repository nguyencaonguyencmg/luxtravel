<?php include('templates/nav.php'); ?>
<section class="page-content">
<?php include('templates/header.php')?>
    <div class="col-sm-8 col-sm-offset-3 col-lg-8 col-lg-offset-3 main" style="padding-left:30%">
        <h2 class="text-center text-danger mt-3">Chỉnh sửa người dùng</h2>
        <form action="" name="f1" method="POST" enctype="multipart/form-data" class="mt-2 mb-5">
            <?php 
                include('DB/connection.ini');
                $sql = "SELECT * FROM user WHERE ID='".$_GET['ID']."'" ;
                $result = mysqli_query($conn, $sql);
                if(mysqli_num_rows($result) > 0 ) 
                {
                    while ($row = mysqli_fetch_assoc($result)) 
                    {
                        $id = $row['ID'];
                        $ten = $row['FullName'];
                        $img = $row['Img'];
                        $user = $row['Username'];
                        $pass = $row['Pass'];
                        $phone = $row['Phone'];
                        $role = $row['Gioitinh'];
                        $admin = $row['AD'];
                    }
                }
            ?>
            <div>
                <div class="mt-3">
                    <label>User ID:</label>
                    <input type="text" class="form-control" name="userid" value="<?php echo $_GET['ID']?>" readonly>
                </div>
                <div class="mt-3">
                    <label>Name:</label>
                    <input type="text" class="form-control" name="tenuser" value="<?php echo $ten;?>">
                </div>
                <div class="form-group pt-4" style="clear:both;">
                    <label>Img user:</label>
                    <input type="file" name="imguser" class="file-upload-default" value="<?php  echo $img;?>">
                    <div class="input-group col-xs-12">
                        <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                        <span class="input-group-append">
                            <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                        </span>
                    </div>
                </div>	
                <div class="mt-3">
                    <label>Username:</label>
                    <input type="text" class="form-control" name="username" value="<?php echo $user;?>">
                </div>		   
                <div class="mt-3">
                    <label>Password:</label>
                    <input type="text" class="form-control" name="pass" value="<?php echo $pass?>">
                </div>
                <div class="mt-3">
                    <label>Phone:</label>
                    <input type="number" class="form-control" name="phone" value="<?php echo $phone?>">
                </div>
                <div class="mt-3">
                    <label>Role:</label>
                    <select class="form-control" name="role" value="<?php echo $role?>">
                        <option>Nam</option>
                        <option>Nữ</option>
                        <option>Khác</option>
                    </select>
                </div>
                <div class="mt-3">
                    <label>Admin:</label>
                    <select class="form-control" name="admin" value="<?php echo $admin?>">
                        <option action>Admin</option>
                        <option>User</option>
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
				echo "<a  href=../Aduser.php>Quay lại trang người dùng</a>";
				echo "</div";
			}
			else if($file_size > 4194304){
				$errors[] = 'Chỉ cho phép upload file có kích thước < 4 MB';
			}
			//var_dump($errors);
			if(empty($errors)===true){
				move_uploaded_file($file_tmp,"../uploads/".$file_name);
				$sql = "UPDATE user SET ID='".$userid."', FullName='".$tenuser."', Username='".$username."', Pass='".$pass."', Phone='".$phone."', Img='".$file_name."', Gioitinh='".$role."', AD='".$admin."' WHERE ID = '".$userid."'";
				if (mysqli_query($conn, $sql)) {
					echo "Đã sửa thành công";
					// header('');
                    ?>
                        <script>
                            location.href = '/Luxtravel/admin/Aduser.php';
                        </script>
                    <?php
				} 
				else {
					echo "Lỗi: " . $sql . "<br>" . mysqli_error($conn);
				}
				
			}
		}else{
			$file_name = $_POST['imguser'];
            $sql = "UPDATE user SET ID='".$userid."', FullName='".$tenuser."', Username='".$username."', Pass='".$pass."', Phone='".$phone."', Img='".$file_name."', Gioitinh='".$role."', AD='".$admin."' WHERE ID = '".$userid."'";
			if (mysqli_query($conn, $sql)) {
				echo "Đã sửa thành công";
				?>
                    <script>
                        location.href = '/Luxtravel/admin/Aduser.php';
                    </script>
                <?php
			} 
			else {
				echo "Lỗi: " . $sql . "<br>" . mysqli_error($conn);
			}
		}
	}
	include('DB/close.ini');
?>
<?php include('templates/footer.php')?>