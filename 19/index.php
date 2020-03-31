<?php
  // file system - part 1
  // $readFile=readfile('reads.txt');
  // echo $readFile;

  $file='read.txt';
  if(file_exists($file)){

    // read file
    // echo readfile($file).'<br>';

    // // copy file
    // copy($file,'quotes.txt');

    // //absolute path
    // echo realpath($file).'<br>';
    
    // // file size
    // echo filesize($file);

    // // rename file
    // rename($file,'test.txt');

  }else{
    echo 'file does not exist' .'<br>';
  }

  // make directory
  mkdir('quotes');


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>php tut</title>
</head>
<body>  

</body>
</html>