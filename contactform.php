<?php

if(isset($_POST['submit'])){
    $name = $_POST['fname'];
    $lname = $_POST['lname'];
    $mailFrom = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $mailTo="shiriagina@yahoo.com";
    $headers = "From: ".$mailFrom;
    $txt = "You have received an e-mail from".$fname.".\n\n".$message;

    mail($mailTo, $subject, $txt, $headers);
    header("Location: index.php?mailsend");
}
