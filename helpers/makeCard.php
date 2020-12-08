<?php
    function makeCard($entry){
        $res = '<div>' .
        '<h3>' . $entry["title"] . '</h3>' .
        '<p>'. $entry['entry'] . '</p>' .
        '<span>' . $entry["date"] . '</span>' .
        '</div>';

        return $res;
    }
?>