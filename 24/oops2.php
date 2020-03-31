<?php
// classes are like blueprints for objects
# property and methods

class User{
  // property methods
  public $username = "abhishek";
  public $email="abh123@gmail.com";

  public function addFriend(){

    // we can access the above property
    
    return "$this->email added a new friend";
  }
}
$userOne=new User();
$userTwo=new User();

echo $userOne->username. '<br>';
echo $userOne->email. '<br>';
echo $userOne->addFriend().'<br>';

$userTwo->username='alok';
$userTwo->email='alok1998@gmail.com';

echo $userTwo->username. '<br>';
echo $userTwo->email. '<br>';
echo $userTwo->addFriend().'<br>';

//print_r(get_class_vars('User')).'<br>';
//print_r(get_class_methods('User'));




?>

