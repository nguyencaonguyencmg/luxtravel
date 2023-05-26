<?php
	include('../DB/connection.ini');
	if(isset($_GET['BookingID'])){
		$bookid = $_GET["BookingID"];
		$sql = "DELETE  FROM booking WHERE BookingID = '$bookid'";
		if (mysqli_query($conn, $sql)) {
			 echo "Xóa thành công";
			header('location:../Adbooking.php');
		} else {
			echo "Xóa thất bại: " . mysqli_error($conn);
		}
	}
	include('../DB/close.ini');
?>