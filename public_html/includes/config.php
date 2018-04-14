<?php
	ob_start();
	session_start();

	$timezone = date_default_timezone_set("Asia/Kolkata");

	$con = mysqli_connect("shareddb-g.hosting.stackcp.net", "eurhythmicmind-3237ef1e", "313r7fycxw", "eurhythmicmind-3237ef1e");

	if(mysqli_connect_errno()) {
		echo "Failed to connect: " . mysqli_connect_errno();
	}
?>