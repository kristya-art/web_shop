<?php
require_once 'autoloader.php';

$logos = Logo::getLogos();

?>

<?php foreach ($logos as $logo) :?>
<div class="logo" id="logo">
    <img src="assets/images/<?php echo $logo->getImages()[1] ;?>"WIDTH=60 HEIGHT=60>
<?php include "language.php"?>
    </div>
    <?php endforeach;?>
