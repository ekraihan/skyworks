<?php
/**
 * string_util.php
 * AUTHOR: Elias Kraihanzel
 * DATE: 9/18/17
 */

function is_alphanumeric($value)
{
    return preg_match("/^[a-z0-9]+$/i", $value);
}

/*This function will validate if user created a strong password
* Longer than 12 characters and alphanumeric letters.
*/
function validate_password($field){
    $field = trim($field);
    if (strlen($field) < 10){
        return false;
    }
    else {
        //go through each character and find if there is a number or letter
        $letter = false;
        $number = false;
        $chars = str_split($field);
        for($i = 0; $i<strlen($field); $i++){
            if (preg_match("/[A-Za-z]/",$chars[$i])){
                $letter = true;
                break;
            }
        }

        for($i = 0; $i<strlen($field); $i++){
            if (preg_match("/[0-9]/",$chars[$i])){
                $number = true;
                break;
            }

        }
        if (($letter == true) and ($number == true)){
            return true;
        }
        else return false;
    }
}