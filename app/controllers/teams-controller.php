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
            $all_teams = new Team;
	    $all_countries = new Country;
            pass_var('all_teams', $all_teams->find_all());
            pass_var('countries', $all_countries->find_all());
            pass_var('title', $this->title);
            pass_var('message', $this->message);
        }
        
        function add() {
	    $this->is_loggedin();
	    $this->title = "Add new teams";
	    $this->message = "Add a new team";
	    if($_POST['action'] == 'newteam') {
		if($this->newteam($_POST))
		    $this->message = "Team added.";
	    }
	    $all_countries = new Country;
            pass_var('countries', $all_countries->find_all());
	    pass_var('title', $this->title);
	    pass_var('message', $this->message);
        }
	
	function newteam($data) {
            if($data['name'] && $data['email'] && $data['country_id'] && $data['submiter']) {
                $newteam = new Team;
                $newteam->name = sqlite_escape_string($data['name']);
                $newteam->description = sqlite_escape_string($data['description']);
                $newteam->email = sqlite_escape_string($data['email']);
                $newteam->homepage = sqlite_escape_string($data['homepage']);
                $newteam->mailinglist = sqlite_escape_string($data['mailinglist']);
                $newteam->irc = sqlite_escape_string($data['irc']);
                $newteam->location = sqlite_escape_string($data['location']);
                $newteam->country_id = sqlite_escape_string($data['country_id']);
                $newteam->submiter = sqlite_escape_string($data['submiter']);
                $newteam->save();
                return true;
            }
            else
                return false;
	}
        
        function delete() {
            $this->is_loggedin();
	    global $runtime;
	    $to_trash = new Team($runtime['ident']);
	    $to_trash->delete();
	    redirect('teams/all');
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