<?php 
	$db = mysqli_connect('localhost','root','','userdata');
	$json = file_get_contents('php://input');

	$username = $_POST['username'];
	$password = $_POST['password'];		
    //$username="Dhyey";
    //$password=1234;

	$sql = "SELECT * FROM login WHERE username = '".$username."' AND password = '".$password."'";


	$result = mysqli_query($db,$sql);
	$count = mysqli_num_rows($result);

	if ($count == 1) {
		echo json_encode("Success");
	}else{
		echo json_encode("Error");
	}

?>