<?php


namespace MVC\core ;


class Session
{

    public static function Start()
    {
         @session_start();
    }


    public static function Set_Session_of($key,$value)
    {
        $_SESSION[$key] = $value;
    }

    public static function Get_Session_of($key)
    {
        if(isset($_SESSION[$key]))
        return $_SESSION[$key];

    }

    public static function Stop()
    {
        session_destroy();
    }
}


?>