<?php
if(isset($_POST['email'])){
		$mailTo = "bardotiowa@gmail.com";
		$subject = "Bardot Website Email";
		$body = "New message from Bardot Website
<br><br>
FROM: ".$_POST['email']."<br>
NAME: ".$_POST['name']."<br>
COMMENTS: ".$_POST['message']."<br>";	
		$headers = "To: Elixir <".$mailTo.">\r\n";
		$headers .= "From: ".$_POST['author']." <".$_POST['email'].">\r\n";
		$headers .= "Content-Type: text/html";
		//envio destinatario
		$mail_success =  mail($mailTo, utf8_decode($subject), utf8_decode($body), $headers);		
}
?>  