<?php

$db_user ="root";
$db_pass ="";
$db_name ="form";
$db = new PDO('mysql:host=localhost;dbname='.$db_name.';chaarset=utf8',$db_user,$db_pass);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	include('index1.php');

if(isset($_POST['sendmail'])){
    $fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$email = $_POST['email'];
	$message = $_POST['message'];
	
	$query = "insert into contact(fname,lname,email,message) values(?,?,?,?)";
    
    
    
	$stmtinsert = $db->prepare($query);
	$result = $stmtinsert->execute([$fname,$lname,$email,$message]);
	
	if($result){
		echo "/successfully uploaded";
		header('Location:index.php');
	}else{
		echo "There was an error while saving the data";
	}
}

?>