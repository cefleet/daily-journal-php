<?php
    function setPage(){
        global $page;
        //This is bad. The string is relative to where the function is called not the location of the 
        //not the actual location of the file 
        //TODO Change this QUICKLY before anybody sees it.
        if($page == "home"){
            include("content/pages/list-entries.php");
        } elseif($page == 'list-entries'){
            include("content/pages/list-entries.php");
        } elseif($page == "add-entry"){
            include("content/pages/add-entry.php");
        }
    }
?>