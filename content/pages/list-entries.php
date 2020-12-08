<h2>Journal Entries</h2>
<div>
    <?php 
        include(ABS_PATH . "/classes/Entry.php");
        include(ABS_PATH . "/helpers/makeCard.php");

        $entries = array(
            new Entry("I Got this", "This is all of the things I got", DATE_TEXT),
            new Entry("I Got this", "This is all of the things I got", DATE_TEXT),
            new Entry("I Got this", "This is all of the things I got", DATE_TEXT)
        );

        foreach($entries as $entry){
            echo makeCard($entry->get_content());
        }
    ?>
</div>