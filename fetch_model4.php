<?php
	// Build up DB connection including cofiguration file
	require ("konfig.php");
	//Assign an empty variable to store the fetched items
	$output = '';
	//SQL query to fetch the phone models belongs to the entered brand to the input field
	$sql = "SELECT * FROM user WHERE username = '".$_POST["username"]."' ";
	// execution of the query. Output a boolean value
	$res = mysqli_query($conn , $sql);
	//Concatenate fetched items to the output variable with HTML option tags to display
	$output .= '';
	// Check whether there are results or not
	if(mysqli_num_rows($res)>0){
		//Fetch the models into an array belongs to a particular brand name/id
		while ($row = mysqli_fetch_array($res)) {
			//Concatenate further fetched items to the output variable
			$output .= $row["level"];
		}
	}
	//print the fetched phone models
	echo $output;



?>