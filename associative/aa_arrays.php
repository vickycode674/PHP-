<!-- Associtive Arrays  -->
<?php
$person=[
    'name'=>'Vivek',
    'surname'=>'Chengalapattu',
    'age'=>19,
    'hobbies'=>['playing','reading']
    
];

echo $person['surname'].'<br>';

echo $person['surname'].'<br>';

//set elemetn by key
$person['channel']='TraversyMedia';

//check if array has specific key
isset($person['age']);  //true becoz key is already there
isset($person['channel']);

//print the keys associate with arrays

echo '<pre>';
var_dump(array_keys($person));  //gets all the associated keys
echo '</pre>';


//print the value of the array
echo '<pre>';
var_dump(array_values($person));
echo '<pre/>';

// echo "<pre>";
// printf("<span style='color:#%X%X%X'>Hello</span>\n", 65, 127, 245);
// printf("Goodbye");

// printf("<span style='color:#%X%X%X'>Hello</span>\n", 65, 127, 245);
// printf("Goodbye");

//sorting the associative arrays in order k
asort($person);  //k and kr  and a
echo '<pre>';
var_dump($person);
echo '<pre/>';


//ternary operators
$age=22;
echo $age<22?'young' : ($age<30 ? 'Not Young But not old':'old'); 

//null coalsecing  operator
// $myage

//itterative over associative array
foreach($person as $key => $value){
   if($key==='hobbies')
   break;

    echo $value. '<br>';
}
?>

