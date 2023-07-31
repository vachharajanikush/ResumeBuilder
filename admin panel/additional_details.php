<?php
    $db = mysqli_connect('sql310.epizy.com','epiz_32996931','8wooXiaq3DtlY2C','epiz_32996931_resume');
	if (!$db) {
		echo "Database connection faild";
	}
	$u_id = $_POST['u_id'];
	$a_hobbies = $_POST['a_hobbies'];
	$a_language = $_POST['a_language'];
 
	$sql = "SELECT u_id FROM additional_details WHERE u_id = '".$u_id."'";

	$result = mysqli_query($db,$sql);
	$count = mysqli_num_rows($result);

	if ($count == 1) {
		echo json_encode("Error");
	}else{
		$insert = "INSERT INTO additional_details(a_hobbies,a_language)VALUES('".$a_hobbies."','".$a_language."')";
		$query = mysqli_query($db,$insert);
		if ($query) {
			echo json_encode("Success");
		}
	}

?>