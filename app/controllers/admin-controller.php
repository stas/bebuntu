<?php
    class admin_controller {
        function index() {
            $this->title = "Administration panel";
            /*
            if($user->get('nickname')) {
                $this->message = "Welcome ".$user->get('nickname');
                var_pass('message', $this->message);
            }
            else
                echo "A";
                //redirect("index.php/login/");
            */
            if(isset($user))
                var_dump($user);
                
                
            pass_var('title', $this->title);
        }
    }
?>