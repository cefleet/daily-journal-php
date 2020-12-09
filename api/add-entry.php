<?php

    include("getData.php");
    include("sendJSON.php");
    include("../helpers/readData.php");
    $results = getData();

    $data = readData('../data.json');

    array_push($data, $results);

    file_put_contents('../data.json', json_encode($data));

    header("Location:/");

?>