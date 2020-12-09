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

        function write_content(){
            $res = '<div class="entry">' .
            '<h3>' . $this->title . '</h3>' .
            '<p>'. $this->entry . '</p>' .
            '<span>' . $this->date . '</span>' .
            '</div>';
            return $res;
        }
    }
?>