<?php 

namespace MVC\models;

use MVC\core\model;


class user extends model 
{


    public function users_to_array() 
    {   

       $data =   model::database()->rows("SELECT * FROM users");
       return $data ;  


    }
// test

    public function shoof_email_shoof_password ($email , $password)
    {

        $data = model :: database()->row("SELECT * FROM `users` WHERE `email` = :email  AND `password` = :password" , ['email' => $email ,'password' => $password]);
        return $data ;

    } 

    public function add_user ( $username, $email , $password )
    {

        
        $insert_user = model :: database()->insert('users', ['username' => $username, 'email' => $email , 'password' => $password]);
        
        
        return $insert_user ;

    } 





} 




?>