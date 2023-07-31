<?php
    $db = mysqli_connect('sql310.epizy.com','epiz_32996931','8wooXiaq3DtlY2C','epiz_32996931_resume');
	if (!$db) {
		echo "Database connection faild";
	}
	$p_id = $_POST['p_id'];
	$u_id = $_POST['u_id'];
	$p_name = $_POST['p_name'];
 	$s_date = $_POST['s_date'];
 	$e_date = $_POST['e_date'];
 	$p_desc = $_POST['p_desc'];
	$p_tech = $_POST['p_tech'];

	$sql = "SELECT u_id FROM project_details WHERE u_id = '".$u_id."'";

	$result = mysqli_query($db,$sql);
	$count = mysqli_num_rows($result);

	if ($count == 1) {
		echo json_encode("Error");
	}else{
		$insert = "INSERT INTO project_details(p_name,s_date,e_date,p_desc,p_tech)VALUES('".$p_name."','".$s_date."','".$e_date."','".$p_desc."','".$p_tech."')";
		$query = mysqli_query($db,$insert);
		if ($query) {
			echo json_encode("Success");
		}
	}

?>