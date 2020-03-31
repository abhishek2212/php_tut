<?php

// inheritance- one class inherits properies & methods from another

class User{
  // property methods
  public $username;
  private $email; //we can't access outside the function in private methods

  // construct methods
  public function __construct($username,$email){
    $this->username=$username;
    $this->email=$email;
  }
  public function addFriend(){

    // we can access the above property
    
    return "$this->email added a new friend";
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
  public function __construct($username,$email,$level){
    $this->level=$level;
    parent::__construct($username,$email);
  }
}

$userOne=new User('shobhit','shobhit@coder.in');
$userTwo=new User('keshav','keshav@coder.in');
$userThree=new AdminUser('abhishek','abhi@123gmail.com',5);

echo $userThree->username . '<br>';
echo $userThree->getEmail() . '<br>';
echo $userThree->level . '<br>';



?>

