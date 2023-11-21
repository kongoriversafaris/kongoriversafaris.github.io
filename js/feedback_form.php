<?php

#Receive user input
$message-name = $_POST['message-name'];
$message = $_POST['message'];
$message-email = $_POST['message-email'];

#Filter user input
function filter_email_header($form_field) {  
return preg_replace('/[nr|!/<>^$%*&]+/','',$form_field);
}

$message-email  = filter_email_header($email_address);

#Send email
$headers = "From: $message-email";
$sent = mail('abduljumamahrez@gmail.com', 'Feedback Form Submission', $feedback, $headers);

#Thank user or notify them of a problem
if ($sent) {

?><html>
<head>
<title>Thank You</title>
</head>
<body>
<h1>Thank You</h1>
<p>Thank you for your feedback.</p>
</body>
</html>
<?php

} else {

?><html>
<head>
<title>Something went wrong</title>
</head>
<body>
<h1>Something went wrong</h1>
<p>We could not send your feedback. Please try again.</p>
</body>
</html>
<?php
}
?>
