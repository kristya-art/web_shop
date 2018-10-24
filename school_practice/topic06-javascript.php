<?php
//lupe
//filtering of colors or smth else
// better to declare variables (var x; var y = 12;)
//javascript is untyped
?>
<!DOCTYPE html>
<html>
<head>
    <script>
        function toggle(id) {
            var el= document.getElementById(id);
            el.style.display = el.style.display == "none" ? "block" : "none";
        }
        function init() {
            var element = document.getElementsByClassName("product");
            for(var i = 0; i< elements.length; i++) {
                elements[i].style.display = "none";
            }
        }
    </script>
</head>
<body onload="init()">
<h3>Product List</h3>
<h5>Product 1(<a href="javascript:toggle('p1')">more info</a>)</h5>
<div id="p1" class="product">Description of Product 1</div>
<h5 onclick="toggle('p2')">Product 2 (more info)</h5>
<div id="p2" class="product">Description of Product 2</div>
</body>
</html>
