<?php
  if (isset($_POST['save_user'])){
    $fname = $_POST['first_name'];
    $lname = $_POST['last_name'];
    $name  = $_POST['user_name'];
    $email = $_POST['email']; 
    $pass  = $_POST['password'];
    $confirm_pass = $_POST['confirm_pass'];

    if ($pass !== $confirm_pass){
        echo "password do not match";
    }

    $user_exist = mysqli_query($db_connect, " SELECT * FROM users WHERE email='$email'");

    if (mysqli_num_rows(user_exist)> 0){
        echo "user already exist";
    }

    $cryptic_pass = md5($pass);
    $insert_user = mysqli_query($db_connect, "INSERT INTO users (fname,lname, username, email, password) VALUES ('$fname', '$lname','$name','$email', '$pass',)" );
      
    if ($insert_user){
        echo "awesome";
    }
  }
?>