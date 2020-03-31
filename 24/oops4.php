<?php
// cAccess modifiers

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
}
$userOne=new User('shobhit','shobhit@coder.in');
$userTwo=new User('keshav','keshav@coder.in');

// $userOne->email=3;
// echo $userOne->email. '<br>';
// echo $userTwo->email. '<br>';

echo $userOne->addFriend();


?>

