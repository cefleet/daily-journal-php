<?php 
    //classes
    include("classes/Entry.php");

    //helpers
    include("helpers/readData.php");
    include("helpers/setPage.php");
    include("helpers/getPageName.php");

    //global vars
    $page = getPageName();
    $date = new DateTime('NOW');
    $dateText = $date->format('Y-m-d H:i');        

?>
<?php 
    //Im not sure if I like this.
?>
<!DOCTYPE html>
<html>
    <?php include("content/partials/header.php") ?>
    <body>
        <div class="header">
            <?php include("content/partials/navigation.php") ?>
        </div>
        <h1>Daily Journal</h1>
        <div id="content">
            <?php setPage() ?>
        </div>
    </body>
</html>