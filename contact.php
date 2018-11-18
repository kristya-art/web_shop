<!DOCTYPE html>
<html lang="de-CH">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="assets/css/responsive_layout.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="assets/css/nav-bar.css"/>
    <link rel="stylesheet" type="text/css" media="screen" href="assets/css/main.css"/>
    <link rel="stylesheet" type="text/css" href="assets/css/contact.css" />

    <title>Contact</title>


</head>
<body>
<?php
include "header.php";
?>
<?php
include "nav-bar.php";
?>
<h1>Contact</h1>



<div class="container">
<form action="contactform.php" method="post">

    <label for="fname">First Name</label>
    <input type="text" id="fname" name="firstname" placeholder="Your name..">

    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="lastname" placeholder="Your last name..">

    <label for="email">E-Mail</label>
    <input type="text" id="email" name="email" placeholder="Your e-mail..">

    <label for="subject">Subject</label>
    <input type="text" id="subject" name="subject" placeholder="Subject..">

    <label for="message">Message</label>
    <textarea id="message" name="message" placeholder="Write something.." style="height:100px"></textarea>

    <input type="submit" value="SEND">

</form>
</div>
<?php
include("footer.php")
?>

</body>
</html>