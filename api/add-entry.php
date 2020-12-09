<?php

    include("getData.php");
    include("sendJSON.php");

    $results = getData();
    $file = fopen(ABS_PATH . "/data.json", "r+") or die("Cannot read file.");    
    $data = json_decode($file, filesize(ABS_PATH . "/data.json"));

    sendJSON($results);
?>