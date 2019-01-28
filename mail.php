<?php 

$name = $_POST['name'];
$mail = $_POST['email'];
$mobile = $_POST['mobile'];
$subject = $_POST['subject'];
$msg = $_POST['msg'];

	$to = '$mail';
    $from = "info@umaidea.com";
    $subject = "New Message";
	$subject1 = "Uma Computers Electronic Institute";

    //begin of HTML message
    $message = <<<EOF
	
	<html>
		<body>
			<table>
				<tr>
					<td>Name</td><td>$name</td>
				</tr>
				<tr>
					<td>Email Id</td><td>$mail</td>
				</tr>
				<tr>
					<td>Mobile</td><td>$mobile</td>
				</tr>
				<tr>
					<td>Subject</td><td>$subject</td>
				</tr>
				<tr>
					<td>Message</td><td>$msg</td>
				</tr>
			</table>
			<table>
				<tr>
					<td>This is Send By $mail Please contact him.</td>
				</tr>				
			</table>
		</body>
	</html>

EOF;

 $message1 = <<<EOF
	
	<html>
		<body>
			<table>
				<tr>
					<td>Thank You $name. We will contact you soon</td>
				</tr>
				<tr>
					<td>Thanks Regards</td>
				</tr>
				<tr>
					<td>Uma Computers Electronic Institute</td>
				</tr>
			</table>
			
		</body>
	</html>

EOF;
   //end of message
    $headers  = "From: $from\r\n";
    $headers .= "Content-type: text/html\r\n";

    //options to send to cc+bcc
    //$headers .= "Cc: [email]maa@p-i-s.cXom[/email]";
    //$headers .= "Bcc: [email]email@maaking.cXom[/email]";
    
    // now lets send the email.
    mail($to, $subject, $message, $headers);
	 mail($mail, $subject1, $message1, $headers);
	
header("Location:index.php?s=1");
?>