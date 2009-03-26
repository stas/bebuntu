<?php
    class admin_controller extends Admins {
        function index() {
            $this->user = new Session;
            $this->title = "Administration panel";
            
            if($this->user->get('nickname')) {
                $this->message = "Welcome ".$this->user->get('nickname');
                pass_var('message', $this->message);
            }
            else
                redirect("login/");
            
            pass_var('title', $this->title);
        }
    }
?>