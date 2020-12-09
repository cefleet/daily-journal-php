<h2>Journal Entries</h2>
<div>
    <?php    
        $json_entries = readData("data.json");
        $entries = array();
        foreach($json_entries as $entry){
            array_push($entries, new Entry($entry->title, $entry->entry, $entry->date));
        }

        $entries = array_reverse($entries);

        $res = '<div class="entriesList">';
        foreach($entries as $entry){
            $res .= $entry->write_content();
        }
        $res .= "</div>";

        echo $res;
    ?>
</div>