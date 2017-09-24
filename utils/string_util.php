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
