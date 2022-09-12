<?php
    function isPasswordStrong($password) {
        if (strlen($password) < 12) {
            return "Password should be more than 12 characters.";
        } elseif (!preg_match("/[A-Z]+[a-z]+[0-9]+[@#_.&*^!?-]/", $password)) {
            return "Password should contain uppercase letters, lowercase letters, numbers, and symbols.";
        } else {
            return "Your password is strong.";
        }
    }

    $password = $_POST["password"];

    $result = isPasswordStrong($password);

    $response = [
        "output" => $result
    ];

    echo json_encode($response);
?>