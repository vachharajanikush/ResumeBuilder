<?php
    $db = mysqli_connect('sql310.epizy.com','epiz_32996931','8wooXiaq3DtlY2C','epiz_32996931_resume');
	if (!$db) {
		echo "Database connection faild";
	}
	$e_id = $_POST['e_id'];
	$u_id = $_POST['u_id'];
	$e_institude_name = $_POST['e_institude_name'];
 	$s_date = $_POST['s_date'];
 	$e_date = $_POST['e_date'];
 	$e_degree = $_POST['e_degree'];
	$e_grade = $_POST['e_grade'];
 	$e_desc = $_POST['e_desc'];
 	
	$sql = "SELECT u_id FROM education_details WHERE u_id = '".$u_id."'";

	$result = mysqli_query($db,$sql);
	$count = mysqli_num_rows($result);

	if ($count == 1) {
		echo json_encode("Error");
	}else{
		$insert = "INSERT INTO education_details(e_institude,s_date,e_date,e_degree,e_grade,e_desc)VALUES('".$e_institude_name."','".$s_date."','".$e_date."','".$e_grade."','".$e_desc."')";
		$query = mysqli_query($db,$insert);
		if ($query) {
			echo json_encode("Success");
		}
	}

?>