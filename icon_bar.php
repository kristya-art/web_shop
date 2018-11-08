
<?php
require_once 'autoloader.php';

$logos = Logo::getLogos();

?>

<div class="icon-bar" id="icon-bar">
    <a class="active" href="#"><i class="fa fa-home"></i></a>
    <a href="#"><i class="fa fa-search"></i></a>
    <a href="#"><i class="fa fa-envelope"></i></a>
    <a href="#"><i class="fa fa-globe"></i></a>
    <a href="#"><i class="fa fa-shopping-cart"></i></a>

    <?php foreach ($logos as $logo) :?>
            <a class="logo" id="logo">
                 <img src="assets/images/<?php echo $logo->getImages()[1];?>"
            </div>
        <?php endforeach;?></a>
</div>


