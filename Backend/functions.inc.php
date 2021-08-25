<?php
function name($name){
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
        $nameErr = "Only letters and white space allowed";
    }
    else{
        return $name;
    }
}
function email($email){
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailErr = "Invalid email format";
      }
    else{
        return $email;
    }
}
function phone($number){
    if(!preg_match('/^[0-9]{10}+$/', $number)){
     $numberErr = "please input number in proper format";
    }
    else{
        return $number;
    }
}
function ammount($amount){
    if(!preg_match('[0-9]+',$amount)){
        $ammountErr="enter ammount in proper format";

    }
    else{
        return $amount;
    }
}
?>