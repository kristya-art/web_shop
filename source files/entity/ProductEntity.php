<?php

class ProductEntity
{
    public $id;
    public $name;
    public $price;
    public $description;
    public $typeID;
    public $image;
    public $quantity;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param mixed $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return mixed
     */
    public function getTypeID()
    {
        return $this->typeID;
    }

    /**
     * @param mixed $typeID
     */
    public function setTypeID($typeID)
    {
        $this->typeID = $typeID;
    }

    /**
     * @return mixed
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @param mixed $image
     */
    public function setImage($image)
    {
        $this->image = $image;
    }

    /**
     * @return mixed
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * @param mixed $quantity
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
    }



    /**
     * ProductEntity constructor.
     * @param $id
     * @param $name
     * @param $price
     * @param $description
     * @param $typeID
     * @param $image
     * @param $quantity
     */
    public function __construct($id, $name, $price, $description, $typeID, $image, $quantity)
    {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
        $this->description = $description;
        $this->typeID = $typeID;
        $this->image = $image;
        $this->quantity = $quantity;
    }

    public function __toString()
    {
        return sprintf("%d,%s,%d", $this->id, $this->name,$this->price, $this->description,
            $this->typeID,$this->image,$this->quantity);

    }

    static public function getProducts($orderBy="typeID"){
        $orderByStr= '';
        if(in_array($orderBy,['id', 'name', 'price','description', 'typeID','image','quantity'])){
            $orderByStr = "ORDER BY $orderBy";
        }
        $products = array();
        $result = DB::doQuery("SELECT * FROM product $orderByStr");
        if ($result) {
            while($product = $result->fetch_object(get_class)())
            {
               $products[] = $product;
            }
        }
        return  $products;
    }


}