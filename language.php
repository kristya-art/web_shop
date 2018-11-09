
<language class="row col-3" id="lingua">

    <?php
    $items=array("ge", "en", "fr", "it", "ru");
    echo '<ul>';
    foreach($items as $key=>$value){
        echo '<li><a href="'.$value.'.php">'.$value.'</a></li>';
    }
    echo '</ul>'
    ?>

</language>