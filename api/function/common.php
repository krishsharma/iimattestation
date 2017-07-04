<?php

class formData {
    
}

function returnStatus($dataStatus, $action) {
    switch ($action) {
        case 'save':
            $message = 'Data saved';
            break;
        case 'update':
            $message = 'Data updated';
            break;
        case 'delete':
            $message = 'Data deleted';
            break;
        default :
            $message = '';
    }
    if ($dataStatus == TRUE) {
        $response = array('status' => TRUE, 'message' => $message);
    } else {
        $response = array('status' => FALSE, 'message' => $message);
    }

    return $response;
}
