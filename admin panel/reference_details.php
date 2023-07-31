<?php
    $db = mysqli_connect('sql310.epizy.com','epiz_32996931','8wooXiaq3DtlY2C','epiz_32996931_resume');
	if (!$db) {
		echo "Database connection faild";
	}
	$r_id = $_POST['r_id'];
	$u_id = $_POST['u_id'];
	$r_name = $_POST['r_name'];
 	$r_job = $_POST['r_job'];
 	$r_company = $_POST['r_company'];
 	$r_email = $_POST['r_email'];
	$r_phone = $_POST['r_phone'];

	$sql = "SELECT u_id FROM reference_details WHERE u_id = '".$u_id."'";

	$result = mysqli_query($db,$sql);
	$count = mysqli_num_rows($result);

	if ($count == 1) {
		echo json_encode("Error");
	}else{
		$insert = "INSERT INTO reference_details(r_name,r_job,r_company,r_email,r_phone)VALUES('".$r_name."','".$r_job."','".$r_company."','".$r_email."','".$r_phone."')";
		$query = mysqli_query($db,$insert);
		if ($query) {
			echo json_encode("Success");
		}
	}

?>