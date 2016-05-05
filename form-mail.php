<?php

$EmailFrom = "lindseymorganevents";
$EmailTo = "owner@lindseymorganevents.com";
$Subject = "Web Inquiry";
$Name = Trim(stripslashes($_POST['Name']));  
$Email = Trim(stripslashes($_POST['Email'])); 
$Date = Trim(stripslashes($_POST['Date'])); 
$Budget = Trim(stripslashes($_POST['Budget'])); 
$Message = Trim(stripslashes($_POST['Message'])); 

// validation
$validationOK=true;
if (!$validationOK) {
  print "<meta http-equiv=\"refresh\" content=\"0;URL=error.html\">";
  exit;
}

// prepare email body text
$Body = "";
$Body .= "Name: ";
$Body .= $Name;
$Body .= "\n";
$Body .= "Email: ";
$Body .= $Email;
$Body .= "\n";
$Body .= "Date: ";
$Body .= $Date;
$Body .= "\n";
$Body .= "Budget: ";
$Body .= $Budget;
$Body .= "\n";
$Body .= "Message: ";
$Body .= $Message;
$Body .= "\n";

// send email 
$success = mail($EmailTo, $Subject, $Body, "From: <$EmailFrom>");

// redirect to success page 
if ($success){
  print "<meta http-equiv=\"refresh\" content=\"0;URL=contactthanks.php\">";
}
else{
  print "<meta http-equiv=\"refresh\" content=\"0;URL=error.html\">";
}
?>