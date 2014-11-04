<?php

function print_result($status, $data, $message, $json = false) {
    $returnArray = array(
        'status' => $status,
        'data' => $data,
        'message' => $message
    );
    
    if ($json) {
        return json_encode($returnArray);
    } else {
        return $returnArray;
    }
}

