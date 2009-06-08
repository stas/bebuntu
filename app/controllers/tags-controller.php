<?php
    class tags_controller {
        
        function index() {
            $this->title = "Tagging";
            $this->message = "BeBuntu Tags";
            pass_var('title', $this->title);
            pass_var('message', $this->message);
        }
    }
?>