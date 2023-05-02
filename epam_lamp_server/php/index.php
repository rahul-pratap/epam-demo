                                                                                              
<?php
$host = 'db';
$user = 'rahul';
$password = 'rahulpra';
$db = 'test_db';

$conn = new mysqli($host,$user,$password,$db);
if($conn->connect_error){
   echo 'connection faild' . $conn->connect_error;
}
echo 'sucessfully connected to MYSQL';
?>

