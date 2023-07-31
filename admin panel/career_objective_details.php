<?php
    $db = mysqli_connect('sql310.epizy.com','epiz_32996931','8wooXiaq3DtlY2C','epiz_32996931_resume');
	if (!$db) {
		echo "Database connection faild";
	}
	$c_id = $_POST['c_id'];
	$u_id = $_POST['u_id'];
	$c_desc = $_POST['c_desc'];
 
	$sql = "SELECT u_id FROM career_objective_details WHERE u_id = '".$u_id."'";

	$result = mysqli_query($db,$sql);
	$count = mysqli_num_rows($result);

	if ($count == 1) {
		echo json_encode("Error");
	}else{
		$insert = "INSERT INTO career_objective_details(c_desc)VALUES('".$c_desc."')";
		$query = mysqli_query($db,$insert);
		if ($query) {
			echo json_encode("Success");
		}
	}

?>