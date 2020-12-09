<?php

    include("getData.php");
    include("sendJSON.php");
    
    $results = getData();

    sendJSON($results);
?>