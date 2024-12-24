<?php


function requiredValidation($input) {
    if (empty($input)) {
        return false; 
    }
    return true; 
}


function minmaVal($input, $length) {
    if (strlen($input) < $length) {
        return false; 
    }
    return true; 
}


function maxaVal($input, $length) {
    if (strlen($input) > $length) {
        return false; 
    }
    return true; 
}


function emailVal($email) {
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return false; 
    }
    return true; 
};


?>
