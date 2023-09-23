<?php
    require_once "ClassAutoLoad.php";

$details["sendToEmail"] = "tatiana.omolleh@strathmore.edu";
$details["sendToName"] = "TO";
$details["emailSubjectLine"] = "OOP Test mail";
$details["emailMessage"] = "Hi there this is another tests";

$OBJ_SendMail->SendeMail($details, $conf);

header("Location: ./");
exit();