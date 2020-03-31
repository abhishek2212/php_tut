<?php
// construct methods

class User{
  // property methods
  public $username;
  public $email;

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

echo $userOne->username. '<br>';
echo $userOne->email. '<br>';
echo $userOne->addFriend().'<br>';


echo $userTwo->username. '<br>';
echo $userTwo->email. '<br>';
echo $userTwo->addFriend().'<br>';

//print_r(get_class_vars('User')).'<br>';
//print_r(get_class_methods('User'));




?>

