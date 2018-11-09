
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
    echo '<a href="'.$value.'php">' .$value.'</a>';
}


?>
</div>


</div>

<!--<div class="topnav" id="myTopnav">-->
<!--    <a href="home" class="active">Home</a>-->
<!--    <a href="#news">News</a>-->

<!--    <a href="#contact">Contact</a>-->
<!--    <div class="dropdown">-->
<!--        <button class="dropbtn">Dropdown-->
<!--           <i class="fa fa-caret-down"></i>-->
<!--        </button>-->
<!--        <div class="dropdown-content">-->
<!--            <a href="#">Link 1</a>-->
<!--            <a href="#">Link 2</a>-->
<!--            <a href="#">Link 3</a>-->
<!--        </div>-->
<!--    </div>-->
<!--    <a href="#about">About</a>-->

<!--</div>-->

<!--<div style="padding-left:16px">-->
<!--    <h2>Responsive Topnav with Dropdown</h2>-->
<!--    <p>Resize the browser window to see how it works.</p>-->
<!--    <p>Hover over the dropdown button to open the dropdown menu.</p>-->
<!--</div>-->

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