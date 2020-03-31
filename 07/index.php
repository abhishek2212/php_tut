<?php
  // Array
  
  //multi-dimensional arrays
  $blog=[
    ['title'=>'mario party','author'=>'mario','content'=>'lorem','like'=>30],
    ['title'=>'mario kart cheats','author'=>'toad','content'=>'lorem','like'=>25],
    ['title'=>'zelda kart cheats','author'=>'link','content'=>'lorem','like'=>35],
    ['title'=>'zadoo kart cheats','author'=>'browser','content'=>'lorem','like'=>15]
  ];
 
  // print_r($blog[1][1]);
  // echo $blog[2]['title'];
  // echo count($blog);

  $blog[]=['title'=>'castle party','author'=>'peach','content'=>'lorem','like'=>36];

  // echo count($blog);
  // print_r($blog);
  $poped=array_pop($blog);
  print_r($poped);

  


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Arrays-multi-dimensional array</title>
</head>
<body>
</body>
</html>