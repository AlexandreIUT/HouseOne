<?php
namespace App\Controllers;

use App\App;
class Session 
{
    public function __construct(){
        if(!isset($_SESSION)){
            session_start();
        }
    }

    public function write($key,$value){
        $_SESSION[$key] = $value;
    }

    public static function read($key = null){
        if($key){
            if(isset($_SESSION['User']->$key)){
                return $_SESSION['User']->$key;
            }else{
                return false;   
            }
            
        }
        else{
            return $_SESSION;
        }
    }
    public static function isLogged(){
        return isset($_SESSION['User']->id_user);
    }

    public static function acces_level($acces_page){
        if(self::isLogged()){
            if(self::read('acces_level')>=$acces_page){
                return true;
            }
        }
        return false;
        
    }
}
