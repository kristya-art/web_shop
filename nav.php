<nav class="column col-1">
<style>
    ul{margin:0px; padding:0px;list-style:none;margin-top:20px}
    ul li{margin:0px; padding:0px; display:inline;}
    ul li a {background: hotpink;margin:0px; padding:5px; text-decoration:none; margin-left:6px;}
    ul li a:hover{background: #e5e5e5;color:#fff}

</style>
<?php
$items=array("gifts for woman","gift for men","gift for child", "special gift");
echo '<ul>';
foreach($items as $key=>$value){
    echo '<li><a href="'.$value.'.php">'.$value.'</a></li>';
}
echo '</ul>';

?>
<!--    <nav class="column col-1">-->
<!--        <a href="example.html">Link 1</a>-->
<!--        <a href="example.html">Link 2</a>-->
<!--        <a href="example.html">Link 3</a>-->
<!--        <a href="example.html">Link 4</a>-->
<!--    </nav>-->
</nav>