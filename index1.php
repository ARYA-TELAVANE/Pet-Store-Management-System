<?php
    
    if(isset($_POST['sendmail'])){
        $F_name=$_POST['fname'];
	   $L_name=$_POST['lname'];
	   $email=$_POST['email'];
	   $message=$_POST['message'];
	   $to= $email;
	   $admin= "pet.store.allinone@gmail.com";
	   $subject="Enquiry  ";
	   $admin_message = "Enquiry Description : ".$message;
	   $body = "";
	   $body .= "From : ".$F_name." ".$L_name."\r\n";
	   $body .= "Email : ".$email."\r\n";
	   $body .= $admin_message."\r\n";
	   mail($admin,$subject,$body );
       echo "Mail send successfully";
    }
?>