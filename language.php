
<language class="column col-3a">

    <?php
    $items=array("en", "ge", "ру", "fr", "it");
    echo '<ul>';
    foreach($items as $key=>$value){
        echo '<li><a href="'.$value.'.php">'.$value.'</a></li>';
    }
    echo '</ul>'
    ?>

</language>