<?php

if(isset($_POST['submit'])){
    $name = $_POST['fname'];
    $lname = $_POST['lname'];
    $mailFrom = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $mailTo="kristina.shiryagina@students.bfh.ch";
    $headers = "From: ".$mailFrom;
    $txt = "You have received an e-mail from".$fname.".\n\n".$message;

    mail($mailTo, $subject, $txt, $headers);
    header("Location: index.php?mailsend");
    header("Location: contactform.php?mailsend");


}