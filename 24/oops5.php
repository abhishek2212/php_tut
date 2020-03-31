<?php
// getters & setters methods

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
$userOne=new User('shobhit','shobhit@coder.in');
$userTwo=new User('keshav','keshav@coder.in');

// $userOne->email=3;
// echo $userOne->email. '<br>';
// echo $userTwo->email. '<br>';

$userOne->setEmail('shobhit1@gmail.com');

echo $userOne->getEmail().'<br>';
echo $userTwo->getEmail();



?>

