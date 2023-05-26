<?php
	include('../DB/connection.ini');
	if(isset($_GET['LocationID'])){
		$locationid = $_GET["LocationID"];
		$sql = "DELETE  FROM locations WHERE LocationID = '$locationid'";
		if (mysqli_query($conn, $sql)) {
			 echo "Xóa thành công";
			header('location:../Adlocation.php');
		} else {
			echo "Xóa thất bại: " . mysqli_error($conn);
		}
	}
	include('../DB/close.ini');
?>