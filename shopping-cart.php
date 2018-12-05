<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="assets/css/cart.css"/>

</head>
<body>

<div id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <a href="#">Your Order</a>
    <h5> <?php include "shopping-cart-main.php"?></h5>

    <div class="cart-summary-footer">
        <div class="cart-summary-subtotal border-top ">
            <a href="#">Subtotal: </a>
            <div class="amount">
                <div class="money">$0.00</div>
        </div>
        </div>
    </div>
</div>

<div id="main">
    <div class="money">$0.00</div>

        <title>Cart</title>

    </svg>
    <span style="font-size:30px;cursor:pointer" onclick="openNav()"> <img src="assets/images/shopping-bag/shopping-bag.png" height="24"  width="24"></span>
</div>

<script>
    function openNav() {
        document.getElementById("mySidenav").style.width = "250px";
        document.getElementById("main").style.marginLeft = "250px";
    }

    function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
        document.getElementById("main").style.marginLeft= "0";
    }
</script>



</body>
</html>
