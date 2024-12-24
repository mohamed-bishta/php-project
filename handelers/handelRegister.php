<?php
session_start();

include "../cor/function.php"; 
include "../cor/valdetion.php";

$errors = [];

if (checkRequestMethod("POST") && checkedInputpost($_POST['name'])) {

    
    foreach ($_POST as $key => $values) {
        $$key = santiesInput($values); 
    }


    if (!requiredValidation($name)) {
        $errors[] = "Name is required";
    } elseif (!minmaVal($name, 3)) {
        $errors[] = "Name must be at least 3 characters";
    } elseif (!maxaVal($name, 25)) {
        $errors[] = "Name must be a maximum of 25 characters";
    }


    if (!requiredValidation($email)) {
        $errors[] = "Email is required";
    } elseif (!emailVal($email)) { 
        $errors[] = "Invalid email format";
    }


    if (!requiredValidation($password)) {
        $errors[] = "Password is required";
    } elseif (!minmaVal($password, 6)) {
        $errors[] = "Password must be at least 6 characters";
    } elseif (!maxaVal($password, 25)) {
        $errors[] = "Password must be a maximum of 25 characters";
    }


    if (empty($errors)) {

        $users_file = fopen("../data/users.csv", "a+");
        $data = [$name, $email, sha1($password)];
        fputcsv($users_file, $data);


        $_SESSION['auth'] = [$name, $email];
        rederection("../index.php");
    } else {

        $_SESSION['errors'] = $errors;
        rederection("../register.php"); 
        exit();
    }
} else {
    echo "Not a POST request or name is missing"; 
}
?>
