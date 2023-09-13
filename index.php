<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!-- welcome to the world of invisible php      -->

<!-- basic syntax -->
<?php 
//  echo  "<h1>hello world</h1>" 

//variables which we have 8 tyeps [str,float,int,char,bool,array,obj,resource]

$name="billa";   //; or , syntax mukhyam bigluuu
$_age=24;
$ismale=true;
$salary=null;


//printing the following variables
// echo $_name . " <br>";  // . is used for concatenaton
// echo $_age . " <br>";
// echo $ismale . " <br>";
// echo $salary. " <br>";

//printing type of the variable

     // echo gettype($name).'<br>';

//printing the whole variable

     //var_dump($name,$_age); 

//varaibale checking functions
   
  //    var_dump(is_string($name));

//checking weather address variable is there or not
    
    // var_dump(isset($address)).'<br>'; 


//constants

    define('PI',3.14);
    // echo PI;

    // echo PHP_INT_MIN;



//LETS START WITH WORLD MOST IMP NUMBERS

     $a=1;
     $b=1.6;

    // echo $a+$b . ;
   // echo $b-$a . '<br>'


//number checking functions

    // is_float(4);
    // is_numeric()

//conversion

       $strNumber='12';
    //    $number=(float)$strNumber;
    //    var_dump($number);

    //number functions --> abs converts pos to neg  
    //--> pow,sqrt,max,min,round,floor,ceil


//number format 

     $number=12345678.2343;
   // echo number_format($number,3,',',''). '<br';



//welcome to the house of strings
   
     $name="chviveksai_ra_ungamma";
     $hello="Hello $name";
     $hello2='Hello $name';
     
    //  echo  $hello . '<br';
    //  echo  $hello2 . '<br>';
    
//string functins

$string="          Hello world       ";


        //    echo "1 - " . strlen($string) . '<br>' . PHP_EOL;

        //    echo "1 -"  .trim($string) . '<br>' . PHP_EOL;

     //STRPAD LEFT AND RIGHT WE CANN ADD ZEROS   
     //STR REPEAT BUDDY  


//MULTI LINE TEXTS AND LINE BREAKS

 $longtext="Hello,guys this is ch vivek sai 
             myself from srm chennai
            pursuing btech in cse cloud
            2021-2025 batch";

          echo $longtext . '<br>';

          echo '<br>'.nl2br($longtext) . '<br>';   //new line to break

          $fruits=["bannana","Apple","orange"];

          var_dump($fruits);







?>



    

</body>
</html>
