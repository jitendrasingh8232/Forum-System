<?php

    require 'config.php';

    $input = file_get_contents("php://input");
    $decode = json_decode($input,true);

    $email = $decode['email'];
    $password = md5($decode['password']);
    $fail = [];
    $success = [];

    $sql = "SELECT * FROM `users` WHERE email = '$email'";
    $sqlquery = mysqli_query($connect,$sql);

    if(mysqli_num_rows($sqlquery) > 0){
        while($row = mysqli_fetch_assoc($sqlquery)){
            if($password == $row['password']){
                session_start();
                $_SESSION['loggedin'] = true;
                $_SESSION['username'] = $row['firstname']." ".$row['lastname'];
                $_SESSION['email'] = $row['email'];
                $success['result'] = "Login Successfullly";
                $success['isfail'] = "success";
                $success['username'] = $_SESSION['username'];
                print_r(json_encode($success));
            }
            else{
                $fail['result'] = "Email or Password is Wrong";
                $fail['isfail'] = "fail";
                print_r(json_encode($fail));
            }
        }
    }
    else{
        $fail['result'] = "Mail Not Found";
        $fail['isfail'] = "fail";
        print_r(json_encode($fail));
    }
?>