<?php 
 
 
namespace MVC\core;

use Dcblogdev\PdoWrapper\Database;

// leeh ya a7md enta 3mlt class model ???    3shan a7md taher ektashaf en hwa ay model hyt3ml lazm hynady 3la database  w ytla3 ntayeg 
// fa lazm class model 3am feeh function b ttla3 btayeg mn el databse  




class model 
{



// 5ly balak ya jimy ana esta5demt component 5argy lel t3amol m3 el data base component 5aregy est5dmto 3al gahez
// el component da esmo pdo wrapper by5leek mtktbsh sql w el araf da kteer 


    static function database ()
        {
            $options = 
                [
                    //required
                    'username' => USERNAME,
                    'database' => DATABASE_NAME,
                    //optional
                    'password' => PASSWORD,
                    'type' => DATABASE_TYPE,
                    'charset' => 'utf8',
                    'host' => HOST,
                    'port' => '3306'
                ];
                
               return $db = new Database($options);




        }








    // public function database()
    // {
    //     $options = 
    //     [
    //         //required
    //         'username' => 'root',
    //         'database' => 'mvc',
    //         //optional
    //         'password' => '',
    //         'type' => 'mysql',
    //         'charset' => 'utf8',
    //         'host' => 'localhost',
    //         'port' => '3306'
    //     ];
        
    //    return $db = new Database($options);
    // }

} 




?>