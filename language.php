

<div class="lingua" id="lingua">
    <div class="ladropdown">
        <button class="ladropbtn">de
            <i class="fa fa-caret-down"></i></button>
        <div class="ladropdown-content">

            <?php
            $dropdownitems = array("en", "fr");
            foreach ($dropdownitems as $key=>$value ){
                echo '<a href="'.$value.'php">' .$value.'</a>';}
            ?>
        </div>
    </div>
</div>