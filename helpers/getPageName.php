<?php
    function getPageName(){
        $page = "home";
        if(array_key_exists("page", $_GET)){
            $page = $_GET["page"];
        }
        return $page;
    }
?>