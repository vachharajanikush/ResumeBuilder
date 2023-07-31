<?php
    $db = mysqli_connect('sql310.epizy.com','epiz_32996931','8wooXiaq3DtlY2C','epiz_32996931_resume');
	if (!$db) {
		echo "Database connection faild";
	}
	$u_id = $_POST['u_id'];
	$f_name = $_POST['f_name'];
	$m_name = $_POST['m_name'];
	$l_name = $_POST['l_name'];
	$p_email = $_POST['p_email'];
	$p_mobile = $_POST['p_mobile'];
	$p_flat = $_POST['p_flat'];
	$p_area = $_POST['p_area'];
	$p_landmark = $_POST['p_landmark'];
	$p_city = $_POST['p_city'];
	$p_state = $_POST['p_state'];
	$p_gender = $_POST['p_gender'];
	$p_dob = $_POST['p_dob'];
	$p_socialmedia = $_POST['p_socialmedia'];

 
	$sql = "SELECT f_name FROM personal_details WHERE f_name = '".$f_name."'";

	$result = mysqli_query($db,$sql);
	$count = mysqli_num_rows($result);

	if ($count == 1) {
		echo json_encode("Error");
	}else{
		$insert = "INSERT INTO personal_details(f_name,m_name,l_name,p_email,p_mobile,p_flat,p_area,p_landmark,p_city,p_state,p_socialmedia)VALUES('".$f_name."','".$m_name."','".$l_name."','".$p_email."','".$p_mobile."','".$p_flat."','".$p_area."','".$p_landmark."','".$p_city."','".$p_state."','".$p_socialmedia."')";
		$query = mysqli_query($db,$insert);
		if ($query) {
			echo json_encode("Success");
		}
	}

?>	