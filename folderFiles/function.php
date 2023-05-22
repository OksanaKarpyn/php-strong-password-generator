<?php 
include __DIR__.'/password.php';
function paswordRandom($lettere,$numeri,$simboli,$password){

    $numbers = '1234567890';
    $lowerUpper = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $simbol = '!"£$%&/()=?\'^@#[]*';

    $characters ="";

    if($lettere){
        //$characters = $numbers.$lowerUpper.$simbol;
        $characters .= $lowerUpper;
    }
    if($numeri){
        $characters .= $numbers;
    }
    if($simboli){
        $characters .= $simbol;
    }
    
    //var_dump($characters);

   $stringRandom = '';
   for($i= 0; $i< $password; $i++){
    
    $stringRandom .= $characters[rand(0,strlen($characters)-1)];
   }
    
   //var_dump($stringRandom);
   return $stringRandom;
}
paswordRandom($lettere,$numeri,$simboli,$password);
$passwordGenerate =paswordRandom($lettere,$numeri,$simboli,$password);

?>