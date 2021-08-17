<?php
    $success = [];
    session_start();
    session_unset();
    session_destroy();
    $success['isfail'] = "success";
    print_r(json_encode($success));
?>