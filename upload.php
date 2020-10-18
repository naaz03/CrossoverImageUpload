<?php

if(isset($_FILES['file']['name'])){

	/* Getting file name */
	$filename = $_FILES['file']['name'];
	$size= $_FILES['file']['size'];

	/* Location */
	$location = "upload/".$filename;
	$imageFileType = pathinfo($location,PATHINFO_EXTENSION);
	$imageFileType = strtolower($imageFileType);
	//alert($('label').html());
	
	/* Valid extensions */
	$valid_extensions = array("jpg","jpeg","png");

	$response = 0;
	/* Check file extension */
	if(in_array(strtolower($imageFileType), $valid_extensions) && ($size <= 500000)) {
	   	/* Upload file */
	   	if(move_uploaded_file($_FILES['file']['tmp_name'],$location)){
	     	$response = $location;
	   	}
	}
	//isset($_POST['msg']))="Success";
	
	//$msg="Success";
	echo $response;
	alert $response;
	exit;
}

echo 0;
