<?php
    $db = mysqli_connect('sql310.epizy.com','epiz_32996931','8wooXiaq3DtlY2C','epiz_32996931_resume');
	if (!$db) {
		echo "Database connection faild";
	}
	$ct_id = $_POST['ct_id'];
	$u_id = $_POST['u_id'];
	$c_coursename = $_POST['c_coursename'];
 	$c_sdate = $_POST['c_sdate'];
 	$c_edate = $_POST['c_edate'];
 	$c_certificatelink = $_POST['c_certificatelink'];
 
	$sql = "SELECT u_id FROM certificate_details WHERE u_id = '".$u_id."'";

	$result = mysqli_query($db,$sql);
	$count = mysqli_num_rows($result);

	if ($count == 1) {
		echo json_encode("Error");
	}else{
		$insert = "INSERT INTO certificate_details(c_coursename,c_sdate,c_edate,c_certificate)VALUES('".$c_coursename."','".$c_sdate."','".$c_edate."','".$c_certificatelink."')";
		$query = mysqli_query($db,$insert);
		if ($query) {
			echo json_encode("Success");
		}
	}

?>