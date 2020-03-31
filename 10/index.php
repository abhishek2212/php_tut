<?php
  // conditional Statements
  // $price=20;
  // if($price<10){
  //   echo 'the condition is match';
  // }elseif($price<30){
  //   echo 'the elseif condition is match';
  // }else{
  //   echo 'condition is not match';
  // }

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
    // if($product['price']<20 && $product['price']>2){
    //   echo $product['name'].'<br>';
    // }

    // if($product['price']>20 || $product['price']<10){
    //   echo $product['name'].'<br>';
    // }
  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>10</title>
</head>
<body>
  <div>
    <ul>
      <?php foreach($products as $product){?>
        <?php if($product['price']<15){?>
          <li><?php echo $product['name'];?></li>
        <?php }?>  
      <?php }?>  
    </ul>
  </div>
  
</body>
</html>