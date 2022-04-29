<?php

$requestPayload = file_get_contents("php://input");

$requestPayload = preg_replace('/[[:^print:]]/', '', $requestPayload);

if ($requestPayload == NULL) {
     exit("There's something wrong with the payload.");
}

$post = json_decode(file_get_contents('php://input'), true);

if ($post == NULL && json_last_error() == 4) {
    exit("JSON object has invalid syntax");
}

var_dump($post); 

?>
