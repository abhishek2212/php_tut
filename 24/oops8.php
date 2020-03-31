<?php

// overriding

class User{
  // property methods
  public $username;
  protected $email; //we can't access outside the function in private methods
  public $role='member';
  // construct methods
  public function __construct($username,$email){
    $this->username=$username;
    $this->email=$email;
  }
  public function addFriend(){

    // we can access the above property
    
    return "$this->email added a new friend";
  }

  public function message(){
    return "$this->email sent a new message";
  }

  // getters - class methods
  public function getEmail(){
    return $this->email;
  }


  // setters - class methods
  public function setEmail($email){
    if(strpos($email,'@')>-1){
      $this->email=$email;
    }
  }
}

class AdminUser extends User{
  public $level;
  public $role='admin';
  // public $email;

  public function __construct($username,$email,$level){
    $this->level=$level;
    parent::__construct($username,$email);
    // $this->email=$email;

  }
  public function message(){
    return "$this->email, an admin, sent a new message";
  }
}

$userOne=new User('shobhit','shobhit@coder.in');
$userTwo=new User('keshav','keshav@coder.in');
$userThree=new AdminUser('abhishek','abhi@123gmail.com',5);

echo $userOne->role . '<br>';
echo $userThree->role . '<br>';

echo $userTwo->message() . '<br>';
echo $userThree->message() . '<br>';




?>

