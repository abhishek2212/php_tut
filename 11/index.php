<?php
  // continue and break statements
  $products=[
    ['name'=>'coca-cola','price'=>30],
    ['name'=>'pepsi','price'=>20],
    ['name'=>'mirinda','price'=>15],
    ['name'=>'appi','price'=>10],
    ['name'=>'limka','price'=>25],
    ['name'=>'samosa','price'=>10],
    ['name'=>'chocolate','price'=>2]
  ];

  foreach($products as $product){
    if($product['name']==='limka'){
      break;
    }
    if($product['price']>15){
      continue;
    }
    echo $product['name'].'<br>';
  }
  

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>11</title>
</head>
<body>  
</body>
</html>