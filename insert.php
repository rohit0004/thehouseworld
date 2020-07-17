<?php
	$mysqli = new mysqli("localhost","root","","house");
	if($mysqli->connect_error)
		die("Database connection failed ".$mysql->connect_error);
	
	if(isset($_POST['submit']))
 {	 
	 $sql ="INSERT INTO `property`(`fullname`, `lastname`) VALUES ('". $_POST['firstN']."',' ".$_POST['lastN']."')";	
	 
	if($mysqli->query($sql) === true){
       $id = $mysqli->insert_id;
			$cquery="";
			print_r($_FILES);
			$uploaded_images = array();
			print_r($_FILES);
				foreach($_FILES['upload_images']['name'] as $key=>$val){
				$upload_dir = "uploads/";
				$upload_file = $upload_dir.$_FILES['upload_images']['name'][$key];
				$filename = $_FILES['upload_images']['name'][$key];
				if(move_uploaded_file($_FILES['upload_images']['tmp_name'][$key],$upload_file)){
				$uploaded_images[] = $upload_file;
				} 
				}
				
				$cquery .= "INSERT INTO image(pid,file_name, upload_time)VALUES(".$id.",'".$filename."', '".time()."')";
				if($mysqli->multi_query($cquery))
				echo "Record Saved";
			else
				echo "Image Details Saved to failed";
				
} else{
    echo "ERROR: Could not able to execute $sql. " . $mysqli->error;
}
 
		$mysqli->close();
	}