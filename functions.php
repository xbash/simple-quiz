<?php

function shuffle_assoc($array) 
{
    $keys = array_keys($array);
    shuffle($keys);
    $shuffled = array();
    foreach ($keys as $key) 
    {
        $shuffled[$key] = $array[$key];
    }
     return $shuffled;
}
?>