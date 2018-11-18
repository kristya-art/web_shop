<?php
//class DB extends mysqli{
//
//    const HOST = "localhost";
//    const USER = "www";
//    const PW = "W3!";
//    const DB_NAME = "product";
//
//    static private $instance;
//
//    public function __construct()
//    {
//        parent::__construct(
//            self::HOST, self::USER, self::PW, self::DB_NAME);
//    }
//
//    static public function getInstance(){
//        if( !iself::$instance ){
//            @self::$instance = new DB();
//            if(self::$instance->connect_errno > 0){
//                die("Unable to connect to database[".
//                self::$instance->connect_errno."]");
//            }
//        }
//        return self::$instance;
//    }
//    static public function doQuery($sql) {
//        return self::getInstance()->query($sql);
//    }
//}