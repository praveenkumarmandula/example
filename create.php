<?php 




include "config.php";

  if (isset($_POST['submit'])) {

    $slno=$_POST['slno'];

    $first_name = $_POST['firstname'];

    $last_name = $_POST['lastname'];

    $email = $_POST['email'];

    $password = $_POST['password'];

    $gender = $_POST['gender'];

    $sql = "INSERT INTO `users`(`firstname`, `lastname`, `email`, `password`, `gender`) VALUES ('$first_name','$last_name','$email','$password','$gender')";

    $result = $conn->query($sql);

    if ($result == TRUE) {

      echo "New record created successfully.";

    }else{

      echo "Error:". $sql . "<br>". $conn->error;

    } 

    $conn->close(); 

  }

?>

<!DOCTYPE html>

<html>

<body>

<h2>Signup Form</h2>

<form action="" method="POST">

  

    <h1><b>Personal information: </b></h1><br><br>

    <label>slno:</label><br>
    <input type="text" name="slno"><br><br>

    <label>First name:</label><br>

    <input type="text" name="firstname"><br><br>

    <br>

    <label>Last name:</label><br>

    <input type="text" name="lastname"><br><br>

    <br>

    <label>Email:</label><br>

    <input type="text" name="email"><br><br>

    <br>

    <label>Password:</label><br>

    <input type="password" name="password"><br><br>

    <br>

    <label>Gender:</label><br>

    <input type="radio" name="gender" value="Male">Male

    <input type="radio" name="gender" value="Female">Female

    <br><br>
    <label>submit</submit>
    <input type="submit" name="submit" value="submit">

 

</form>

</body>

</html>