<?php



namespace MVC\controllers ;

use MVC\core\controller; 
use MVC\core\helpers; 
use MVC\models\user;
use GUMP ; 
use MVC\core\session ;

 

class homecontroller extends controller
{

// ay controller bkon shayf eno hyst3ml session b7ot fel constructor bta3o session start
/*  7ata os el 7araka de 
*** bos bos el l2ta de   ***** de est5dmna el sessoin b3d ma 3rfna en el user mwgood bel emial w el password dool   
if (!empty($data)) 
{
    
    Session::Set_Session_of('user' , $data);
    header("location:user/home"); 

    
}
// 3shan keda 3mlna session start fel constructor bta3y 

*/




public function __construct () 
{
    Session::Start();


}



public function index()
{
    $USER = new user();
    $data = $USER->users_to_array();
    // $data = $this->database()->rows("SELECT * FROM users");


    






    $this->view("home/index" , ['title'=>"home index" ,"h1"=> "home index" , "data" => $data ] ) ; 

}



public function login () 
{
    $this->view("home/login" , ['title'=>"login" ,"h1"=> "home login"] ) ;




}

public function postlogin () 
{
    // GUMP da class gahez mn 3al net bst3mlo 3shan a3ml beeh validy 3la el form b est5dam functions static gwah gahza 
    /*
    . 
    . 
     tb3an el class da ana mnzlo mn el composer 
    */


    $validation = GUMP ::is_valid($_POST , [ 'email' => 'required' ]);
    // echo $_POST['email'] ;
    // echo "<pre>" ; 
    // echo $_POST['password'] ;
    // echo "<br>"   ;
 

    if (!empty($validation)) 
    {
        $USER = new user();
        
        $data = $USER->shoof_email_shoof_password($_POST['email'],$_POST['password']);

        if (!empty($data)) 
        {
            
            Session::Set_Session_of('user' , $data->username);

            helpers::redirect("user/index"); 

            
        }

    }



}



public function register () 
{
$this->view("home/register" , ['title'=>"register" ,"h1"=> "home register"] ) ;




}



public function postregister () 
{
    $validation = GUMP ::is_valid($_POST , [ 'email' => 'required' , 'password' => 'required' , 'username' => 'required' ]);

    if (!empty($validation)) 
    {
        $USER = new user();
        
        $data = $USER->add_user($_POST['username'],$_POST['email'],$_POST['password']);

        if ($data) 
        {
            
            
           echo "user has been added " ;

            
        }

    }



}

public function logout () 
{

    Session::Stop();
    helpers::redirect("home/index"); 

} 


}   
    
 

?>