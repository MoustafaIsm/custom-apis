<?php
    function palindrome($input){ 
        if (strrev($input) == $input){ 
            return "Paalindrome"; 
        } else {
            return "Not palindrome";
        }
    } 

    $input = $_GET["input"];
    $result = palindrome($input);
    $response = [
        "input" => $input,
        "output" => $result
    ];
        
    echo json_encode($response);
?>