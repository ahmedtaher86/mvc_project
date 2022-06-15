<?php
// da file mohem gedan w 5ateer mn el files el mohema gedan 
// da yo3tabar el alb bta3 el mshroo3 da ely byfahemo b2a en awl url da el controller tany 7aga da el method 
// da ely by3ml kol 7aga 


namespace MVC\core;

class app 
{

private $controller  ; 
private $method  ; 
private $parameters ; 


public function __construct () 
{
    $this-> url();  
    $this-> render () ;


}


private function url() 
{

    if (!empty($_SERVER['QUERY_STRING']))
    { 
        $url = explode("/", $_SERVER['QUERY_STRING'])  ; 

        //this controller

        if (isset($url[0]))
        
        {
            $this->controller = $url[0]."controller" ;
        }
        else 
        {
            $this->controller = "homecontroller" ;
        }


       //this method 
        if (isset($url[1])) 
        {
            $this->method = $url[1] ;
        }
        else 
        {
            $this->method = "index" ;
        }



        //this parameters 
     // array values 3shan y5leelak el array tbda2 mn index 0 w index 1 mn tany 
        unset($url[0],$url[1]); 
        

  
        $this->parameters = array_values($url) ;
        // array values 3shan y5leelak el array tbda2 mn index 0 w index 1 mn tany
        
        





    }
  
    else 
    {
        $this->controller = "homecontroller" ;
        $this->method ="index";
        $this->parameters = [] ;

    }
}



// de function b trander el asma2 w troo7 tenady 3ala class 72ee2y men 5elalha 
private function render() 
{
    $controller = "MVC\controllers\\".$this->controller ; 
if (class_exists($controller))
    {

    //l2eto mwgood a3ml mno object  ....

    $controller = new $controller ;  
        
    
    echo "class exists " ;

    if (method_exists($controller,$this->method))
     
    {

        call_user_func_array([$controller,$this->method],$this->parameters);

    }

    else 
    {
        echo "mthod not exist";

    }
 
    }
else 
    {
    echo "class not exist" ; 
    }






}


} 







?>