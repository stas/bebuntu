<?php
    class teams_controller {
        function index() {
            $this->is_loggedin();
            $this->all();
        }
        
        function all() {
            $this->is_loggedin();
            $this->title = "Teams";
            $this->message = "BeBuntu Teams";
            $all_teams = new Teams;
            pass_var('all_questions', $all_teams->find_all());
            pass_var('title', $this->title);
            pass_var('message', $this->message);
        }
        
        function add() {
            
        }
        
        function delete() {
            
        }
        
	function is_loggedin() {
		$this->user = new Session;
		if(!$this->user->get('nickname'))
			redirect("login/logout");
		else
			return $this->user->get("nickname");
	}
    }
?>