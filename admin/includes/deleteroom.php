<?php
	include('../DB/connection.ini');
	if(isset($_GET['roomid'])){
		$roomid = $_GET["roomid"];
		$sql = "DELETE  FROM room WHERE roomid = '$roomid'";
		if (mysqli_query($conn, $sql)) {
			 echo "Xóa thành công";
			header('location:../Adindex.php');
		} else {
			echo "Xóa thất bại: " . mysqli_error($conn);
		}
	}
	include('../DB/close.ini');
?>