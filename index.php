 <?php 
$lettere = isset( $_GET['lettere'])?  $_GET['lettere'] : false;
$numeri = isset($_GET['numeri'])?$_GET['numeri'] : false ;
$simboli = isset($_GET['simboli'])? $_GET['simboli'] : false;
$password = $_GET['password'];
$radioSi= isset($_GET['si']);
$radioNo =isset( $_GET['no']);

/*
lettere, boolean: se vero usa le lettere nella psw
numeri, boolean: se vero usa le numeri nella psw
simboli, boolean: se vero usa le simboli nella psw
password, numero: lunghezza password
*/



include __DIR__ .'/folderFiles/function.php';



// function paswordRandom($lettere,$numeri,$simboli,$password){

//     $numbers = '1234567890';
//     $lowerUpper = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
//     $simbol = '!"£$%&/()=?\'^@#[]*';

//     $characters ="";

//     if($lettere){
//         //$characters = $numbers.$lowerUpper.$simbol;
//         $characters .= $lowerUpper;
//     }
//     if($numeri){
//         $characters .= $numbers;
//     }
//     if($simboli){
//         $characters .= $simbol;
//     }
    
//     var_dump($characters);

//    $stringRandom = '';
//    for($i= 0; $i< $password; $i++){
    
//     $stringRandom .= $characters[rand(0,strlen($characters)-1)];
//    }
    
//    var_dump($stringRandom);
//    return $stringRandom;
// }

?>



 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>php-strong-password-generator</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
         integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
     <!-- css -->
     <link rel="stylesheet" href="./assets/style.css">
 </head>

 <body>
     <div class="wrapper">
         <div class="container pt-4">
             <form action="index.php" method="GET">
                 <div class="input-group d-flex justify-content-between">
                     <div class="label w-50">

                         <label for="password">Lunghezza password:</label>
                     </div>
                     <div class="input w-50">
                         <input type="number" id="password" name="password">
                     </div>
                 </div>
                 <div class="d-flex justify-content-between mt-5">
                     <p class="me-5 w-50">Consenti ripetizioni di uno o più caratteri:</p>
                     <div class="w-50">

                         <div class="input-group d-flex flex-column">
                             <div class="">
                                 <input type="radio" id="si" name="radio" checked="checked" value="si">
                                 <label for="si">Si</label>
                             </div>
                             <div>
                                 <input type="radio" id="no" name="radio" value="no">
                                 <label for="no">No</label>
                             </div>
                         </div>
                         <div class="input-group d-flex flex-column">
                             <div class="">
                                 <input type="checkbox" id="lettere" name="lettere">
                                 <label for="lettere">Lettere</label>
                             </div>
                             <div>
                                 <input type="checkbox" id="numeri" name="numeri">
                                 <label for="numeri">Numeri</label>
                             </div>
                             <div>
                                 <input type="checkbox" id="simboli" name="simboli">
                                 <label for="simboli">Simboli</label>
                             </div>
                         </div>
                     </div>
                 </div>
                 <div>
                     <button class="btn btn-secondary" type="submit">Invia</button>
                     <button class="btn btn-primary" type="reset">Annulla</button>
                 </div>

             </form>
         </div>
     </div>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
         integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
     </script>
 </body>

 </html>