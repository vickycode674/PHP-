<!-- genral function which are covered in programming  -->

<?php


// function sum($a,$b)
//  {
//     return $a+$b;
//  }

//  $sum=sum(5,6);
//  echo $sum .'<br>';


 //advanced ways 
 function sum(...$numbers) //... is receiver of array of numberss
 {
    return array_reduce($numbers,fn($carry,$n)=>$carry+$n);
 }


 $sum=sum(1,2,3,4,5); //this is arguments and passed to the above parameters
 echo $sum. '<br>'
?>
