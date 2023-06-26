<?php

@include 'config.php';

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = md5($_POST['password']);
   $cpass = md5($_POST['cpassword']);
   $user_type = $_POST['user_type'];

   $select = " SELECT * FROM user_form WHERE email = '$email' && password = '$pass' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

      $error[] = 'user already exist!';

   }else{

      if($pass != $cpass){
         $error[] = 'password not matched!';
      }else{
         $insert = "INSERT INTO user_form(name, email, password, user_type) VALUES('$name','$email','$pass','$user_type')";
         mysqli_query($conn, $insert);
         header('location:login_form.php');
      }
   }

};


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Al-Ahmed.Com Register Form</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div style="font-family: 'Times New Roman', Times, serif;  " class="m_head">Al-Ahmed.Com</div>
    <div class="form-container">
        <form action="" method="post">
            <h3>Registration Form</h3>
            <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>

            <input type="text" name="name" required placeholder="Enter Your Name">
            <input type="email" name="email" required placeholder="Enter Your Email">
            <input type="password" name="password" required placeholder="Enter Your Password">
            <input type="password" name="cpassword" required placeholder="Confirm Your Password">
            <select style="color: #000;" name="user_type">
                <option value="user">User</option>
                <option value="admin">Admin</option>
            </select>
            <input style="width : 300px;border-radius: 5px; font-family: 'Nosifer', cursive; margin-top : 10px; font-family: 'Nosifer', cursive; cursor : pointer;" type="submit" name="submit" value="Register Now 😊" class="form-btn">
           <p>Already Have An Account?  <a style="color : blue; " href="login_form.php">Login Now 😊</a></p>
        </form>
    </div>
</body>
</html>