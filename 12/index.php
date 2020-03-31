<?php
  // functions
  // Declare function
  function sayHello($name='Shawn',$time='morning'){
    echo 'Hello, good '. $time .' '. $name;
  }
  // sayHello('mario','night');//calling function

  function formatProduct($product){
    return "{$product['name']} costs Rs. {$product['price']} to buy <br>";
  }
  $formatted=formatProduct(['name'=>'gold star','price'=>250]);
  echo $formatted;

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>function</title>
</head>
<body>  
</body>
</html>