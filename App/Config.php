<?php


class Config {

    private $settings ;
    private static $_instance;
    private $id;
    public function __construct(){
        $this->settings = require('../Config/config.php');
        $this->id =  uniqid();
        
    }

    public static function getInstance(){
        if(is_null(self::$_instance)){
            self::$_instance = new Config();
        }
        return self::$_instance;
    }
    public function get($key){
        $t = $this->settings[$key];
        if(!isset($this->settings[$key])){
            return null;
        }
        return $this->settings[$key];
    }

}

