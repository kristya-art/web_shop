<?php

class Product
{
    private $id;
    private $name;
    private $price;
    private $description;
    private $typeID;
    private $image;
    private $quantity;

    public function getId()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function getTypeID()
    {
        return $this->typeID;
    }

    public function getImage()
    {
        return $this->image;
    }

    public function getQuantity()
    {
        return $this->quantity;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function setPrice($price)
    {
        $this->price = $price;
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }

    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
    }

    public function setTypeId($typeID)
    {
        $this->typeID = $typeID;
    }

    public function setImage($image)
    {
        $this->image = $image;
    }

    public function __toString()
    {
        return sprintf("%d,%s,%d", $this->id, $this->price, $this->description);
    }

    public function setType($typeID)
    {
        $this->typeID = $typeID;
    }

    static public function getProducts($orderBy = "typeID")
    {
        $orderByStr = '';
        if (in_array($orderBy, ['id', 'name', 'price', 'description', 'image', 'typeID'])) {
            $orderByStr = " ORDER BY $orderBy";
        }
        $products = array();
        $res = DB::doQuery("SELECT * FROM product$orderByStr");
        if ($res) {
            while ($product = $res->fetch_object(get_class())) {
                $products[] = $product;
            }
        }
        return $products;

    }

    static public function getProductById($id)
    {
        $id = (int)$id;
        $res = DB::doQuery("SELECT*FROM product WHERE id=$id");
        if ($res) {
            if ($product = $res->fetch_object(get_class())) {
                return $product;
            }
        }
        return null;
    }

    static public function delete($id)
    {
        $id = (int)$id;
        $res = DB::doQuery("DELETE FROM product WHERE id = $id");
        return $res != null;
    }

    static public function insert($values)
    {
        if ($stmt = DB::getInstance()->prepare("INSERT INTO product (name, price, description, typeID, image) VALUES(?,?,?,?,?)")) {
            if ($stmt->bind_param('sdsis', $values['name'], $values['price'], $values['description'],
                $values['typeID'], $values['image'])) {
                if ($stmt->execute()) {
                    return true;
                }
            }
        }
        return false;
    }

    public function update($values)
    {
        $db = DB::getInstance();
        $this->name = $db->escape_string($values['description']);
        $this->description = $db->escape_string($values['description']);
        $this->price = (float)$values['price'];
        $this->categoryID = (int)$values['typeID'];
        $this->imgUrl = $db->escape_string($values['image']);
    }

    public function save()
    {
        $sql = sprintf("UPDATE product SET name='%s', price=%d, description='%s',
            typeID=%d, image='%s' WHERE id = %d;", $this->name, $this->price, $this->description,
            $this->typeID, $this->image, $this->id);
        $res = DB::doQuery($sql);
        return $res != null;
    }


}