
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

//creation of array
$fruits=["bannana","Apple","orange"];

// $fruits=array("bannana","Apple","orange");

// var_dump($fruits); //printing array


//checking does array has respective element

var_dump(isset($fruits[2]));

//append element
$fruits[]="papaya";

array_pop($fruits);

//adding the following elements at the front of array
array_unshift($fruits,'samosa');

// var_dump($fruits); 


//checking element exist in array or not  -->   in_array


//we can merge and sort two arrays and we have multiple things with funciton which is follwing is prebuilt



//conditional statements

$age=25;

if($age===25)  //triple equal to check with the not only number but also with dataype of the following variable
echo"you are damn 25 number";


//null caolscening operator
$myage=$age?$age:18;
echo $myage;


//foreach

foreach($fruits as $i => $fruit){
    echo $i.' ' .$fruit.'<br>';
}


//dates

echo date('Y-m-d H:i:s').'<br>';

echo '<pre';
var_dump($_SERVER);
echo '</pre>';
?>

</body>
</html>
<!-- creating array -->
