<?php

$boxes = [
  12 => 0,
    6 => 0,
    3 => 0
];

function get_count($count) {
    global $boxes;
    
    if ($count <= 0) return;
    
    if ($count > 6) {
        $boxes[12]++;
        $count -= 12;
    } elseif ($count > 3) {
        $boxes[6]++;
        $count -= 6;
    } else {
        $boxes[3]++;
        $count -= 3;
    }
    
    get_count($count);
}

get_count($_GET['value']);

echo json_encode($boxes);