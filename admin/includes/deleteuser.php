<?php
	include('../DB/connection.ini');
	if(isset($_GET['ID'])){
		$id = $_GET["ID"];
		$sql = "DELETE  FROM user WHERE ID = '$id'";
		if (mysqli_query($conn, $sql)) {
			 echo "Xóa thành công";
			header('location:../Aduser.php');
		} else {
			echo "Xóa thất bại: " . mysqli_error($conn);
		}
	}
	include('../DB/close.ini');
?>