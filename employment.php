<?php
if(isset($_POST['employment_email'])){
		$mailTo = "jobs@bardotiowacity.com";
		$subject = "Application Submitted From Bardot Website";
		$body = "A new application has been submitted from the Bardot website
<br><br>
FROM: ".$_POST['employment_email']."<br>
NAME: ".$_POST['employment_name']."<br>
PHONE: ".$_POST['employment_phone']."<br>
HOURS: ".$_POST['employment_hours']."<br>
AVAILABILITY: ";

		$availability = $_POST['employment_availability'];
		if(empty($availability)) {
			$body .= "User did not select any days as available";
		} else {
			$count = count($availability);
			for($i=0; $i < $count; $i++) {
				if($i > 0) $body .= ", ";
				$body .= $availability[$i];
			}
		}
					
	
		$headers = "To: Elixir <".$mailTo.">\r\n";
		$headers .= "From: ".$_POST['author']." <".$_POST['employment_email'].">\r\n";
		$headers .= "Content-Type: text/html";
		//envio destinatario
		$mail_success =  mail($mailTo, utf8_decode($subject), utf8_decode($body), $headers);
}
?> 