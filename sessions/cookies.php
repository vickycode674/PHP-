<?php
// session_start();
// echo session_id().'<br>';
//session is nothing but no of times the following things are placed and reccursively occured


//cookies

//its store the user info is certain place and riterate it when he return back
//genraly used in google analytics and ad sense things
//it can be accesed by the hackers
setcookie('name','chvivek',time()+60, '/');


echo '<pre>';
var_dump($_COOKIE);
echo'</pre>';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>