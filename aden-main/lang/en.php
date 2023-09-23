<?php
require_once "globals/SendMail.php";

$lang["subject_sign_up_verify"] = "Verify Account";
$lang["sign_up_verify"] = nl2br("

Hello {{fullname}},

You requested an account on {{site_name}}.

In order to use this account click <a href = '#'>here</a> to complete the registration process.

Regards,
Systems Admin
{{site_name}}
");
?>
