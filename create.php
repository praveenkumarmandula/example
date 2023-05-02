<?php

include 'user.php';
error_reporting(E_ERROR | E_WARNING | E_PARSE);

if(isset($_POST['submit'])){
    $id=$_POST['id'];
    $name=$_POST['name'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $password=$_POST['password'];
}

$sql= "INSERT INTO 'crud' VALUES ('$id', '$name','$email','$mobile','$password')";


$result=mysqli_query($conn,$sql);
error_reporting(E_ERROR | E_WARNING | E_PARSE);
if ($result==True){
echo ' created succesfully';
}

else{
    'couldnt create';

}

mysqli_close($conn);
?>

<!DOCTYPE html >
<html>

<h2>form</h2>
<form action="" method="POST">

Id:<br>
<input type="text" name="id"/><br>

Name:<br>
<input type="text" name="Name"/><br>

Email:<br>
<input type="text" name ="Email"/><br>

Mobile:<br>
<input type="text" name="Mobile"/><br>
Password:<br>
<input type="text" name="Password"/><br>

<input type="submit" name="Submit" value="submit">

</form>
</html>
