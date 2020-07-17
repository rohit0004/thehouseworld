<?php
$mysqli = new mysqli("localhost","root","","house");
	if($mysqli->connect_error)
		die("Database connection failed ".$mysql->connect_error);
?>
  <?php
session_start();
if($_SESSION['uid'])
{
$id= $_SESSION['uid'];
}
else{
	header('location:login.php');
}
?>
  <?php
    if(isset($_POST['but_upload'])){
      // $maxsize = 5242880; // 5MB
       $maxsize = 2147483648;
       $name = $_FILES['file']['name'];
       $target_dir = "videos/";
       $target_file = $target_dir . $_FILES["file"]["name"];

       // Select file type
       $videoFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

       // Valid file extensions
       $extensions_arr = array("mp4","avi","3gp","mov","mpeg","webm","flv","mkv");

       // Check extension
       if( in_array($videoFileType,$extensions_arr) ){
 
          // Check file size
          if(($_FILES['file']['size'] >= $maxsize) || ($_FILES["file"]["size"] == 0)) {
            echo "File too large. File must be less than 5MB.";
          }else{
            // Upload
            if(move_uploaded_file($_FILES['file']['tmp_name'],$target_file)){
              // Insert record
      $sql = "INSERT INTO addproperty(`firstname`, `lastname`, `phone`,`motive`,`propertytype`,`pincode`, `address`, `locality`, `place`, `city`, `state`,`floo`,
	  `furnituretype`, `tenanttype`, `areas`, `monthly`, `security`, `price`, `maintenance`,`about`,`location`,`userid`)
	 VALUES('". $_POST['firstN']."',' ".$_POST['lastN']."','".$_POST['phone']."','".$_POST['motive']."','".$_POST['proptype']."','".$_POST['pincode']."',
	 '".$_POST['address']."','".$_POST['locality']."','".$_POST['place']."','".$_POST['city']."','". $_POST['state']."','".$_POST['floor']."',
	 '".$_POST['furniture']."','".$_POST['tenant']."','".$_POST['area']."','".$_POST['monthly']."','".$_POST['security']."','".$_POST['price']."','".$_POST['maintenance']."','".$_POST['about']."','".$target_file."','".$id."')";

			}
			
		  }
	   
     if($mysqli->query($sql) === true){
       $id = $mysqli->insert_id;
       $cquery="";
			//print_r($_FILES);
			$uploaded_images = array();
				foreach($_FILES['upload_images']['name'] as $key=>$val){
				$upload_dir = "uploads/";
				$upload_file = $upload_dir.$_FILES['upload_images']['name'][$key];
				$filename = $_FILES['upload_images']['name'][$key];
				if(move_uploaded_file($_FILES['upload_images']['tmp_name'][$key],$upload_file)){
				$uploaded_images[] = $upload_file;
				} 
				}
				
				$cquery .= "INSERT INTO addimage(pid,file_name, upload_time)VALUES('".$id."','".$filename."', '".time()."')";
				if($mysqli->multi_query($cquery))
				{
				echo "Record Saved";
			     header('location:index.php');
				}
			else{
			echo  "ERROR: Could not able to execute $sql. " . $mysqli->error;
			}	
} else{
    echo "ERROR: Could not able to execute $sql. " . $mysqli->error;
     }
	   }
	 else{
          echo "Invalid video file extension.";
       }

       }
    
     ?>