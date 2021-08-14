<?php

    require 'config.php';

    $input = file_get_contents("php://input");
    $decode = json_decode($input,true);

    $firstname = $decode['firstname'];
    $lastname = $decode['lastname'];
    $email = $decode['email'];
    $password = md5($decode['password']);
    $cpassword = md5($decode['cpassword']);

    $failure = [];
    $success = [];

    $sql = "SELECT * FROM `users` WHERE email = '$email'";

    $sqlquery = mysqli_query($connect,$sql);

    if(mysqli_num_rows($sqlquery) > 0){
        $failure['result'] = "User Alredy Exist";
        $failure['isfail'] = "fail";
        print_r(json_encode($failure));
    }
    else{

        if($password == $cpassword){
            $sql2 = "INSERT INTO `users` (`sr`, `firstname`, `lastname`, `email`, `password`) VALUES (NULL, '$firstname', '$lastname', '$email', '$password');";
            $sqlquery2 = mysqli_query($connect,$sql2);
            if($sqlquery2){
                $success['result'] = "Account Successfully created";
                $success['isfail'] = "success";
                print_r(json_encode($success));
            }
            else{
                $failure['result'] = "Sorry We are unable to create your account. Please try again";
                $failure['isfail'] = "fail";
                print_r(json_encode($failure)); 
            }
        }
        else{
            $failure['result'] = "Password not Matched";
            $failure['isfail'] = "fail";
            print_r(json_encode($failure));
        }

    }

    

?>