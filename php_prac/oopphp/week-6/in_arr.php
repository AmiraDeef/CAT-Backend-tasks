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
var_dump(in_array("s", $name));
echo "<br>";
var_dump(found_arr("sar", $name));
