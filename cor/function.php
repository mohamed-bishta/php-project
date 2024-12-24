<?php

function checkRequestMethod($method){
    if($_SERVER['REQUEST_METHOD'] == $method){
        return true;
    }else{
        return false;
    }
}


function checkedInputpost($input){
    if(isset($_POST[$input]) && !empty($_POST[$input])){
        return true;
    }
    return false;
}


function santiesInput($input){
    return trim(htmlspecialchars(htmlentities($input)));
}


function rederection($path){
    header("Location: $path");
    exit();
}





?>
