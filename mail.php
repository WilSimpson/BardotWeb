<?php
if(isset($_POST['email'])){
		$mailTo = "bardotiowa@gmail.com";
		$subject = "Bardot Website Email";
		$body = "New message from Bardot Website
<br><br>
FROM: ".$_POST['email']."<br>
NAME: ".$_POST['name']."<br>
SUBJECT: ".$_POST['subject']."<br>
MESSAGE: ".$_POST['message']."<br>";

if(isset($_POST['name']) && isset($_POST['subject']) && isset($_POST['message'])){		
		$headers = "To: Elixir <".$mailTo.">\r\n";
		$headers .= "From: ".$_POST['name']." <".$_POST['email'].">\r\n";
		$headers .= "Content-Type: text/html";
		//envio destinatario
		$mail_success =  mail($mailTo, utf8_decode($subject), utf8_decode($body), $headers);	
		
		$mail_success2 =  mail("wil@bardotiowacity.com", utf8_decode($subject), utf8_decode($body), $headers);	
}		

}
?>  