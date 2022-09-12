<?php
    function expresion($a, $b, $c) {
        return pow($a, 3) + ($b * $c) - ($a / $b);
    }

    $a = $_POST["input1"];
    $b = $_POST["input2"];
    $c = $_POST["input3"];

    $result = expresion($a, $b, $c);

    $response = [
        "input1" => $a,
        "input2" => $b,
        "input3" => $c,
        "output" => $result
    ];

    echo json_encode($response);
?>