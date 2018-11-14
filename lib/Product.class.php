<?php

class Product {

    const DATA_FILE = "data/products.xml";

    //holds the data of a product
    private $data;

   private function __construct($data)
   {
      $this->data=$data;
   }

   public static function getProducts()
   {
       $xml = simplexml_load_file(self::DATA_FILE);
       $products = array();
       foreach ($xml->product as $product) {
           $products[] = new Product($product);
       }
       return $products;
   }

   public static function getProductById($id){
       
   }
       public function getPrice() {
           $products = [];
           foreach ($this->data->products->price as $price){
               $products[] = $price->scr;
           }
           return $price;
       }
}