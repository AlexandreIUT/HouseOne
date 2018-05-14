<?php



class App {
    private static $db_instance;
    private static $_instance;

    
    public static function getInstance(){
        if(is_null(self::$_instance)){
            self::$_instance = new App();
        }
        return self::$_instance;
    }
    public static function getDatabase(){
        $config = Config::getInstance();
        if(is_null(self::$db_instance)){

            self::$db_instance = new Database(
                $config->get('db_host'),
                $config->get('db_name'),
                $config->get('db_user'),
                $config->get('db_pass'),
                $config->get('db_sgbd'));
        }
        return self::$db_instance;
    }
}