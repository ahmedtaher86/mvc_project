<?php




define("DS",DIRECTORY_SEPARATOR);
define( "ROOT" , dirname(__DIR__)) ;

//3mlt constant ROOT 3shan m7dsh y3ml 3leeh override 


//h3ml include le app.php gowa index.php

define ("APP" , ROOT.DS."app".DS) ; 
define("CONFIG" , APP."config".DS); 
define("CORE" , APP."core".DS);
define("MODELS" , APP."models".DS);
define("VIEWS" , APP."views".DS);
define("CONTROLLERS" , APP."controllers".DS);


// da CONFIG 5as bel mshroo3 bta3y bas w 3rft el consts de 3shan de 5asa bel mshroo3 bta3y bas 
define("HOST" , "localhost");
define("USERNAME" , "root");
define("PASSWORD" , "");
define("DATABASE_NAME" , "mvc");
define("DATABASE_TYPE" , "mysql");
define("DOMAIN_NAME" , "http://mvc.test/");









// 3ayz a3ml autoload b7ees eno y3ml require automatic lel filat bona2an 3la eno at3mal mnha object b esmaha 
// el class el folany et3ml mno object yroo7 ynady 3la el file ely bnfs esm el class y3mlo require 

require_once("../vendor/autoload.php");

$app= new MVC\core\app();




?>