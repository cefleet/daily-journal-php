<?php
    function readData($file_loc){
        $file = fopen($file_loc, "r");    
        $data = json_decode(fread($file, filesize($file_loc)));
        fclose($file);
        return $data;
    }
?>