<?php 

include "config.php";

    if (isset($_POST['update'])) {

        $slno = $_POST['slno'];

        $firstname = $_POST['firstname'];

       

        $lastname = $_POST['lastname'];

        $email = $_POST['email'];

        $password = $_POST['password'];

        $gender = $_POST['gender']; 

        $sql = "UPDATE `users` SET 'slno'='$slno',`firstname`='$firstname',`lastname`='$lastname',`email`='$email',`password`='$password',`gender`='$gender' WHERE `id`='$user_id'"; 

        $result = $conn->query($sql); 

        if ($result == TRUE) {

            echo "Record updated successfully.";

        }else{

            echo "Error:" . $sql . "<br>" . $conn->error;

        }

    } 

if (isset($_GET['slno'])) {

    $user_id = $_GET['slno']; 

    $sql = "SELECT * FROM `users` WHERE `id`='$user_id'";

    $result = $conn->query($sql); 

    if ($result->num_rows > 0) {        

        while ($row = $result->fetch_assoc()) {

            $slno=$row['slno'];

            $first_name = $row['firstname'];

            $lastname = $row['lastname'];

            $email = $row['email'];

            $password  = $row['password'];

            $gender = $row['gender'];

           

        } 

    ?>

        

        <form action="" method="post">



            <label>slno</label>
            <input type="text" name="slno" value="<?php echo $slno;?>">

            <label>First name:</label><br>

            <input type="text" name="firstname" value="<?php echo $first_name; ?>">

        

            <br>

            <label>Last name:</label><br>

            <input type="text" name="lastname" value="<?php echo $lastname; ?>">

            <br>

            <label>Email:</label><br>

            <input type="email" name="email" value="<?php echo $email; ?>">

            <br>

            <label>Password:</label><br>

            <input type="password" name="password" value="<?php echo $password; ?>">

            <br>

            <label>Gender:</label><br>

            <input type="radio" name="gender" value="Male" <?php if($gender == 'Male'){ echo "checked";} ?> >Male

            <input type="radio" name="gender" value="Female" <?php if($gender == 'Female'){ echo "checked";} ?>>Female

            <br><br>

            <input type="submit" value="Update" name="update">

        </form> 

        </body>

        </html> 

    <?php

    } else{ 

        header('Location: view.php');

    } 

}

?> 