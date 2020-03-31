<?php
  
  // classes - part 1
  class User{
    public $email;
    public $name;

    public function __construct($name,$email){
      // $this->email='mari@net.com';
      // $this->name='Abhishek';

      $this->email=$email;
      $this->name=$name;
    }
    public function login(){
      // echo 'the user logged in' . '<br>';
      echo $this->name.' logged in';
    }
  }

  // $userOne=new User();
  // $userOne->login();
  // echo $userOne->email.'<br>';
  // echo $userOne->name;

  $userTwo=new User('Abhishek','abhishek@gmail.com');
  // echo $userTwo->name;
  // echo $userTwo->email;
  $userTwo->login();
?>