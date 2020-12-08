<?php
    class Entry {
        public $title;
        public $entry;
        public $date;

        function __construct($title,$entry,$date){
            $this->title = $title;
            $this->entry = $entry;
            $this->date = $date;
        }

        function get_content() {
            return array(
                "title"=>$this->title,
                "entry"=>$this->entry,
                "date"=>$this->date
            );            
        }
    }
?>