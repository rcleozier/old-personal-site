<?php

$ref = $_GET['r'];

if ($ref == 'fb'){

$to      = 'rcleozier@gmail.com';
$subject = 'Website Viewed Through FB';
$message = 'Someone viewed the website';
$headers = 'From: RobCleozier.com';

mail($to, $subject, $message, $headers);

}

else
{

$to      = 'rcleozier@gmail.com';
$subject = 'Website Viewed';
$message = 'Someone viewed the website';
$headers = 'From: RobCleozier.com';

mail($to, $subject, $message, $headers);

}
?>
<html>
<head>
<title>RobCleozier.Com |</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
<body bgcolor="#FFFFFF" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<!-- ImageReady Slices (Index.psd) -->
<img src="images/Index.gif" width="1000" height="1200" alt="">
<!-- End ImageReady Slices -->
</body>
</html>