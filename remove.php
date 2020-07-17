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
else
{
	header('location:login.php');
}
$sql="DELETE addproperty,addimage FROM addproperty
        INNER JOIN
   addimage ON addproperty.id = addimage.pid
WHERE
    addproperty.userid='$id'";
//$sql="DELETE FROM addproperty,addimage where addproperty.id=addimage.pid AND addproperty.userid='$id'"; 
if ($mysqli->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $mysqli->error;
}

$mysqli->close();
?>
