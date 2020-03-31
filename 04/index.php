<?php
  // string
  
  $stringOne='my email is ';
  $stringTwo='mario123@gmail.com<br>';

  echo $stringOne.$stringTwo;
  $name='Mario';
  // echo 'Hey, my name is '. $name;
  // echo "hey, my name is $name";

  // \ use for escaping the characters

  // echo "the ninja screamed \"whaaaa\"";
  // echo 'the ninja screamed "whaaaa"';

  // echo $name[1];
  // echo strlen($name);
  // echo strtoupper($name);
  // echo strtolower($name);
  echo str_replace('M','w',$name);


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>04</title>
</head>
<body>
  <h1><?php echo 'hello abhishek'; ?></h1>
  
</body>
</html>