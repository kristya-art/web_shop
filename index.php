<?php
//include_once 'db-connection/db-connector.php';
require_once 'autoloader.php';


$logos = Logo::getLogos();

?>
<!DOCTYPE html>
<html lang="de-CH">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="assets/css/responsive_layout.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="assets/css/nav-bar.css"/>
    <link rel="stylesheet" type="text/css" media="screen" href="assets/css/main.css"/>


    <title>Shop</title>



</head>
<body>
<?php
include "header.php";
?>
<?php
include "nav-bar.php";
?>


<div class="row">
    <?php
    include("nav.php")
    ?>
    <?php

    include("section.php")
    ?>

    <?php
    include("aside.php")
    ?>
</div>
<?php
include("footer.php")
?>

</body>
</html>