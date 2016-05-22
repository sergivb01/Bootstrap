<?php
$subject = $_POST['cf_name'];
$field_email = $_POST['cf_email'];
$body_message = $_POST['cf_message'];

$mail_to = 'sergivb01@gmail.com';

$headers = 'From: '.$mail_to."\r\n";
$headers .= 'Reply-To: '.$mail_to."\r\n";
ini_set("SMTP","ssl://smtp.gmail.com");
ini_set("smtp_port","465");
ini_set('sendmail_from', 'sergivb01@gmail.com');
$mail_status = mail($field_email, $subject, $body_message, $headers);
if ($mail_status) { ?>
    <script language="javascript" type="text/javascript">
        //alert('Done');
        history.back();
    </script>
<?php
}
else { ?>
    <script language="javascript" type="text/javascript">
        alert('Error');
        window.location = 'index.html';
    </script>
<?php
}
?>