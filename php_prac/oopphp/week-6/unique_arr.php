<?php
function unique_arr($arr)
{
    $uniqueArr = [];
    foreach ($arr as $ele) {
        if (!in_array($ele, $uniqueArr)) {
            $uniqueArr[] = $ele;
        }
    }
    return $uniqueArr;
}

$a = ["a", "b", "a", "s", "b", "e", "a"];
print_r(unique_arr($a));
