<?php
	include('../DB/connection.ini');
	if(isset($_GET['BookID'])){
		$idbook = $_GET["BookID"];
		$sql = "DELETE  FROM bookroom WHERE idbook = '$idbook'";
		if (mysqli_query($conn, $sql)) {
			 echo "Xóa thành công";
			header('location:../Adbookroom.php');
		} else {
			echo "Xóa thất bại: " . mysqli_error($conn);
		}
	}
	include('../DB/close.ini');
?>