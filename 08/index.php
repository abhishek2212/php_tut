<?php
  // Loop

  $names=['Abhishek','Alok','Tanya'];
  // for($i=0;$i<count($names);$i++){
  //   echo $names[$i].'<br>';
  // }

  // foreach loop
  // foreach($names as $name){
  //   echo $name . '<br>';
  // }


  $products=[
    ['name'=>'coca-cola','price'=>30],
    ['name'=>'pepsi','price'=>20],
    ['name'=>'mirinda','price'=>15],
    ['name'=>'appi','price'=>10],
    ['name'=>'limka','price'=>25],
    ['name'=>'samosa','price'=>10],
    ['name'=>'chocolate','price'=>40]
  ];

  // foreach($products as $product){
  //   echo $product['name'].' - '. $product['price'];
  //   echo '<br>';
  // }

  // while loop

  // $i=0;
  // while($i<count($products)){
  //   echo $products[$i]['name'];
  //   echo '<br>';
  //   $i++;
  // }

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Arrays-multi-dimensional array</title>
  <style>
    *{
      margin:0;
      padding:0;
    }
    h3{
      margin:5px;
      padding:5px;
      background:aqua;
      color:red;
    }
    p{
      padding-left:25px;
      font-weight:700;
      color:blue;
    }
  </style>
</head>
<body>
  <h1>Products</h1>
  <ul>
    <?php foreach($products as $product){?>
      <h3><?php echo strtoupper($product['name']);?></h3>
      <p>Rs <?php echo $product['price'];?></p>
    <?php }?>
  </ul>
</body>
</html>