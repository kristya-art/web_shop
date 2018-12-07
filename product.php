<?php
require("autoloader.php");
require("db-connection/DB.class.php");

require_once 'autoloader.php';


$products = Product::getProducts();
foreach ($products as $product) {
    echo "<form class='item-upper-wrapper' action='' method='post'>";
    echo "<div class='item-upper-wrapper' onclick=\"javascript:initPrice(".$product->getPrice().")\">";
    echo "<img class='item-img' src=\"".$product->getImage()."\" />";
    echo "<div class='item-description-wrapper'>";

    echo "<p class='item-title'>".($product->getName())."</p>";
    echo "<p class='item-description'>".($product->getDescription())."</p></div>";
    echo "<div class='item-btn-wrapper'><a class='button-price'>"
        . number_format($product->getPrice(), 2) . " CHF | 
                        <i class='fa fa-angle-down' aria-hidden='true'></i></a></div>";
    echo "</div><div class='item-options-wrapper'></div>";
    echo "<input type='hidden' name='product[id]' value=".$product->getId()." />";
    echo "</form>";

}