<?php


namespace MVC\core;

// leeh ya a7md enta 3mlt class controller ???    3shan a7md taher ektashaf en hwa ay controller hyt3ml lazm hynady 3la view w y3rdo 
// fa lazm class controller 3am feeh function b tnady 3la view  



class controller  
{

    public function view ($path , $param) 
    {

        extract($param);

        require_once(VIEWS.$path.".php");  



    }   

   
  



}


?>