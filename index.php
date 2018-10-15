<!DOCTYPE html>
<html lang="de-CH">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="assets/css/responsive_layout.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="assets/css/top-right-nav.css"/>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Layout Example</title>
    <?php
    include("top-right-nav.php");
    ?>

</head>
<body>
<header class="row"><h1>This is the header</h1></header>
<div class="row">
    <?php
    include("nav.php")
    ?>
<!--    <nav class="column col-1">-->
<!--        <a href="example.html">Link 1</a>-->
<!--        <a href="example.html">Link 2</a>-->
<!--        <a href="example.html">Link 3</a>-->
<!--        <a href="example.html">Link 4</a>-->
<!--    </nav>-->

<!--    <section class="column col-3">-->
<!--        <h2>3-Columns Layout with Header and Footer</h2>-->
<!--        <p>Eeuismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exercitation ulliam corper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>-->
<!--        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh.</p>-->
<!--        <p>Duis autem veleum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel willum lunombro dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim.</p>-->
<!--    </section>-->
    <?php

    include("section.php")
    ?>
<!--    <aside class="column col-1">-->
<!--        <h2>Info</h2>-->
<!--        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exercitation ulliam corper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>-->
<!--    </aside>-->
    <?php
    include("aside.php")
    ?>
</div>
<?php
include("footer.php")
?>
<!--<footer class="row">This is the footer</footer>-->
</body>
</html>