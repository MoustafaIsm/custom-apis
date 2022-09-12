<?php
    function getChristmasCOuntDown() {
        $now = new DateTime();
        $future_date = new DateTime('2022-12-25 12:00:00');
        $interval = $future_date->diff($now);
        return $interval->format("%a days, %h hours, %i minutes, %s seconds");
    }

    $response = [
        "timeleft" => getChristmasCOuntDown()
    ];

    echo json_encode($response);
?>