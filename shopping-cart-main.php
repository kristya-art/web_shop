
<?php
require_once 'autoloader.php';

$price = Product::getProducts();


    $cart = new Cart();
    $cart->addItem(1, 1,$price);
    $cart->addItem(25,1,$price);
//    $cart->addItem(78970,1);
//    $cart->removeItem(78970,1);
//    $cart->removeItem(8980, 1);
    ?>
<!DOCTYPE html>
<html>
<head><!------></head>
<body>
<h4>Your Shopping Cart</h4>
<?php $cart->render(); ?>
<?php
//// Render cart explicitly to enhence it
//if ($cart->isEmpty()) {
//    echo "<div class=\"cart empty\">[Empty Cart]</div>";
//} else {
//    echo "<div class=\"cartn\"><table>";
//echo "<tr><th>Article</th><th>#</th><th>Price</th><th>Total</th></tr>";
//$total = 0;
//foreach ($cart->getItems() as $item => $num) {
//// Get product information
//    $product = Product::getProducts();
//    if ($product == null) continue;
//    $price = $product['price'];
//    $total += $price * $num;
//    echo "<tr><td>{$product['name']}</td><td>$num</td><td>{$price
//}</td><td>".($price*$num)."</td></tr>";
//}
//    echo "<tr><td rowspan=\"3\"></td><td>$total</td></tr>";
//echo "</table></div>";
//}
//?>
<!--<h4>Add an Item:</h4>-->
<!--<form action="cart2.php" method="post">-->
<!--    <label>Article-Id</label><input name="item[id]"><br>-->
<!--    <label>Number</label><input name="item[num]" value="1"><br>-->
<!--    <input type="submit" value="Add">-->
<!--</form>-->

</body>
</html>


