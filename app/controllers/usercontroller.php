<?php
// ana 3ayz el controller da yb2a m2fool w m7dsh y2dar yfta7o ela b session  
// y3ny kol el functions ely gwah m7dsh y2dar y accessha ela ama ykoon 3aml login 





namespace MVC\controllers ; 
 
use MVC\core\controller; 



class usercontroller extends controller
 {
  
    private $user_data ; 

  


    public function index()
    {
        echo $this->user_data ;     
    }




}










?>