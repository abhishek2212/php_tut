<?php
  // Array
  
  //indexed arrays
  $peopleOne=['abhishek','alok','tiwari'];
  // echo count($peopleOne).'<br>';
  // echo $peopleOne[1];

  $peopleTwo=array('tanya',' shobhit');
  echo $peopleTwo[0];
  // print_r($peopleTwo);

  $ages=[20,30,40,50,60];
  // print_r($ages); //readable formate

  $ages[2]=25;
  // print_r($ages);

  $ages[]=70;
  // print_r($ages);

  array_push($ages,80);
  // print_r($ages);

  // echo count($ages);

  $peopleThree=array_merge($peopleOne,$peopleTwo);
  // print_r($peopleThree);

  
  // associative arrays(key & value pairs)

  $ninjas=['rahul'=>'black','tiwari'=>'red','vijay'=>'green'];
  // echo $ninjas['rahul'];
  // print_r($ninjas);

  $ninjasTwo=array('bowser'=>'mozila','color'=>'aqua','internet'=>'Jio');
  // print_r($ninjasTwo);

  $ninjasTwo['addres']='Jaunpur';
  // print_r($ninjasTwo);

  // overwrite the key value
  $ninjasTwo['color']='blue';
  // print_r($ninjasTwo);

  // echo count($ninjasTwo);

  $ninjasThree=array_merge($ninjas,$ninjasTwo);
  print_r($ninjasThree);


  


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>06-Arrays</title>
</head>
<body>
</body>
</html>