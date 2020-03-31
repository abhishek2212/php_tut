<?php
  
  // classes - part 2
  class User{
    private $email;
    private $name;

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

    public function getName(){
      return $this->name;
    }

    public function setName($name){
      if(is_string($name) && strlen($name)>1){
        $this->name=$name;
        return "name has been updated to $name";
      }else{
        return 'not a valid name';
      }
    }

  }

  // $userOne=new User();
  // $userOne->login();
  // echo $userOne->email.'<br>';
  // echo $userOne->name;

  $userTwo=new User('Abhishek','abhishek@gmail.com');
  // $userTwo->name='Alok';
  // echo $userTwo->name;

  echo $userTwo->getName();
  // echo $userTwo->setName(50);

?>