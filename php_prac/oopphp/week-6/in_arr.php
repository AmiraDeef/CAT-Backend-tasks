<?php
function found_arr($value, $arr = [])
{
    foreach ($arr as $ele) {
        if ($value === $ele) {
            return true;
        }
    }

    return false;
}

$name = ["amira", "sara"];
echo found_arr("sara", $name);
