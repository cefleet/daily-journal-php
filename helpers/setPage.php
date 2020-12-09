<?php
    function getContent(){


        if(PAGE == "home"){
            include(ABS_PATH . "/content/pages/main.php");
        } elseif(PAGE == 'list-entries'){
            include(ABS_PATH . "/content/pages/list-entries.php");
        } elseif(PAGE == "add-entry"){
            include(ABS_PATH . "/content/pages/add-entry.php");
        }
    }
?>