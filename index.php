<?php 

    function getPage(){
        $page = "home";
        if(array_key_exists("page", $_GET)){
            $page = $_GET["page"];
        }
        return $page;
    }

    function setDateText(){
        $date = new DateTime('NOW');
        return $date->format('Y-m-d H:i');
    }

    define("ABS_PATH", $_SERVER['DOCUMENT_ROOT']);
    define("DATE_TEXT", setDateText());
    define("PAGE", getpage());
    include(ABS_PATH . "/helpers/setPage.php");


?>
<?php 
    //Im not sure if I like this.
?>
<!DOCTYPE html>
<html>
    <?php include(ABS_PATH . "/content/partials/header.php") ?>
    <body>
        <div class="header">
            <?php include(ABS_PATH . "/content/partials/navigation.php") ?>
        </div>
        <h1>Daily Journal</h1>
        <div id="content">
            <?php getContent() ?>
        </div>
    </body>
</html>