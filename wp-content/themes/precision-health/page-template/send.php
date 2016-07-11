<?php
include('../../../../wp-config.php');

$name=$_POST['name1'];
$email=$_POST['email1'];
$phone=$_POST['phone1'];
$age=$_POST['age1'];
$msg=$_POST['msg1'];
$mrg=$_POST['mrg1'];
$aftn=$_POST['aftn1'];
$eve=$_POST['eve1'];

$Message = "Hello admin,\n\nHere is Appointment request detail of patient\n\nName :" . $name ."\n Emial :" . $email."\n Phone No :" . $phone."\n Age :" . $age."\n Message :" . $msg."\n Morning :" . $mrg."\n Afternoon :" . $aftn."\n Evening :" . $eve;
										
$headers .= 'From: info@precisionhealth.com';
$subject = 'New Appointment Detail';
$to=$email;



if(($name!="")&&($email!="")&&($phone!="")&&($age!="")&&($msg!="")&&($mrg!="")&&($aftn!="")&&($eve!=""))
{
	mail($to, $subject, $Message, $headers);
}

?>