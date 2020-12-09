<h2>Journal Entries</h2>
<div>
    <?php 

        include(ABS_PATH . "/classes/Entry.php");


        $entries = array(
            new Entry("I Got this", "This is all of the things I got", DATE_TEXT),
            new Entry("I Got this", "This is all of the things I got", DATE_TEXT),
            new Entry("I Got this", "This is all of the things I got", DATE_TEXT)
        );

        $res = '<div class="entriesList">';

        foreach($entries as $entry){
            $res .= $entry->write_content();
        }
        $res .= "</div>";

        echo $res;
    ?>
</div>