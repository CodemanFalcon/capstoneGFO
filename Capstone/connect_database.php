<?php
	$conn = mysqli_connect("localhost","jules", "capstone","jules");
	if (!$conn){die ($message = "<span style='color: #ff8080;'>Failed to connect to database: </span>" . mysqli_connect_error());}
	else { $message = "<span style='color: #59a7ab;'>Database connection has been established successfully</span>";}

	//echo $message; //test database connection
?>