<?php

class Logo {
    //datat storage file
    const DATA_FILE = "data/logos.xml";


    //holds the data of a logo
    private $data;

    /**
     * creates a new instance based on the passed data.
     *
     * @param XML entity represent a logo
     */
    private function __construct($data)
    {
        $this->data= $data;
    }

    /**
     * retrieves all logos.
     *
     * @return an array of logos
     */
    public static function getLogos() {
        $xml = simplexml_load_file(self::DATA_FILE);
        $logos = array();
        foreach($xml->logo as $logo){
            $logos[] = new Logo($logo);
        }
        return $logos;
    }

    /**
     * gets the image name of the logo. The images are stored in the folder
     * assets/images
     *
     * @return array of the image names
     */
    public function getImages() {
        $images = [];
        foreach ($this->data->images->image as $image) {
            $images[] = $image->scr;
        }
        return $images;
    }


}