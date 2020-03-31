<?php
  // variable scope
  
  //local variable
  function myFunc(){
    $price=10;
    echo $price;
  } 
  // myFunc();
  // echo $price; //undefined variable

  function myFuncTwo($age){
    echo $age;
  }
  // myFuncTwo(25);
  // echo $age; //undefined variable

  // global variable
  $name='alok';
  // function sayHello(){
  //   global $name;
  //   $name='Tanya';
  //   echo "Hello $name";
  // }
  // sayHello();
  // echo $name;

  function sayBye($name){
    $name='wario';
    echo "bye $name".'<br>';
  }
  sayBye($name);
  echo $name;


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>variable Scope</title>
</head>
<body>  
</body>
</html>