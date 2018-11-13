
<div class="topnav"  id="myTopnav">

<?php
$menuitems = array("Home", "News", "Contact", "Dropdown");
foreach ($menuitems as $key=>$value ){
    echo '<a href="' .$value.'php">'.$value.'</a>';
}
?>

    <div class="dropdown">
        <button class="dropbtn">Dropdown
            <i class="fa fa-caret-down"></i></button>
          <div class="dropdown-content">

    <?php
    $dropdownitems = array("Link1", "Link2", "Link3", "Link4");
    foreach ($dropdownitems as $key=>$value ){
    echo '<a href="'.$value.'php">' .$value.'</a>';}
    ?>
        </div>
    </div>



<a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
</div>
<script>
    function myFunction() {
        var x = document.getElementById("myTopnav");
        // var y = document.getElementById("icon-bar");
        // if ((x.className === "topnav")&&(y.className === "icon-bar")) {
        if(x.className == "topnav"){
            x.className += " responsive";
            // y.className += "responsive";
        } else {
            // (( x.className = "topnav")&& (y.className = "icon-bar")); //when click again the both menu's come inside of icon
            (x.className="topnav");
        }
    }
</script>
  
</html>