<?php
    function getData(){
        $type = $_SERVER['REQUEST_METHOD'];
        $results = NULL;

        if($type == 'GET'){
            $results = $_GET;
        } elseif($type== 'POST'){
            $results = file_get_contents('php://input');
        }
        return $results;
    }
?>