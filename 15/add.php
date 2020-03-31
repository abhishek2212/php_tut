<?php
  // Project header & footer
  // if(isset($_GET['submit'])){
  //   echo $_GET['email'];
  //   echo $_GET['title'];
  //   echo $_GET['ingredients'];
  // }
  
  include('config/db_connect.php');

  $title=$email=$ingredients='';
  $error=array('email'=>'','title'=>'','ingredients'=>'');
  if(isset($_POST['submit'])){
    // echo htmlspecialchars($_POST['email']);
    // echo htmlspecialchars($_POST['title']);
    // echo htmlspecialchars($_POST['ingredients']);

    // check email
    if(empty($_POST['email'])){
      $error['email']= 'An email is required <br>';
    }else{
      // echo htmlspecialchars($_POST['email']);
      $email = $_POST['email'];
      if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
        $error['email']= 'email must be a valid email address';
      }

    }

    // check title
    if(empty($_POST['title'])){
      $error['title']= 'A title is required <br>';
    }else{
      // echo htmlspecialchars($_POST['title']);
      $title=$_POST['title'];
      if(!preg_match('/^[a-zA-Z\s]+$/',$title)){
        $error['title']= 'Title must be letters and spaces only';
      }
    }

    // check ingredients
    if(empty($_POST['ingredients'])){
      $error['ingredients']= 'An ingredients is required <br>';
    }else{
      // echo htmlspecialchars($_POST['ingredients']);
      $ingredients=$_POST['ingredients'];
      if(!preg_match('/^([a-zA-Z\s]+)(,\s*[a-zA-Z\s]*)*$/',$ingredients)){
        $error['ingredients']= 'Ingredients must be a comma seprated list';
      }
    }

    if(array_filter($error)){
      // echo 'errors in the form';
    }else{

      $email=mysqli_real_escape_string($conn,$_POST['email']);
      $title=mysqli_real_escape_string($conn,$_POST['title']);
      $ingredients=mysqli_real_escape_string($conn,$_POST['ingredients']);

      // create sql
      $sql="INSERT INTO pizzas(title,email,ingredients) VALUES('$title','$email','$ingredients')";

      // save to db and check
      if(mysqli_query($conn,$sql)){
        // success
        header('Location:index.php');
      }else{
        // error
        echo 'query error: ' . mysqli_error($conn); 
      }
      
    }

  } //end of POST check


?>

<!DOCTYPE html>
<html lang="en">

  <?php include('templates/header.php');?>

  <section class="container grey-text">
    <h5 class="center">Add a Pizza</h5>
    <form class="white" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
      <label>Your Email:</label>
      <input type="text" name="email" value="<?php echo htmlspecialchars($email) ?>">
      <div class="red-text"><?php echo $error['email']; ?></div>
      <label>Pizza Title:</label>
      <input type="text" name="title" value="<?php echo htmlspecialchars($title) ?>">
      <div class="red-text"><?php echo $error['title']; ?></div>
      <label>Ingredients (comma seprated):</label>
      <input type="text" name="ingredients" value="<?php echo htmlspecialchars($ingredients) ?>">
      <div class="red-text"><?php echo $error['ingredients']; ?></div>
      <div class="center">
        <input type="submit" name="submit" value="submit" class="btn brand z-depth-0">
      </div>
    </form>
  </section>

  <?php include('templates/footer.php');?>

</html>