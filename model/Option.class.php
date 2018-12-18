<?php

class Option{
    private $optionvalueID;
    private $optionID;
    private $optionvalueName;
    private $additional;

    public function getId() {
        return $this->optionvalueID;
    }

    public function getName() {
        return $this->optionID;
    }

    public function getAdditional() {
        return $this->additional;
    }

    public function __toString()
    {
        return sprintf("%d, %s, %d",$this->optionvalueName, $this->additional );
    }

    static public function getOptionByType($typeID,$orderBy="optionvalueID") {
        $orderByStr = '';
        if(in_array($orderBy,['optionvalueID', 'optionvalueName', 'optionID','additional{}'])){
            $orderByStr = " ORDER BY $orderBy";
        }
        $options = array();
        $res = DB::doQuery("SELECT * FROM optionvalue natural join WHERE typeID = $typeID $orderByStr");
        if($res) {
            while ($optionvalue = $res->fetch_object(get_class())) {
                $options[] = $optionvalue;
            }
        }
        return $options;
    }
    static public function getOptionById($id) {
        $id = (int)$id;
        $res = DB::doQuery("SELECT * FROM optionvalue WHERE optionvalueID = $id");
        if($res) {
            if($option = $res->fetch_object(get_class())){
                return $option;
            }
        }
        return null;
    }

}