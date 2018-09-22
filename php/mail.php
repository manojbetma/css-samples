<?php
/*php mail function */
function php_mail($to_email,$to_name="",$from_email,$from_name="",$subject,$body)
{
	$headers = "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
	$headers .= 'From: '.$from_name.' <'.$from_email.'>' . "\r\n";
    $to = $to_name.' <'.$to_email.'>';
	mail($to,$subject,$body,$headers);
}
?>