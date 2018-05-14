<?php 
namespace App\Controllers;

use App\App;

class Auth{
    public $Sess;

    public function login($email,$pass){
        if(!isset($this->Sess)){
            $statement = "SELECT * from users where email = '$email' and password = '".sha1($pass)."'";
            $us = App::getDatabase()->query($statement,__CLASS__,true);
            
            if($us){
                $this->Sess = new Session();
                $this->Sess->write('User',$us);

                return true;
            }
            
            return false;
        }
        
    }

    public static function disconnect(){
        unset($_SESSION['User']);
        session_destroy();
    }


}
