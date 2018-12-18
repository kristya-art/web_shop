<?php
class Type{
    private $typeID;
    private $typeName;

    public function getId() {
        return $this->typeID;
    }

    public function getName() {
        return $this->typeName;
    }
    public function __toString()
    {
        return sprintf("%d, %s", $this->typeID, $this->typeName);
    }

    static public function getTypes($orderBy = "typeID"){
        $orderByStr = '';
        if(in_array($orderBy,['typeID', 'typeName'])){
            $orderByStr = "ORDER BY $orderBy";
        }
        $types=array();
        $res = DB::doQuery("SELECT * FROM type$orderByStr");
        if($res){
            while($type = $res->fetch_object(get_class())){
                $types[] = $type;
            }
        }
        return $types;
    }
    static public function getTypeById($id) {
        $id = (int) $id;
        $res = DB::doQuery("SELECT * FROM type WHERE typeID = $id ");
        if($res) {
            if($type = $res->fetch_object(get_class())){
                return $type;
            }
        }
        return null;
    }

}